<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesBloodPressure
{



    function bloodPressureCalculation($gender,$age){


        $bloodPressureMens = 0;
        $bloodPressureWomens = 0;


        if ($gender) {

            if ($age>=1 and $age<=3) {

                $bloodPressureMens = '86/47';
                $bloodPressureWomens = '84/46';

            }

            if ($age == 4) {

                $bloodPressureMens = '88/51';
                $bloodPressureWomens = '87/49';

            }

            if ($age == 5) {

                $bloodPressureMens = '93/52';
                $bloodPressureWomens = '92/51';

            }

            if ($age == 6) {

                $bloodPressureMens = '97/55';
                $bloodPressureWomens = '96/53';

            }

            if ($age == 7) {

                $bloodPressureMens = '98/57';
                $bloodPressureWomens = '96/56';

            }

            if ($age == 8) {

                $bloodPressureMens = '98/56';
                $bloodPressureWomens = '96/57';

            }

            if ($age == 9) {

                $bloodPressureMens = '99/58';
                $bloodPressureWomens = '97/58';

            }


            if ($age == 10) {

                $bloodPressureMens = '100/61';
                $bloodPressureWomens = '104/62';

            }

            if ($age == 11) {

                $bloodPressureMens = '105/63';
                $bloodPressureWomens = '106/62';

            }

            if ($age == 12) {

                $bloodPressureMens = '104/63';
                $bloodPressureWomens = '106/68';

            }

            if ($age == 13) {

                $bloodPressureMens = '108/65';
                $bloodPressureWomens = '110/66';

            }

            if ($age == 14) {

                $bloodPressureMens = '110/61';
                $bloodPressureWomens = '109/67';

            }

            if ($age>=15 and $age<=19) {

                $bloodPressureMens = '123/76';
                $bloodPressureWomens = '116/72';

            }

            if ($age>=20 and $age<=29) {

                $bloodPressureMens = '126/79';
                $bloodPressureWomens = '120/75';

            }

            if ($age>=30 and $age<=39) {

                $bloodPressureMens = '129/81';
                $bloodPressureWomens = '127/80';

            }

            if ($age>=40 and $age<=49) {

                $bloodPressureMens = '135/83';
                $bloodPressureWomens = '137/84';

            }

            if ($age>=50 and $age<=59) {

                $bloodPressureMens = '142/85';
                $bloodPressureWomens = '144/85';

            }

            if ($age>=60 and $age<=69) {

                $bloodPressureMens = '145/82';
                $bloodPressureWomens = '159/85';

            }

            if ($age>=70 and $age<=79) {

                $bloodPressureMens = '147/82';
                $bloodPressureWomens = '157/83';

            }

            if ($age>=80 and $age<=90) {

                $bloodPressureMens = '145/78';
                $bloodPressureWomens = '150/79';

            }

            $bloodPressurePregnant=[
                1 => '110/70 – 140/90',
                2 => '110/70 – 130/80',
                3 => '110/70 – 120/80',
                4 => '100/60 – 140/80',
                5 => '120/70 – 140/80',
                6 => '110/60 – 120/80',
            ];

            /**
            До 4 недель первого триместра	110/70 – 140/90
            До 12 недель первого триместра	110/70 – 130/80 (в редких случая АД опускается до уровня 90/60)
            До 26 недель (второй триместр)	110/70 – 120/80
            До 29 недель (начало третьего триместра)	100/60 – 140/80
            До 30 недель третьего триместра	120/70 – 140/80
            До 40 недель (родоразрешение)	110/60 – 120/80
             */

            return [

                'bloodPressureMens' => $bloodPressureMens,
                'bloodPressureWomens' => $bloodPressureWomens,
                'bloodPressurePregnant' => $bloodPressurePregnant,


                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
