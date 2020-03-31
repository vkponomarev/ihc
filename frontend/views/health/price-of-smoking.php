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
                    <?= Yii::t('app', 'Number of cigarettes per day:') ?>
                </div>
                <?php  if ($getParams['cigarette']): ?>
                    <input id="cycle-length-from" name="cigarette" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['cigarette'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="cigarette" class="form-control select-extended" type="text"
                           size="40"
                           value="20">
                <?php  endif; ?>


                <div class="form-element-title">
                    <?= Yii::t('app', 'Smoking experience, years:') ?>
                </div>
                <?php  if ($getParams['smoking']): ?>
                    <input id="cycle-length-from" name="smoking" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['smoking'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="smoking" class="form-control select-extended" type="text"
                           size="40"
                           value="10">
                <?php  endif; ?>


                <div class="form-element-title">
                    <?= Yii::t('app', 'The cost of a pack of cigarettes:') ?>
                </div>
                <?php  if ($getParams['cost']): ?>
                    <input id="cycle-length-from" name="cost" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['cost'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="cost" class="form-control select-extended" type="text"
                           size="40"
                           value="70">
                <?php  endif; ?>


                <div class="form-element-title">
                    <?= Yii::t('app', 'How much nicotine is in a cigarette (milligrams):') ?>
                </div>
                <?php  if ($getParams['nicotine']): ?>
                    <input id="cycle-length-from" name="nicotine" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['nicotine'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="nicotine" class="form-control select-extended" type="text"
                           size="40"
                           value="1.5">
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



            <?= Yii::t('app', 'The number of cigarettes smoked:') ?> <?=$result['cigaretteCountAll']?><br>
            <?= Yii::t('app', 'The number of packs of smoked cigarettes:') ?> <?=$result['cigarettePackCountAll']?><br>
            <?= Yii::t('app', 'Amount of nicotine received:') ?> <?=$result['nicotineCount']?> <?= Yii::t('app', 'milligram') ?><br>
            <?= Yii::t('app', 'Total Cost:') ?> <?=$result['costCountAllTime']?><br>
            <?= Yii::t('app', 'Cost for one year:') ?> <?=$result['costCountOneYear']?><br>
            <?= Yii::t('app', 'Cost for one month:') ?> <?=$result['costCountOneMonth']?><br>
            <?= Yii::t('app', 'Cost for one week:') ?> <?=$result['costCountOneWeek']?><br>
            <?= Yii::t('app', 'Cost per day:') ?> <?=$result['costCountOneDay']?><br>


            <?php else:?>

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




