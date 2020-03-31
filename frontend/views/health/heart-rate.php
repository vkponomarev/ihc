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

                        <?php if ($result['heartRateMid']) :?>
                            <?= Yii::t('app', 'Average heart rate:') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRateMid']?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRateMin']?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRateMax']?><br><br>
                        <?php endif;?>

                        <?php if (($result['heartRateInDreamMid']) and ($getSpecify=='inDream')) :?>
                            <?= Yii::t('app', 'Average heart rate in a dream:') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRateInDreamMid']?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRateInDreamMin']?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRateInDreamMax']?>
                        <?php endif;?>

                        <?php if (($result['heartRatePregnant']) and ($getSpecify=='pregnant')) :?>
                            <?= Yii::t('app', 'First trimester average heart rate (1-13 weeks):') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRatePregnant'][1][0]?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRatePregnant'][1][1]?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRatePregnant'][1][2]?>
                            <br>
                            <?= Yii::t('app', 'Second trimester average heart rate (14-26 weeks):') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRatePregnant'][2][0]?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRatePregnant'][2][1]?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRatePregnant'][2][2]?>
                            <br>
                            <?= Yii::t('app', 'Third trimester average heart rate (27-40 weeks):') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRatePregnant'][3][0]?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRatePregnant'][3][1]?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRatePregnant'][3][2]?>
                        <?php endif;?>

                        <?php if (($result['heartRateWalkingMen']) and ($getSpecify=='walking') and ($getParams['gender']==2)) :?>
                            <?= Yii::t('app', 'Average heart rate when walking in men:') ?> <br>
                            <?= Yii::t('app', '30 minutes:') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRateWalkingMen']['30'][0]?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRateWalkingMen']['30'][1]?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRateWalkingMen']['30'][2]?>
                            <br>
                            <?= Yii::t('app', '60 minutes:') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRateWalkingMen']['60'][0]?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRateWalkingMen']['60'][1]?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRateWalkingMen']['60'][2]?>
                            <br>
                            <?= Yii::t('app', '90 minutes:') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRateWalkingMen']['90'][0]?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRateWalkingMen']['90'][1]?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRateWalkingMen']['90'][2]?>
                            <br>
                            <?= Yii::t('app', '120 minutes:') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRateWalkingMen']['120'][0]?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRateWalkingMen']['120'][1]?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRateWalkingMen']['120'][2]?>
                        <?php endif;?>

                        <?php if (($result['heartRateWalkingWomen']) and ($getSpecify=='walking') and ($getParams['gender']==1)) :?>
                            <?= Yii::t('app', 'Average heart rate when walking in women:') ?> <br>
                            <?= Yii::t('app', '30 minutes:') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRateWalkingWomen']['30'][0]?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRateWalkingWomen']['30'][1]?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRateWalkingWomen']['30'][2]?>
                            <br>
                            <?= Yii::t('app', '60 minutes:') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRateWalkingWomen']['60'][0]?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRateWalkingWomen']['60'][1]?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRateWalkingWomen']['60'][2]?>
                            <br>
                            <?= Yii::t('app', '90 minutes:') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRateWalkingWomen']['90'][0]?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRateWalkingWomen']['90'][1]?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRateWalkingWomen']['90'][2]?>
                            <br>
                            <?= Yii::t('app', '120 minutes:') ?> <br>
                            <?= Yii::t('app', 'middle:') ?> <?=$result['heartRateWalkingWomen']['120'][0]?>,
                            <?= Yii::t('app', 'minimum:') ?> <?=$result['heartRateWalkingWomen']['120'][1]?>,
                            <?= Yii::t('app', 'maximum:') ?> <?=$result['heartRateWalkingWomen']['120'][2]?>
                        <?php endif;?>



                        <?php if (($result['heartRateExerciseStress']) and ($getSpecify=='exercise') ) :?>
                            <?= Yii::t('app', 'Average heart rate during training:') ?> <br>
                            <?= Yii::t('app', 'warm up:') ?> <?=$result['heartRateExerciseStress']['1']?>,
                            <?= Yii::t('app', 'easy activity:') ?> <?=$result['heartRateExerciseStress']['2']?>,
                            <?= Yii::t('app', 'average activity:') ?> <?=$result['heartRateExerciseStress']['3']?>
                            <?= Yii::t('app', 'intense load:') ?> <?=$result['heartRateExerciseStress']['4']?>,
                            <?= Yii::t('app', 'increased load:') ?> <?=$result['heartRateExerciseStress']['5']?>,
                            <?= Yii::t('app', 'maximum load:') ?> <?=$result['heartRateExerciseStress']['6']?>

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




