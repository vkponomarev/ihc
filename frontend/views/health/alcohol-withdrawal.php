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




                <div class="form-element-title">
                    <?= Yii::t('app', 'Age:') ?>
                </div>
                <?php  if ($getParams['years']): ?>
                    <input id="cycle-length-from" name="years" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['years'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="years" class="form-control select-extended" type="text"
                           size="40"
                           value="35">
                <?php  endif; ?>

                    <div class="form-element-title">
                        <?= Yii::t('app', 'Weight (kilogram):') ?>
                    </div>
                    <?php  if ($getParams['weight']): ?>
                        <input id="cycle-length-from" name="weight" class="form-control select-extended" type="text"
                               size="40"
                               value="<?=$getParams['weight'];?>">
                    <?php  else: ?>
                        <input id="cycle-length-from" name="weight" class="form-control select-extended" type="text"
                               size="40"
                               value="65">
                    <?php  endif; ?>

                <div class="form-element-title">
                    <?= Yii::t('app', 'Height (centimeter):') ?>
                </div>
                <?php  if ($getParams['height']): ?>
                    <input id="cycle-length-from" name="height" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['height'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="height" class="form-control select-extended" type="text"
                           size="40"
                           value="160">
                <?php  endif; ?>


                <div class="form-element-title">
                    <?= Yii::t('app', 'Time after drinking alcohol (hours):') ?>
                </div>
                <?php  if ($getParams['time']): ?>
                    <input id="cycle-length-from" name="time" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['time'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="time" class="form-control select-extended" type="text"
                           size="40"
                           value="3">
                <?php  endif; ?>



                    <div class="form-left-title"><?= Yii::t('app', 'Stomach:')?></div>

                    <select id="cycle-length-from" name="stomach" class="form-control select-extended">

                        <option value="1" <?php if ($getParams['stomach']==1) {echo 'selected';}?> ><?=Yii::t('app','Full')?></option>
                        <option value="2" <?php if ($getParams['stomach']==2) {echo 'selected';}?> ><?=Yii::t('app','Empty')?></option>


                    </select>


            </div>



            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="form-element-title">
                    <?= Yii::t('app', 'Drink 1 (%):') ?>
                </div>
                <?php  if ($getParams['drink1Alco']): ?>
                    <input id="cycle-length-from" name="drink-1-alco" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['drink1Alco'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="drink-1-alco" class="form-control select-extended" type="text"
                           size="40"
                           value="40">
                <?php  endif; ?>

                <div class="form-element-title">
                    <?= Yii::t('app', 'Drink 1 (milliliters):') ?>
                </div>
                <?php  if ($getParams['drink1Volume']): ?>
                    <input id="cycle-length-from" name="drink-1-volume" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['drink1Volume'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="drink-1-volume" class="form-control select-extended" type="text"
                           size="40"
                           value="150">
                <?php  endif; ?>



                <div class="form-element-title">
                    <?= Yii::t('app', 'Drink 2 (%):') ?>
                </div>
                <?php  if ($getParams['drink2Alco']): ?>
                    <input id="cycle-length-from" name="drink-2-alco" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['drink2Alco'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="drink-2-alco" class="form-control select-extended" type="text"
                           size="40"
                           >
                <?php  endif; ?>

                <div class="form-element-title">
                    <?= Yii::t('app', 'Drink 2 (milliliters):') ?>
                </div>
                <?php  if ($getParams['drink2Volume']): ?>
                    <input id="cycle-length-from" name="drink-2-volume" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['drink2Volume'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="drink-2-volume" class="form-control select-extended" type="text"
                           size="40"
                           >
                <?php  endif; ?>


                <div class="form-element-title">
                    <?= Yii::t('app', 'Drink 3 (%):') ?>
                </div>
                <?php  if ($getParams['drink3Alco']): ?>
                    <input id="cycle-length-from" name="drink-3-alco" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['drink3Alco'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="drink-3-alco" class="form-control select-extended" type="text"
                           size="40"
                           >
                <?php  endif; ?>

                <div class="form-element-title">
                    <?= Yii::t('app', 'Drink 3 (milliliters):') ?>
                </div>
                <?php  if ($getParams['drink3Volume']): ?>
                    <input id="cycle-length-from" name="drink-3-volume" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['drink3Volume'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="drink-3-volume" class="form-control select-extended" type="text"
                           size="40"
                           >
                <?php  endif; ?>


                <div class="form-element-title">
                    <?= Yii::t('app', 'Drink 4 (%):') ?>
                </div>
                <?php  if ($getParams['drink4Alco']): ?>
                    <input id="cycle-length-from" name="drink-4-alco" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['drink4Alco'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="drink-4-alco" class="form-control select-extended" type="text"
                           size="40"
                           >
                <?php  endif; ?>

                <div class="form-element-title">
                    <?= Yii::t('app', 'Drink 4 (milliliters):') ?>
                </div>
                <?php  if ($getParams['drink4Volume']): ?>
                    <input id="cycle-length-from" name="drink-4-volume" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['drink4Volume'];?>">
                <?php  else: ?>
                    <input id="cycle-length-from" name="drink-4-volume" class="form-control select-extended" type="text"
                           size="40"
                           >
                <?php  endif; ?>

            </div>

            <div class="clearfix"></div>
            <div class="form-ad col-12">
                <a name="result"></a>

                <?= $this->render('/partials/ads/_ads_5')?>


            </div>


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

                <?php if ($result['ppm']>0) :?>

                    <?= Yii::t('app', 'Alcohol (%):') ?> <?=$result['ppm']?> <?= Yii::t('app', 'ppm') ?><br>
                    <?= Yii::t('app', 'Urine alcohol concentration (%):') ?> <?=$result['urineAlcoholConcentration']?> <?= Yii::t('app', 'ppm') ?><br>
                <?php else:?>

                    <?= Yii::t('app', 'Alcohol (%):') ?> 0 <?= Yii::t('app', 'ppm') ?><br>
                     <?= Yii::t('app', 'Urine alcohol concentration (%):') ?> 0 <?= Yii::t('app', 'ppm') ?><br>

                <?php endif;?>
                <br>
                <?php if ($result['ppm']<0.3) :?>
                    <?=Yii::t('app','less than 0.3 ‰ - lack of influence of alcohol')?>
                <?php endif;?>

                <?php if ($result['ppm']>=0.3 and $result['ppm']<0.5) :?>
                    <?=Yii::t('app','from 0.3 to 0.5 ‰ - slight effect of alcohol')?>
                <?php endif;?>

                <?php if ($result['ppm']>=0.5 and $result['ppm']<1.5) :?>
                    <?=Yii::t('app','from 0.5 to 1.5 ‰ - slight intoxication')?>
                <?php endif;?>

                <?php if ($result['ppm']>=1.5 and $result['ppm']<2.5) :?>
                    <?=Yii::t('app','from 1.5 to 2.5 ‰ - medium intoxication')?>
                <?php endif;?>

                <?php if ($result['ppm']>=2.5 and $result['ppm']<3) :?>
                    <?=Yii::t('app','from 2.5 to 3.0 ‰ - severe intoxication')?>
                <?php endif;?>

                <?php if ($result['ppm']>=3 and $result['ppm']<5) :?>
                    <?=Yii::t('app','from 3.0 to 5.0 ‰ - severe alcohol poisoning, death may occur')?>
                <?php endif;?>

                <?php if ($result['ppm']>=5 and $result['ppm']<6) :?>
                    <?=Yii::t('app','from 5.0 to 6.0 ‰ - fatal poisoning')?>
                <?php endif;?>
                <br><br>
                <?php
                $times_values = array('seconds','minutes','hours','days','years');
                echo Yii::t('app', 'Maximum alcohol removal time:') . ' ';
                for ($i = count($result['times'])-1; $i >= 1; $i--)
                {
                    echo $result['times'][$i] . ' ' . Yii::t('app',$times_values[$i]) . ' ';
                }

                echo '<br>';


                echo Yii::t('app', 'Middle alcohol removal time:') . ' ';
                for ($i = count($result['timesMid'])-1; $i >= 1; $i--)
                {
                    echo $result['timesMid'][$i] . ' ' . Yii::t('app',$times_values[$i]) . ' ';
                }

                echo '<br>';

                echo Yii::t('app', 'Minimum alcohol removal time:') . ' ';
                for ($i = count($result['timesMin'])-1; $i >= 1; $i--)
                {
                    echo $result['timesMin'][$i] . ' ' . Yii::t('app',$times_values[$i]) . ' ';
                }

                echo '<br>';

                ?>











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




