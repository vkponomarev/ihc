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


                <div class="form-left-title"><?= Yii::t('app', 'How soon after you wake up do you smoke your first cigarette?:')?></div>

                <select id="cycle-length-from" name="wakeup" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['wakeup']==1) {echo 'selected';}?> ><?=Yii::t('app','During the first 5 minutes')?></option>
                    <option value="2" <?php if ($getParams['wakeup']==2) {echo 'selected';}?> ><?=Yii::t('app','Within 6-30 minutes')?></option>


                </select>

                <div class="form-left-title"><?= Yii::t('app', 'Is it difficult for you to refrain from smoking in places where smoking is prohibited?:')?></div>

                <select id="cycle-length-from" name="restriction" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['restriction']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['restriction']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>


                </select>
                <div class="form-left-title"><?= Yii::t('app', 'Which cigarette can you easily refuse?:')?></div>

                <select id="cycle-length-from" name="refuse" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['refuse']==1) {echo 'selected';}?> ><?=Yii::t('app','First cigarette in the morning')?></option>
                    <option value="2" <?php if ($getParams['refuse']==2) {echo 'selected';}?> ><?=Yii::t('app','All other cigarettes')?></option>


                </select>
                <div class="form-left-title"><?= Yii::t('app', 'How many cigarettes do you smoke per day?:')?></div>

                <select id="cycle-length-from" name="how-much" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['howMuch']==1) {echo 'selected';}?> ><?=Yii::t('app','10 or less')?></option>
                    <option value="2" <?php if ($getParams['howMuch']==2) {echo 'selected';}?> >11-20</option>
                    <option value="3" <?php if ($getParams['howMuch']==3) {echo 'selected';}?> >21-30</option>
                    <option value="4" <?php if ($getParams['howMuch']==4) {echo 'selected';}?> ><?=Yii::t('app','31 and more')?></option>

                </select>
                <div class="form-left-title"><?= Yii::t('app', 'Do you smoke more often in the early hours of the morning after waking up than during the day?:')?></div>

                <select id="cycle-length-from" name="often" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['often']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['often']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>


                </select>
                <div class="form-left-title"><?= Yii::t('app', 'Do you smoke if you are very sick and forced to stay in bed all day?:')?></div>

                <select id="cycle-length-from" name="ill" class="form-control select-extended">

                    <option value="1" <?php if ($getParams['ill']==1) {echo 'selected';}?> ><?=Yii::t('app','Yes')?></option>
                    <option value="2" <?php if ($getParams['ill']==2) {echo 'selected';}?> ><?=Yii::t('app','Not')?></option>


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


                <?= Yii::t('app', 'Estimated smoking addiction:') ?> <?=$result['factor']?><br><br>


                <?= Yii::t('app', '0-2 - very weak dependence') ?><br>
                <?= Yii::t('app', '3-4 - weak dependence') ?><br>
                <?= Yii::t('app', '5 - average dependence') ?><br>
                <?= Yii::t('app', '6-7 - high dependence') ?><br>
                <?= Yii::t('app', '8-10 - very high dependence') ?><br>





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




