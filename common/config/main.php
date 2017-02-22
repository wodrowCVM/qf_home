<?php
$config = [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::className(),
        ],
    ],
	'modules' => [
	    'treemanager' =>  [
	        'class' => \kartik\tree\Module::className(),
	    ]
	],
];

return $config;
