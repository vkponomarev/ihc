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

//echo $getSpecify;

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

                                    <?php  if ($getSpecify=='womens'):?>
                                        <input type="radio" name="gender" value="1" checked="checked" class="">
                                    <?php elseif ($getSpecify=='mens'): ?>
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

                                    <?php  if ($getSpecify=='mens'):?>
                                        <input type="radio" name="gender" value="2" checked="checked" class="">
                                    <?php elseif ($getSpecify=='womens'): ?>
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
                    <?= Yii::t('app', 'Weight (kilogram):') ?>
                </div>

                <?php  if ($getParams['weight']): ?>
                    <input id="cycle-length-from" name="weight" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['weight'];?>">
                <?php  elseif ($getSpecify=='childrens') : ?>
                    <input id="cycle-length-from" name="weight" class="form-control select-extended" type="text"
                           size="40"
                           value="35">
                <?php  else: ?>
                <input id="cycle-length-from" name="weight" class="form-control select-extended" type="text"
                       size="40"
                       value="60">
                <?php  endif ?>

                <div class="form-element-title">
                    <?= Yii::t('app', 'Height (centimeter):') ?>
                </div>

                <?php  if ($getParams['height']): ?>
                    <input id="cycle-length-from" name="height" class="form-control select-extended" type="text"
                           size="40"
                           value="<?=$getParams['height'];?>">
                <?php  elseif ($getSpecify=='childrens') : ?>
                    <input id="cycle-length-from" name="height" class="form-control select-extended" type="text"
                           size="40"
                           value="120">
                <?php  else: ?>
                    <input id="cycle-length-from" name="height" class="form-control select-extended" type="text"
                           size="40"
                           value="165">
                <?php  endif ?>


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
                           value="30">
                <?php  endif ?>

                <?php  if ($getSpecify<>'childrens'): ?>
                <div class="form-left-title"><?= Yii::t('app', 'Goal:')?></div>

                <select id="cycle-length-from" name="goal" class="form-control select-extended">


                    <option value="1" <?php if ($getParams['goal']==1) {echo 'selected';}?> ><?=Yii::t('app','Weight maintenance')?></option>
                    <option value="2" <?php if ($getParams['goal']==2) {echo 'selected' ;} elseif ($getSpecify=='losing-weight' and !$getParams['goal']) {echo 'selected';}?> ><?=Yii::t('app','Lose weight')?></option>
                    <option value="3" <?php if ($getParams['goal']==3) {echo 'selected';}?> ><?=Yii::t('app','Gain muscle mass')?></option>


                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Exercise stress:')?></div>

                <select id="cycle-length-from" name="exercise-stress" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['exerciseStress']==1) {echo 'selected';}?> ><?=Yii::t('app','Basic metabolism')?></option>
                    <option value="2" <?php if ($getParams['exerciseStress']==2) {echo 'selected';}?> ><?=Yii::t('app','Minimal or no physical exertion')?></option>
                    <option value="3" <?php if ($getParams['exerciseStress']==3) {echo 'selected';}?> ><?=Yii::t('app','Fitness classes 3 times a week')?></option>
                    <option value="4" <?php if ($getParams['exerciseStress']==4) {echo 'selected';}?> ><?=Yii::t('app','Fitness classes 5 times a week')?></option>
                    <option value="5" <?php if ($getParams['exerciseStress']==5) {echo 'selected';}?> ><?=Yii::t('app','Intense physical activity 5 times a week')?></option>
                    <option value="6" <?php if ($getParams['exerciseStress']==6) {echo 'selected';}?> ><?=Yii::t('app','Every day fitness')?></option>
                    <option value="7" <?php if ($getParams['exerciseStress']==7) {echo 'selected';}?> ><?=Yii::t('app','Intensively or twice daily every day')?></option>
                    <option value="8" <?php if ($getParams['exerciseStress']==8) {echo 'selected';}?> ><?=Yii::t('app','Daily exercise plus physical work')?></option>

                </select>
                <?php  else: ?>
                    <input type="hidden" name="exercise-stress" value="1">
                    <input type="hidden" name="goal" value="1">
                <?php  endif ?>





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

                        <?php if ($getParams['goal']==1) :?>

                            <?= Yii::t('app', 'Weight maintenance according to Miffin St. Jeor formula:') ?> <?= $result['mifflinStJeor']; ?> <?= Yii::t('app', 'calories') ?>
                            <br>
                            <?= Yii::t('app', 'Weight maintenance according to Harris Benedict formula:') ?> <?= $result['harrisBenedict']; ?> <?= Yii::t('app', 'calories') ?>

                        <?php endif;?>

                        <?php if ($getParams['goal']==2) :?>

                            <?= Yii::t('app', 'Loosing weight according to Miffin St. Jeor formula:') ?> <?= $result['loosingWeightLittleMSJ']; ?> <?= Yii::t('app', 'calories') ?>
                            <br>
                            <?= Yii::t('app', 'Loosing weight according to Harris Benedict formula:') ?> <?= $result['loosingWeightLittleHB']; ?> <?= Yii::t('app', 'calories') ?>

                        <?php endif;?>


                        <?php if ($getParams['goal']==3) :?>

                            <?= Yii::t('app', 'Weight gain according to Miffin St. Jeor formula:') ?> <?= $result['gainWeightMSJ']; ?> <?= Yii::t('app', 'calories') ?>
                            <br>
                            <?= Yii::t('app', 'Weight gain according to Harris Benedict formula:') ?> <?= $result['gainWeightHB']; ?> <?= Yii::t('app', 'calories') ?>

                        <?php endif;?>




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




