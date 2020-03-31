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


                        <?= Yii::t('app', 'Average nuts intake:') ?> <br>
                        <?= Yii::t('app', 'Walnut:') ?> <?=$result['walnutGram']?> <?= Yii::t('app', 'gram') ?>,
                        <?= Yii::t('app', '{n,plural, one{# piece} few{# pieces} other{# pieces}}', ['n' => $result['walnutPiece']]) ?><br>
                        <?= Yii::t('app', 'Pine nut:') ?> <?=$result['pineNutGram']?> <?= Yii::t('app', 'gram') ?>,
                        <?= Yii::t('app', '{n,plural, one{# piece} few{# pieces} other{# pieces}}', ['n' => $result['pineNutPiece']]) ?><br>
                        <?= Yii::t('app', 'Cashew:') ?> <?=$result['cashewGram']?> <?= Yii::t('app', 'gram') ?>,
                        <?= Yii::t('app', '{n,plural, one{# piece} few{# pieces} other{# pieces}}', ['n' => $result['cashewPiece']]) ?><br>
                        <?= Yii::t('app', 'Pistachios:') ?> <?=$result['pistachiosGram']?> <?= Yii::t('app', 'gram') ?>,
                        <?= Yii::t('app', '{n,plural, one{# piece} few{# pieces} other{# pieces}}', ['n' => $result['pistachiosPiece']]) ?><br>
                        <?= Yii::t('app', 'Peanut:') ?> <?=$result['peanutGram']?> <?= Yii::t('app', 'gram') ?>,
                        <?= Yii::t('app', '{n,plural, one{# piece} few{# pieces} other{# pieces}}', ['n' => $result['peanutPiece']]) ?><br>
                        <?= Yii::t('app', 'Almond:') ?> <?=$result['almondGram']?> <?= Yii::t('app', 'gram') ?>,
                        <?= Yii::t('app', '{n,plural, one{# piece} few{# pieces} other{# pieces}}', ['n' => $result['almondPiece']]) ?><br>
                        <?= Yii::t('app', 'Hazelnut:') ?> <?=$result['hazelnutGram']?> <?= Yii::t('app', 'gram') ?>,
                        <?= Yii::t('app', '{n,plural, one{# piece} few{# pieces} other{# pieces}}', ['n' => $result['hazelnutPiece']]) ?><br>

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




