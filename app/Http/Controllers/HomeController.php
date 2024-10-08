<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class HomeController extends Controller
{
    public function index(Request $request, Response $response): Response
    {
        return $this->render($response, 'pages/index.html.twig');
    }
}