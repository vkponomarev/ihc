<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeProtein
{



    function dailyIntakeProteinCalculation($gender,$weight,$height,$age,$activity,$exerciseStress,$goal){

        $dailyIntakeProteinMiddle = 0;
        if ($gender) {

            /** Среднее подтребление белка */

            if ($age>=18) {
                $dailyIntakeProteinMiddleParam = 1.5;
            }
            if ($age<=1) {
                $dailyIntakeProteinMiddleParam = 3.25;
            }
            if ($age>1 and $age<18) {
                $dailyIntakeProteinMiddleParam = 2.5;
            }

            $dailyIntakeProteinMiddle = $dailyIntakeProteinMiddleParam * $weight;
            /** Среднее подтребление белка */



            /** Нормы белка по ИМТ */

            $heightInMeters = $height/100;
            $imt = $weight/($heightInMeters*$heightInMeters);
            $imt = round($imt);
            //ИМТ = Вес (кг)/ квадрат роста (м).

            if ($imt<19 or $imt>45 or $heightInMeters<1.47 or $heightInMeters>1.93) {

                $dailyIntakeProteinByImtForWomen = 0;
                $dailyIntakeProteinByImtForMen = 0;

            } else {

                if ($gender==1){
                    if ($heightInMeters>=1.47 and $heightInMeters<=1.83) {
                        $dailyIntakeProteinByImtForWomen = HealthPagesDailyIntakeProteinArray::dailyIntakeProteinWomenArray($heightInMeters, $imt);
                        $dailyIntakeProteinByImtForMen = 0;
                    } else $dailyIntakeProteinByImtForWomen = 0;

                }

                if ($gender==2){

                    if ($heightInMeters>=1.45 and $heightInMeters<=1.93) {
                        $dailyIntakeProteinByImtForMen = HealthPagesDailyIntakeProteinArray::dailyIntakeProteinMenArray($heightInMeters, $imt);
                        $dailyIntakeProteinByImtForWomen = 0;
                    } else $dailyIntakeProteinByImtForMen = 0;
                }

            }

            /** Нормы белка по ИМТ */

            /** Нормы белка по виду деятельности */

            //$activityArray['1'] = 1; //- Умственный труд
            //$activityArray['2'] = 1.2; //- Легкий физический труд
            //$activityArray['3'] = 1.375; //- Средний физический труд
            //$activityArray['4'] = 1.4625; // - Тяжелый физический труд
            //$activityArray['5'] = 1.550; // - Особо тяжелый физический труд


            if ($age<18 or $age>59){

                $dailyIntakeProteinByActivityWomen = 0;
                $dailyIntakeProteinByActivityMen = 0;

            } else {

                if ($gender==1){

                    $dailyIntakeProteinByActivityWomen = HealthPagesDailyIntakeProteinArray::dailyIntakeProteinActivityWomenArray($activity, $age);
                    $dailyIntakeProteinByActivityMen = 0;
                }

                if ($gender==2){

                    $dailyIntakeProteinByActivityMen = HealthPagesDailyIntakeProteinArray::dailyIntakeProteinActivityMenArray($activity, $age);
                    $dailyIntakeProteinByActivityWomen = 0;

                }

            }

            /** Нормы белка по виду деятельности */


            /** Нормы белка по Формулам */

            if ($goal == 1){
                /** Норма */
                $protein = 30;
                $fats = 30;
                $carbohydrates = 40;
            }

            if ($goal == 2){
                /** Похудение */
                $protein = 45;
                $fats = 35;
                $carbohydrates = 20;

            }

            if ($goal == 3){
                /** Набор массы */
                $protein = 30;
                $fats = 15;
                $carbohydrates = 55;

            }

            $exerciseStressArray['1'] = 1; //- Базовый метаболизм
            $exerciseStressArray['2'] = 1.2; //- минимум или отсутствие физической нагрузки
            $exerciseStressArray['3'] = 1.375; //- занятия фитнесом 3 раза в неделю
            $exerciseStressArray['4'] = 1.4625; // - занятия фитнесом 5 раз в неделю
            $exerciseStressArray['5'] = 1.550; // - интенсивная физическая нагрузка 5 раз в неделю
            $exerciseStressArray['6'] = 1.6375; // - занятия фитнесом каждый день
            $exerciseStressArray['7'] = 1.725; // - каждый день интенсивно или по два раза в день
            $exerciseStressArray['8'] = 1.9; //- ежедневная физическая нагрузка плюс физическая работа


            if ($gender == 1) {

                $mifflinStJeor = (10 * $weight + 6.25 * $height - 5 * $age - 161) * $exerciseStressArray[$exerciseStress];

                $harrisBenedict = (665.1 + 9.563 * $weight + 1.85 * $height - 4.676 * $age) * $exerciseStressArray[$exerciseStress];
                //655.1 + 9.563 х вес (кг) + 1.85 х рост (см) — 4.676 х возраст (лет)
            } else {
                //Men
                $mifflinStJeor = (10 * $weight + 6.25 * $height - 5 * $age + 5) * $exerciseStressArray[$exerciseStress];
                //10 х вес (кг) + 6,25 х высоту (см) – 5 х возраст (лет) + 5
                $harrisBenedict = (66.5 + 13.75 * $weight + 5.003 * $height - 6.775 * $age) * $exerciseStressArray[$exerciseStress];
                //66,5 + 13,75 х вес (кг) + 5,003 х рост (см) – 6,775 х возраст (лет)

            }

            $mifflinStJeorLoosingWeight = $mifflinStJeor / 100 * 80;
            $harrisBenedictLoosingWeight = $harrisBenedict / 100 * 80;
            $mifflinStJeorLoosingWeightBig = $mifflinStJeor / 100 * 60;
            $harrisBenedictLoosingWeightBig = $harrisBenedict / 100 * 60;

            $mifflinStJeorWeightGain = $mifflinStJeor / 100 * 120;
            $harrisBenedictWeightGain = $harrisBenedict / 100 * 120;

            //$protein,$fats,$carbohydrates

            $mifflinStJeorProtein = $mifflinStJeor / 100 * $protein / 4;
            $mifflinStJeorFats = $mifflinStJeor / 100 * $fats / 9;
            $mifflinStJeorCarbohydrates = $mifflinStJeor / 100 * $carbohydrates / 4;

            $harrisBenedictProtein = $harrisBenedict / 100 * $protein / 4;
            $harrisBenedictFats = $harrisBenedict / 100 * $fats / 9;
            $harrisBenedictCarbohydrates = $harrisBenedict / 100 * $carbohydrates / 4;

            $mifflinStJeorLoosingWeightProtein = $mifflinStJeorLoosingWeight / 100 * $protein / 4;
            $mifflinStJeorLoosingWeightFats = $mifflinStJeorLoosingWeight / 100 * $fats / 9;
            $mifflinStJeorLoosingWeightCarbohydrates = $mifflinStJeorLoosingWeight / 100 * $carbohydrates / 4;

            $harrisBenedictLoosingWeightProtein = $harrisBenedictLoosingWeight / 100 * $protein / 4;
            $harrisBenedictLoosingWeightFats = $harrisBenedictLoosingWeight / 100 * $fats / 9;
            $harrisBenedictLoosingWeightCarbohydrates = $harrisBenedictLoosingWeight / 100 * $carbohydrates / 4;

            $mifflinStJeorWeightGainProtein = $mifflinStJeorWeightGain / 100 * $protein / 4;
            $mifflinStJeorWeightGainFats = $mifflinStJeorWeightGain / 100 * $fats / 9;
            $mifflinStJeorWeightGainCarbohydrates = $mifflinStJeorWeightGain / 100 * $carbohydrates / 4;

            $harrisBenedictWeightGainProtein = $harrisBenedictWeightGain / 100 * $protein / 4;
            $harrisBenedictWeightGainFats = $harrisBenedictWeightGain / 100 * $fats / 9;
            $harrisBenedictWeightGainCarbohydrates = $harrisBenedictWeightGain / 100 * $carbohydrates / 4;

            return [

                'dailyIntakeProteinMiddle' => round($dailyIntakeProteinMiddle),
                'dailyIntakeProteinByImtForWomen' =>$dailyIntakeProteinByImtForWomen,
                'dailyIntakeProteinByImtForMen' =>$dailyIntakeProteinByImtForMen,
                'dailyIntakeProteinByActivityWomen' => $dailyIntakeProteinByActivityWomen,
                'dailyIntakeProteinByActivityMen' =>$dailyIntakeProteinByActivityMen,

                'mifflinStJeorProtein' => round($mifflinStJeorProtein),

                'mifflinStJeorProtein' => round($mifflinStJeorProtein),
                'mifflinStJeorFats' => round($mifflinStJeorFats),
                'mifflinStJeorCarbohydrates' => round($mifflinStJeorCarbohydrates),

                'harrisBenedictProtein' => round($harrisBenedictProtein),
                'harrisBenedictFats' => round($harrisBenedictFats),
                'harrisBenedictCarbohydrates' => round($harrisBenedictCarbohydrates),

                'mifflinStJeorLoosingWeightProtein' => round($mifflinStJeorLoosingWeightProtein),
                'mifflinStJeorLoosingWeightFats' => round($mifflinStJeorLoosingWeightFats),
                'mifflinStJeorLoosingWeightCarbohydrates' => round($mifflinStJeorLoosingWeightCarbohydrates),

                'harrisBenedictLoosingWeightProtein' => round($harrisBenedictLoosingWeightProtein),
                'harrisBenedictLoosingWeightFats' => round($harrisBenedictLoosingWeightFats),
                'harrisBenedictLoosingWeightCarbohydrates' => round($harrisBenedictLoosingWeightCarbohydrates),

                'mifflinStJeorWeightGainProtein' => round($mifflinStJeorWeightGainProtein),
                'mifflinStJeorWeightGainFats' => round($mifflinStJeorWeightGainFats),
                'mifflinStJeorWeightGainCarbohydrates' => round($mifflinStJeorWeightGainCarbohydrates),

                'harrisBenedictWeightGainProtein' => round($harrisBenedictWeightGainProtein),
                'harrisBenedictWeightGainFats' => round($harrisBenedictWeightGainFats),
                'harrisBenedictWeightGainCarbohydrates' => round($harrisBenedictWeightGainCarbohydrates),


                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
