<?php

/* @var $this yii\web\View */
//test

?>
ТЕСТ
<div class="container  container-no-top-padding-extended">

    <div class="h1-main">

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
            </ol>
        </div>



    </div>
    <br>


    <?php


    //echo '<pre>';
    //var_dump($texts);
    //print_r($parentCategories);
    //echo '</pre>';


    ?>


    <div class="row row-padding margin-top">

        <div class="col-lg-9 col-xs-12 div-left">
            <div class="row  row-flex">
            <?php foreach ($parentCategories as $parentCategory):?>

                        <a href="/<?= Yii::$app->language ?>/<?= $getUrls['mainUrl'] ?>/<?= $parentCategory['url'] ?>/" class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-12 main-pages-extended">
                            <div class="plates">

                                <p><img class="plates-img" src="/files/category-icons/<?= $getPagesIcon[$parentCategory['id']]['icon'] ?>" alt="Калькулятор беременности" width="50"></p>

                                <p class="plates-title"><?=$parentCategory['plates_title']?>
                                </p>
                                <p class="plates-under-title"></p>
                            </div>
                        </a>

            <?php endforeach;?>
            </div>


        </div>
    </div>









</div>