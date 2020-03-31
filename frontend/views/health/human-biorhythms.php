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

                <div class="form-left-title"><?= Yii::t('app', 'Your birthday:')?></div>

                <div class="well well-sm form-date-picker-extended xs-align-mid">
                    <?php
                    if ($getParams['dateOfBirth'])
                        $dateOfBirth = $getParams['dateOfBirth'];
                    else
                        $dateOfBirth = '';
                    ?>

                    <?= DatePicker::widget([
                        'name' => 'date-of-birth',
                        'type' => DatePicker::TYPE_INLINE,
                        'value' => $dateOfBirth,
                        'pluginOptions' => [
                            'format' => 'dd-m-yyyy',
                            'multidate' => false,
                            'autoclose' => true,
                        ],
                        'options' => [
                            'format' => 'dd-m-yyyy',
                        ]
                    ]);?>
                </div>


            </div>

            <div class="col-xs-12 col-sm-6 align-mid">

                <div class="form-left-title"><?= Yii::t('app', 'Date of calculation:')?></div>

                <div class="well well-sm form-date-picker-extended xs-align-mid">
                    <?php
                        if (!$getParams['date'])
                            $value = Yii::$app->formatter->asDate($getSpecify->format('d-m-Y'),'dd-M-yyyy');
                        else
                            $value = $getParams['date'];
                    ?>
                    <?= DatePicker::widget([
                        'name' => 'date',
                        'type' => DatePicker::TYPE_INLINE,
                        'value' => $value,
                        'pluginOptions' => [
                            'format' => 'dd-m-yyyy',
                            'multidate' => false,
                            'autoclose' => true,
                        ],
                        'options' => [
                            'format' => 'dd-m-yyyy',
                        ]
                    ]);?>
                </div>


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

                        <?= Yii::t('app', 'Basic biorhythms:') ?><br>
                        <?= Yii::t('app', 'physical biorhythm:') ?> <?=$result['$humanBiorhythmsPhysical']?>%<br>
                        <?= Yii::t('app', 'emotional biorhythm:') ?> <?=$result['$humanBiorhythmsEmotional']?>%<br>
                        <?= Yii::t('app', 'intellectual biorhythm:') ?> <?=$result['$humanBiorhythmsIntellectual']?>%<br><br>

                        <?= Yii::t('app', 'Additional biorhythms:') ?><br>
                        <?= Yii::t('app', 'spiritual biorhythm:') ?> <?=$result['$humanBiorhythmsSpiritual']?>%<br>
                        <?= Yii::t('app', 'intuition biorhythm:') ?> <?=$result['$humanBiorhythmsIntuition']?>%<br>
                        <?= Yii::t('app', 'knowledge biorhythm:') ?> <?=$result['$humanBiorhythmsKnowledge']?>%<br>
                        <?= Yii::t('app', 'aesthetic biorhythm:') ?> <?=$result['$humanBiorhythmsAesthetic']?>%<br>


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




