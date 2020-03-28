<?php

use app\assets\ricevuta\RicevutaViewAsset;
use kartik\nav\NavX;

//load css and js assets
RicevutaViewAsset::register($this);

////top menu **********************************************************************
$this->beginBlock('topbar');
echo NavX::widget([
    'options' => ['class' => 'nav nav-pills'],
    'items' => [
        [
            'label' => '<i class="fa fa-edit"></i> Modifica',
            'url' => '#'
        ],
        [
            'label' => '<i class="fa fa-file-text-o"></i> Ricevute',
            'url' => '#'
        ],
        [
            'label' => '<i class="fa fa-file-o"></i> Report 1',
            'url' => '#'
        ],
        [
            'label' => '<i class="fa fa-file-o"></i> Report 2',
            'url' => '#'
        ],
    ],
    'encodeLabels' => false
]);
$this->endBlock(); // ************************************************************
?>
<h1>ricevuta/view</h1>


<div id="app"> 
    <p>{{ message }}</p>
    <todo task="clean the room"></todo>
</div>

