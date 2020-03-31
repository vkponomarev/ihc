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
/*

Калькулятор беременности

*/



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

                    <div class="form-left-title"><?=Yii::t('app','Age in years:')?></div>

                    <select id="cycle-length-from" name="age-years" class="form-control select-extended">

                        <?php for ($i=0;$i<=11;$i++):?>
                            <option value="<?=$i?>"
                                <?php if ($getParams['ageYears']){
                                    if ($i==$getParams['ageYears'])
                                        echo 'selected="selected"';
                                } elseif  ($getSpecify=='under-one-year-childrens' and $i==0) {

                                    echo 'selected="selected"';
                                } elseif ($getSpecify<>'under-one-year-childrens' and $i==1)
                                {
                                    echo 'selected="selected"';
                                }
                                ?>
                            ><?=$i?>
                            </option>
                        <?php endfor;?>

                    </select>

                    <div class="form-left-title"><?=Yii::t('app','Age in months:')?></div>


                    <select id="cycle-length-from" name="age-months" class="form-control select-extended">

                        <?php for ($i=0;$i<=11;$i++):?>
                            <option value="<?=$i?>"
                                <?php if ($getParams['ageMonths']){
                                    if ($i==$getParams['ageMonths'])
                                        echo 'selected="selected"';
                                } elseif ($i==1){
                                    echo 'selected="selected"';
                                }
                                ?>
                            ><?=$i?>
                            </option>
                        <?php endfor;?>

                    </select>

                </div>


                <div class="col-xs-12 col-sm-6 align-mid">

                    <div class="clearfix"></div>
                    <div class="form-ad col-12">
                        <a name="result"></a>

                        <?= $this->render('/partials/ads/_ads_5')?>


                    </div>
                </div>

            </div>

            <div>
                <div class="form-button-div">
                    <br>
                    <br>
                    <input class="btn btn-warning form-button" type="submit" value="<?=Yii::t('app','Calculate')?>"
                           id="button_calc">

                </div>
                <br>

            </div>

        </form>

    </div>



<div class="result-div-on">

        <span class="form-result">
            <?=Yii::t('app','Result')?>
        </span>

        <br><br>
        <div class="result-div-text">
            <span class="result-pre-text">


                <?php if ($result['result']) :?>

                    <?php if ($result['childMiddleHeight']<>0):?>
                        <?=Yii::t('app','Average height for this age:')?>
                        <?=$result['childMiddleHeight']?> <?=Yii::t('app','cm')?><br>
                    <?php endif;?>
                <?php if ($result['childMiddleWeight']<>0):?>
                        <?=Yii::t('app','Average weight for this age:')?>
                        <?=$result['childMiddleWeight']?> <?=Yii::t('app','kg')?><br>
                    <?php endif;?>
                <?php if ($result['childMiddleHead']<>0):?>
                        <?=Yii::t('app','Average head size for this age:')?>
                        <?=$result['childMiddleHead']?> <?=Yii::t('app','cm')?><br>
                    <?php endif;?>

                <?php else:?>

                    <br>

                    <br>

                    <br>



                <?php endif;?>


            </span>


        </div>
    </div>


<?=$this->render('/partials/embed/_embed-link-to-embed.php');?>

<?=$this->render('/partials/share-social/_share-social.php');?>






<?php

?>




