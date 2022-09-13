<?php

namespace App\Core;

use \Twig\Environment;
use App\Core\Twig as TwigEnv;

class Controller
{
    public function __construct(
        private Environment $twig, 
        private TwigEnv $twigEnv
    ) {
    }

    public function render(string $view, array $parameters = [])
    {
        $parameters['app'] = [
            'uri' => $this->twigEnv->appUri(),
            'name' => $this->twigEnv->appName(),
            'site_uri' => $this->twigEnv->appSiteUri(),
        ];

        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
        echo $this->twig->render($view, $parameters);
    }

    public function redirectTo(String $url)
    {
        header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        header('Pragma: no-cache');
        header('Location: ' . $this->twigEnv->appUri() . $url);
        return;
    }
}