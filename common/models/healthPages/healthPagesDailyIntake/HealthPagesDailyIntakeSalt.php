<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeSalt
{



    function dailyIntakeSaltCalculation($age){

        if ($age) {


            if ($age < 1){

              $dailySaltIntake = 0;

            }

            if ($age >= 1 and $age <= 3){

                $dailySaltIntake = 2;

            }


            if ($age > 3 and $age <= 12){

                $dailySaltIntake = 3.5;

            }


            if ($age > 12){

                $dailySaltIntake = 5;

            }

            return [

                'dailySaltIntake' => $dailySaltIntake,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
