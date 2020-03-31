<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesEyePressure
{



    function eyePressureCalculation($gender,$age){


        $eyePressureMens = 0;
        $eyePressureWomens = 0;


        if ($gender) {

            if ($age>=1 and $age<=19) {

                $eyePressureMens = '10-23';
                $eyePressureWomens = '10-23';

            }

            if ($age>=20 and $age<=29) {

                $eyePressureMens = '14,93 +- 2,47';
                $eyePressureWomens = '14,97 +- 2,51';

            }

            if ($age>=30 and $age<=39) {

                $eyePressureMens = '15,17 +- 2,97';
                $eyePressureWomens = '15,13 +- 2,82';

            }

            if ($age>=40 and $age<=49) {

                $eyePressureMens = '15,55 +- 2,96';
                $eyePressureWomens = '15,71 +- 3,04';

            }

            if ($age>=50 and $age<=59) {

                $eyePressureMens = '15,89 +- 3,21';
                $eyePressureWomens = '16,47 +- 2,89';

            }

            if ($age>=60 and $age<=69) {

                $eyePressureMens = '16,33 +- 3,8';
                $eyePressureWomens = '16,79 +- 3,79';

            }

            if ($age>=70 and $age<=80) {

                $eyePressureMens = '16,14 +- 4,15';
                $eyePressureWomens = '17,15 +- 3,83';

            }


            /**

            30-40 лет	15,17+-2,97	15,13+-2,82
            40-50 лет	15,55+-2,96	15,71+-3,04
            50-60 лет	15,89+-3,21	16,47+-2,89
            60-70 лет	16,33+-3,8	16,79+-3,79
            70-80 лет	16,14+-4,15	17,15+-3,83
             */

            return [

                'eyePressureMens' => $eyePressureMens,
                'eyePressureWomens' => $eyePressureWomens,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
