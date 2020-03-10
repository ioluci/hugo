<?php

namespace app\assets\paziente;

use yii\web\AssetBundle;

class PazienteViewAsset extends AssetBundle {

    public $basePath = '@webroot'; //'webroot=C:/xampp/htdocs/dondolino/web'
    public $baseUrl = '@web'; //'web=/dondolino/web'
    public $css = [
        'css/site/paziente/view.css'
    ];
    public $js = [
        'js/site/paziente/view.js'
    ];
    public $depends = [
        'app\assets\AppAsset', //= site.css + site.js    
    ];

}
