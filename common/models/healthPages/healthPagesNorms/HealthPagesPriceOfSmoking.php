<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesPriceOfSmoking
{


    public function priceOfSmokingCalculation($cigaretteCountPerDay, $smokingYears, $costOfPackOfCigarette, $nicotineInOneCigarette)
    {

        $cigaretteCountYear = 0;
        $cigaretteCountMonth = 0;
        $cigaretteCountWeek = 0;
        $cigarettePackCountYear = 0;
        $nicotineCount = 0;
        $costCountAllTime = 0;
        $costCountOneMonth = 0;
        $costCountOneYear = 0;
        $costCountOneDay = 0;
        $costCountOneWeek = 0;

        if ($cigaretteCountPerDay) {

            $cigaretteCountYear = $cigaretteCountPerDay * 365;
            $cigaretteCountMonth = $cigaretteCountPerDay * 30;
            $cigaretteCountWeek = $cigaretteCountPerDay * 7;

            $cigaretteCountAll = $cigaretteCountPerDay * $smokingYears * 365;

            $cigarettePackCountYear = $cigaretteCountYear / 20;
            $cigarettePackCountAll = $cigaretteCountYear /20 * $smokingYears;

            $nicotineCount = $cigaretteCountAll * $nicotineInOneCigarette;


            $costCountAllTime = $cigarettePackCountAll * $costOfPackOfCigarette;
            $costCountOneMonth = $cigaretteCountMonth / 20 * $costOfPackOfCigarette;
            $costCountOneYear = $cigaretteCountYear / 20 * $costOfPackOfCigarette;
            $costCountOneDay = $cigaretteCountPerDay / 20 * $costOfPackOfCigarette;
            $costCountOneWeek = $cigaretteCountWeek / 20 * $costOfPackOfCigarette;

            return [
                'cigaretteCountAll' => $cigaretteCountAll,
                'cigarettePackCountAll' => $cigarettePackCountAll,
                'nicotineCount' => $nicotineCount,
                'costCountAllTime' => $costCountAllTime,
                'costCountOneYear' => $costCountOneYear,
                'costCountOneMonth' => $costCountOneMonth,
                'costCountOneWeek' => $costCountOneWeek,
                'costCountOneDay' => $costCountOneDay,

                'result' => 1

            ];

        } else {

            return [

                'result' => 0,


            ];


        }

    }

}
