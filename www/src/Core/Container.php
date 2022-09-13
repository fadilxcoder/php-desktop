<?php

namespace App\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use \DI\ContainerBuilder as ContainerBuilder;
use App\Core\Database as Database;
use Symfony\Component\HttpFoundation\Request;
class Container
{
    public static function init()
    {
        $containerBuilder = new ContainerBuilder();
        $twig_repo = __DIR__ . '/../../' . $_ENV['TWIG_REPO'];
        
        $containerBuilder->addDefinitions(
            [
                'database' => $_ENV['DB_SQLITE'],
                Database::class => \DI\autowire()->constructor(
                    \DI\get('database')
                ),
                Environment::class => \DI\autowire()->constructor(
                    new FilesystemLoader($twig_repo),
                    [
                        'debug' => true
                    ]
                ),
            ]
        );
        $container = $containerBuilder->build();
        $container->set(Request::class, Request::createFromGlobals());

        return $container;
    }
}
