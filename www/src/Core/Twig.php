<?php

namespace App\Core;

class Twig
{
    public function appUri()
    {
        return $_ENV['APP_URL'];
    }

    public function appName()
    {
        return $_ENV['APP_NAME'];
    }

    public function appSiteUri()
    {
        return $_ENV['APP_SITE_URL'];
    }
}