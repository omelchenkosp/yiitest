<?php
    return [
        'id' => 'yiitest-web',
        'basePath' => realpath(__DIR__ . '/../'),
//        'sourceLanguage' => 'en',
        'language' => 'ru',
        'bootstrap' => ['debug'],
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false
            ],
            'request' => [
                'cookieValidationKey' => 'super secret code'
            ],
        ],
        'modules' => [
            'debug' => 'yii\debug\Module'
        ]
    ];