<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.08.19
 * Time: 16:24
 */
/** @var TYPE_NAME $pregnancyCalculationResult */
/** @var TYPE_NAME $currentLanguages */
/** @var TYPE_NAME $pregnancyCalculationDate */

/** @var TYPE_NAME $pregnancyCalculationMethod */

/** @var array $getParams */

?>

<div class="form-left">


    <form action="./<?php if (!Yii::$app->params['embed']):?>#result<?php endif;?>">

        <?=$this->render('/partials/embed/_embed-hidden-input');?>
        <?=$this->render('/partials/embed/_embed-title');?>
        <div class="form-content">
            <div class="col-xs-12 col-sm-6 align-mid">



                <div class="form-element-title">
                    <?= Yii::t('app', 'Age:') ?>
                </div>
                <?php  if ($getParams['age']): ?>
                    <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['age'];?>">
                <?php  elseif ($getSpecify=='childrens') : ?>

                        <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                               size="40"
                               value="15">

                <?php  else: ?>
                    <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                           size="40"
                           value="35">
                <?php  endif; ?>


            </div>

            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="clearfix"></div>
                <div class="form-ad col-12">
                    <a name="result"></a>

                    <?= $this->render('/partials/ads/_ads_5')?>


                </div>
            </div>
            <br>
        </div>
        <div>
            <div class="form-button-div">
                <br>
                <br>
                <input class="btn btn-warning form-button" type="submit" value="<?= Yii::t('app', 'Calculate') ?>"
                       id="button_calc">

                <?=$this->render('/partials/embed/_embed-label-link.php');?>
            </div>


        </div>
        <?php if (!Yii::$app->params['embed']):?>
        <br>
        <?php endif;?>

    </form>

</div>


<div class="result-div-on">

            <span class="form-result">

                <?= Yii::t('app', 'Result') ?>

            </span>

    <br><br>

    <div class="result-div-text">
                <span class="result-pre-text">

                    <?php if ($result['result']) :?>


                        <?= Yii::t('app', 'Average salt daily intake:') ?> <?=$result['dailySaltIntake']?> <?= Yii::t('app', 'gram') ?><br>

                    <?php else:?>

                        <br>

                        <br>


                    <?php endif;?>
                    <br>
                </span>



    </div>


</div>


<?=$this->render('/partials/embed/_embed-link-to-embed.php');?>

<?=$this->render('/partials/share-social/_share-social.php');?>

<?php

?>




