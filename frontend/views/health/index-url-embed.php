<?php

/* @var $this yii\web\View */
$this->params['getUrls'] = $getUrls;

?>

<div class="container container-no-top-padding-extended-embed">


            <?php

            echo  $this->render($getPages['pageName'], [
                'getSpecify' => $getPages['specify'],
                'getParams' => $getParams,
                'result' => $result,

            ])  ?>


            <?=$this->render('/partials/parent-categories/_parent-categories' ,[

                    'parentCategories' => $parentCategories,


            ]);?>



</div>