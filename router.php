<?php
// router.php - Router for PHP built-in server to emulate .htaccess URL rewrites
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// Remove trailing slash for checking if .php exists
$uriWithoutSlash = rtrim($uri, '/');

if (file_exists(__DIR__ . $uriWithoutSlash . '.php')) {
    require __DIR__ . $uriWithoutSlash . '.php';
    return;
}

// If directory, try index.php
if (is_dir(__DIR__ . $uri)) {
    if (file_exists(__DIR__ . rtrim($uri, '/') . '/index.php')) {
        require __DIR__ . rtrim($uri, '/') . '/index.php';
        return;
    }
}

return false;
