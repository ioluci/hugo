<?php

namespace app\assets\ricevuta;

use yii\web\AssetBundle;

class RicevutaViewAsset extends AssetBundle {

    public $basePath = '@webroot'; //'webroot=C:/xampp/htdocs/dondolino/web'
    public $baseUrl = '@web'; //'web=/dondolino/web'
    public $css = [
        'css/site/ricevuta/view/view.css',
        'css/site/ricevuta/view/vue_styles.min.css',
        //'css/site/ricevuta/view/vendors_styles.min.css',
            
    ];
    public $js = [
        'js/site/ricevuta/view/view.js',
        'js/site/ricevuta/view/vendors_app.min.js',
        'js/site/ricevuta/view/vue_app.min.js'            
    ];
    public $depends = [
        'app\assets\AppAsset', //= site.css + site.js    
    ];

}
