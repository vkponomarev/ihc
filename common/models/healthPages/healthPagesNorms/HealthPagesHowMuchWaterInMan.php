<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesHowMuchWaterInMan
{


    public function howMuchWaterInManCalculation($gender,$age,$weight)
    {


        $waterInMan = 0;

        if ($age) {

            if ($age == 1)
                $waterInMan = $weight *0.86;
            if ($age > 1  and $age <=4)
                $waterInMan = $weight *0.80;
            if ($age >= 5  and $age <=14)
                $waterInMan = $weight *0.75;
            if ($age >= 15  and $age <=19)
                $waterInMan = $weight *0.725;
            if ($age >= 20  and $age <=35)
                $waterInMan = $weight *0.70;
            if ($age >= 36  and $age <=39)
                $waterInMan = $weight *0.65;
            if ($age >= 40  and $age <=50)
                $waterInMan = $weight *0.60;
            if ($age >= 51  and $age <=59)
                $waterInMan = $weight *0.55;
            if ($age >= 60  and $age <=80)
                $waterInMan = $weight *0.50;
            if ($age >= 81  and $age <=90)
                $waterInMan = $weight *0.45;

            if ($gender==1 and $age>=18){

                $waterInMan = $waterInMan - ($waterInMan/100*5);

            }


            return [

                'waterInMan' => round($waterInMan,2),

                'age' => $age,


                'result' => 1

            ];

        } else {

            return [

                'result' => 0,
                'age' => 'none',

            ];


        }

    }

}
