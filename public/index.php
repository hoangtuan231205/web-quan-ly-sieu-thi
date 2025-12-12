<?php

// Bật autoload
require __DIR__ . '/../app/autoload.php';

// Load router
require __DIR__ . '/../routes/web.php';

// Lấy URL hiện tại
$scriptName = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$uri = str_replace($scriptName, '', $_SERVER['REQUEST_URI']);
$uri = trim($uri, '/');

// Xử lý route
Router::dispatch($uri);
