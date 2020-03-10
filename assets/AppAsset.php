<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site/site.css',
        'css/ultra/ultra.css',
    ];
    public $js = [
        'js/ultra/slimscroll/resizer.js',
        'js/ultra/slimscroll/jquery.slimscroll.min.js',
        'js/ultra/navigation/ultra.js',
        'js/ultra/custom/fixed.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset', //=css/bootstrap.css
        'yii\bootstrap4\BootstrapPluginAsset', //js/bootstrap.js
    ];

}
