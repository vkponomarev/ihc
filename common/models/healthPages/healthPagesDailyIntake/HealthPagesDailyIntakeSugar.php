<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeSugar
{



    function dailyIntakeSugarCalculation($gender,$age){

        if ($age) {
            if ($age <=1){

                $dailyIntakeSugar = 0;
                $dailyIntakeSugarMax = 0;

            }

            if ($age >= 2 and $age <=3){

              $dailyIntakeSugar = 12.5;
              $dailyIntakeSugarMax = 25;

            }

            if ($age >= 4 and $age <= 8){

                $dailyIntakeSugar = 16.5;
                $dailyIntakeSugarMax = 32.5;

            }


            if ($age >= 9 and $age <= 13){

                $dailyIntakeSugar = 21.5;
                $dailyIntakeSugarMax = 42.5;

            }


            if ($age >= 14){

                if ($gender ==1){

                    $dailyIntakeSugar = 25;
                    $dailyIntakeSugarMax = 50;

                }

                if ($gender ==2){

                    $dailyIntakeSugar = 26.5;
                    $dailyIntakeSugarMax = 57.5;

                }


            }

            return [

                'dailyIntakeSugar' => $dailyIntakeSugar,
                'dailyIntakeSugarMax' => $dailyIntakeSugarMax,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
