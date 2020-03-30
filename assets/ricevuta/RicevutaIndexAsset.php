<?php

namespace app\assets\ricevuta;

use yii\web\AssetBundle;

class RicevutaIndexAsset extends AssetBundle {

    public $basePath = '@webroot'; //'webroot=C:/xampp/htdocs/dondolino/web'
    public $baseUrl = '@web'; //'web=/dondolino/web'
    public $css = [
        'css/site/ricevuta/index/index.css',
        'css/site/ricevuta/index/vue_styles.css'
    ];
    public $js = [
        'js/site/ricevuta/index/index.js',
        'js/site/ricevuta/index/vue_vendors.js',
        'js/site/ricevuta/index/vue_app.js'
    ];
    public $depends = [
        'app\assets\AppAsset', //= site.css + site.js    
    ];

}
