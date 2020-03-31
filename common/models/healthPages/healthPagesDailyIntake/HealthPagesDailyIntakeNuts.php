<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeNuts
{



    function dailyIntakeNutsCalculation($gender,$age){

        if ($gender) {

            if ($gender == 1){

                $walnutGram = 60;
                $walnutPiece = 12;
                $pineNutGram = 100;
                $pineNutPiece = 833;
                $cashewGram = 50;
                $cashewPiece = 45;
                $pistachiosGram = 70;
                $pistachiosPiece = 107;
                $peanutGram = 14;
                $peanutPiece = 35;
                $almondGram = 11;
                $almondPiece = 14;
                $hazelnutGram = 70;
                $hazelnutPiece = 77;

            }

            if ($gender == 2){

                $walnutGram = 120;
                $walnutPiece = 24;
                $pineNutGram = 200;
                $pineNutPiece = 1666;
                $cashewGram = 150;
                $cashewPiece = 136;
                $pistachiosGram = 150;
                $pistachiosPiece = 230;
                $peanutGram = 14;
                $peanutPiece = 35;
                $almondGram = 22;
                $almondPiece = 27;
                $hazelnutGram = 150;
                $hazelnutPiece = 166;

            }


            if ($age < 18){

                $walnutGram = 35;
                $walnutPiece = 7;
                $pineNutGram = 30;
                $pineNutPiece = 250;
                $cashewGram = 30;
                $cashewPiece = 27;
                $pistachiosGram = 45;
                $pistachiosPiece = 69;
                $peanutGram = 6;
                $peanutPiece = 15;
                $almondGram = 6;
                $almondPiece = 7;
                $hazelnutGram = 4;
                $hazelnutPiece = 4;


            }

            if ($age < 3){

                $peanutGram = 0;
                $peanutPiece = 0;

            }


            /**
             * Walnut - Грецкий орех 5гр один орех
             * Pine nut - Кедровый орех 0,12
             * Cashew - Кешью 1.1гр один орех
             * Pistachios - Фисташки 0,65
             * Peanut - Арахис 0,4
             * Almond - Миндаль 0.8 гр один орех
             * Hazelnut - Фундук 0,9
             * nutmeg - Мускатный орех 4
            */
            return [

                'walnutGram' => $walnutGram,
                'walnutPiece' => $walnutPiece,
                'pineNutGram' => $pineNutGram,
                'pineNutPiece' => $pineNutPiece,
                'cashewGram' => $cashewGram,
                'cashewPiece' => $cashewPiece,
                'pistachiosGram' => $pistachiosGram,
                'pistachiosPiece' => $pistachiosPiece,
                'peanutGram' => $peanutGram,
                'peanutPiece' => $peanutPiece,
                'almondGram' => $almondGram,
                'almondPiece' => $almondPiece,
                'hazelnutGram' => $hazelnutGram,
                'hazelnutPiece' => $hazelnutPiece,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
