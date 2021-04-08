<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\sidenav\SideNav;

AppAsset::register($this);
?>
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

<div class="wrap">
    <?php

    echo SideNav::widget([
        'type' => SideNav::TYPE_DEFAULT,
        'heading' => 'TOMAS.BP',
        'items' => [
            [
                'label' => Yii::t("yii",'Moje'),
            ],
            [
                'label' => Yii::t("yii",'Plan'),
                'items' => [
                    ['label' => Yii::t("yii",'Neoddane')],
                    ['label' => Yii::t("yii",'Oddane')],
                    ['label' => Yii::t("yii",'Potrjene')],
                    ['label' => Yii::t("yii",'Urejanje planinskih tabel')],
                ],
            ],
            [
                "label"=>Yii::t("yii","Analize"),
                "items"=>[
                    ['label' => Yii::t("yii",'Analize')],
                    ['label' => Yii::t("yii",'Simulacije')],
                ]
            ],
            [
                "label"=>Yii::t("yii","Poročila"),
                "items"=>[
                    ['label' => Yii::t("yii",'Dokumenti')],
                ]
            ],
            [
                "label"=>Yii::t("yii","Dimenzije"),
                "items"=>[
                    ['label' => Yii::t("yii",'Elementi')],
                    ['label' => Yii::t("yii",'Verzije')],
                    ['label' => Yii::t("yii",'Organizacijske enote')],
                    ['label' => Yii::t("yii",'Kupci')],
                    ['label' => Yii::t("yii",'Produkti')],
                    ['label' => Yii::t("yii",'Pokrajinski kanali')],
                    ['label' => Yii::t("yii",'Leta')],
                    ['label' => Yii::t("yii",'Meseci')],
                    ['label' => Yii::t("yii",'Podatki')],
                ]
            ]
        ],
        "containerOptions"=>["style"=>"width:20%"]
    ]);
    //NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    <div class="right-side">
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
