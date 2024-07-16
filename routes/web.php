<?php

declare(strict_types=1);

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

return static function (Slim\App $app): void {
    $app->get('/', [HomeController::class, 'index'])->setName('home.index');
    $app->get('/about', [AboutController::class, 'index'])->setName('about.index');
    $app->get('/contact', [ContactController::class, 'index'])->setName('contact.index');
};
