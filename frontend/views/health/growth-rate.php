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

                <div class="form-element-title">
                    <?= Yii::t('app', 'Age (18-90):') ?>
                </div>
                <?php  if ($getParams['age']): ?>
                    <input id="cycle-length-from" name="age" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['age'];?>">
                <?php  elseif ($getSpecify == 'teenagers') : ?>

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


                <div class="form-element-title">
                    <?= Yii::t('app', 'Height (centimeter):') ?>
                </div>
                <?php  if ($getParams['height']): ?>
                    <input id="cycle-length-from" name="height" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['height'];?>">
                <?php  elseif ($getSpecify == 'womens') : ?>

                    <input id="cycle-length-from" name="height" class="form-control select-extended" type="text"
                           size="40"
                           value="155">
                <?php  elseif ($getSpecify == 'mens') : ?>

                    <input id="cycle-length-from" name="height" class="form-control select-extended" type="text"
                           size="40"
                           value="165">

                <?php  else: ?>
                    <input id="cycle-length-from" name="height" class="form-control select-extended" type="text"
                           size="40"
                           value="160">
                <?php  endif; ?>

                <div class="form-left-title"><?= Yii::t('app', 'Physique:')?></div>

                <select id="cycle-length-from" name="physique" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['physique']==1) {echo 'selected';}?> ><?=Yii::t('app','Normosthenic')?></option>
                    <option value="2" <?php if ($getParams['physique']==2) {echo 'selected';}?> ><?=Yii::t('app','Hypersthenic')?></option>
                    <option value="3" <?php if ($getParams['physique']==3) {echo 'selected';}?> ><?=Yii::t('app','Asthenic')?></option>



                </select>



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

                        <?php if ($result['growthRate']) :?>
                            <?= Yii::t('app', 'Average weight rate:') ?><br>
                            <?=$result['growthRate']?> <?= Yii::t('app', 'kilogram') ?><br>


                        <?php endif;?>

                        <?php if ($result['growthRateBrock']) :?>
                            <?= Yii::t('app', 'Average weight according to Brock formula:') ?><br>
                            <?=$result['growthRateBrock']?> <?= Yii::t('app', 'kilogram') ?><br>


                        <?php endif;?>

                        <?php if ($result['growthRateNagler']) :?>
                            <?= Yii::t('app', 'Average weight according to Nagler formula:') ?><br>
                            <?=$result['growthRateNagler']?> <?= Yii::t('app', 'kilogram') ?><br>


                        <?php endif;?>
                        <?php if ($result['legLength']) :?>
                            <?= Yii::t('app', 'Average leg length:') ?><br>
                            <?=$result['legLength']?> <?= Yii::t('app', 'centimeter') ?><br>


                        <?php endif;?>


                        <?php if ($result['legLengthPhysique']) :?>
                            <?= Yii::t('app', 'Average leg length relative to physique:') ?><br>
                            <?=$result['legLengthPhysique']?> <?= Yii::t('app', 'centimeter') ?><br>


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




