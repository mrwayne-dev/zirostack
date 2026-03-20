<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/constants.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// ─── Spam: honeypot ─────────────────────────────────────────────────────────
if (!empty($_POST['website'])) {
    // Bot filled the hidden field — silently succeed
    echo json_encode(['success' => true, 'message' => "Your message has been sent! We'll respond within 24 hours."]);
    exit;
}

// ─── Spam: rate limit (session-based, 1 per 60 seconds) ─────────────────────
session_start();
$now = time();
if (isset($_SESSION['last_contact_submit']) && ($now - $_SESSION['last_contact_submit']) < 60) {
    http_response_code(429);
    echo json_encode(['success' => false, 'message' => 'Please wait a moment before submitting again.']);
    exit;
}

// ─── Sanitize inputs ─────────────────────────────────────────────────────────
$name    = strip_tags(trim($_POST['name']    ?? ''));
$email   = trim($_POST['email']   ?? '');
$subject = trim($_POST['subject'] ?? '');
$service = strip_tags(trim($_POST['service'] ?? ''));
$text    = strip_tags(trim($_POST['text']    ?? ''));
$message = strip_tags(trim($_POST['message'] ?? ''));

// ─── Validate ────────────────────────────────────────────────────────────────
$allowed_subjects = ['inquiry', 'support', 'quote'];
$subject_labels   = [
    'inquiry' => 'General Inquiry',
    'support' => 'Support',
    'quote'   => 'Request a Quote',
];

if (empty($name) || strlen($name) < 2) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter your full name (at least 2 characters).']);
    exit;
}
if (strlen($name) > 100) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Name must be 100 characters or fewer.']);
    exit;
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}
if (empty($subject) || !in_array($subject, $allowed_subjects)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please select a message type.']);
    exit;
}
if (!empty($text) && strlen($text) > 200) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Subject line must be 200 characters or fewer.']);
    exit;
}
if (empty($message) || strlen($message) < 10) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a message (at least 10 characters).']);
    exit;
}
if (strlen($message) > 2000) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Message must be 2000 characters or fewer.']);
    exit;
}

// ─── Build template variables ─────────────────────────────────────────────────
$subject_label = $subject_labels[$subject];
$first_name    = explode(' ', $name)[0];
$reason        = $subject_label . (!empty($text) ? ' — ' . htmlspecialchars($text) : '');
$submitted_at  = date('F j, Y \a\t g:i A') . ' WAT';
$app_url       = 'https://zirostack.com';
$logo_url      = $app_url . '/assets/images/logo.webp';
$help_url      = $app_url . '/contact';
$year          = date('Y');

// ─── Load + populate templates ────────────────────────────────────────────────
$template_dir = ROOT_PATH . '/assets/email-templates/';

$admin_html = file_get_contents($template_dir . 'contact_received.html');
$admin_html = str_replace(
    ['{{logo_url}}', '{{sender_name}}', '{{sender_email}}', '{{reason}}', '{{submitted_at}}', '{{message}}', '{{app_url}}', '{{year}}'],
    [$logo_url, htmlspecialchars($name), htmlspecialchars($email), htmlspecialchars($reason), $submitted_at, nl2br(htmlspecialchars($message)), $app_url, $year],
    $admin_html
);

$user_html = file_get_contents($template_dir . 'contact_autoreply.html');
$user_html = str_replace(
    ['{{logo_url}}', '{{first_name}}', '{{reason}}', '{{submitted_at}}', '{{help_url}}', '{{app_url}}', '{{year}}'],
    [$logo_url, htmlspecialchars($first_name), htmlspecialchars($subject_label), $submitted_at, $help_url, $app_url, $year],
    $user_html
);

// ─── Send emails ──────────────────────────────────────────────────────────────
function buildMailer(): PHPMailer
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.titan.email';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'support@zirostack.com';
    $mail->Password   = '@Zzirostack0';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->CharSet    = 'UTF-8';
    $mail->isHTML(true);
    $mail->setFrom('support@zirostack.com', 'Zirostack');
    return $mail;
}

try {
    // 1. Admin notification
    $adminMail = buildMailer();
    $adminMail->addAddress('support@zirostack.com', 'Zirostack Support');
    $adminMail->addReplyTo($email, $name);
    $adminMail->Subject = 'New Contact Form Submission: ' . $subject_label;
    $adminMail->Body    = $admin_html;
    $adminMail->AltBody = "New message from {$name} ({$email})\nSubject: {$reason}\nMessage:\n{$message}";
    $adminMail->send();

    // 2. User autoreply
    $userMail = buildMailer();
    $userMail->addAddress($email, $name);
    $userMail->Subject = "We received your message, {$first_name}.";
    $userMail->Body    = $user_html;
    $userMail->AltBody = "Hi {$first_name}, thank you for contacting Zirostack. We received your message and will respond within 24 hours.";
    $userMail->send();

} catch (Exception $e) {
    error_log('Contact form mailer error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Sorry, we could not send your message right now. Please try again later or email us directly at support@zirostack.com.']);
    exit;
}

// ─── Rate-limit stamp + success ───────────────────────────────────────────────
$_SESSION['last_contact_submit'] = $now;

echo json_encode(['success' => true, 'message' => "Your message has been sent! We'll respond within 24 hours."]);
