<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeVitaminB12
{



    function dailyIntakeVitaminB12Calculation($gender,$age){

        $dailyIntakeVitaminB12Pregnant = 0;
        $dailyIntakeVitaminB12Lactation = 0;
        $dailyIntakeVitaminB12HardWork  = 0;
        $dailyIntakeVitaminB12IntensiveTraining  = 0;
        $dailyIntakeVitaminB12Menopause = 0;

        if ($age) {


            if ($age >= 1 and $age <=3){

                $dailyIntakeVitaminB12 = '0,9-1,1';

            }

            if ($age >= 4 and $age <= 6){

                $dailyIntakeVitaminB12 = '1,5';

            }


            if ($age >= 7 and $age <= 10){

                $dailyIntakeVitaminB12 = '2,0-2,2';

            }


            if ($age >= 11 and $age <= 16){

                $dailyIntakeVitaminB12 = '2,9';

            }

            if ($age >= 18 and $age <= 50){

                if ($gender ==1){

                    $dailyIntakeVitaminB12 = '3';
                    $dailyIntakeVitaminB12Pregnant = '4';
                    $dailyIntakeVitaminB12Lactation = '4';

                }

                if ($gender ==2){

                    $dailyIntakeVitaminB12 = '3';
                    $dailyIntakeVitaminB12HardWork  = '4,5';
                    $dailyIntakeVitaminB12IntensiveTraining  = '4,5';
                }


            }
            if ($age > 50){


                if ($gender ==1){

                    $dailyIntakeVitaminB12 = '3';
                    $dailyIntakeVitaminB12Menopause = '0.';
                }

                if ($gender ==2){

                    $dailyIntakeVitaminB12 = 3;

                }


            }

            return [

                'dailyIntakeVitaminB12' => $dailyIntakeVitaminB12,
                'dailyIntakeVitaminB12Pregnant' => $dailyIntakeVitaminB12Pregnant,
                'dailyIntakeVitaminB12Lactation' => $dailyIntakeVitaminB12Lactation,
                'dailyIntakeVitaminB12Menopause' => $dailyIntakeVitaminB12Menopause,
                'dailyIntakeVitaminB12HardWork' => $dailyIntakeVitaminB12HardWork,
                'dailyIntakeVitaminB12IntensiveTraining' => $dailyIntakeVitaminB12IntensiveTraining,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
