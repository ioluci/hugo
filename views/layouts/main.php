<?php
/* @var $this \yii\web\View  */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use kartik\icons\Icon;

AppAsset::register($this);
//kartik icon package - initialize the globally setup framework
Icon::map($this, Icon::FA);
?>

//

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>


        <?php $this->beginBody() ?>

        <div id="u-app-wrapper" class="panel-fixed ">

            <!-- TOB BAR -->
            <div id="u-topbar" style="z-index: 200;"> <!-- zindex to make sure is always in front of anything else, left menu included ! -->

                <!-- HOME BUTTON -TITLE  -->
                <div class="title"> 
                    <a href=<?= Yii::$app->homeUrl; ?>>
                        <?= Html::img('img/icons/doctor.png', ['alt' => 'Home', 'height' => 20, 'width' => 22, 'style' => 'margin-right: 10px'])
                        ?> 
                    </a>
                    <span class="title-company"> Dr. Hugo   </span>
                </div>


                <!-- TOP NAVIGATION PANEL -->
                <div class ="navbar-topbar" >    

                    <span class="left-panel-toggle">
                        <i class="fa fa-bars"></i>
                    </span>

                    <?php
                    if (isset($this->blocks['topbar'])) {
                        echo $this->blocks['topbar'];
                    }
                    ?>
                </div>

            </div>

            <!-- LEFT NAVIGATION PANEL -->
            <div id="u-left-panel" style="z-index: 100;" > <!-- zindex to make sure is always in front of anything else, but behind the top bar ! -->

                <br/>

                <div id="u-left-menu">
                    <ul class="left-menu-wrapper list-unstyled">


                        <li class="left-menu-parent">
                            <a href="?r=paziente/index">
                                <span class="left-menu-link-icon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <span class="left-menu-link-info">
                                    <span class="link-name">PAZIENTI</span>
                                    <span class="link-state"></span>
                                </span>
                            </a>
                        </li>

                        <li class="left-menu-parent">
                            <a href="?r=ricevuta/index">
                                <span class="left-menu-link-icon">
                                    <i class="fa fa-file"></i>
                                </span>
                                <span class="left-menu-link-info">
                                    <span class="link-name">RICEVUTE</span>
                                    <span class="link-state"></span>
                                </span>
                            </a>
                        </li>


                    </ul><!--Main ul-->
                </div>

            </div>


            <!-- MAIN CONTENT - injected through render view -->
            <div class="content-wrapper">
                <div class="content-panel content-shrink">

                    <section id="main-content"> 
                        <?= $content ?>
                    </section>


                </div>
            </div>

        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
