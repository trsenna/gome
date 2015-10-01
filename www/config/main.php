<?php

$config = [

    'id' => 'front',
    'basePath' => dirname( __DIR__ ),
    'controllerNamespace' => 'front\\controllers',
    'bootstrap' => [ 'log' ],

    /*
     * components
     */

    'components' => [

        /*
         * components/request
         */

        'request' => [

            /*
             * Insert a secret key in the following
             * This is required by cookie validation
             */

            'cookieValidationKey' => 'W8p?(G4k32p@S5M',

        ],

        /*
         * components/cache
         */

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        /*
         * components/errorHandler
         */

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        /*
         * components/log
         */

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => [ 'error', 'warning' ],
                ],
            ],
        ],

    ],

    /*
     * modules
     */

    'modules' => [
        'scaffold' => [
            'class' => 'scaffold\Module',
        ],
    ],

];

return $config;
