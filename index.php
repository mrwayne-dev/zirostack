<?php
// index.php – Entry point for Zirostack

session_start();

// Redirect root traffic to public index
header("Location: pages/public/index.php");
exit;
//uggubuvvyvy