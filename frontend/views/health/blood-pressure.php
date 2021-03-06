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

                <?php if ($getSpecify <> 'pregnant'):?>
                    <div class="form-left-title"><?= Yii::t('app', 'Choose gender:') ?></div>

                    <div>
                        <label class="form-left-label" id="form-label-id-one">
                                <span class="form-radio">
                                    <?php if ($getParams['gender']):?>

                                        <?php  if ($getParams['gender']==1):?>
                                            <input type="radio" name="gender" value="1" checked="checked" class="">
                                        <?php else: ?>
                                            <input type="radio" name="gender" value="1" class="">
                                        <?php endif; ?>

                                    <?php  elseif ($getSpecify): ?>

                                        <?php  if ($getSpecify=='womens' or $getSpecify=='girls'):?>
                                            <input type="radio" name="gender" value="1" checked="checked" class="">
                                        <?php elseif ($getSpecify=='mens'  or $getSpecify=='boys'): ?>
                                            <input type="radio" name="gender" value="1" class="">
                                        <?php else: ?>
                                            <input type="radio" name="gender" checked="checked" value="1" class="">
                                        <?php endif; ?>

                                    <?php else: ?>

                                            <input type="radio" name="gender" value="1" checked="checked" class="">

                                    <?php endif; ?>

                                </span>
                            <span class="form-radio"><?= Yii::t('app', 'Women') ?></span>
                        </label>

                        <br>

                        <label class="form-left-label" id="form-label-id-two">
                                <span class="form-radio">

                                    <?php  if ($getParams['gender']):?>

                                        <?php  if ($getParams['gender']==2):?>
                                            <input type="radio" name="gender" value="2" checked="checked" class="">
                                        <?php else: ?>
                                            <input type="radio" name="gender" value="2" class="">
                                        <?php endif; ?>

                                    <?php  elseif ($getSpecify): ?>

                                        <?php  if ($getSpecify=='mens' or $getSpecify=='boys'):?>
                                            <input type="radio" name="gender" value="2" checked="checked" class="">
                                        <?php elseif ($getSpecify == 'womens' or $getSpecify=='girls'): ?>
                                            <input type="radio" name="gender" value="2" class="">
                                        <?php else: ?>
                                            <input type="radio" name="gender" value="2" class="">
                                        <?php endif; ?>

                                    <?php else: ?>

                                        <input type="radio" name="gender" value="2" class="">

                                    <?php endif; ?>







                                </span>

                            <span class="form-radio"><?= Yii::t('app', 'Men') ?></span>
                        </label>

                    </div>

                <?php else:?>

                    <input type="hidden" name="gender" value="1">

                <?php endif; ?>
                <div class="form-element-title">
                    <?= Yii::t('app', 'Age (1-90):') ?>
                </div>
                <?php  if ($getParams['age']): ?>
                    <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['age'];?>">
                <?php  elseif ($getSpecify == 'childrens' or $getSpecify == 'boys' or $getSpecify == 'girls' or $getSpecify == 'teenagers') : ?>

                        <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                               size="40"
                               value="15">
                <?php  elseif ($getSpecify == 'pregnant') : ?>

                    <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                           size="40"
                           value="25">

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

                        <?php if (($result['bloodPressureMens']) and ($getParams['gender']==2)) :?>
                            <?= Yii::t('app', 'Average blood pressure in men:') ?> <?=$result['bloodPressureMens']?>
                        <?php endif;?>

                        <?php if (($result['bloodPressureWomens']) and ($getParams['gender']==1)) :?>
                            <?= Yii::t('app', 'Average blood pressure in women:') ?> <?=$result['bloodPressureWomens']?>
                        <?php endif;?>

                        <?php if (($result['bloodPressurePregnant']) and ($getSpecify=='pregnant')) :?><br>
                            <?= Yii::t('app', 'Up to 4 weeks of the first trimester:') ?>
                            <?=$result['bloodPressurePregnant'][1]?>
                            <br>
                            <?= Yii::t('app', 'Up to 12 weeks of the first trimester:') ?>
                            <?=$result['bloodPressurePregnant'][2]?>
                            <br>
                            <?= Yii::t('app', 'Up to 26 weeks (second trimester):') ?>
                            <?=$result['bloodPressurePregnant'][3]?>
                            <br>
                            <?= Yii::t('app', 'Up to 29 weeks (beginning of the third trimester):') ?>
                            <?=$result['bloodPressurePregnant'][4]?>
                            <br>
                            <?= Yii::t('app', 'Up to 30 weeks of the third trimester:') ?>
                            <?=$result['bloodPressurePregnant'][5]?>
                            <br>
                            <?= Yii::t('app', 'Up to 40 weeks (delivery):') ?>
                            <?=$result['bloodPressurePregnant'][6]?>
                            <br>

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




