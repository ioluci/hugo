<?php

namespace app\assets\paziente;

use yii\web\AssetBundle;

class PazienteIndexAsset extends AssetBundle {

    public $basePath = '@webroot'; //'webroot=C:/xampp/htdocs/dondolino/web'
    public $baseUrl = '@web'; //'web=/dondolino/web'
    public $css = [
        'css/site/paziente/index.css',
        'css/site/index.css',
        'css/datatables/datatables.css',
    ];
    public $js = [
        'js/site/paziente/index.js',
        'js/datatables/datatables.min.js',
    ];
    public $depends = [
        'app\assets\AppAsset', //= site.css + site.js    
    ];

}
