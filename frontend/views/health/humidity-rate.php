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

                        <?php if ($result['humidityRateAverage']) :?>
                            <?= Yii::t('app', 'Average humidity rate:') ?> <?=$result['humidityRateAverage']?> <br>
                        <?php endif;?>

                        <?php if ($getSpecify=='none') :?>
                            <?php if ($result['humidityRateGrowPlants']) :?>
                                <?= Yii::t('app', 'Average humidity rate for growing plants:') ?> <?=$result['humidityRateGrowPlants']?> <br>
                            <?php endif;?>

                            <?php if ($result['humidityRateSpendTime']) :?>
                                <?= Yii::t('app', 'Average humidity rate where you spend time:') ?> <?=$result['humidityRateSpendTime']?> <br>
                            <?php endif;?>

                            <?php if ($result['humidityRateRecomendedWinter']) :?>
                                <?= Yii::t('app', 'Average winter humidity rate:') ?> <?=$result['humidityRateRecomendedWinter']?> <br>
                            <?php endif;?>

                            <?php if ($result['humidityRateRecomendedSummer']) :?>
                                <?= Yii::t('app', 'Average summer humidity rate:') ?> <?=$result['humidityRateRecomendedSummer']?> <br>
                            <?php endif;?>
                        <?php endif;?>

                        <?php if ($getSpecify=='winter') :?>
                            <?php if ($result['humidityRateRecomendedWinter']) :?>
                                <?= Yii::t('app', 'Average winter humidity rate:') ?> <?=$result['humidityRateRecomendedWinter']?> <br>
                            <?php endif;?>
                        <?php endif;?>


                        <?php if ($getSpecify=='childrens') :?>
                            <?php if ($result['humidityRateChildrens']) :?>
                                <?= Yii::t('app', 'Average humidity rate for childrens:') ?> <?=$result['humidityRateChildrens']?> <br>
                            <?php endif;?>
                        <?php endif;?>

                         <?php if ($result['humidityRateFlat'] and $getSpecify=='flat') :?>
                            <br>
                            <?= Yii::t('app', 'Average humidity for the apartment:') ?><br>
                            <?= Yii::t('app', 'For the bedroom:') ?> <?=$result['humidityRateFlat'][1]?> <br>
                            <?= Yii::t('app', 'In the kitchen:') ?> <?=$result['humidityRateFlat'][2]?> <br>
                            <?= Yii::t('app', 'In the office:') ?> <?=$result['humidityRateFlat'][3]?> <br>
                            <?= Yii::t('app', 'Children\'s playroom:') ?> <?=$result['humidityRateFlat'][4]?> <br>
                            <?= Yii::t('app', 'In the shower or bath:') ?> <?=$result['humidityRateFlat'][5]?> <br>
                            <?= Yii::t('app', 'For an entrance hall:') ?> <?=$result['humidityRateFlat'][6]?> <br>
                            <?= Yii::t('app', 'Living room, guest room, lounge, dining room:') ?> <?=$result['humidityRateFlat'][7]?> <br>
                            <?= Yii::t('app', 'In the toilet, bathroom:') ?> <?=$result['humidityRateFlat'][8]?> <br>
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




