<?php

namespace App\Core;

use App\Core\Database;

class Repository
{
    public function __construct(protected Database $db)
    {
    }
}