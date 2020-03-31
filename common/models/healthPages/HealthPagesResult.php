<?php

namespace common\models\healthPages;



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
class HealthPagesResult
{

    /**
     * @param $getCalculationFunction
     * @param $getParams
     * @return mixed
     */
    public function healthPagesResult($getCalculationFunction, $getParams){


        if ($getCalculationFunction == 0)
            $healthPagesResult = 0;

        if ($getCalculationFunction == 'dailyIntakeCalories') {
            $healthPagesResult = (new HealthPagesDailyIntakeCalories)->dailyIntakeCaloriesCalculation(
                $getParams['gender'],
                $getParams['weight'],
                $getParams['height'],
                $getParams['age'],
                $getParams['exerciseStress']
            );
        }

        if ($getCalculationFunction == 'dailyIntakeProtein') {
           $healthPagesResult = (new HealthPagesDailyIntakeProtein)->dailyIntakeProteinCalculation(
                $getParams['gender'],
                $getParams['weight'],
                $getParams['height'],
                $getParams['age'],
                $getParams['activity'],
                $getParams['exerciseStress'],
                $getParams['goal']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeFat') {
            $healthPagesResult = (new HealthPagesDailyIntakeFat)->dailyIntakeFatCalculation(
                $getParams['gender'],
                $getParams['weight'],
                $getParams['height'],
                $getParams['age'],
                $getParams['exerciseStress'],
                $getParams['goal']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeCarbohydrates') {
            $healthPagesResult = (new HealthPagesDailyIntakeCarbohydrates)->dailyIntakeCarbohydratesCalculation(
                $getParams['gender'],
                $getParams['weight'],
                $getParams['height'],
                $getParams['age'],
                $getParams['exerciseStress'],
                $getParams['goal']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeWater') {
            $healthPagesResult = (new HealthPagesDailyIntakeWater)->dailyIntakeWaterCalculation(
                $getParams['gender'],
                $getParams['weight'],
                $getParams['age'],
                $getParams['exerciseTime']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeNuts') {
            $healthPagesResult = (new HealthPagesDailyIntakeNuts)->dailyIntakeNutsCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }


        if ($getCalculationFunction == 'dailyIntakeSalt') {
            $healthPagesResult = (new HealthPagesDailyIntakeSalt)->dailyIntakeSaltCalculation(
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeSugar') {
            $healthPagesResult = (new HealthPagesDailyIntakeSugar)->dailyIntakeSugarCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeIron') {
            $healthPagesResult = (new HealthPagesDailyIntakeIron)->dailyIntakeIronCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }


        if ($getCalculationFunction == 'dailyIntakeVitaminC') {
            $healthPagesResult = (new HealthPagesDailyIntakeVitaminC)->dailyIntakeVitaminCCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }
        if ($getCalculationFunction == 'dailyIntakeVitaminD') {
            $healthPagesResult = (new HealthPagesDailyIntakeVitaminD)->dailyIntakeVitaminDCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }
        if ($getCalculationFunction == 'dailyIntakeVitaminE') {
            $healthPagesResult = (new HealthPagesDailyIntakeVitaminE)->dailyIntakeVitaminECalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeVitaminD3') {
            $healthPagesResult = (new HealthPagesDailyIntakeVitaminD3)->dailyIntakeVitaminD3Calculation(
                $getParams['gender'],
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeVitaminB12') {
            $healthPagesResult = (new HealthPagesDailyIntakeVitaminB12)->dailyIntakeVitaminB12Calculation(
                $getParams['gender'],
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeVitaminOmega3') {
            $healthPagesResult = (new HealthPagesDailyIntakeVitaminOmega3)->dailyIntakeVitaminOmega3Calculation(
                $getParams['gender'],
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeZinc') {
            $healthPagesResult = (new HealthPagesDailyIntakeZinc)->dailyIntakeZincCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeIodine') {
            $healthPagesResult = (new HealthPagesDailyIntakeIodine)->dailyIntakeIodineCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeMagnesium') {
            $healthPagesResult = (new HealthPagesDailyIntakeMagnesium)->dailyIntakeMagnesiumCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'dailyIntakePotassium') {
            $healthPagesResult = (new HealthPagesDailyIntakePotassium)->dailyIntakePotassiumCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeCalcium') {
            $healthPagesResult = (new HealthPagesDailyIntakeCalcium)->dailyIntakeCalciumCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'dailyIntakeFolicAcid') {
            $healthPagesResult = (new HealthPagesDailyIntakeFolicAcid)->dailyIntakeFolicAcidCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }


        if ($getCalculationFunction == 'heartRate') {
            $healthPagesResult = (new HealthPagesHeartRate)->heartRateCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'bloodPressure') {
            $healthPagesResult = (new HealthPagesBloodPressure)->bloodPressureCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }


        if ($getCalculationFunction == 'eyePressure') {
            $healthPagesResult = (new HealthPagesEyePressure)->eyePressureCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }


        if ($getCalculationFunction == 'humidityRate') {
            $healthPagesResult = (new HealthPagesHumidityRate)->humidityRateCalculation();

        }

        if ($getCalculationFunction == 'growthRateChildrens') {
            $healthPagesResult = (new HealthPagesGrowthRateChildrens)->growthRateChildrensCalculation(
                $getParams['gender'],
                $getParams['ageYears'],
                $getParams['ageMonths']
            );

        }

        if ($getCalculationFunction == 'growthRateTeenagers') {
            $healthPagesResult = (new HealthPagesGrowthRateTeenagers)->growthRateTeenagersCalculation(
                $getParams['gender'],
                $getParams['age']
            );

        }


        if ($getCalculationFunction == 'growthRate') {
            $healthPagesResult = (new HealthPagesGrowthRate)->growthRateCalculation(
                $getParams['gender'],
                $getParams['age'],
                $getParams['height'],
                $getParams['physique']
            );

        }


        if ($getCalculationFunction == 'bodyTemperatureRate') {
            $healthPagesResult = (new HealthPagesBodyTemperatureRate)->bodyTemperatureRateCalculation(
                $getParams['age']
            );

        }

        if ($getCalculationFunction == 'bloodCalculator') {
            $healthPagesResult = (new HealthPagesBloodCalculator)->bloodCalculatorCalculation(
                $getParams['age'],
                $getParams['weight']
            );

        }

        if ($getCalculationFunction == 'howMuchDrinkWater') {
            $healthPagesResult = (new HealthPagesHowMuchDrinkWater)->howMuchDrinkWaterCalculation(
                $getParams['gender'],
                $getParams['age'],
                $getParams['weight'],
                $getParams['exerciseTime']
            );

        }

        if ($getCalculationFunction == 'howMuchWaterInMan') {
            $healthPagesResult = (new HealthPagesHowMuchWaterInMan)->howMuchWaterInManCalculation(
                $getParams['gender'],
                $getParams['age'],
                $getParams['weight']
            );

        }

        if ($getCalculationFunction == 'comfortableTemperature') {
            $healthPagesResult = (new HealthPagesComfortableTemperature)->comfortableTemperatureCalculation(
                $getParams['season']
            );

        }

        if ($getCalculationFunction == 'humanBiorhythms') {
            $healthPagesResult = (new HealthPagesHumanBiorhythms)->humanBiorhythmsCalculation(
                $getParams['dateOfBirth'],
                $getParams['date']
            );

        }

        if ($getCalculationFunction == 'lifeSpan') {
            $healthPagesResult = (new HealthPagesLifeSpan)->lifeSpanCalculation(
                $getParams['gender'],
                $getParams['grandyLifeSpan'],
                $getParams['education'],
                $getParams['work'],
                $getParams['hobby'],
                $getParams['hotTempered'],
                $getParams['income'],
                $getParams['pets'],
                $getParams['freeTime'],
                $getParams['workTime'],
                $getParams['eat'],
                $getParams['eatSea'],
                $getParams['eatFruit'],
                $getParams['vine'],
                $getParams['alcohol'],
                $getParams['smoke'],
                $getParams['sport'],
                $getParams['walk'],
                $getParams['sleep'],
                $getParams['sickLeave'],
                $getParams['pressure'],
                $getParams['weight'],
                $getParams['medical'],
                $getParams['intestines'],
                $getParams['pills']
            );

        }

        if ($getCalculationFunction == 'smokingIndex') {
            $healthPagesResult = (new HealthPagesSmokingIndex)->smokingIndexCalculation(
                $getParams['cigarette'],
                $getParams['smoking']
            );

        }

        if ($getCalculationFunction == 'nicotineAddiction') {
            $healthPagesResult = (new HealthPagesNicotineAddiction)->nicotineAddictionCalculation(
                $getParams['wakeup'],
                $getParams['restriction'],
                $getParams['refuse'],
                $getParams['howMuch'],
                $getParams['often'],
                $getParams['ill']
            );

        }

        if ($getCalculationFunction == 'priceOfSmoking') {
            $healthPagesResult = (new HealthPagesPriceOfSmoking)->priceOfSmokingCalculation(
                $getParams['cigarette'],
                $getParams['smoking'],
                $getParams['cost'],
                $getParams['nicotine']
            );

        }

        if ($getCalculationFunction == 'alcoholWithdrawal') {
            $healthPagesResult = (new HealthPagesAlcoholWithdrawal)->alcoholWithdrawalCalculation(
                $getParams['gender'],
                $getParams['years'],
                $getParams['weight'],
                $getParams['drink1Alco'],
                $getParams['drink2Alco'],
                $getParams['drink3Alco'],
                $getParams['drink4Alco'],
                $getParams['drink1Volume'],
                $getParams['drink2Volume'],
                $getParams['drink3Volume'],
                $getParams['drink4Volume'],
                $getParams['stomach'],
                $getParams['height'],
                $getParams['time']
            );

        }

        if ($getCalculationFunction == 'degreeOfIntoxication') {
            $healthPagesResult = (new HealthPagesDegreeOfIntoxication)->degreeOfIntoxicationCalculation(
                $getParams['dateOfBirth'],
                $getParams['date']
            );

        }

        if ($getCalculationFunction == 'ppmAlcohol') {
            $healthPagesResult = (new HealthPagesPpmAlcohol)->ppmAlcoholCalculation(
                $getParams['dateOfBirth'],
                $getParams['date']
            );

        }


        return $healthPagesResult;

    }



}

