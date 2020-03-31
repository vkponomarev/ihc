<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeMagnesium
{



    function dailyIntakeMagnesiumCalculation($gender,$age){

        $dailyIntakeMagnesiumPregnant = 0;
        $dailyIntakeMagnesiumLactation = 0;

        if ($age) {


            if ($age >= 1 and $age <=3){

                $dailyIntakeMagnesium = '92-120';

            }

            if ($age >= 4 and $age <= 8){

                $dailyIntakeMagnesium = '142-230';

            }


            if ($age >= 9 and $age <= 12){

                $dailyIntakeMagnesium = '255-410';

            }


            if ($age >= 13 and $age < 18){

                if ($gender ==1){

                    $dailyIntakeMagnesium = '350-650';


                }

                if ($gender ==2){

                    $dailyIntakeMagnesium = '400-700';

                }

            }


            if ($age >= 18 and $age <= 30){

                if ($gender ==1){

                    $dailyIntakeMagnesium = '320-620';
                    $dailyIntakeMagnesiumPregnant = '420-700';
                    $dailyIntakeMagnesiumLactation = '420-650';

                }

                if ($gender ==2){

                    $dailyIntakeMagnesium = '380-680';

                }

            }


            if ($age > 30){

                if ($gender ==1){

                    $dailyIntakeMagnesium = '330-600';
                    $dailyIntakeMagnesiumPregnant = '420-700';
                    $dailyIntakeMagnesiumLactation = '420-650';

                }

                if ($gender ==2){

                    $dailyIntakeMagnesium = '450-750';

                }

            }

            return [

                'dailyIntakeMagnesium' => $dailyIntakeMagnesium,
                'dailyIntakeMagnesiumPregnant' => $dailyIntakeMagnesiumPregnant,
                'dailyIntakeMagnesiumLactation' => $dailyIntakeMagnesiumLactation,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
