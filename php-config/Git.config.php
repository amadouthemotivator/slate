<?php

Git::$repositories['slate'] = [
    'remote' => 'https://github.com/SlateFoundation/slate.git',
    'originBranch' => 'development',
    'workingBranch' => 'development',
    'localOnly' => true,
    'trees' => [
        'dwoo-plugins',
        'event-handlers',
        'html-templates' => [
            'exclude' => [
                '#^/app/SlateAdmin(/|$)#' // don't delete file from slate-admin package
            ]
        ],
        'mail-handlers',
        'php-classes',
        'php-config' => [
            'exclude' => '#^/Git\\.config\\.php$#' // don't sync this file
        ],
        'php-migrations',
        'phpunit-tests',
        'sencha-workspace/pages',
        'site-root' => [
            'exclude' => [
                '#/manage.php$#', // don't delete file from slate-admin package
                '#^/css(/|$)#', // don't sync /css, this directory is generated by /sass/compile
                '#^/js/pages(/|$)#' // don't sync /js/pages, this directory is generated by /sencha-cmd/pages-build
            ]
        ]
    ]
];

Git::$repositories['slate-admin'] = [
    'remote' => 'https://github.com/SlateFoundation/slate-admin.git',
    'originBranch' => 'development',
    'workingBranch' => 'development',
    'localOnly' => true,
    'trees' => [
        'docs/slate-admin',
        'html-templates/app/SlateAdmin',
        'sencha-workspace/SlateAdmin' => [
            'exclude' => [
                '#^/bootstrap\\.#' // don't sync generated bootstrap files
            ]
        ],
        'site-root/manage.php',

        // TODO: eliminate for own package:
        'sencha-workspace/packages/emergence-apikit',
        'sencha-workspace/packages/jarvus-apikit',
        'sencha-workspace/packages/jarvus-ext-lazydata',
        'sencha-workspace/packages/jarvus-ext-routing',
        'sencha-workspace/packages/jarvus-ext-searchfield'
    ]
];

Git::$repositories['slate-theme'] = [
    'remote' => 'https://github.com/SlateFoundation/slate-theme.git',
    'originBranch' => 'development',
    'workingBranch' => 'development',
    'localOnly' => true,
    'trees' => [
        'sencha-workspace/packages/slate-theme' => '.'
    ]
];