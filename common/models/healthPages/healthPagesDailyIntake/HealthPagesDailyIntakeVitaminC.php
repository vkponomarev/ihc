<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeVitaminC
{



    function dailyIntakeVitaminCCalculation($gender,$age){

        $dailyIntakeVitaminCColds = 0;
        $dailyIntakeVitaminCPregnant = 0;
        $dailyIntakeVitaminCLactation = 0;
        $dailyIntakeVitaminCSportsman = 0;

        if ($age) {


            if ($age >= 1 and $age <=7){

                $dailyIntakeVitaminC = '47.5';

            }

            if ($age >= 8 and $age <= 11){

                $dailyIntakeVitaminC = '65.5';
                $dailyIntakeVitaminCColds = '500';
            }


            if ($age >= 12 and $age <= 17){

                if ($gender ==1){

                    $dailyIntakeVitaminC = '70';

                }

                if ($gender ==2){

                    $dailyIntakeVitaminC = '90';

                }

                $dailyIntakeVitaminCColds = '500';

            }


            if ($age >= 18 and $age <= 65){

                if ($gender ==1){

                    $dailyIntakeVitaminC = '70';
                    $dailyIntakeVitaminCPregnant = '100';
                    $dailyIntakeVitaminCLactation = '125';
                }

                if ($gender ==2){

                    $dailyIntakeVitaminC = '85';

                }

                $dailyIntakeVitaminCSportsman = '100-400';
                $dailyIntakeVitaminCColds = '1000';
            }


            if ($age >= 66){


                $dailyIntakeVitaminC = '82.5';
                $dailyIntakeVitaminCColds = '1000';

            }

            return [

                'dailyIntakeVitaminC' => $dailyIntakeVitaminC,
                'dailyIntakeVitaminCColds' => $dailyIntakeVitaminCColds,
                'dailyIntakeVitaminCPregnant' => $dailyIntakeVitaminCPregnant,
                'dailyIntakeVitaminCLactation' => $dailyIntakeVitaminCLactation,
                'dailyIntakeVitaminCSportsman' => $dailyIntakeVitaminCSportsman,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
