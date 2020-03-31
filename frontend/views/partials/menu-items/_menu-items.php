<?php

/* @var $this \yii\web\View */
/* @var $content string */




?>






<nav class="navbar-default nav-shadow">
    <div class="container container-extended">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed nav-button" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand dropdown-a-extended brand-link-extended" href="/">

                <img class="brand-image" src="/files/logo1.png" alt="Женский Калькулятор" width="70">

                <div class="brand-div"><?=Yii::t('app','Health')?><br>
                    <?=Yii::t('app','Calculator')?></div>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse nav-bar-collapsed nav-bar-padding">
            <ul class="navbar-right nav navbar-nav nav-bar-collapsed-ul">

                <?php foreach (Yii::$app->params['menu'] as $item): ?>
                    <?php if($item['parent_id'] == 0): ?>
                    <li class="dropdown dropdown-menu-hover"><a
                                href="/<?= Yii::$app->language ?>/<?= Yii::$app->params['mainPagesArray'][$item['url']]; ?>/"
                                class="dropdown-toggle dropdown-a-extended"
                                data-toggle="dropdown" role="button"
                                aria-haspopup="false" aria-expanded="true">
                            <?= $item['menu_name']; ?>

                            <span class="caret">

                                    </span>
                        </a>
                        <ul class="dropdown-menu dropdown-extended">
                            <li class="show-only-small-resolution dropdown-li-extended"><a href="/<?= Yii::$app->language ?>/<?= Yii::$app->params['mainPagesArray'][$item['url']] ?>/"
                                                                                           class="dropdown-li-a-extended">

                                    <?= $item['menu_name']; ?>

                                </a></li>



                                <?php foreach (Yii::$app->params['menu'] as $itemParent): ?>
                                    <?php if($itemParent['parent_id'] == $item['id']): ?>
                                    <li class="dropdown-li-extended">
                                        <a href="/<?= Yii::$app->language ?>/<?= Yii::$app->params['mainPagesArray'][$item['url']]; ?>/<?= $itemParent['url']; ?>/"
                                           class="dropdown-li-a-extended">

                                            <?= $itemParent['menu_name']; ?>

                                        </a></li>
                                    <?php endif; ?>
                                <?php endforeach ?>



                        </ul>
                    </li>
                    <?php endif; ?>
                <?php endforeach ?>


                </li>
            </ul>
        </div>
    </div>
</nav>
