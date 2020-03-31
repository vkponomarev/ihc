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

                <?php  if ($getSpecify <> 'newborns'): ?>
                <div class="form-element-title">
                    <?= Yii::t('app', 'Age (1-80):') ?>
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
                <?php else:?>

                <input type="hidden" name="age" value="0">

                <?php endif; ?>


                <?php  if ($getSpecify <> 'newborns'): ?>
                <div class="form-element-title">
                    <?= Yii::t('app', 'Weight (kilogram):') ?>
                </div>
                <?php  if ($getParams['age']): ?>
                    <input id="cycle-length-from" name="weight" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['weight'];?>">
                <?php  elseif ($getSpecify == 'childrens' or $getSpecify == 'boys' or $getSpecify == 'girls' or $getSpecify == 'teenagers') : ?>

                    <input id="cycle-length-from" name="weight" class="form-control select-extended" type="text"
                           size="40"
                           value="35">
                <?php  elseif ($getSpecify == 'pregnant') : ?>

                    <input id="cycle-length-from" name="weight" class="form-control select-extended" type="text"
                           size="40"
                           value="55">

                <?php  elseif ($getSpecify == 'newborns') : ?>

                    <input id="cycle-length-from" name="weight" class="form-control select-extended" type="text"
                           size="40"
                           value="8">

                <?php  else: ?>
                    <input id="cycle-length-from" name="weight" class="form-control select-extended" type="text"
                           size="40"
                           value="65">
                <?php  endif; ?>
                <?php else:?>

                    <input type="hidden" name="weight" value="0">

                <?php endif; ?>



                <?php  if ($getSpecify <> 'newborns' and $getSpecify <> 'pregnant'): ?>
                <div class="form-element-title">
                    <?= Yii::t('app', 'Exercise time:') ?>
                </div>
                <?php  if ($getParams['age']): ?>
                    <input id="cycle-length-from" name="exercise-time" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['exerciseTime'];?>">
                <?php  elseif ($getSpecify == 'childrens' or $getSpecify == 'boys' or $getSpecify == 'girls' or $getSpecify == 'teenagers') : ?>

                    <input id="cycle-length-from" name="exercise-time" class="form-control select-extended" type="text"
                           size="40"
                           value="0">

                <?php  else: ?>
                    <input id="cycle-length-from" name="exercise-time" class="form-control select-extended" type="text"
                           size="40"
                           value="0">
                <?php  endif; ?>
                <?php else:?>

                    <input type="hidden" name="exercise-time" value="0">

                <?php endif; ?>

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




                        <?php if ($getSpecify <> 'newborns' and $getParams['age']>=18) :?>
                            <?= Yii::t('app', 'Average water consumption per day:') ?> <br>
                            <?= Yii::t('app', 'According to formula V=M/450*14:') ?>
                            <?=$result['drinkWaterFormulaOne']?> <?= Yii::t('app', 'liters') ?><br>
                            <?= Yii::t('app', 'According to formula 4% of body weight:') ?>
                            <?=$result['drinkWaterFormulaTwo']?> <?= Yii::t('app', 'liters') ?><br>
                            <?= Yii::t('app', 'According to formula 20 milliliters on 1 kilogram of body weight:') ?>
                            <?=$result['drinkWaterFormulaFour']?> <?= Yii::t('app', 'liters') ?><br>

                            <?php if ($getSpecify <> 'pregnant') :?>

                                <?php if ($getParams['gender'] ==1) :?>

                                    <?= Yii::t('app', 'According to formula V=(M*0,03) + (T*0,4):') ?>

                                <?php else:?>

                                    <?= Yii::t('app', 'According to formula V=(M*0,04) + (T*0,6):') ?>

                                <?php endif;?>

                                <?=$result['drinkWaterFormulaThree']?> <?= Yii::t('app', 'liters') ?><br>
                            <?php endif;?>

                        <?php endif;?>


                        <?php if (($getSpecify <> 'newborns' and $getSpecify <> 'pregnant') and $getParams['age']<18) :?>
                            <?= Yii::t('app', 'Average water consumption per day:') ?> <?=$result['drinkWaterFormulaKid']?> <?= Yii::t('app', 'liter') ?>
                        <?php endif;?>

                        <?php if ($getSpecify == 'newborns') :?>
                            <?= Yii::t('app', 'Average water consumption per day:') ?><br>
                            <?= Yii::t('app', '1 day:') ?> <?=$result['drinkWaterFormulaNewBorn'][1]?> <?= Yii::t('app', 'liter on 1 kg of weight') ?><br>
                            <?= Yii::t('app', '10 days:') ?> <?=$result['drinkWaterFormulaNewBorn'][2]?> <?= Yii::t('app', 'liter on 1 kg of weight') ?><br>
                            <?= Yii::t('app', '3 months:') ?> <?=$result['drinkWaterFormulaNewBorn'][3]?> <?= Yii::t('app', 'liter on 1 kg of weight') ?><br>
                            <?= Yii::t('app', '6 months:') ?> <?=$result['drinkWaterFormulaNewBorn'][4]?> <?= Yii::t('app', 'liter on 1 kg of weight') ?><br>
                            <?= Yii::t('app', '9 months:') ?> <?=$result['drinkWaterFormulaNewBorn'][5]?> <?= Yii::t('app', 'liter on 1 kg of weight') ?><br>
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




