<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;


class HealthPagesHowMuchDrinkWater
{


    function howMuchDrinkWaterCalculation($gender, $age, $weight, $exerciseTime)
    {

        $drinkWaterFormulaOne = 0;
        $drinkWaterFormulaTwo = 0;
        $drinkWaterFormulaThree = 0;
        $drinkWaterFormulaFour = 0;
        $drinkWaterFormulaNewBorn = 0;
        $drinkWaterFormulaKid = 0;
        if ($gender) {
            /**
             * Этот калькулятор рассчитает норму потребления воды по такой формуле: V=M/450*14 где, V – объём нормы воды в литрах в сутки, M – ваша масса тела.
             *
             */
            $drinkWaterFormulaOne = $weight / 450 * 14;


            /**
             * В данном калькуляторе норма воды рассчитывается как 4% от массы тела.
             *
             */

            $drinkWaterFormulaTwo = $weight * 0.04;


            /**
             * V=(M*0,03) + (T*0,4) — для женщин
             * V=(M*0,04) + (T*0,6) — для мужчин
             * где, V – объём нормы воды в литрах в сутки, M – ваша масса тела,
             * T – время активного занятия спортом, или другим, соизмеримым по нагрузкам,
             * видом деятельности (при отсутствии оных необходимо ставить 0).
             */

            if ($gender == 1)
                $drinkWaterFormulaThree = ($weight * 0.03) + ($exerciseTime * 0.4);
            else
                $drinkWaterFormulaThree = ($weight * 0.04) + ($exerciseTime * 0.6);

            /**
             *
             * Диетологи в рекомендациях расходятся: от 20 до 40 мл чистой воды на 1 кг. веса человека в день.
             * Например: при весе 70 кг. – (берем по минимуму 20 мл на 1 кг веса) надо выпивать в день 7 стаканов чистой воды в день.
             *
             *
             */
            $drinkWaterFormulaFour = $weight * 0.02;


            $drinkWaterFormulaNewBorn = [

                1 => 0.090,
                2 => 0.135,
                3 => 0.150,
                4 => 0.140,
                5 => 0.130,

            ];

            /**
             * 1 - 1 сутки
             * 2 - 10 сутки
             * 3 - 3 месяца
             * 4 - 6 месяцев
             * 5 - 9 месяцев
             *
             */

            if ($age == 1)
                $drinkWaterFormulaKid = 0.130 * $weight;
            if ($age >= 2 and $age <= 4)
                $drinkWaterFormulaKid = 0.120 * $weight;
            if ($age >= 5 and $age <= 6)
                $drinkWaterFormulaKid = 0.105 * $weight;
            if ($age >= 7 and $age <= 10)
                $drinkWaterFormulaKid = 0.095 * $weight;
            if ($age >= 11 and $age <= 13)
                $drinkWaterFormulaKid = 0.075 * $weight;
            if ($age >= 14 and $age <= 17)
                $drinkWaterFormulaKid = 0.055 * $weight;

            return [

                'drinkWaterFormulaOne' => round($drinkWaterFormulaOne,2),
                'drinkWaterFormulaTwo' => round($drinkWaterFormulaTwo,2),
                'drinkWaterFormulaThree' => round($drinkWaterFormulaThree,2),
                'drinkWaterFormulaFour' => round($drinkWaterFormulaFour,2),
                'drinkWaterFormulaNewBorn' => $drinkWaterFormulaNewBorn,
                'drinkWaterFormulaKid' => round($drinkWaterFormulaKid,2),


                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
