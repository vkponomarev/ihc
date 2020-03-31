<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeVitaminOmega3
{



    function dailyIntakeVitaminOmega3Calculation($gender,$age){

        $dailyIntakeVitaminOmega3Pregnant = 0;
        $dailyIntakeVitaminOmega3Lactation = 0;
        $dailyIntakeVitaminOmega3HardWork  = 0;
        $dailyIntakeVitaminOmega3IntensiveTraining  = 0;
        $dailyIntakeVitaminOmega3Menopause = 0;

        if ($age) {


            if ($age >= 1 and $age <=3){

                $dailyIntakeVitaminOmega3 = '0.7';

            }

            if ($age >= 4 and $age <= 8){

                $dailyIntakeVitaminOmega3 = '0.9';

            }


            if ($age >= 9 and $age <= 13){

                $dailyIntakeVitaminOmega3 = '1-1.2';

            }


            if ($age >= 14 and $age < 18){

                $dailyIntakeVitaminOmega3 = '1.3-1.6';

            }

            if ($age >= 18 and $age <= 65){

                if ($gender ==1){

                    $dailyIntakeVitaminOmega3 = '0.8-1.2';
                    $dailyIntakeVitaminOmega3Pregnant = '2.8-3.2';
                    $dailyIntakeVitaminOmega3Lactation = '2-2.5';

                }

                if ($gender ==2){

                    $dailyIntakeVitaminOmega3 = '1-1.6';

                }

                $dailyIntakeVitaminOmega3HardWork  = '2.5-3.5';
                $dailyIntakeVitaminOmega3IntensiveTraining  = '2.5-3.5';


            }
            if ($age > 65){


                if ($gender == 1){

                    $dailyIntakeVitaminOmega3 = '1.5-2';

                }

                if ($gender == 2){

                    $dailyIntakeVitaminOmega3 = '1.5-2';

                }


            }

            return [

                'dailyIntakeVitaminOmega3' => $dailyIntakeVitaminOmega3,
                'dailyIntakeVitaminOmega3Pregnant' => $dailyIntakeVitaminOmega3Pregnant,
                'dailyIntakeVitaminOmega3Lactation' => $dailyIntakeVitaminOmega3Lactation,
                'dailyIntakeVitaminOmega3HardWork' => $dailyIntakeVitaminOmega3HardWork,
                'dailyIntakeVitaminOmega3IntensiveTraining' => $dailyIntakeVitaminOmega3IntensiveTraining,


                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
