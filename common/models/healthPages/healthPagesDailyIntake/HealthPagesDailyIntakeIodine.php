<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeIodine
{



    function dailyIntakeIodineCalculation($gender,$age){

        $dailyIntakeVitaminIodinePregnant = 0;
        $dailyIntakeVitaminIodineLactation = 0;
        $dailyIntakeVitaminIodineIntensiveTraining = 0;

        if ($age) {


            if ($age >= 1 and $age <=2){

                $dailyIntakeVitaminIodine = '50';

            }

            if ($age >= 3 and $age <= 5){

                $dailyIntakeVitaminIodine = '60-90';

            }


            if ($age >= 6 and $age <= 8){

                $dailyIntakeVitaminIodine = '90-120';

            }


            if ($age >= 9 and $age < 13){

                $dailyIntakeVitaminIodine = '120';

            }

            if ($age >= 14 and $age <= 17){

                $dailyIntakeVitaminIodine = '150';

            }

            if ($age >= 18){

                if ($gender ==1){

                    $dailyIntakeVitaminIodine = '150';
                    $dailyIntakeVitaminIodinePregnant = '300';
                    $dailyIntakeVitaminIodineLactation = '300';

                }

                if ($gender ==2){

                    $dailyIntakeVitaminIodine = '180';

                }

                $dailyIntakeVitaminIodineIntensiveTraining = '400';

            }

            return [

                'dailyIntakeVitaminIodine' => $dailyIntakeVitaminIodine,
                'dailyIntakeVitaminIodinePregnant' => $dailyIntakeVitaminIodinePregnant,
                'dailyIntakeVitaminIodineLactation' => $dailyIntakeVitaminIodineLactation,
                'dailyIntakeVitaminIodineIntensiveTraining' => $dailyIntakeVitaminIodineIntensiveTraining,



                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
