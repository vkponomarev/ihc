<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntakeArray
{


    public function dailyIntakeArray($pageId)
    {


        $dailyIntakeArray[54] = [
            'pageName2' => 'daily-calorie-intake',

        ];
        $dailyIntakeArray[503] = [
            'pageName' => 'daily-intake',
            'pageName2' => 'daily-calorie-intake',
            'who' => 'womens',
        ];
        $dailyIntakeArray[504] = [
            'pageName' => 'daily-intake',
            'pageName2' => 'daily-calorie-intake',
            'who' => 'mens',
        ];
        $dailyIntakeArray[505] = [
            'pageName' => 'daily-intake',
            'pageName2' => 'daily-calorie-intake',
            'who' => 'childrens',
        ];
        $dailyIntakeArray[506] = [
            'pageName' => 'daily-intake',
            'pageName2' => 'daily-calorie-intake',
            'who' => 'losing-weight',
        ];

        return  $dailyIntakeArray;

    }


    public function dailyIntakeArrayOne($pageId)
    {


        $dailyIntakeArrayOne[54] = 'calorie';

        return $dailyIntakeArrayOne;
    }





}
