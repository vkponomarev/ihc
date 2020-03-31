<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeIron
{



    function dailyIntakeIronCalculation($gender,$age){

        $dailyIntakeIronSmoke = 0;
        $dailyIntakeIronPregnant = 0;

        if ($age) {
            if ($age <=1){

                $dailyIntakeIron = '4-10';


            }

            if ($age >= 2 and $age <=6){

                $dailyIntakeIron = '10';

            }

            if ($age >= 7 and $age <= 10){

                $dailyIntakeIron = '12';

            }


            if ($age >= 11 and $age <= 17){

                if ($gender ==1){

                    $dailyIntakeIron = '18';

                }

                if ($gender ==2){

                    $dailyIntakeIron = '15';

                }

            }


            if ($age >= 18){

                if ($gender ==1){

                    $dailyIntakeIron = '20';
                    $dailyIntakeIronPregnant = '30';
                }

                if ($gender ==2){

                    $dailyIntakeIron = '10';
                    $dailyIntakeIronSmoke = '17';
                }


            }

            /*дети: до года – 4-10 мг; 1-6 лет – 10 мг, 7-10 лет – 12 мг, 11-17 лет – 15 мг (для мальчиков) и 18 мг (для девочек);
            женщины старше 18 лет – 20 мг;
            беременные и кормящие – 30 мг;
            мужчины без вредных привычек – 10 мг;
            курящие и злоупотребляющие алкоголем мужчины – 15-18 мг.*/

            return [

                'dailyIntakeIron' => $dailyIntakeIron,
                'dailyIntakeIronPregnant' => $dailyIntakeIronPregnant,
                'dailyIntakeIronSmoke' => $dailyIntakeIronSmoke,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
