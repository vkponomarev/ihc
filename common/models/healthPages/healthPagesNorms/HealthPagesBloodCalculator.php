<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesBloodCalculator
{


    public function bloodCalculatorCalculation($age = 'none', $weight)
    {
        $averageAmountOfBloodNewBorn=0;
        $amountOfBloodWomens = 0;
        $amountOfBloodMens = 0;
        $amountOfBloodWomensThirdTrimester = 0;


        //echo $age;
        if ($age or $age=='0') {

            $averageAmountOfBlood = $weight*0.06 . '-' . $weight*0.08;

            $amountOfBloodWomens = $weight*0.06;
            $amountOfBloodMens = $weight*0.07;
            $amountOfBloodWomensThirdTrimester = $weight*0.075;

            if ($age == '0'){

                $averageAmountOfBloodNewBorn = $weight*0.15;

            }

            $amountOfBloodWomensPeriod = 0.15;
            $amountOfBloodWomensPeriodPerDay = 0.15/6;


            /** Среднее значение количества крови в человеке
             * Для выяснения того, сколько ЦК может содержаться в организме,
             * можно воспользоваться общим методом. Чтобы вычислить, например,
             * сколько крови в человеке в литрах, если его вес 70 кг, следует его
             * массу тела умножить на 6 и 8% (0,06 и 0,08).
             *
             */


            return [

                'averageAmountOfBlood' => $averageAmountOfBlood,
                'amountOfBloodWomens' => $amountOfBloodWomens,
                'amountOfBloodWomensThirdTrimester' => $amountOfBloodWomensThirdTrimester,
                'amountOfBloodWomensPeriod' => $amountOfBloodWomensPeriod,
                'amountOfBloodWomensPeriodPerDay' => $amountOfBloodWomensPeriodPerDay,
                'averageAmountOfBloodNewBorn' => $averageAmountOfBloodNewBorn,
                'AmountOfBloodMens' => $amountOfBloodMens,
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
