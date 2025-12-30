<?php
// index.php – Entry point for NIIT

// Start session
session_start();

// Redirect root traffic to public index
header("Location: pages/public/index.php");
exit;
