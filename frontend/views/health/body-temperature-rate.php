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
                <?php  elseif ($getSpecify == 'childrens') : ?>

                    <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                           size="40"
                           value="15">
                <?php  elseif ($getSpecify == 'pregnant') : ?>

                    <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                           size="40"
                           value="25">

                <?php  elseif ($getSpecify == 'under-one-year-childrens') : ?>

                    <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                           size="40"
                           value="0">

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

                        <?php if ($result['axillaryTemperature']) :?>
                            <?= Yii::t('app', 'Average axillary temperature rate:') ?>
                            <?=$result['axillaryTemperature']?> <?= Yii::t('app', '°C') ?><br>
                        <?php endif;?>

                        <?php if ($result['oralTemperature']) :?>
                            <?= Yii::t('app', 'Average oral temperature rate:') ?>
                            <?=$result['oralTemperature']?> <?= Yii::t('app', '°C') ?><br>
                        <?php endif;?>

                        <?php if ($result['rectalTemperature']) :?>
                            <?= Yii::t('app', 'Average rectal temperature rate:') ?>
                            <?=$result['rectalTemperature']?> <?= Yii::t('app', '°C') ?><br>
                        <?php endif;?>

                        <?php if ($result['tympanicTemperature']) :?>
                            <?= Yii::t('app', 'Average tympanic temperature rate:') ?>
                            <?=$result['tympanicTemperature']?> <?= Yii::t('app', '°C') ?><br>
                        <?php endif;?>

                        <?php if ($result['internalOrgansTemperature']) :?>
                            <?= Yii::t('app', 'Average internal organs temperature rate:') ?>
                            <?=$result['internalOrgansTemperature']?> <?= Yii::t('app', '°C') ?><br>
                        <?php endif;?>


                    <?php else:?>

                        <br>

                        <br>

                        <br>

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




