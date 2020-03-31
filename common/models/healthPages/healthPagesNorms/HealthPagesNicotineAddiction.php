<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesNicotineAddiction
{


    public function nicotineAddictionCalculation($wakeup, $restriction, $refuse, $howMuch, $often, $ill)
    {

        $factor = 0;

        if ($wakeup) {

            switch ($wakeup) {
                case 1:
                    $factor +=3;
                    break;
                case 2:
                    $factor +=2;
                    break;

            }

            switch ($restriction) {
                case 1:
                    $factor ++;
                    break;
                case 2:
                    break;

            }

            switch ($refuse) {
                case 1:
                    $factor ++;
                    break;
                case 2:
                    break;

            }

            switch ($howMuch) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
                case 3:
                    $factor +=2;
                    break;
                case 4:
                    $factor +=3;
                    break;

            }

            switch ($often) {
                case 1:
                    $factor ++;
                    break;
                case 2:
                    break;

            }

            switch ($ill) {
                case 1:
                    $factor ++;
                    break;
                case 2:
                    break;

            }



            return [

                'factor' => round($factor),
                'result' => 1

            ];

        } else {

            return [

                'result' => 0,


            ];


        }

    }

}
