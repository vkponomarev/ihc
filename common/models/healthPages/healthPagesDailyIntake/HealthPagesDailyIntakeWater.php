<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeWater
{



    function dailyIntakeWaterCalculation($gender,$weight,$age,$exerciseTime){

        if ($gender) {

            /*Для женщин: (вес * 0,03) + (время активной деятельности * 0,4) = объём воды в литрах.
            Например:

            Женщина весом 60 кг без физической активности. 60 кг *0,03 =1,8 л.

            Женщина весом 60 кг с физической активностью, возьмём 1 час.
            (60*0,03) +(1*0,4 )=1,8 +0,4= 2,2 л

            Для мужчин: (вес * 0,04) + (время активной деятельности * 0,6) = объём воды в литрах.
            Например:

            Мужчина весом 93 кг без физической активности.
            93 * 0,04= 3,72 л

            Мужчина весом 93 кг с физической активностью, возьмём 1 час.

            (93 * 0,04) + (1 *0,6) = 3,72 + 0,6= 4,32 л.*/


            if ($gender == 1){

                $dailyIntakeWater = ($weight * 0.03) + ($exerciseTime * 0.4);

            }

            if ($gender == 2){

                $dailyIntakeWater = ($weight * 0.04) + ($exerciseTime * 0.6);

            }

            if ($age<=3){

                $dailyIntakeWater = $weight * 0.05;

            }

            if ($age>3 and $age<=7){

                $dailyIntakeWater = 1.5;

            }

            if ($age>7 and $age<12){

                $dailyIntakeWater = 1.8;

            }

            /*
            От 1 до 3 лет. В этот период ребенку в рацион вводятся различные продукты питания, в числе которых твердая пища. Поэтому требуется контролировать ежедневное количество потребляемой малышом жидкости. Суточный объем рассчитывается следующим образом: 50 мл воды на 1 кг веса ребенка.
            От 3 до 7 лет. В таком возрасте у детей формируются костная и нервная системы. Ребенку требуется выпивать от 1,2 до 1,7 литра жидкости в сутки. Важно приучать детей употреблять именно воду, а не чаи, сладкие и газированные напитки.
            От 7 до 12 лет. Детям такого возраста в сутки необходимо потреблять от 1,7 до 2,5 литров воды. Требуется увеличивать объем жидкости на 1-1,5 стакана в том случае, если ребенок занимается спортом.
            От 12 лет и старше. Для подростков суточная норма рассчитывается так же, как и для взрослых. При расчете ежедневного объема питья для девушек вес умножается на 31, а для парней – на 35.
            */





            return [

                'dailyIntakeWater' => $dailyIntakeWater,

                'result' => 1,

            ];
        } else return ['result' => 0];
    }


}
