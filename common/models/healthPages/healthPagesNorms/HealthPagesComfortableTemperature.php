<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesComfortableTemperature
{


    public function comfortableTemperatureCalculation($season)
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

        if ($season) {

            /**
             * 1 - Жилая комната
             * 2 - Жилая комната в районах с температурой ниже 31градуса
             * 3 - Кухня
             * 4 - Туалет
             * 5 - Вання, совмещенный санузел
             * 6 - Помещения для отдыха и учебных занятий
             * 7 - Межквартирный коридор
             * 8 - Вестибюль, лестничный коридор
             * 9 - Кладовые
             *  Опитмальная / Допустимая
             */
            $comfortableTemperatureWinter =[

                1 => ['20-22','18-24'],
                2 => ['21-23','20-24'],
                3 => ['19-21','18-26'],
                4 => ['19-21','18-26'],
                5 => ['24-26','18-26'],
                6 => ['20-22','18-24'],
                7 => ['18-20','16-22'],
                8 => ['16-18','14-20'],
                9 => ['16-18','12-22'],

            ];


            /**
             *
             * Жилая комната
             * Опитмальная / Допустимая
             */
            $comfortableTemperatureSummer =['22-25','20-28'];

            $comfortableTemperatureChildrens = '18-20';
            $comfortableTemperatureNewborns = '18-22';

            $comfortableTemperatureSleep = '16-19';

            $comfortableTemperatureSleepSummerNothing = '30-32';


            /**
             * 1 - Минимальная температура реки
             * 2 - Комфортная температура
             */
            $comfortableTemperatureSwim = ['20-22','22-26'];

            /**
             *
             * 1 - 24
             * 2 - 22
             * 3 - 20
             * 4 - 18-19
             *
             */
            $comfortableTemperatureSwimMinutes = [

                1 => '15-40',
                2 => '10-30',
                3 => '5-10',
                4 => '3-8'

            ];
            /**
             *
             * 1 - Групповая раздевалка и туалет для младших групп
             * 2 - Групповая раздевалка и туалет для дошкольных групп
             * 3 - Спальная для младших групп
             * 4 - Спальная для дошкольных групп
             * 5 - Вестибюль, лестичная клетка
             * Опитмальная / Допустимая
             */

            $comfortableTemperatureChildrensPreschoolInstitutionsWinter = [

                1 => ['21-23','20-24'],
                2 => ['19-21','18-25'],
                3 => ['20-22','19-23'],
                4 => ['19-21','18-23'],
                5 => ['18-20','16-22'],

                ];

            $comfortableTemperatureChildrensPreschoolInstitutionsSummer = ['23-25','18-28'];


            return [

                'comfortableTemperatureWinter' => $comfortableTemperatureWinter,
                'comfortableTemperatureSummer' => $comfortableTemperatureSummer,
                'comfortableTemperatureChildrens' => $comfortableTemperatureChildrens,
                'comfortableTemperatureNewborns' => $comfortableTemperatureNewborns,
                'comfortableTemperatureSleep' => $comfortableTemperatureSleep,
                'comfortableTemperatureSleepSummerNothing' => $comfortableTemperatureSleepSummerNothing,
                'comfortableTemperatureSwim' => $comfortableTemperatureSwim,
                'comfortableTemperatureSwimMinutes' => $comfortableTemperatureSwimMinutes,
                'comfortableTemperatureChildrensPreschoolInstitutionsWinter' => $comfortableTemperatureChildrensPreschoolInstitutionsWinter,
                'comfortableTemperatureChildrensPreschoolInstitutionsSummer' => $comfortableTemperatureChildrensPreschoolInstitutionsSummer,

                'result' => 1

            ];

        } else {

            return [

                'result' => 0,
                'age' => 'none',

            ];


        }

    }

}
