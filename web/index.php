<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php'; // 加载composer的autoload
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php'; // 加载Yii.php

$config = require __DIR__ . '/../config/web.php'; // 加载配置

(new yii\web\Application($config))->run(); // 开始执行
