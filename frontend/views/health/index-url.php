<?php

/* @var $this yii\web\View */
$this->params['getUrls'] = $getUrls;
$this->params['icon'] = $getPages['icon'];
$position = 2;


//echo '<pre>';

//print_r(Yii::$app->params['languageSelection']);

//echo '</pre>';

?>
<div class="container  container-no-top-padding-extended">


    <div class="h1-and-breadcrumbs">
        <h1 class="h1-all"><?= Yii::$app->params['h1'] ?></h1>
        <ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">

            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a href="/<?= Yii::$app->language ?>/" itemprop="item">
                        <span itemprop="name">
                        <?=Yii::t('app','Home')?>
                        </span>
                </a>
                <meta itemprop="position" content="1" />
            </li>

            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                /  <a href="/<?= Yii::$app->language ?>/health/" itemprop="item">
                    <span itemprop="name">
                        <?= Yii::$app->params['breadcrumbsMain']['menu_name'] ?>
                    </span>
                </a>
                <meta itemprop="position" content="2" />
            </li>


            <?php if ($breadcrumbs['level3url']<>'health-2' and ($breadcrumbs['level3url'])): ?>
            <?php $position++; ?>

            <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                            itemtype="http://schema.org/ListItem">
                            /  <a href="/<?= Yii::$app->language ?>/health/<?=$breadcrumbs['level3url']?>/" itemprop="item">
                                    <span itemprop="name">
                                        <?=$breadcrumbs['level3pt']?>
                                    </span>
                            </a>
                            <meta itemprop="position" content="<?= $position ?>" />
                        </li>
            <?php endif;?>

            <?php if ($breadcrumbs['level2url']<>'health-2' and ($breadcrumbs['level2url'])): ?>
                <?php $position++; ?>

                <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                    itemtype="http://schema.org/ListItem">
                    /  <a href="/<?= Yii::$app->language ?>/health/<?=$breadcrumbs['level2url']?>/" itemprop="item">
                                    <span itemprop="name">
                                        <?=$breadcrumbs['level2pt']?>
                                    </span>
                    </a>
                    <meta itemprop="position" content="<?= $position ?>" />
                </li>
            <?php endif;?>


            <?php if ($breadcrumbs['level1url']<>'health-2' and ($breadcrumbs['level1url'])): ?>
                <?php $position++; ?>

                <li class="breadcrumbs-item" itemprop="itemListElement" itemscope
                    itemtype="http://schema.org/ListItem">
                    /  <a href="/<?= Yii::$app->language ?>/health/<?=$breadcrumbs['level1url']?>/" itemprop="item">
                                    <span itemprop="name">
                                        <?=$breadcrumbs['level1pt']?>
                                    </span>
                    </a>
                    <meta itemprop="position" content="<?= $position ?>" />
                </li>
            <?php endif;?>


        </ol>


    </div>

<br>






    <div class="row row-padding margin-top">

        <div class="col-lg-9 col-xs-12 div-left">

            <?php

            echo  $this->render($getPages['pageName'], [
                'getSpecify' => $getPages['specify'],
                'getParams' => $getParams,
                'result' => $result,

            ])  ?>


            <?=$this->render('/partials/parent-categories/_parent-categories' ,[
                    'parentCategories' => $parentCategories,
                    'getIcon' => $getPages['icon'],

            ]);?>


        </div>

        <div class="form-right col-sm-3">

            <?php if (isset($getPages['embed'])):?>
                <?=$getPages['embed']?>
            <?php endif;?>
            <?php //= $this->render('/partials/ads/_ads_2', [
            //'allAdvertising' => $allAdvertising])
            ?>

        </div>
    </div>









</div>