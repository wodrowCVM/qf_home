<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$config = [
    'id' => 'copydemo',
    'basePath' => dirname(__DIR__),
    'name' => "轻纺家园",
    'bootstrap' => ['log'],
    'controllerNamespace' => 'copydemo\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-copydemo',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-copydemo', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the copydemo
            'name' => 'advanced-copydemo',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                'file' => [
                    'class' => \yii\log\FileTarget::className(),
                    'levels' => ['error'],
//                    'categories' => ['wodrow'],
                ],
                'email' => [
                    'class' => \yii\log\EmailTarget::className(),
//                    'levels' => ['error', 'warning'],
                    'categories' => ['email'],
                    'message' => [
                        'to' => ['1173957281@qq.com', /*'developer@example.com'*/],
                        'subject' => '来自 qf_home 的新日志消息',
                    ],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::className(),
        ],
        'formatter' => [
            'class' => \yii\i18n\Formatter::className(),
            'dateFormat' => 'php:Y-m-d',
            'datetimeFormat' => 'php:Y-m-d H:i:s',
            'timeFormat' => 'php:H:i:s',
        ],
        'urlManager' => [
            'showScriptName' => false,
            'enablePrettyUrl' => true,
        ],
        'assetManager' => [
            'converter' =>
                [
                    'class' => \singrana\assets\Converter::className(),
                ],
        ],
        'i18n' => [
            'translations' => [
                'user' => [
                    'class' => \yii\i18n\PhpMessageSource::className(),
                    'basePath' => '@app/messages',
                ]
            ],
        ],
    ],
    'params' => $params,
];

return $config;
