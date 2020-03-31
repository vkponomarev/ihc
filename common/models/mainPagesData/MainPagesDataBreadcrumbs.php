<?php

namespace common\models\mainPagesData;



use Yii;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeCalories;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeProtein;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeFat;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeCarbohydrates;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeWater;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeNuts;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeSalt;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeSugar;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeIron;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminC;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminD;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminE;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminD3;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminB12;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeVitaminOmega3;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeZinc;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeIodine;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeMagnesium;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakePotassium;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeCalcium;
use common\models\healthPages\healthPagesDailyIntake\HealthPagesDailyIntakeFolicAcid;
use common\models\healthPages\healthPagesNorms\HealthPagesHeartRate;
use common\models\healthPages\healthPagesNorms\HealthPagesBloodPressure;
use common\models\healthPages\healthPagesNorms\HealthPagesEyePressure;
use common\models\healthPages\healthPagesNorms\HealthPagesHumidityRate;
use common\models\healthPages\healthPagesNorms\HealthPagesGrowthRateChildrens;
use common\models\healthPages\healthPagesNorms\HealthPagesGrowthRateTeenagers;
use common\models\healthPages\healthPagesNorms\HealthPagesGrowthRate;
use common\models\healthPages\healthPagesNorms\HealthPagesBodyTemperatureRate;
use common\models\healthPages\healthPagesNorms\HealthPagesBloodCalculator;
use common\models\healthPages\healthPagesNorms\HealthPagesHowMuchDrinkWater;
use common\models\healthPages\healthPagesNorms\HealthPagesHowMuchWaterInMan;
use common\models\healthPages\healthPagesNorms\HealthPagesComfortableTemperature;
use common\models\healthPages\healthPagesNorms\HealthPagesHumanBiorhythms;
use common\models\healthPages\healthPagesNorms\HealthPagesLifeSpan;
use common\models\healthPages\healthPagesNorms\HealthPagesSmokingIndex;
use common\models\healthPages\healthPagesNorms\HealthPagesNicotineAddiction;
use common\models\healthPages\healthPagesNorms\HealthPagesPriceOfSmoking;

use common\models\healthPages\healthPagesNorms\HealthPagesAlcoholWithdrawal;
use common\models\healthPages\healthPagesNorms\HealthPagesDegreeOfIntoxication;
use common\models\healthPages\healthPagesNorms\HealthPagesPpmAlcohol;


/**
 * Class HealthPagesResult
 * @package common\models\healthPages
 */
class MainPagesDataBreadcrumbs
{

    /**
     * @param $getCalculationFunction
     * @param $getParams
     * @return mixed
     */
    public function mainPagesBreadcrumbs($parentPageId, $currentLanguageId, $givenUrl){

        if (!isset(Yii::$app->params['mainPagesArray'][$givenUrl])) {
            /*
            $mainPagesBreadcrumbs = Yii::$app->db
                ->createCommand('
            select
            pages.id,
            pages.parent_id,
            pages.url,
            pages_text.plates_title
            from
            pages
            inner join pages_text on pages_text.pages_id = pages.id
            where 
            pages.id = ' . $parentPageId . ' 
            and pages_text.languages_id = ' . $currentLanguageId . ' 
            and pages.active=1
            order by pages.sort
            ')
                ->queryAll();*/
            $params = [':parentPageId' => (int)$parentPageId, ':currentLanguageId' => (int)$currentLanguageId, ':active' =>1];
            $mainPagesBreadcrumbs = Yii::$app->db
                ->createCommand('
                SELECT
                child1.id as level1,
                child2.id as level2,
                child3.id as level3,
                child1url.url as level1url,
                child1pt.plates_title as level1pt,
                child2url.url as level2url,
                child2pt.plates_title as level2pt,
                child3url.url as level3url,
                child3pt.plates_title as level3pt
                FROM pages parent
                left join pages AS child1 ON child1.id=parent.id
                left join pages AS child2 ON child2.id=child1.parent_id
                left join pages AS child3 ON child3.id=child2.parent_id
                left join pages AS child4 ON child4.id=child3.parent_id
                left join pages AS child1url on child1url.id = parent.id
                left join pages_text AS child1pt on child1pt.pages_id = parent.id
                left join pages AS child2url on child2url.id = child1.parent_id
                left join pages_text AS child2pt on child2pt.pages_id = child1.parent_id
                left join pages AS child3url on child3url.id = child2.parent_id
                left join pages_text AS child3pt on child3pt.pages_id = child2.parent_id
                where child1.id = :parentPageId
                and child1pt.languages_id = :currentLanguageId
                and child2pt.languages_id = :currentLanguageId
                
                and child1.active = :active
                ')
                ->bindValues($params)
                ->queryOne();


            //echo '<pre>';
            //var_dump($texts);
            //print_r($mainPagesBreadcrumbs);
            //print_r(Yii::$app->params['mainPagesArray']);
            //echo '</pre>';


            return $mainPagesBreadcrumbs;
        } else
            return $mainPagesBreadcrumbs = 0;
    }
/*
SELECT
child1.id as level1,
child2.id as level2,
child3.id as level3,
child1url.url as level1url,
child1pt.plates_title as level1pt,
child2url.url as level2url,
child2pt.plates_title as level2pt,
child3url.url as level3url,
child3pt.plates_title as level3pt,
FROM pages parent
left join pages AS child1 ON child1.id=parent.id
left join pages AS child2 ON child2.id=child1.parent_id
left join pages AS child3 ON child3.id=child2.parent_id
left join pages AS child4 ON child4.id=child2.parent_id
left join pages AS child1url on child1url.id = parent.id
left join pages_text AS child1pt on child1pt.pages_id = parent.id
left join pages AS child2url on child2url.id = child1.parent_id
left join pages_text AS child2pt on child2pt.pages_id = child1.parent_id
left join pages AS child3url on child3url.id = child2.parent_id
left join pages_text AS child3pt on child3pt.pages_id = child2.parent_id
where child1.id=154
and child1pt.languages_id = 1
and child1.active = 1


SELECT
child1.id as level1,
child2.id as level2,
child3.id as level3,
child4.id as level4,
child1url.url as level1url,
child1pt.plates_title as level1pt,
child2url.url as level2url,
child2pt.plates_title as level2pt,
child3url.url as level3url,
child3pt.plates_title as level3pt,
child4url.url as level4url,
child4pt.plates_title as level4pt
FROM pages parent
left join pages AS child1 ON child1.id=parent.id
left join pages AS child2 ON child2.id=child1.parent_id
left join pages AS child3 ON child3.id=child2.parent_id
left join pages AS child4 ON child4.id=child2.parent_id
left join pages AS child1url on child1url.id = parent.id
left join pages_text AS child1pt on child1pt.pages_id = parent.id
left join pages AS child2url on child2url.id = child1.parent_id
left join pages_text AS child2pt on child2pt.pages_id = child1.parent_id
left join pages AS child3url on child3url.id = child2.parent_id
left join pages_text AS child3pt on child3pt.pages_id = child2.parent_id
left join pages AS child4url on child4url.id = child3.parent_id
left join pages_text AS child4pt on child4pt.pages_id = child3.parent_id
where child1.id=154
and child1pt.languages_id = 1
and child1.active = 1

*/

}

