<?php

/* @var $this \yii\web\View */
/* @var $content string */


?>

<?php if (!Yii::$app->params['embed']): ?>
    <div class="row  row-flex">
        <?php foreach ($parentCategories as $parentCategory):?>





            <a href="/<?= Yii::$app->language ?>/<?= $this->params['getUrls']['mainUrl'] ?>/<?= $parentCategory['url'] ?>/" class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-12 main-pages-extended">
                <div class="plates">

                    <p><img class="plates-img" src="/files/category-icons/<?= $getIcon ?>" alt="<?=$parentCategory['plates_title']?>" width="50"></p>

                    <p class="plates-title"><?=$parentCategory['plates_title']?>
                    </p>
                    <p class="plates-under-title"></p>
                </div>
            </a>



        <?php endforeach;?>
    </div>
<?php endif;?>
