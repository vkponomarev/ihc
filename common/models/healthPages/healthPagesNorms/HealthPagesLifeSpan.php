<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesLifeSpan
{


    public function lifeSpanCalculation(
        $gender,
        $grandyLifeSpan,
        $education,
        $work,
        $hobby,
        $hotTempered,
        $income,
        $pets,
        $freeTime,
        $workTime,
        $eat,
        $eatSea,
        $eatFruit,
        $vine,
        $alcohol,
        $smoke,
        $sport,
        $walk,
        $sleep,
        $sickLeave,
        $pressure,
        $weight,
        $medical,
        $intestines,
        $pills
    )
    {

        $factor = 0;

        if ($gender) {


            switch ($gender) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;

            }

            switch ($grandyLifeSpan) {
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

            switch ($education) {
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
            //6

            switch ($work) {
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
            //9

            switch ($hobby) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;

            }
            //10


            switch ($hotTempered) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //11


            switch ($income) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //12

            switch ($pets) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //13

            switch ($freeTime) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //14

            switch ($workTime) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //15

            switch ($eat) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //16

            switch ($eatSea) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //17

            switch ($eatFruit) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //18

            switch ($vine) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //19

            switch ($alcohol) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
                case 3:
                    $factor ++;
                    break;
            }
            //20

            switch ($smoke) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //21

            switch ($sport) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
                case 3:
                    $factor +=2;
                    break;
            }
            //23

            switch ($walk) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
                case 3:
                    $factor +=2;
                    break;
            }
            //25

            switch ($sleep) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
                case 3:
                    $factor ++;
                    break;
            }
            //26

            switch ($sickLeave) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;

            }
            //27

            switch ($pressure) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
                case 3:
                    $factor ++;
                    break;

            }
            //27

            switch ($weight) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
                case 3:
                    $factor ++;
                    break;

            }
            //28

            switch ($medical) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //29

            switch ($intestines) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //30

            switch ($pills) {
                case 1:
                    break;
                case 2:
                    $factor ++;
                    break;
            }
            //31
            //33


            /**
             *
             * 100 - $factor 0
             * 50 - $factor 32
             *
             */
            /**
            32 - 100%
            23 - x%

            50 - 100
            x  -
            */
            $lifeSpan = 50 + (50 - ($factor * 100) / 33 * 50 / 100);

            return [

                'lifeSpan' => round($lifeSpan),

                'result' => 1

            ];

        } else {

            return [

                'result' => 0,


            ];


        }

    }

}
