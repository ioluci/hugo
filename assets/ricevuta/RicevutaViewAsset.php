<?php

namespace app\assets\ricevuta;

use yii\web\AssetBundle;

class RicevutaViewAsset extends AssetBundle {

    public $basePath = '@webroot'; //'webroot=C:/xampp/htdocs/dondolino/web'
    public $baseUrl = '@web'; //'web=/dondolino/web'
    public $css = [
        'css/site/ricevuta/view.css'
    ];
    public $js = [
        'js/site/ricevuta/view.js',
        'js/vue/vue.js'
    ];
    public $depends = [
        'app\assets\AppAsset', //= site.css + site.js    
    ];

}
