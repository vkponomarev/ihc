<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeVitaminE
{



    function dailyIntakeVitaminECalculation($gender,$age){

        $dailyIntakeVitaminEPregnant = 0;
        $dailyIntakeVitaminELactation = 0;

        if ($age) {


            if ($age >= 1 and $age <=3){

                $dailyIntakeVitaminE = [6,9];

            }

            if ($age >= 4 and $age <= 8){

                $dailyIntakeVitaminE = [7.5,10.5];

            }


            if ($age >= 9 and $age <= 13){

                $dailyIntakeVitaminE = [11,16.5];

            }


            if ($age >= 14 and $age <= 18){

                $dailyIntakeVitaminE = [15,22.5];

            }

            if ($age >= 19){

                if ($gender ==1){

                    $dailyIntakeVitaminE = [15,22.5];
                    $dailyIntakeVitaminEPregnant = [15,22.5];
                    $dailyIntakeVitaminELactation = [19,28.5];

                }

                if ($gender ==2){

                    $dailyIntakeVitaminE = [15,22.5];

                }


            }

            return [

                'dailyIntakeVitaminE' => $dailyIntakeVitaminE,
                'dailyIntakeVitaminEPregnant' => $dailyIntakeVitaminEPregnant,
                'dailyIntakeVitaminELactation' => $dailyIntakeVitaminELactation,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
