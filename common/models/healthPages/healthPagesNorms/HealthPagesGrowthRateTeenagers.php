<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesGrowthRateTeenagers
{


    public function growthRateTeenagersCalculation($gender, $age)
    {

        if ($gender and $age>=12 and $age<=17){

            $growRate = (new HealthPagesGrowthRateArray())->teenagersWeightHeight($gender,$age);

            return [

                'growRate' => $growRate,
                'result' => 1

            ];

        } else {

            return [

                'result' => 0,

            ];


        }


    }



}
