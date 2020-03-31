<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakePotassium
{



    function dailyIntakePotassiumCalculation($gender,$age){

        $dailyIntakePotassiumPregnant = 0;
        $dailyIntakePotassiumLactation = 0;
        $dailyIntakePotassiumIntensiveTraining = 0;

        if ($age) {


            if ($age >= 1 and $age <=2){

                $dailyIntakePotassium = '400-600';

            }

            if ($age >= 3 and $age <= 5){

                $dailyIntakePotassium = '3000';

            }


            if ($age >= 6 and $age <= 8){

                $dailyIntakePotassium = '3800';

            }


            if ($age >= 9 and $age <= 13){

                    $dailyIntakePotassium = '4500';

            }


            if ($age >= 14 and $age <= 17){

                $dailyIntakePotassium = '4600';

            }


            if ($age >= 18){

                if ($gender ==1){

                    $dailyIntakePotassium = '4700';
                    $dailyIntakePotassiumPregnant = '5100';
                    $dailyIntakePotassiumLactation = '5100';

                }

                if ($gender ==2){

                    $dailyIntakePotassium = '4700';

                }

                $dailyIntakePotassiumIntensiveTraining = '5000';
            }

            return [

                'dailyIntakePotassium' => $dailyIntakePotassium,
                'dailyIntakePotassiumPregnant' => $dailyIntakePotassiumPregnant,
                'dailyIntakePotassiumLactation' => $dailyIntakePotassiumLactation,
                'dailyIntakePotassiumIntensiveTraining' => $dailyIntakePotassiumIntensiveTraining,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
