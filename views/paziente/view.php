<?php

use app\assets\paziente\PazienteViewAsset;
use kartik\nav\NavX;

//load css and js assets
PazienteViewAsset::register($this);

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
    ],
    'encodeLabels' => false
]);
$this->endBlock(); // ************************************************************
?>
<h1>paziente/view</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
