<?php

use app\assets\ricevuta\RicevutaIndexAsset;
use kartik\nav\NavX;

//load css and js assets
RicevutaIndexAsset::register($this);

////top menu **********************************************************************
$this->beginBlock('topbar');
echo NavX::widget([
    'options' => ['class' => 'nav nav-pills'],
    'items' => [
        [
            'label' => '<i class="fa fa-plus"></i> Nuova',
            'url' => '#'
        ],
    ],
    'encodeLabels' => false
]);
$this->endBlock(); // ************************************************************

?>
<h1>ricevuta/index</h1>

<button type="button" class="btn btn-light"> <a href="?r=ricevuta/view"> Tabella -> dettagli ricevuta </a></button>
<hr>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
