<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'th_TH',
    'timeZone' => 'Asia/Bangkok',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        /* 'social' => [
          // the module class
          'class' => 'kartik\social\Module',
          // the global settings for the facebook plugins widget
          'facebook' => [
          'appId' => 'FACEBOOK_APP_ID',
          'secret' => 'FACEBOOK_APP_SECRET',
          ],
          ], */
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
    ],
];
