<?php

use app\assets\paziente\PazienteIndexAsset;
use kartik\nav\NavX;

//load css and js assets
PazienteIndexAsset::register($this);


////top menu **********************************************************************
$this->beginBlock('topbar');
echo NavX::widget([
    'options' => ['class' => 'nav nav-pills'],
    'items' => [
        [
            'label' => '<i class="fa fa-plus"></i> Nuovo',
            'url' => '#'
        ],
    ],
    'encodeLabels' => false
]);
$this->endBlock(); // ************************************************************
?>



<h1>paziente/index</h1>

<button type="button" class="btn btn-light"> <a href="?r=paziente/view"> Tabella -> dettagli paziente </a></button>
<hr>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
