<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesBodyTemperatureRate
{


    public function bodyTemperatureRateCalculation($age)
    {
        $legLength = 0;
        $axillaryTemperature = 0;
        $oralTemperature = 0;
        $rectalTemperature = 0;
        $tympanicTemperature = 0;
        $internalOrgansTemperature = 0;
        if ($age) {


            if ($age>=0 and $age<=2){

                $axillaryTemperature = '34.7-37.2';
                $oralTemperature = 0;
                $rectalTemperature = '36.6-38.0';
                $tympanicTemperature = '36.3-38.0';
                $internalOrgansTemperature = '36.3-37.7';

            }

            if ($age>=3 and $age<=10){

                $axillaryTemperature = '35.8-36.6';
                $oralTemperature = '35.5-37.5';
                $rectalTemperature = '36.6-38.0';
                $tympanicTemperature = '36.1-37.7';
                $internalOrgansTemperature = '36.3-37.7';

            }

            if ($age>=11 and $age<=65){

                $axillaryTemperature = '35.1-36.8';
                $oralTemperature = '36.4-37.5';
                $rectalTemperature = '37.0-38.1';
                $tympanicTemperature = '35.8-37.6';
                $internalOrgansTemperature = '36.7-37.8';

            }


            if ($age>65){

                $axillaryTemperature = '35.5-36.3';
                $oralTemperature = '35.7-36.9';
                $rectalTemperature = '36.1-37.3';
                $tympanicTemperature = '35.8-37.5';
                $internalOrgansTemperature = '35.8-37.1';

            }


            /**
             *  подмышечная температура axillary temperature
            оральная температура  oral temperature
            ректальная температура rectal temperature
            тимпаническая температура tympanic temperature
            температура внутренних органов  internal temperature
            температура внутренних органов  internal organs temperature

             */


            return [

                'axillaryTemperature' => $axillaryTemperature,
                'oralTemperature' => $oralTemperature,
                'rectalTemperature' => $rectalTemperature,
                'tympanicTemperature' => $tympanicTemperature,
                'internalOrgansTemperature' => $internalOrgansTemperature,
                'result' => 1

            ];

        } else {

            return [

                'result' => 0,

            ];


        }

    }

}
