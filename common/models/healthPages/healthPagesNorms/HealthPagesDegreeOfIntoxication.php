<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesHumanBiorhythms
{


    public function humanBiorhythmsCalculation($dateOfBirth, $date)
    {


        $comfortableTemperatureWinter = 0;
        $comfortableTemperatureSummer = 0;
        $comfortableTemperatureChildrens = 0;
        $comfortableTemperatureNewborns = 0;
        $comfortableTemperatureSleep = 0;
        $comfortableTemperatureSleepSummerNothing = 0;
        $comfortableTemperatureSwim = 0;
        $comfortableTemperatureSwimMinutes = 0;
        $comfortableTemperatureChildrensPreschoolInstitutionsWinter = 0;
        $comfortableTemperatureChildrensPreschoolInstitutionsSummer = 0;

        if ($dateOfBirth) {

            /**
             * B = (sin (2pi*t/P))*100 % где P = {23,28,33}

            B — состояния биоритма в % либо может выражаться как состояние относительно нуля, а также состояния нарастания или спадания.

            pi — число π, принимаем равным 3,14

            t — количество дней, прошедших с даты рождения до текущего момента.

            P — фаза биоритма.


            Подробнее: https://lyna.info/pravilnyj-algoritm-rascheta-bioritmov/
             *
             *
             * Физический – (-51.96%);
            Эмоциональный – (62.35%);
            Интеллектуальный – (45.82%).

            Подробнее: https://lyna.info/pravilnyj-algoritm-rascheta-bioritmov/
             */

            $dateOfBirth = new \DateTime($dateOfBirth);
            $calculationDate = new \DateTime($date);


            $countDays = $calculationDate->diff($dateOfBirth);
            $countDays = $countDays->format('%a');

            //echo 'День рождения = ' .  $dateOfBirth->format('Y-m-d') . '<br>';
            //echo '$calculationDate = ' .  $calculationDate->format('Y-m-d') . '<br>';
            //echo 'Сколько денй = ' .  $countDays . '<br>';

            $pi = 3.1465465475674575467;
            $humanBiorhythmsPhysical = sin(2*pi()*$countDays/23)*100;
            $humanBiorhythmsEmotional = sin((2*pi())*($countDays/28))*100;
            $humanBiorhythmsIntellectual = sin((2*pi())*($countDays/33))*100;

            $humanBiorhythmsSpiritual = sin(2*pi()*$countDays/53)*100;
            $humanBiorhythmsIntuition = sin((2*pi())*($countDays/38))*100;
            $humanBiorhythmsKnowledge = sin((2*pi())*($countDays/48))*100;
            $humanBiorhythmsAesthetic = sin((2*pi())*($countDays/43))*100;
            //echo '$humanBiorhythmsPhysical = ' .  $humanBiorhythmsPhysical . '<br>';
            // echo '$humanBiorhythmsEmotional = ' .  $humanBiorhythmsEmotional . '<br>';
            //echo '$humanBiorhythmsIntellectual = ' .  $humanBiorhythmsIntellectual . '<br>';

            /**
             * Вторичные биоритмы

            Духовный (53 дней)
            Интуиция (38 дней)
            Знание (48 дней)
            Эстетический (43 дней)
             *
             */

            //B = (sin (2pi*t/P))*100 % где P = {23,28,33}

            return [
                '$humanBiorhythmsPhysical' => round($humanBiorhythmsPhysical,2),
                '$humanBiorhythmsEmotional' => round($humanBiorhythmsEmotional,2),
                '$humanBiorhythmsIntellectual' => round($humanBiorhythmsIntellectual,2),
                '$humanBiorhythmsSpiritual' => round($humanBiorhythmsSpiritual,2),
                '$humanBiorhythmsIntuition' => round($humanBiorhythmsIntuition,2),
                '$humanBiorhythmsKnowledge' => round($humanBiorhythmsKnowledge,2),
                '$humanBiorhythmsAesthetic' => round($humanBiorhythmsAesthetic,2),

                'result' => 1

            ];

        } else {

            return [

                'result' => 0,


            ];


        }

    }

}
