<?php

namespace common\models\healthPages\healthPagesNorms;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesAlcoholWithdrawal
{


    public function alcoholWithdrawalCalculation(
        $gender,
        $years,
        $weight,
        $drink1Alco,
        $drink2Alco,
        $drink3Alco,
        $drink4Alco,
        $drink1Volume,
        $drink2Volume,
        $drink3Volume,
        $drink4Volume,
        $stomach,
        $height,
        $time)
    {


        $ppm = 0;
        $urineAlcoholConcentration = 0;
        $ppm2 = 0;
        $urineAlcoholConcentration2 = 0;
        $ppm3 = 0;
        $urineAlcoholConcentration3 = 0;
        $ppm4 = 0;
        $urineAlcoholConcentration4 = 0;
        $A = 0;
        $A2 = 0;
        $A3 = 0;
        $A4 = 0;
        $ppmNoTime = 0;
        $ppmNoTime2 = 0;
        $ppmNoTime3 = 0;
        $ppmNoTime4 = 0;


        if ($gender) {
            /**
             *  120-140	1,0
                140-160	0,9
                160-180	0,8
                180 и выше	0,75
             */
            if ($height>=120 and $height<140)
                $k = 1;
            if ($height>=140 and $height<160)
                $k = 0.9;
            if ($height>=160 and $height<180)
                $k = 0.8;
            if ($height>=180)
                $k = 0.75;

            if ($stomach==1)
                $stomach = 0.96;
            if ($stomach==2)
                $stomach = 1;

            if ($gender==1)
                $r = 0.55;
            else
                $r = 0.68;

            $b60= 0.13;

            $A = ($drink1Alco / 100) * $drink1Volume * 0.79384 * $k * $stomach;

            //echo '$A = ' . $A . '<br>';

            $ppm = $A/($weight*$r)-$b60*$time;
            $ppmNoTime =  $A/($weight*$r);
            $urineAlcoholConcentration = 1.33 * $ppm;

            if ($drink2Alco){

                $A2 = ($drink2Alco / 100) * $drink2Volume * 0.79384 * $k * $stomach;
                $ppm2 = $A2/($weight*$r)-$b60*$time;
                $urineAlcoholConcentration2 = 1.33 * $ppm2;
                $ppmNoTime2 = $A2/($weight*$r);

            }

            if ($drink3Alco){

                $A3 = ($drink3Alco / 100) * $drink3Volume * 0.79384 * $k * $stomach;
                $ppm3 = $A3/($weight*$r)-$b60*$time;
                $urineAlcoholConcentration3 = 1.33 * $ppm3;
                $ppmNoTime3 = $A3/($weight*$r);
            }

            if ($drink4Alco){

                $A4 = ($drink4Alco / 100) * $drink4Volume * 0.79384 * $k * $stomach;
                $ppm4 = $A4/($weight*$r)-$b60*$time;
                $urineAlcoholConcentration4 = 1.33 * $ppm4;
                $ppmNoTime4 = $A4/($weight*$r);

            }
            //echo '$ppm = ' . $ppm . '<br>';
            //echo '$ppm = ' . $ppm2 . '<br>';
            //echo '$ppm = ' . $ppm3 . '<br>';
            //echo '$ppm = ' . $ppm4 . '<br>';
            $ppm = ($ppmNoTime + $ppmNoTime2 + $ppmNoTime3 + $ppmNoTime4) - $b60*$time;

            $urineAlcoholConcentration = 1.33 * $ppm;

            $t = (0-($A + $A2 + $A3 + $A4)/($weight*$r))/$b60;
            $tSec = $t*60*60;
            $tSec = abs($tSec);

            $times = $this->seconds2times($tSec);
            $timesMin = $this->seconds2times(($tSec/100)*60);
            $timesMid = $this->seconds2times(($tSec/100)*80);



            /**
            С=A/(P*r)-b60*T, где:

            A=0,40*100мл*0,79384г/мл=31,7536г
            */
            /**
             * С=A/(P*r)-b60*T, где:

            С — Концентрация спирта в крови

            A — Количество выпитого спирта в граммах (объем спирта умножают на его плотность — 0,79384 г/куб.см)

            P — Масса тела в килограммах

            r — Фактор редукции. Эта величина показывает долю принятого алкоголя,
             * который попадает в кровь.
             * Для мужчин составляет в среднем, 0,68,
             * для женщин — 0,55.
             * Этот показатель меньше нормы у тучных людей и больше у детей.,

            b60 — Понижение концентрации алкоголя в крови за 1 час. Как правило, b60 лежит в пределах 0,100 — 0,160 г/л. Этот показатель выше при приеме больших доз алкоголя.,

            T — Время после приема алкоголя в часах.

            Как можно увидеть из формулы для определения концентрации алкоголя в крови,
            скорость переработки спирта зависит не от количества выпитого, а от массы тела. Считается, что она составляет 100 — 125 мг этанола на 1 кг массы тела человека в час. Кроме этой формулы, полезно знать, что концентрация алкоголя в крови и моче через 1 час после принятия алкоголя соотносится как 1/1, через 2 часа — 1/1,3, через 3 часа — 1/1,43, а через 4 часа — 1/1,33. При расчетах, как правило, используют коэффициент 1,33.

            Пример расчета:

            Дано: мужчина весом 70 килограммов выпил 100 мл водки крепостью 40 градусовтри часа назад. Протрезвел ли он, чтобы садиться за руль? Если нет, то когда можно будет водить машину? (напомним, что предельно допустимая концентрация алкоголя в крови для этого случая 0,5 промилле)

            Вформулу С=A/(P*r)-b60*T, подставляем известные значения:

            A=0,40*100мл*0,79384г/мл=31,7536г

            P=70 кг

            r=0,68

            b60=0,13

            T=3

            Получаем, что C=31,7536/(70*0,68)-0,13*3=0,277092437 промилле.

            При этом, концентрация в моче будет составлять 1,33*0,277092437=0,36853294121 промилле.
             *
             */

            return [
                'ppm' => round($ppm,2),
                'urineAlcoholConcentration' => round($urineAlcoholConcentration,2),
                'times' => $times,
                'timesMin' => $timesMin,
                'timesMid' => $timesMid,

                'result' => 1

            ];

        } else {

            return [

                'result' => 0,


            ];


        }

    }

    function seconds2times($seconds)
    {
        $times = array();

        // считать нули в значениях
        $count_zero = false;

        // количество секунд в году не учитывает високосный год
        // поэтому функция считает что в году 365 дней
        // секунд в минуте|часе|сутках|году
        $periods = array(60, 3600, 86400, 31536000);

        for ($i = 3; $i >= 0; $i--)
        {
            $period = floor($seconds/$periods[$i]);
            if (($period > 0) || ($period == 0 && $count_zero))
            {
                $times[$i+1] = $period;
                $seconds -= $period * $periods[$i];

                $count_zero = true;
            }
        }

        $times[0] = $seconds;
        return $times;
    }

}
