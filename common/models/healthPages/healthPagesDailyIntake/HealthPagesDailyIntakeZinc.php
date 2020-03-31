<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeZinc
{



    function dailyIntakeZincCalculation($gender,$age){

        $dailyIntakeVitaminZincPregnant = 0;
        $dailyIntakeVitaminZincLactation = 0;


        if ($age) {


            if ($age >= 1 and $age <=3){

                $dailyIntakeVitaminZinc = '3';

            }

            if ($age >= 4 and $age <= 8){

                $dailyIntakeVitaminZinc = '5';

            }


            if ($age >= 9 and $age <= 13){

                $dailyIntakeVitaminZinc = '8';

            }


            if ($age >= 14 and $age < 18){

                if ($gender ==1){

                    $dailyIntakeVitaminZinc = '9';

                }

                if ($gender ==2){

                    $dailyIntakeVitaminZinc = '11';

                }

            }

            if ($age >= 18){

                if ($gender ==1){

                    $dailyIntakeVitaminZinc = '8';
                    $dailyIntakeVitaminZincPregnant = '11';
                    $dailyIntakeVitaminZincLactation = '12';

                }

                if ($gender ==2){

                    $dailyIntakeVitaminZinc = '11';

                }


            }

            return [

                'dailyIntakeVitaminZinc' => $dailyIntakeVitaminZinc,
                'dailyIntakeVitaminZincPregnant' => $dailyIntakeVitaminZincPregnant,
                'dailyIntakeVitaminZincLactation' => $dailyIntakeVitaminZincLactation,



                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
