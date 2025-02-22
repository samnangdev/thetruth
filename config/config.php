<?php
// config.php

// Automatically detect the base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . '://' . $host . '/factnews/';

define('BASE_URL', $base_url);

// Define the base path for file inclusions
define('BASE_PATH', realpath(__DIR__ . '/../../') . '/factnews/');
// define('BASE_PATH', str_replace('\\', '/', realpath(__DIR__ . '/../../') . '/'));
//  