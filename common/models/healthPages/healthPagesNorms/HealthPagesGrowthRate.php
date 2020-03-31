<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesGrowthRate
{


    public function growthRateCalculation($gender, $age, $height, $physique)
    {
        $legLength = 0;
        if ($gender and $age >= 18 and $age <= 90) {




            $growthRate = 50 + 0.75 * ($height - 150) + ($age - 20) / 4;


            if ($age >= 18 and $age <= 40)
                $growthRateBrock = $height-110;



            if ($age >= 18 and $age <= 40)
                $growthRateBrock = $height-100;



            if ($physique==3)
                $growthRateBrock = $growthRateBrock - ($growthRateBrock/100*10);

            if ($physique==2)
                $growthRateBrock = $growthRateBrock + ($growthRateBrock/100*10);

            if ($height<=152.3)
                $growthRateNagler = $height/3.38;

            if ($height>=152.4){

                $heightTmp = ($height-152.4)/2.45;

                $growthRateNagler = 45 + 0.9 * $heightTmp;

                $growthRateNagler = $growthRateNagler + ($growthRateNagler/100*10);

            }


            if ($height>=161 and $height<=167)
                $legLength = '84-89';

            if ($height>=168 and $height<=174)
                $legLength = '90-94';

            if ($height>=175 and $height<=180)
                $legLength = '95-100';

            if ($physique==1)
                $legLengthPhysique = $height/2+5;
            if ($physique==2)
                $legLengthPhysique = $height/2+3;
            if ($physique==3)
                $legLengthPhysique = $height/2+7;


            /**
             * Р — в данном случае рост, а В — возраст в годах. Масса тела = 50 + 0,75 (Р — 150) + (В — 20) : 4
             *
             * Формула Брока для людей моложе 40 лет равна «рост (в см) минус 110″, после 40 лет — «рост (в см) минус 100″.
            Источник: https://balabolka.net/professionalnye-tablitsy-sootnosheniya-rosta-i-vesa/
             *
             *Формула Наглера для соотношения роста и веса Существует формула Наглера,
             * которая позволяет вычислять идеальное соотношение веса и роста.
             * На 152,4 см роста должно приходиться 45 килограммов веса.
             * На каждый дюйм (то есть 2,45 см) сверх 152,4 см должно быть ещё по 900 граммов,
             * Плюс ещё 10% от полученного веса.
            Источник: https://balabolka.net/professionalnye-tablitsy-sootnosheniya-rosta-i-vesa/
             */

            return [

                'growthRate' => round($growthRate,1),
                'growthRateBrock' => round($growthRateBrock,1),
                'growthRateNagler' => round($growthRateNagler,1),
                'legLength' => round($legLength,1),
                'legLengthPhysique' => round($legLengthPhysique,1),
                'result' => 1

            ];

        } else {

            return [

                'result' => 0,

            ];


        }

    }

}
