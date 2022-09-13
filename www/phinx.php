<?php

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/phinx/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/phinx/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'sqlite',
            'name' => 'db/database',
            'suffix' => '.db',
        ],
        'development' => [
            'adapter' => 'sqlite',
            'name' => 'db/database',
            'suffix' => '.db',
        ],
        'testing' => [
            'adapter' => 'sqlite',
            'name' => 'db/database',
            'suffix' => '.db',
        ]
    ],
    'version_order' => 'creation'
];
