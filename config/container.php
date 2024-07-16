<?php

use Psr\Container\ContainerInterface;
use Slim\App;
use Slim\Views\Twig;
use Slim\Factory\AppFactory;

return [
    'settings' => function () {
        return require __DIR__ . '/settings.php';
    },
    
    App::class => function (ContainerInterface $container) {
        $app = AppFactory::createFromContainer($container);

        // Register routes
        (require __DIR__ . '/../routes/web.php')($app);

        // Register middleware
        (require __DIR__ . '/../app/Http/Middlewares/Middleware.php')($app);

        return $app;
    },

    Twig::class => function (ContainerInterface $container): Twig {
        /** @var array<string, array<string, mixed>> $settings */
        $settings = $container->get('settings');

        $options = [
            'debug' => $settings['app']['debug'],
            'cache' => $settings['view']['cache'],
        ];

        /** @var string $path */
        $path = $settings['view']['path'];

        $twig = Twig::create($path, $options);

        /** @var Translator $translator */
        //$translator = $container->get(Translator::class);

        //$twig->getEnvironment()->addGlobal('locale', $translator->getLocale());
        //$twig->addExtension(new TranslationExtension($translator));

        return $twig;
    },
];
