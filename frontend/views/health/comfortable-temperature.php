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

                <div class="form-left-title"><?= Yii::t('app', 'Season:')?></div>

                <select id="cycle-length-from" name="season" class="form-control select-extended">
                    <?php if ($getSpecify=='water'):?>
                        <option value="2" selected><?=Yii::t('app','Summer')?></option>
                    <?php else: ?>
                        <option value="1" <?php if ($getParams['season']==1) {echo 'selected';}?> ><?=Yii::t('app','Winter')?></option>
                        <option value="2" <?php if ($getParams['season']==2) {echo 'selected';}?> ><?=Yii::t('app','Summer')?></option>
                    <?php endif; ?>
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


                        <?php if ($getSpecify=='none' or $getSpecify=='flat' or $getSpecify=='winter') :?>
                        <?php if ($getParams['season']==1) :?>


                            <?= Yii::t('app', 'Average temperature optimal / acceptable:') ?><br>
                            <?= Yii::t('app', 'Living room:') ?>
                            <?= $result['comfortableTemperatureWinter'][1][0] ?> <?= Yii::t('app', '℃') ?> /
                            <?= $result['comfortableTemperatureWinter'][1][1] ?> <?= Yii::t('app', '℃') ?><br>
                            <?= Yii::t('app', 'Living room in areas with temperatures below 31 degrees:') ?>
                            <?= $result['comfortableTemperatureWinter'][2][0] ?> <?= Yii::t('app', '℃') ?> /
                            <?= $result['comfortableTemperatureWinter'][2][1] ?> <?= Yii::t('app', '℃') ?><br>
                            <?= Yii::t('app', 'Kitchen:') ?>
                            <?= $result['comfortableTemperatureWinter'][3][0] ?> <?= Yii::t('app', '℃') ?> /
                            <?= $result['comfortableTemperatureWinter'][3][1] ?> <?= Yii::t('app', '℃') ?><br>
                            <?= Yii::t('app', 'Restroom:') ?>
                            <?= $result['comfortableTemperatureWinter'][4][0] ?> <?= Yii::t('app', '℃') ?> /
                            <?= $result['comfortableTemperatureWinter'][4][1] ?> <?= Yii::t('app', '℃') ?><br>
                            <?= Yii::t('app', 'Bathtub, WC:') ?>
                            <?= $result['comfortableTemperatureWinter'][5][0] ?> <?= Yii::t('app', '℃') ?> /
                            <?= $result['comfortableTemperatureWinter'][5][1] ?> <?= Yii::t('app', '℃') ?><br>
                            <?= Yii::t('app', 'Recreation and training facilities:') ?>
                            <?= $result['comfortableTemperatureWinter'][6][0] ?> <?= Yii::t('app', '℃') ?> /
                            <?= $result['comfortableTemperatureWinter'][6][1] ?> <?= Yii::t('app', '℃') ?><br>
                            <?= Yii::t('app', 'Interroom corridor:') ?>
                            <?= $result['comfortableTemperatureWinter'][7][0] ?> <?= Yii::t('app', '℃') ?> /
                            <?= $result['comfortableTemperatureWinter'][7][1] ?> <?= Yii::t('app', '℃') ?><br>
                            <?= Yii::t('app', 'Entrance Hall, staircase:') ?>
                            <?= $result['comfortableTemperatureWinter'][8][0] ?> <?= Yii::t('app', '℃') ?> /
                            <?= $result['comfortableTemperatureWinter'][8][1] ?> <?= Yii::t('app', '℃') ?><br>
                            <?= Yii::t('app', 'Pantries:') ?>
                            <?= $result['comfortableTemperatureWinter'][9][0] ?> <?= Yii::t('app', '℃') ?> /
                            <?= $result['comfortableTemperatureWinter'][9][1] ?> <?= Yii::t('app', '℃') ?><br>

                        <?php endif;?>


                        <?php if ($getParams['season']==2) :?>
                            <?= Yii::t('app', 'Average temperature optimal / acceptable:') ?><br>
                            <?= $result['comfortableTemperatureSummer'][0] ?> <?= Yii::t('app', '℃') ?> /
                            <?= $result['comfortableTemperatureSummer'][1] ?> <?= Yii::t('app', '℃') ?><br>
                        <?php endif;?>

                        <?php endif;?>

                        <?php if ($getSpecify=='childrens') :?>

                            <?= Yii::t('app', 'Average temperature for childrens:') ?><br>
                            <?= $result['comfortableTemperatureChildrens'] ?> <?= Yii::t('app', '℃') ?><br>

                            <?php if ($getParams['season']==1) :?>
                                    <?= Yii::t('app', 'Average temperature for pre school institutions optimal / acceptable:') ?><br>
                                    <?= Yii::t('app', 'Group locker room and toilet for younger groups') ?>
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsWinter'][1][0] ?> <?= Yii::t('app', '℃') ?> /
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsWinter'][1][1] ?> <?= Yii::t('app', '℃') ?><br>
                                    <?= Yii::t('app', 'Group locker room and toilet for preschool groups') ?>
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsWinter'][2][0] ?> <?= Yii::t('app', '℃') ?> /
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsWinter'][2][1] ?> <?= Yii::t('app', '℃') ?><br>
                                    <?= Yii::t('app', 'Sleeping for younger groups') ?>
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsWinter'][3][0] ?> <?= Yii::t('app', '℃') ?> /
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsWinter'][3][1] ?> <?= Yii::t('app', '℃') ?><br>
                                    <?= Yii::t('app', 'Sleeping for preschool groups') ?>
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsWinter'][4][0] ?> <?= Yii::t('app', '℃') ?> /
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsWinter'][4][1] ?> <?= Yii::t('app', '℃') ?><br>
                                    <?= Yii::t('app', 'Lobby, staircase') ?>
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsWinter'][5][0] ?> <?= Yii::t('app', '℃') ?> /
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsWinter'][5][1] ?> <?= Yii::t('app', '℃') ?><br>
                            <?php endif;?>


                            <?php if ($getParams['season']==2) :?>
                                <?= Yii::t('app', 'Average temperature for pre school institutions optimal / acceptable:') ?><br>
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsSummer'][0] ?> <?= Yii::t('app', '℃') ?> /
                                    <?= $result['comfortableTemperatureChildrensPreschoolInstitutionsSummer'][1] ?> <?= Yii::t('app', '℃') ?><br>
                            <?php endif;?>



                        <?php endif;?>

                        <?php if ($getSpecify=='sleep') :?>

                            <?= Yii::t('app', 'Average temperature for sleep:') ?><br>
                            <?= Yii::t('app', 'Comfortable sleep temperature in pajamas and under the blankets:') ?>
                            <?= $result['comfortableTemperatureSleep'] ?> <?= Yii::t('app', '℃') ?><br>
                            <?= Yii::t('app', 'Comfortable sleep temperature without pajamas and blankets:') ?>
                            <?= $result['comfortableTemperatureSleepSummerNothing'] ?> <?= Yii::t('app', '℃') ?><br>

                        <?php endif;?>


                        <?php if ($getSpecify=='newborns') :?>


                            <?= Yii::t('app', 'Average temperature for newborns:') ?>
                            <?= $result['comfortableTemperatureNewborns'] ?> <?= Yii::t('app', '℃') ?>

                        <?php endif;?>

                        <?php if ($getSpecify=='water') :?>

                            <?= Yii::t('app', 'Minimum water temperature:') ?>
                            <?= $result['comfortableTemperatureSwim'][0] ?> <?= Yii::t('app', '℃') ?><br>
                            <?= Yii::t('app', 'Comfortable water temperature:') ?>
                            <?= $result['comfortableTemperatureSwim'][1] ?> <?= Yii::t('app', '℃') ?><br><br>

                            <?= Yii::t('app', 'Duration of swimming depending on water temperature:') ?><br>
                            <?= Yii::t('app', '24 ℃:') ?>
                            <?= $result['comfortableTemperatureSwimMinutes'][1] ?> <?= Yii::t('app', 'minutes') ?><br>
                            <?= Yii::t('app', '22 ℃:') ?>
                            <?= $result['comfortableTemperatureSwimMinutes'][2] ?> <?= Yii::t('app', 'minutes') ?><br>
                            <?= Yii::t('app', '20 ℃:') ?>
                            <?= $result['comfortableTemperatureSwimMinutes'][3] ?> <?= Yii::t('app', 'minutes') ?><br>
                            <?= Yii::t('app', '18-19 ℃:') ?>
                            <?= $result['comfortableTemperatureSwimMinutes'][4] ?> <?= Yii::t('app', 'minutes') ?><br>

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




