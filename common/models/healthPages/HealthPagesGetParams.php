<?php

namespace common\models\healthPages;



use Yii;

class HealthPagesGetParams
{

    public function healthPagesGetParams($getParam){

        if ($getParam == 0)
            $healthPagesGetParams = 0;
        if ($getParam == 'none')
            $healthPagesGetParams = 0;

        if ($getParam == 'dailyIntakeCalories') {

            $healthPagesGetParams = [
                    'gender' => Yii::$app->request->get('gender'),
                    'weight' => Yii::$app->request->get('weight'),
                    'height' => Yii::$app->request->get('height'),
                    'age' => Yii::$app->request->get('age'),
                    'goal' => Yii::$app->request->get('goal'),
                    'exerciseStress' => Yii::$app->request->get('exercise-stress'),
                    'large' => [800,750],
                    'middle' => [600,740],
                    'small' => [280,820],

                ];
        }


        if ($getParam == 'dailyIntakeProtein') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'weight' => Yii::$app->request->get('weight'),
                'height' => Yii::$app->request->get('height'),
                'age' => Yii::$app->request->get('age'),
                'activity' => Yii::$app->request->get('activity'),
                'exerciseStress' => Yii::$app->request->get('exercise-stress'),
                'goal' => Yii::$app->request->get('goal'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],


            ];
        }

        if ($getParam == 'dailyIntakeFat') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'weight' => Yii::$app->request->get('weight'),
                'height' => Yii::$app->request->get('height'),
                'age' => Yii::$app->request->get('age'),
                'exerciseStress' => Yii::$app->request->get('exercise-stress'),
                'goal' => Yii::$app->request->get('goal'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeCarbohydrates') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'weight' => Yii::$app->request->get('weight'),
                'height' => Yii::$app->request->get('height'),
                'age' => Yii::$app->request->get('age'),
                'exerciseStress' => Yii::$app->request->get('exercise-stress'),
                'goal' => Yii::$app->request->get('goal'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeWater') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'weight' => Yii::$app->request->get('weight'),
                'age' => Yii::$app->request->get('age'),
                'exerciseTime' => Yii::$app->request->get('exercise-time'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeNuts') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }


        if ($getParam == 'dailyIntakeSalt') {

            $healthPagesGetParams = [
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeSugar') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeIron') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }


        if ($getParam == 'dailyIntakeVitaminC') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeVitaminD') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeVitaminE') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeVitaminD3') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }


        if ($getParam == 'dailyIntakeVitaminB12') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }


        if ($getParam == 'dailyIntakeVitaminOmega3') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeZinc') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeIodine') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeMagnesium') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }


        if ($getParam == 'dailyIntakePotassium') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeCalcium') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'dailyIntakeFolicAcid') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }


        if ($getParam == 'heartRate') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'bloodPressure') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }


        if ($getParam == 'eyePressure') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }


        if ($getParam == 'humidityRate') {

            $healthPagesGetParams = [
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'growthRateChildrens') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'ageYears' => Yii::$app->request->get('age-years'),
                'ageMonths' => Yii::$app->request->get('age-months'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'growthRateTeenagers') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'growthRate') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'age' => Yii::$app->request->get('age'),
                'height' => Yii::$app->request->get('height'),
                'physique' => Yii::$app->request->get('physique'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'bodyTemperatureRate') {

            $healthPagesGetParams = [
                'age' => Yii::$app->request->get('age'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'bloodCalculator') {

            $healthPagesGetParams = [
                'age' => Yii::$app->request->get('age'),
                'weight' => Yii::$app->request->get('weight'),
                'gender' => Yii::$app->request->get('gender'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'howMuchDrinkWater') {

            $healthPagesGetParams = [
                'age' => Yii::$app->request->get('age'),
                'weight' => Yii::$app->request->get('weight'),
                'gender' => Yii::$app->request->get('gender'),
                'exerciseTime' => Yii::$app->request->get('exercise-time'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'howMuchWaterInMan') {

            $healthPagesGetParams = [
                'age' => Yii::$app->request->get('age'),
                'weight' => Yii::$app->request->get('weight'),
                'gender' => Yii::$app->request->get('gender'),
                'exerciseTime' => Yii::$app->request->get('exercise-time'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }


        if ($getParam == 'comfortableTemperature') {

            $healthPagesGetParams = [
                'season' => Yii::$app->request->get('season'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'humanBiorhythms') {

            $healthPagesGetParams = [
                'dateOfBirth' => Yii::$app->request->get('date-of-birth'),
                'date' => Yii::$app->request->get('date'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'lifeSpan') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'grandyLifeSpan' => Yii::$app->request->get('grandy-life-span'),
                'education' => Yii::$app->request->get('education'),
                'work' => Yii::$app->request->get('work'),
                'hobby' => Yii::$app->request->get('hobby'),
                'hotTempered' => Yii::$app->request->get('hot-tempered'),
                'income' => Yii::$app->request->get('income'),
                'pets' => Yii::$app->request->get('pets'),
                'freeTime' => Yii::$app->request->get('free-time'),
                'workTime' => Yii::$app->request->get('work-time'),
                'eat' => Yii::$app->request->get('eat'),
                'eatSea' => Yii::$app->request->get('eat-sea'),
                'eatFruit' => Yii::$app->request->get('eat-fruit'),
                'vine' => Yii::$app->request->get('vine'),
                'alcohol' => Yii::$app->request->get('alcohol'),
                'smoke' => Yii::$app->request->get('smoke'),
                'sport' => Yii::$app->request->get('sport'),
                'walk' => Yii::$app->request->get('walk'),
                'sleep' => Yii::$app->request->get('sleep'),
                'sickLeave' => Yii::$app->request->get('sick-leave'),
                'pressure' => Yii::$app->request->get('pressure'),
                'weight' => Yii::$app->request->get('weight'),
                'medical' => Yii::$app->request->get('medical'),
                'intestines' => Yii::$app->request->get('intestines'),
                'pills' => Yii::$app->request->get('pills'),

                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'smokingIndex') {

            $healthPagesGetParams = [
                'cigarette' => Yii::$app->request->get('cigarette'),
                'smoking' => Yii::$app->request->get('smoking'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'nicotineAddiction') {

            $healthPagesGetParams = [
                'wakeup' => Yii::$app->request->get('wakeup'),
                'restriction' => Yii::$app->request->get('restriction'),
                'refuse' => Yii::$app->request->get('refuse'),
                'howMuch' => Yii::$app->request->get('how-much'),
                'often' => Yii::$app->request->get('often'),
                'ill' => Yii::$app->request->get('ill'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'priceOfSmoking') {

            $healthPagesGetParams = [
                'cigarette' => Yii::$app->request->get('cigarette'),
                'smoking' => Yii::$app->request->get('smoking'),
                'cost' => Yii::$app->request->get('cost'),
                'nicotine' => Yii::$app->request->get('nicotine'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'alcoholWithdrawal') {

            $healthPagesGetParams = [
                'gender' => Yii::$app->request->get('gender'),
                'years' => Yii::$app->request->get('years'),
                'weight' => Yii::$app->request->get('weight'),
                'drink1Alco' => Yii::$app->request->get('drink-1-alco'),
                'drink1Volume' => Yii::$app->request->get('drink-1-volume'),
                'drink2Alco' => Yii::$app->request->get('drink-2-alco'),
                'drink2Volume' => Yii::$app->request->get('drink-2-volume'),
                'drink3Alco' => Yii::$app->request->get('drink-3-alco'),
                'drink3Volume' => Yii::$app->request->get('drink-3-volume'),
                'drink4Alco' => Yii::$app->request->get('drink-4-alco'),
                'drink4Volume' => Yii::$app->request->get('drink-4-volume'),
                'stomach' => Yii::$app->request->get('stomach'),
                'height' => Yii::$app->request->get('height'),
                'time' => Yii::$app->request->get('time'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'degreeOfIntoxication') {

            $healthPagesGetParams = [
                'dateOfBirth' => Yii::$app->request->get('date-of-birth'),
                'date' => Yii::$app->request->get('date'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }

        if ($getParam == 'ppmAlcohol') {

            $healthPagesGetParams = [
                'dateOfBirth' => Yii::$app->request->get('date-of-birth'),
                'date' => Yii::$app->request->get('date'),
                'large' => [800,750],
                'middle' => [600,740],
                'small' => [280,820],
            ];
        }


        return $healthPagesGetParams;

    }



}

