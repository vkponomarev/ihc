<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesHeartRate
{



    function heartRateCalculation($gender,$age){


        $heartRateInDreamMid = 0;
        $heartRateInDreamMin = 0;
        $heartRateInDreamMax = 0;
        $heartRateMid = 0;
        $heartRateMin = 0;
        $heartRateMax = 0;
        $heartRatePregnant = 0;
        $heartRateWalkingMen = 0;
        $heartRateWalkingWomen = 0;
        $heartRateExerciseStress = 0;


        if ($gender) {

            if ($age>=1 and $age<=2){

                $heartRateMid = 112;
                $heartRateMin = $heartRateMid - 30;
                $heartRateMax = $heartRateMid + 30;

            }

            if ($age>=3 and $age<=4){

                $heartRateMid = 105;
                $heartRateMin = $heartRateMid - 20;
                $heartRateMax = $heartRateMid + 20;

            }

            if ($age>=5 and $age<=6){

                $heartRateMid = 94;
                $heartRateMin = $heartRateMid - 20;
                $heartRateMax = $heartRateMid + 20;

            }

            if ($age>=7 and $age<=8){

                $heartRateMid = 84;
                $heartRateMin = $heartRateMid - 20;
                $heartRateMax = $heartRateMid + 20;

            }

            if ($age>=9 and $age<=12){

                $heartRateMid = 75;
                $heartRateMin = $heartRateMid - 20;
                $heartRateMax = $heartRateMid + 20;

            }

            if ($age>=13 and $age<=15){

                $heartRateMid = 72;
                $heartRateMin = $heartRateMid - 15;
                $heartRateMax = $heartRateMid + 15;

            }

            if ($age>=16 and $age<=18){

                $heartRateMid = 67;
                $heartRateMin = $heartRateMid - 10;
                $heartRateMax = $heartRateMid + 10;

            }

            if ($age>=19 and $age<=30){

                $heartRateMid = 65;
                $heartRateMin = $heartRateMid - 10;
                $heartRateMax = $heartRateMid + 10;

            }

            if ($age>=31 and $age<=40){

                $heartRateMid = 73;
                $heartRateMin = $heartRateMid - 10;
                $heartRateMax = $heartRateMid + 10;

            }


            if ($age>=41 and $age<=50){

                $heartRateMid = 77;
                $heartRateMin = $heartRateMid - 10;
                $heartRateMax = $heartRateMid + 10;

            }

            if ($age>=51 and $age<=60){

                $heartRateMid = 83;
                $heartRateMin = $heartRateMid - 10;
                $heartRateMax = $heartRateMid + 10;

            }


            if ($age>=61 and $age<=70){

                $heartRateMid = 87;
                $heartRateMin = $heartRateMid - 10;
                $heartRateMax = $heartRateMid + 10;

            }


            if ($age>=71 and $age<=80){

                $heartRateMid = 93;
                $heartRateMin = $heartRateMid - 10;
                $heartRateMax = $heartRateMid + 10;

            }


            if ($age>=18 and $age<=29){

                $heartRatePregnant = [

                    1 => [75,65,85],
                    2 => [85,75,95],
                    3 => [103,95,110],

                ];

            }

            if ($age>=30 and $age<=39){

                $heartRatePregnant = [

                    1 => [78,65,90],
                    2 => [93,85,100],
                    3 => [108,100,115],

                ];

            }


            if ($age>=40){

                $heartRatePregnant = [

                    1 => [83,70,95],
                    2 => [98,90,105],
                    3 => [115,110,120],

                ];

            }

            /**
            1 '1-13' => [83,70,95], Перыый триместр, недели
            2 '14-26' => [98,90,105], Второй триместр, недели
            3 '27-40' => [115,110,120], Третий триместр, недели
            */


            if ($age>=18 and $age<=29){

                $heartRateWalkingMen = [

                    '30' => [150,145,155],
                    '60' => [145,140,150],
                    '90' => [140,135,145],
                    '120' => [135,130,140],

                ];

                $heartRateWalkingWomen = [

                    '30' => [155,150,160],
                    '60' => [150,145,155],
                    '90' => [145,140,150],
                    '120' => [140,135,145],

                ];

            }


            if ($age>=30 and $age<=39){

                $heartRateWalkingMen = [

                    '30' => [140,135,145],
                    '60' => [135,130,140],
                    '90' => [130,125,135],
                    '120' => [125,120,130],

                ];

                $heartRateWalkingWomen = [

                    '30' => [145,140,150],
                    '60' => [140,135,145],
                    '90' => [135,130,140],
                    '120' => [130,125,135],

                ];

            }


            if ($age>=40 and $age<=49){

                $heartRateWalkingMen = [

                    '30' => [130,125,135],
                    '60' => [125,120,130],
                    '90' => [120,115,125],
                    '120' => [115,110,120],

                ];

                $heartRateWalkingWomen = [

                    '30' => [135,130,140],
                    '60' => [130,125,135],
                    '90' => [125,120,130],
                    '120' => [120,115,125],

                ];

            }



            if ($age>=50 and $age<=59){

                $heartRateWalkingMen = [

                    '30' => [115,110,120],
                    '60' => [110,105,115],
                    '90' => [105,100,110],
                    '120' => [100,95,105],

                ];

                $heartRateWalkingWomen = [

                    '30' => [120,115,125],
                    '60' => [115,110,120],
                    '90' => [110,105,115],
                    '120' => [105,100,110],

                ];

            }

            if ($age>=60 and $age<=69){

                $heartRateWalkingMen = [

                    '30' => [105,100,110],
                    '60' => [100,95,105],
                    '90' => [95,90,100],
                    '120' => [90,85,95],

                ];

                $heartRateWalkingWomen = [

                    '30' => [110,105,115],
                    '60' => [105,100,110],
                    '90' => [100,95,105],
                    '120' => [95,90,100],

                ];

            }
            /**
            '30' => [110,105,115], Время хотьбы
            '60' => [105,100,110],
            '90' => [100,95,105],
            '120' => [95,90,100],
             */

            if ($age>=18 and $age<=20) {

                $heartRateExerciseStress = [

                    '1' => 100,
                    '2' => 120,
                    '3' => 140,
                    '4' => 160,
                    '5' => 180,
                    '6' => 200,

                ];
            }
            if ($age >= 21 and $age <= 25) {

                $heartRateExerciseStress = [

                    '1' => 98,
                    '2' => 117,
                    '3' => 137,
                    '4' => 156,
                    '5' => 176,
                    '6' => 195,

                ];
            }
            if ($age >= 26 and $age <= 30) {

                $heartRateExerciseStress = [

                    '1' => 95,
                    '2' => 114,
                    '3' => 133,
                    '4' => 152,
                    '5' => 171,
                    '6' => 190,

                ];
            }
            if ($age >= 31 and $age <= 35) {

                $heartRateExerciseStress = [

                    '1' => 93,
                    '2' => 111,
                    '3' => 130,
                    '4' => 148,
                    '5' => 167,
                    '6' => 185,

                ];
            }
            if ($age >= 36 and $age <= 40) {

                $heartRateExerciseStress = [

                    '1' => 90,
                    '2' => 108,
                    '3' => 126,
                    '4' => 144,
                    '5' => 162,
                    '6' => 108,

                ];
            }
            if ($age >= 41 and $age <= 45) {

                $heartRateExerciseStress = [

                    '1' => 88,
                    '2' => 105,
                    '3' => 123,
                    '4' => 140,
                    '5' => 158,
                    '6' => 175,

                ];
            }
            if ($age >= 46 and $age <= 50) {

                $heartRateExerciseStress = [

                    '1' => 85,
                    '2' => 102,
                    '3' => 119,
                    '4' => 136,
                    '5' => 153,
                    '6' => 170,

                ];
            }
            if ($age >= 51 and $age <= 55) {

                $heartRateExerciseStress = [

                    '1' => 83,
                    '2' => 99,
                    '3' => 116,
                    '4' => 132,
                    '5' => 149,
                    '6' => 165,

                ];
            }

            if ($age >= 56 and $age <= 60) {

                $heartRateExerciseStress = [

                    '1' => 81,
                    '2' => 96,
                    '3' => 112,
                    '4' => 128,
                    '5' => 144,
                    '6' => 160,

                ];
            }


            if ($age >= 61 and $age <= 65) {

                $heartRateExerciseStress = [

                    '1' => 78,
                    '2' => 93,
                    '3' => 109,
                    '4' => 124,
                    '5' => 140,
                    '6' => 155,

                ];
            }

            if ($age >= 66 and $age <= 70) {

                $heartRateExerciseStress = [

                    '1' => 75,
                    '2' => 90,
                    '3' => 105,
                    '4' => 120,
                    '5' => 135,
                    '6' => 150,

                ];

            }

            if ($age >= 71 and $age <= 75) {

                $heartRateExerciseStress = [

                    '1' => 73,
                    '2' => 87,
                    '3' => 102,
                    '4' => 116,
                    '5' => 131,
                    '6' => 145,

                ];

            }
            /**
            '1' => 73, Разминка
            '2' => 87, Легкая активность
            '3' => 102, Средняя активность
            '4' => 116, Интенсивная нагрузка
            '5' => 131, Повышенная нагрузка
             '6' => 145, Максимальная нагрузка

            */

            $heartRateInDreamMid = $heartRateMid * 0.92;
            $heartRateInDreamMin = $heartRateMin * 0.92;
            $heartRateInDreamMax = $heartRateMax * 0.92;

            return [

                'heartRateMid' => $heartRateMid,
                'heartRateMin' => $heartRateMin,
                'heartRateMax' => $heartRateMax,
                'heartRateInDreamMid' => round($heartRateInDreamMid),
                'heartRateInDreamMin' => round($heartRateInDreamMin),
                'heartRateInDreamMax' => round($heartRateInDreamMax),
                'heartRatePregnant' => $heartRatePregnant,
                'heartRateWalkingMen' => $heartRateWalkingMen,
                'heartRateWalkingWomen' => $heartRateWalkingWomen,
                'heartRateExerciseStress' => $heartRateExerciseStress,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
