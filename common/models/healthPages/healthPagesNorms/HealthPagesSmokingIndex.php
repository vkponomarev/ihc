<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesSmokingIndex
{


    public function smokingIndexCalculation($cigarette, $smoking)
    {



        $smokingIndex = 0;

        if ($cigarette) {

            /**
             *Рассчитывается как произведение количества
             * выкуриваемых сигарет в день и стажа курения
             * в годах поделенное на 20. Если индекс курения
             * больше 10, то это является достоверным
             * фактором риска развития хронической
             * обструктивной болезни легких.
             */

            $smokingIndex = $cigarette * $smoking / 20;

            return [
                'smokingIndex' => round($smokingIndex,2),

                'result' => 1

            ];

        } else {

            return [

                'result' => 0,


            ];


        }

    }

}
