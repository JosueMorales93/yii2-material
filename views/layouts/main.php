<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use app\assets\MaterialAsset;
use kartik\icons\FontAwesomeAsset;
use yii\materialicons\AssetBundle;
use wii\materialize\MaterializeAsset;

//Inicialización de Assets
//MaterializeAsset::register($this);
AssetBundle::register($this);
FontAwesomeAsset::register($this);

MaterialAsset::register($this);
AppAsset::register($this);
//

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Yii::$app->name ?></title>
        <?php $this->head() ?>
    </head>
    <body class="md-skin pace-done">
    <?php $this->beginBody() ?>
        <div id="wrapper">
            <?= $this->render(
                    'menu.php'
            ) ?>
            <?= $this->render(
                    'content.php',
                    ['content' => $content]
            ) ?>
        </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
