<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeCalcium
{



    function dailyIntakeCalciumCalculation($gender,$age){

        $dailyIntakeCalciumPregnant = 0;
        $dailyIntakeCalciumLactation = 0;


        if ($age) {


            if ($age >= 1 and $age <=3){

                $dailyIntakeCalcium = '700';

            }

            if ($age >= 4 and $age <= 8){

                $dailyIntakeCalcium = '1000';

            }


            if ($age >= 9 and $age <= 17){

                $dailyIntakeCalcium = '1300';

            }


            if ($age >= 18 and $age <= 50){

                if ($gender ==1){

                    $dailyIntakeCalcium = '1000';
                    $dailyIntakeCalciumPregnant = '1200';
                    $dailyIntakeCalciumLactation = '1200';

                }

                if ($gender ==2){

                    $dailyIntakeCalcium = '1000';

                }

            }

            if ($age >= 51 and $age <= 70){

                if ($gender ==1){

                    $dailyIntakeCalcium = '1300';

                }

                if ($gender ==2){

                    $dailyIntakeCalcium = '1000';

                }

            }

            if ($age >= 71){

                $dailyIntakeCalcium = '1300';

            }

            return [

                'dailyIntakeCalcium' => $dailyIntakeCalcium,
                'dailyIntakeCalciumPregnant' => $dailyIntakeCalciumPregnant,
                'dailyIntakeCalciumLactation' => $dailyIntakeCalciumLactation,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
