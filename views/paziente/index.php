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

<div class="panel panel-default">                

    <div class="panel-heading"> 
        Elenco pazienti
    </div>	

    <div class="panel-body">  

        <table id="table-paziente-index" class="display compact" cellspacing="0" width="100%">
            <thead>
                <tr>                    
                    <th>#</th>                          
                    <th>Paziente</th>      
                    <th>C. Fiscale</th>
                    <th>Comune Residenza</th>
                    <th rowspan="2">Provincia</th>
                    <th rowspan="2">Telefono</th>
                    <th rowspan="2">Medico</th>
                    <th rowspan="2">Email</th>  
                </tr>
                <tr id="filterrow">  
                    <th></th>
                    <th></th>    
                    <th></th>
                    <th></th>
                </tr>
            </thead>                        
            <tbody>                            
            </tbody> 

        </table>
    </div>
</div>