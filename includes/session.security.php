<?php

session_set_cookie_params([
//     'lifetime' => 0,         // Expires on browser close
//     'path' => '/',
//     'domain' => 'example.com',
    'secure' => true,        // Only over HTTPS
    'httponly' => true,      // Inaccessible via JavaScript
    'samesite' => 'Strict'   // Prevent CSRF
]);

session_start();

if (!isset($_SESSION['user_agent'])) {
    $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['ip_address'] = $_SERVER['REMOTE_ADDR'];
} elseif ($_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT'] || 
          $_SESSION['ip_address'] !== $_SERVER['REMOTE_ADDR']) {
    session_destroy(); // Possible hijacking attempt
    exit("<h1 style='text-align:center;'>GOT YOU</h1>");
 
}

if (isset($_SESSION['last_activity']) && 
    time() - $_SESSION['last_activity'] > 1800) { // 30 min
    session_unset();
    session_destroy();
}
$_SESSION['last_activity'] = time();