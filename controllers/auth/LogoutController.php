<?php
session_start();
require_once __DIR__ . '/../../connection/db.php';
require_once __DIR__ . '/../../config/config.php';

// Destroy all session variables
$_SESSION = [];

// Unset session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to login page or home page
header("Location: " . BASE_URL . "views/auth/index.php");
exit();
?>