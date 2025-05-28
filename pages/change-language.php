<?php
// Include configuration
require_once dirname(__DIR__) . '/config/config.php';

// Get the language parameter
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

// Validate language
if ($lang !== 'en' && $lang !== 'it') {
    $lang = 'en';
}

// Set the language in session
$_SESSION['lang'] = $lang;

// Redirect back to the previous page or home
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : APP_URL;
header("Location: $redirect");
exit;