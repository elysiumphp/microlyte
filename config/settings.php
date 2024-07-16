<?php

// Should be set to 0 in production
error_reporting(E_ALL);

// Should be set to '0' in production
ini_set('display_errors', '1');

// Settings
$settings = [];

return [
    'app' => [
        'name'   => DI\env('APP_NAME', 'Slim 4 Starter'),
        'env'    => DI\env('APP_ENV', 'production'),
        'debug'  => DI\env('APP_DEBUG', false),
        'locale' => 'en',
    ],
    'view' => [
        'path'  => '../resources/views',
        'cache' => false,
    ],
];

return $settings;