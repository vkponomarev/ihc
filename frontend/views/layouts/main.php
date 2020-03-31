<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\widgets\Pjax;

/**
<?= Html::jsFile(YII_DEBUG ? '@web/js/lib.js' : '@web/js/lib.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/lib.min.js'))) ?>
<?= Html::jsFile(YII_DEBUG ? '@web/js/all.js' : '@web/js/all.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/all.min.js'))) ?>
"vendor/bower-asset/bootstrap/dist/js/bootstrap.min.js"
 */

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>


    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?= Yii::$app->params['description'] ?>">
    <?=$this->render('/partials/canonical/_canonical');?>
    <?=$this->render('/partials/alternate/_alternate');?>

    <?php if (isset($this->params['icon'])):?>
    <?=$this->render('/partials/open-graph/_open-graph' ,[
        'getUrls' => $this->params['getUrls'],
        'icon' => $this->params['icon'],
    ]);?>
    <?php endif;?>


    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode(Yii::$app->params['title']) ?></title>


    <?php $this->head() ?>

</head>
<body role="document">
<?php $this->beginBody() ?>

<div class="wrap">

    <?=$this->render('/partials/menu-items/_menu-items');?>


        <?= $content ?>

</div>

<footer>
    <div class="container container-no-top-padding-extended text-center text-md-left">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">


                <span class="choose-languages">

                   <span class="fa fa-globe globe-size">
                   </span>

                   <?= Yii::$app->params['currentLanguageName'] ?>

                   <span class="fa fa-sort-down sort-down-languages">
                   </span>
                   <ul class="languages-dropdown">

                       <?php foreach (Yii::$app->params['languageSelection'] as $item): ?>

                           <li>

                               <?= \yii\helpers\Html::a($item['name'], array_merge(Yii::$app->request->get(),
                                   [Yii::$app->controller->route, 'language' => $item['url']]));?>

                           </li>

                       <?php endforeach?>


                   </ul>

                </span>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <ul class="contact">
                    <span><?=Yii::t('app','Read')?></span>

                    <li>
                        <a href="/<?= Yii::$app->language ?>/embed/" rel="nofollow"><?=Yii::t('app','Embed calculator')?></a>
                    </li>

                     <li>
                         <br>
                    </li>


                    <li>
                        <a href="/<?= Yii::$app->language ?>/cms/cookie-42/" rel="nofollow"><?=Yii::t('app','Cookie info')?></a>
                    </li>
                    <li>
                        <a href="/<?= Yii::$app->language ?>/cms/policy-43/" rel="nofollow"><?=Yii::t('app','Privacy policy')?></a>
                    </li>


                </ul>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <ul class="contact">
                    <span><?=Yii::t('app','Help')?></span>
                    <li>
                        <a href="/<?= Yii::$app->language ?>/cms/translation-44/" rel="nofollow"><?=Yii::t('app','Translations')?></a>
                    </li>
                    <li>
                        <a href="/<?= Yii::$app->language ?>/cms/donation-41/" rel="nofollow"><?=Yii::t('app','Donations')?></a>
                    </li>


                </ul>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <ul class="contact">
                    <span><?=Yii::t('app','Contacts')?></span>
                    <li>
                        <a href="/<?= Yii::$app->language ?>/cms/contact-45/" rel="nofollow"><?=Yii::t('app','Write to us')?></a>
                    </li>

                </ul>
            </div>


        </div>
    </div>
    <br><br><br>
</footer>

<script>


    $('.dropdown-toggle').click(function(e) {
        if ($(document).width() > 768) {
            e.preventDefault();
            var url = $(this).attr('href');
            if (url !== '#') {
                window.location.href = url;
            }
        }
    });


</script>


<?php $this->endBody() ?>

<?php Pjax::begin(); ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dbbf2586b540d45"></script>
<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js" async="async"></script>
<?php Pjax::end(); ?>
<?= $this->render('/partials/counters/_counters');?>


</body>
</html>
<?php $this->endPage() ?>
