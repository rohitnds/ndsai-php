<?php
/**
 * Local Router for PHP Built-in Web Server
 * Purpose: Enables clean URLs (extensionless .php paths) on local dev environments.
 * Usage: php -S localhost:8000 router.php
 */

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . $uri;

// 1. If it's an existing file (like images, CSS, JS), serve it as-is
if (is_file($file)) {
    return false;
}

// 2. Map old React path /ai-services/ai-sales-automation to the services PHP page
if ($uri === '/ai-services/ai-sales-automation' || $uri === '/ai-services/ai-sales-automation/') {
    $salesFile = __DIR__ . '/services/ai-sales-automation.php';
    if (is_file($salesFile)) {
        include $salesFile;
        return;
    }
}

// 3. If it's a directory, look for index.php inside it
if (is_dir($file)) {
    $indexFile = rtrim($file, '/') . '/index.php';
    if (is_file($indexFile)) {
        include $indexFile;
        return;
    }
}

// 4. Check if the file exists with a .php extension (Clean URLs)
if (is_file($file . '.php')) {
    include $file . '.php';
    return;
}

// 5. Default fallback: 404 Page Not Found
http_response_code(404);
echo "<h1>404 Not Found</h1>";
echo "<p>The requested path <strong>" . htmlspecialchars($uri) . "</strong> was not found on this server.</p>";
return;
