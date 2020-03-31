<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeFolicAcid
{



    function dailyIntakeFolicAcidCalculation($gender,$age){

        $dailyIntakeFolicAcidPregnant = 0;
        $dailyIntakeFolicAcidLactation = 0;


        if ($age) {


            if ($age >= 1 and $age <=3){

                $dailyIntakeFolicAcid = '50';

            }

            if ($age >= 4 and $age <= 6){

                $dailyIntakeFolicAcid = '75';

            }


            if ($age >= 7 and $age <= 10){

                $dailyIntakeFolicAcid = '100';

            }


            if ($age >= 11 and $age <= 14){

                $dailyIntakeFolicAcid = '150';

            }

            if ($age >= 15 and $age <= 17){

                $dailyIntakeFolicAcid = '200';

            }
            if ($age >= 18){

                if ($gender ==1){

                    $dailyIntakeFolicAcid = '300-400';
                    $dailyIntakeFolicAcidPregnant = '600-1000';
                    $dailyIntakeFolicAcidLactation = '500-800';
                }

                if ($gender ==2){

                    $dailyIntakeFolicAcid = '300-400';

                }

            }

            if ($age >= 71){

                $dailyIntakeFolicAcid = '1300';

            }

            return [

                'dailyIntakeFolicAcid' => $dailyIntakeFolicAcid,
                'dailyIntakeFolicAcidPregnant' => $dailyIntakeFolicAcidPregnant,
                'dailyIntakeFolicAcidLactation' => $dailyIntakeFolicAcidLactation,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
