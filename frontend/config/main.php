<?php

$params = array_merge(
        require __DIR__ . '/../../common/config/params.php', require __DIR__ . '/../../common/config/params-local.php', require __DIR__ . '/params.php', require __DIR__ . '/params-local.php'
);

use \yii\web\Request;

$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());

return [
    'id' => 'app-frontend',
    'name' => 'AMC POC',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
//    'as beforeRequest' => [
//        'class' => 'yii\filters\AccessControl',
//        'rules' => [
//            [
//                'actions' => ['login', 'error', 'captcha', 'debug'],
//                'allow' => true,
//                'roles' => ['?'],
//            ],
//            [
//                'allow' => true,
//                'roles' => ['@'],
//            ],
//        ],
//        'denyCallback' => function () {
//            return Yii::$app->response->redirect(['site/login']);
//        },
//    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
//            'useMemcached' => true,
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => $baseUrl,
            'csrfCookie' => [
                'httpOnly' => true,
//                'secure' => true
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'cookies' => [
            'class' => 'yii\web\Cookie',
            'httpOnly' => true,
//            'secure' => true
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
            'maxSourceLines' => 20,
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
//            'enableStrictParsing' => false,
            'rules' => [
                '' => 'site/index',
                '/' => 'site/index',
//                'frontend/<id:\d+>/index' => 'site/index',
//                'frontend/<id:\d+>/login' => 'site/login',
//                'api/<id:\d+>/login' => 'api/site/login',
//                'frontend/<id:\d+>/' => 'site/index',
                '<alias:index|login|logout>' => 'site/<alias>',
//                'api/<controller:\w+>/<action:\w+>' => 'api/<controller>/<action>',
//                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
//                '<controller:\w+>' => '<controller>/index',
            ],
        ],
        'assetManager' => [
            'appendTimestamp' => true,
        ],
    ],
    'params' => $params,
//    'modules' => [
//        'gii' => [
//            'class' => 'yii\gii\Module', //adding gii module
//            'allowedIPs' => ['127.0.0.1', '::1']  //allowing ip's 
//        ],
//    ]
];
