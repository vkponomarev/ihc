<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeCalories
{



    function dailyIntakeCaloriesCalculation($gender,$weight,$height,$age,$exerciseStress){

        if ($gender) {
            $exerciseStressArray['1'] = 1; //- Базовый метаболизм
            $exerciseStressArray['2'] = 1.2; //- минимум или отсутствие физической нагрузки
            $exerciseStressArray['3'] = 1.375; //- занятия фитнесом 3 раза в неделю
            $exerciseStressArray['4'] = 1.4625; // - занятия фитнесом 5 раз в неделю
            $exerciseStressArray['5'] = 1.550; // - интенсивная физическая нагрузка 5 раз в неделю
            $exerciseStressArray['6'] = 1.6375; // - занятия фитнесом каждый день
            $exerciseStressArray['7'] = 1.725; // - каждый день интенсивно или по два раза в день
            $exerciseStressArray['8'] = 1.9; //- ежедневная физическая нагрузка плюс физическая работа


            if ($gender == 1) {

                $mifflinStJeor = (10 * $weight + 6.25 * $height - 5 * $age - 161) * $exerciseStressArray[$exerciseStress];

                $harrisBenedict = (665.1 + 9.563 * $weight + 1.85 * $height - 4.676 * $age) * $exerciseStressArray[$exerciseStress];
                //655.1 + 9.563 х вес (кг) + 1.85 х рост (см) — 4.676 х возраст (лет)
            } else {
                //Men
                $mifflinStJeor = (10 * $weight + 6.25 * $height - 5 * $age + 5) * $exerciseStressArray[$exerciseStress];
                //10 х вес (кг) + 6,25 х высоту (см) – 5 х возраст (лет) + 5
                $harrisBenedict = (66.5 + 13.75 * $weight + 5.003 * $height - 6.775 * $age) * $exerciseStressArray[$exerciseStress];
                //66,5 + 13,75 х вес (кг) + 5,003 х рост (см) – 6,775 х возраст (лет)

            }
            $mifflinStJeorLoosingWeightLittle = $mifflinStJeor / 100 * 80;
            $harrisBenedictLoosingWeightLittle = $harrisBenedict / 100 * 80;
            $mifflinStJeorLoosingWeightBig = $mifflinStJeor / 100 * 60;
            $harrisBenedictLoosingWeightBig = $harrisBenedict / 100 * 60;

            $mifflinStJeorLoosingWeightGain = $mifflinStJeor / 100 * 120;
            $harrisBenedictLoosingWeightGain = $harrisBenedict / 100 * 120;


            //$losingWeight =
            // -20% для обычного похудения и - 40% для быстрого похудения но не должно быть меньше вес (кг) ÷ 0,450 х 8.


            return [

                'mifflinStJeor' => round($mifflinStJeor),
                'harrisBenedict' => round($harrisBenedict),
                'loosingWeightLittleMSJ' => round($mifflinStJeorLoosingWeightLittle),
                'loosingWeightLittleHB' => round($harrisBenedictLoosingWeightLittle),
                'loosingWeightBigMSJ' => round($mifflinStJeorLoosingWeightBig),
                'loosingWeightBigHB' => round($harrisBenedictLoosingWeightBig),
                'gainWeightMSJ' => round($mifflinStJeorLoosingWeightGain),
                'gainWeightHB' => round($harrisBenedictLoosingWeightGain),
                'result' => 1,
            ];
        } else return ['result' => 0];
    }


}
