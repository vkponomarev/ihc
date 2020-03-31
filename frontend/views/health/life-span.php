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

use kartik\date\DatePicker; ?>

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

                <div class="form-left-title"><?= Yii::t('app', 'Average life expectancy of grandparents:')?></div>

                <select id="cycle-length-from" name="grandy-life-span" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['grandyLifeSpan']==1) {echo 'selected';}?> >> 80</option>
                    <option value="2" <?php if ($getParams['grandyLifeSpan']==2) {echo 'selected';}?> >70-80</option>
                    <option value="3" <?php if ($getParams['grandyLifeSpan']==3) {echo 'selected';}?> >60-70</option>
                    <option value="4" <?php if ($getParams['grandyLifeSpan']==4) {echo 'selected';}?> >< 60</option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'What education do you have:')?></div>

                <select id="cycle-length-from" name="education" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['education']==1) {echo 'selected';}?> ><?=Yii::t('app','Academic degree')?></option>
                    <option value="2" <?php if ($getParams['education']==2) {echo 'selected';}?> ><?=Yii::t('app','Higher education')?></option>
                    <option value="3" <?php if ($getParams['education']==3) {echo 'selected';}?> ><?=Yii::t('app','Secondary education')?></option>
                    <option value="4" <?php if ($getParams['education']==4) {echo 'selected';}?> ><?=Yii::t('app','Incomplete secondary education')?></option>

                </select>


                <div class="form-left-title"><?= Yii::t('app', 'Employment:')?></div>

                <select id="cycle-length-from" name="work" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['work']==1) {echo 'selected';}?> ><?=Yii::t('app','Career prospects')?></option>
                    <option value="2" <?php if ($getParams['work']==2) {echo 'selected';}?> ><?=Yii::t('app','Work in the specialty')?></option>
                    <option value="4" <?php if ($getParams['work']==4) {echo 'selected';}?> ><?=Yii::t('app','Work not on a specialty')?></option>
                    <option value="3" <?php if ($getParams['work']==3) {echo 'selected';}?> ><?=Yii::t('app','Shift work')?></option>
                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Hobby:')?></div>

                <select id="cycle-length-from" name="hobby" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['hobby']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['hobby']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Are you hot-tempered?:')?></div>

                <select id="cycle-length-from" name="hot-tempered" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['hotTempered']==1) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>
                    <option value="2" <?php if ($getParams['hotTempered']==2) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Living in accordance with your income?:')?></div>

                <select id="cycle-length-from" name="income" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['income']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['income']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Do you have any pets?:')?></div>

                <select id="cycle-length-from" name="pets" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['pets']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['pets']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>

                </select>


                <div class="form-left-title"><?= Yii::t('app', 'Do you have free time?:')?></div>

                <select id="cycle-length-from" name="free-time" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['freeTime']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['freeTime']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>

                </select>


                <div class="form-left-title"><?= Yii::t('app', 'You are working:')?></div>

                <select id="cycle-length-from" name="work-time" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['workTime']==1) {echo 'selected';}?> ><?=Yii::t('app','40 hours a week')?></option>
                    <option value="2" <?php if ($getParams['workTime']==2) {echo 'selected';}?> ><?=Yii::t('app','Irregular working hours')?></option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Do you eat regularly?:')?></div>

                <select id="cycle-length-from" name="eat" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['eat']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['eat']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Do you eat seafood?:')?></div>

                <select id="cycle-length-from" name="eat-sea" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['eatSea']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['eatSea']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Do you eat vegetables / fruits?:')?></div>

                <select id="cycle-length-from" name="eat-fruit" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['eatFruit']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['eatFruit']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>

                </select>





            </div>

            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="form-left-title"><?= Yii::t('app', 'Do you drink a glass of wine a day?:')?></div>

                <select id="cycle-length-from" name="vine" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['vine']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['vine']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>

                </select>


                <div class="form-left-title"><?= Yii::t('app', 'Do you drink strong alcohol?:')?></div>

                <select id="cycle-length-from" name="alcohol" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['alcohol']==1) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>
                    <option value="2" <?php if ($getParams['alcohol']==2) {echo 'selected';}?> ><?=Yii::t('app','On holidays')?></option>
                    <option value="3" <?php if ($getParams['alcohol']==3) {echo 'selected';}?> ><?=Yii::t('app','Regularly')?></option>

                </select>


                <div class="form-left-title"><?= Yii::t('app', 'Do you smoke?:')?></div>

                <select id="cycle-length-from" name="smoke" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['smoke']==1) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>
                    <option value="2" <?php if ($getParams['smoke']==2) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>


                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Do you play sports?:')?></div>

                <select id="cycle-length-from" name="sport" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['sport']==1) {echo 'selected';}?> ><?=Yii::t('app','Regularly')?></option>
                    <option value="2" <?php if ($getParams['sport']==2) {echo 'selected';}?> ><?=Yii::t('app','Sometimes')?></option>
                    <option value="3" <?php if ($getParams['sport']==3) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Do you walk?:')?></div>

                <select id="cycle-length-from" name="walk" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['walk']==1) {echo 'selected';}?> ><?=Yii::t('app','Regularly')?></option>
                    <option value="2" <?php if ($getParams['walk']==2) {echo 'selected';}?> ><?=Yii::t('app','Sometimes')?></option>
                    <option value="3" <?php if ($getParams['walk']==3) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'How much do you sleep?:')?></div>

                <select id="cycle-length-from" name="sleep" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['sleep']==1) {echo 'selected';}?> ><?=Yii::t('app','5-9 hours')?></option>
                    <option value="2" <?php if ($getParams['sleep']==2) {echo 'selected';}?> ><?=Yii::t('app','less than 5 hours')?></option>
                    <option value="3" <?php if ($getParams['sleep']==3) {echo 'selected';}?> ><?=Yii::t('app','more than 10 hours')?></option>

                </select>


                <div class="form-left-title"><?= Yii::t('app', 'Do you take sick leave?:')?></div>

                <select id="cycle-length-from" name="sick-leave" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['sickLeave']==1) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>
                    <option value="2" <?php if ($getParams['sickLeave']==2) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Your pressure?:')?></div>

                <select id="cycle-length-from" name="pressure" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['pressure']==1) {echo 'selected';}?> ><?=Yii::t('app','Norm')?></option>
                    <option value="2" <?php if ($getParams['pressure']==2) {echo 'selected';}?> ><?=Yii::t('app','Above norm')?></option>
                    <option value="3" <?php if ($getParams['pressure']==3) {echo 'selected';}?> ><?=Yii::t('app','Below norm')?></option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Your weight?:')?></div>

                <select id="cycle-length-from" name="weight" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['weight']==1) {echo 'selected';}?> ><?=Yii::t('app','Norm')?></option>
                    <option value="2" <?php if ($getParams['weight']==2) {echo 'selected';}?> ><?=Yii::t('app','Above norm')?></option>
                    <option value="3" <?php if ($getParams['weight']==3) {echo 'selected';}?> ><?=Yii::t('app','Below norm')?></option>

                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Do you regularly undergo a medical examination?:')?></div>

                <select id="cycle-length-from" name="medical" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['medical']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['medical']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>

                </select>


                <div class="form-left-title"><?= Yii::t('app', 'Is your gut working fine?:')?></div>

                <select id="cycle-length-from" name="intestines" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['intestines']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['intestines']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>


                </select>


                <div class="form-left-title"><?= Yii::t('app', 'Do you need sleeping pills or antidepressants?:')?></div>

                <select id="cycle-length-from" name="pills" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['pills']==1) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>
                    <option value="2" <?php if ($getParams['pills']==2) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>


                </select>

            </div>
            <br>
        </div>

        <div class="clearfix"></div>
        <div class="form-ad col-12">
            <a name="result"></a>

            <?= $this->render('/partials/ads/_ads_5')?>


        </div>

        <div>
            <div class="form-button-div">

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

                        <?= Yii::t('app', 'Average life expectancy:') ?> <?=$result['lifeSpan']?><br>

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




