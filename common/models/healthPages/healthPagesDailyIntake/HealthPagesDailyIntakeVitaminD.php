<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeVitaminD
{



    function dailyIntakeVitaminDCalculation($gender,$age){

        $dailyIntakeVitaminDPregnant = 0;
        $dailyIntakeVitaminDLactation = 0;

        if ($age) {


            if ($age >= 1 and $age <=3){

                $dailyIntakeVitaminD = 600;

            }

            if ($age >= 4 and $age <= 6){

                $dailyIntakeVitaminD = 600;

            }


            if ($age >= 7 and $age <= 10){

                $dailyIntakeVitaminD = 1100;

            }


            if ($age >= 11 and $age <= 17){

                $dailyIntakeVitaminD = 600;

            }

            if ($age >= 18 and $age <= 70){

                if ($gender ==1){

                    $dailyIntakeVitaminD = 600;
                    $dailyIntakeVitaminDPregnant = 1300;
                    $dailyIntakeVitaminDLactation = 1200;

                }

                if ($gender ==2){

                    $dailyIntakeVitaminD = 600;

                }


            }
            if ($age > 70){


                if ($gender ==1){

                    $dailyIntakeVitaminD = 800;

                }

                if ($gender ==2){

                    $dailyIntakeVitaminD = 800;

                }


            }


            /*1-3 года	800
            4-6 лет	900-1 000
            7-10	1 100
            11-17	1 200
            */
            return [

                'dailyIntakeVitaminD' => $dailyIntakeVitaminD,
                'dailyIntakeVitaminDPregnant' => $dailyIntakeVitaminDPregnant,
                'dailyIntakeVitaminDLactation' => $dailyIntakeVitaminDLactation,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
