<?php

namespace common\models\healthPages\healthPagesDailyIntake;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPagesDailyIntake
{


    function __construct(){

        $this->mainPageCategories = $this->mainPageCategories();

    }


    function mainPageCategories(){

        return MainPageCategories::mainPageCategories();

    }


    function dailyIntakeCaloriesCalculation (){

        $exerciseStress['0'] = 1.2; //- минимум или отсутствие физической нагрузки
        $exerciseStress['1'] = 1.375; //- занятия фитнесом 3 раза в неделю
        $exerciseStress['2'] = 1.4625; // - занятия фитнесом 5 раз в неделю
        $exerciseStress['3'] = 1.550; // - интенсивная физическая нагрузка 5 раз в неделю
        $exerciseStress['4'] = 1.6375; // - занятия фитнесом каждый день
        $exerciseStress['5'] = 1.725; // - каждый день интенсивно или по два раза в день
        $exerciseStress['6'] = 1.9; //- ежедневная физическая нагрузка плюс физическая работа



        $mifflinSanJeorFormulaWomen = (10 * $weight + 6.25 * $height - 5 * $age - 161) * $exerciseStress['0'];
        //10 х вес (кг) + 6,25 х рост (см) – 5 х возраст (лет) – 161


        return [

            'mifflinSanJeorFormula' => $mifflinSanJeorFormula,
            'harrisBenedictFormula' => $harrisBenedictFormula,
            'losingWeightFormula' => $losingWeightFormula
        ];


    }


}
