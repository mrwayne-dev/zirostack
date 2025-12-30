<?php
if (!defined('BASE_URL')) {
    die('BASE_URL not defined');
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Zirostack' ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?= BASE_URL ?>/assets/favicon/favicon.ico">

    <!-- Template + Project CSS -->
    <?php include INCLUDES_PATH . '/template-css.php'; ?>
</head>
