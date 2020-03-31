<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesHumidityRate
{



    function humidityRateCalculation(){


        $humidityRateAverage = '30-40%';
        $humidityRateRecomendedWinter = '30-45%';
        $humidityRateRecomendedSummer = '30-60%';
        $humidityRateChildrens = '50-60%';
        $humidityRateGrowPlants = '50-70%';
        $humidityRateSpendTime = '40-70%';

        $humidityRateFlat = [
            1 => '40-55%',
            2 => '40-50%',
            3 => '30-40%',
            4 => '50-60%',
            5 => '40-55%',
            6 => '40-45%',
            7 => '40-50%',
            8 => '40-45%',
        ];
        /**
         *
         * Для спальни это 16-20 град. С. и 40-55 проц.
         * В кухне 19-22 °C, 40-50 %.
         * В рабочем кабинете 18-22°C при 30-40 %.
         * Детская, игровая комната – от 18 до 24° C, от 50 до 60%.
         * В душевой или ванной 21-23 градуса при 40-55 проц.
         * Для прихожей, холла 18-19 град, 40-45%.
         * Гостиная, гостевая, зал, столовая – 18-23 и 40-50 соответственно.
         * В туалете, санузле 16-19 град. при 40-45%.
         */


        return [

            'humidityRateAverage' => $humidityRateAverage,
            'humidityRateRecomendedWinter' => $humidityRateRecomendedWinter,
            'humidityRateRecomendedSummer' => $humidityRateRecomendedSummer,
            'humidityRateChildrens' => $humidityRateChildrens,
            'humidityRateGrowPlants' => $humidityRateGrowPlants,
            'humidityRateSpendTime' => $humidityRateSpendTime,
            'humidityRateFlat' => $humidityRateFlat,

            'result' => 1,

        ];
    }


}
