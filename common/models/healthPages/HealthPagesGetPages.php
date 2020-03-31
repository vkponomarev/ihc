<?php

namespace common\models\healthPages;



use Yii;

class HealthPagesGetPages
{

    public function healthPagesGetPages($pageId){

        $healthPagesGetPages[5] = [
            'pageName' => 'daily-intake',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[54] = [
            'pageName' => 'daily-intake-calories',
            'getParam' => 'dailyIntakeCalories',
            'specify' => 'none',
            'icon' => 'daily-intake.png',

        ];
        $healthPagesGetPages[503] = [
            'pageName' => 'daily-intake-calories',
            'getParam' => 'dailyIntakeCalories',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/pregnancy-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[504] = [
            'pageName' => 'daily-intake-calories',
            'getParam' => 'dailyIntakeCalories',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[505] = [
            'pageName' => 'daily-intake-calories',
            'getParam' => 'dailyIntakeCalories',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[506] = [
            'pageName' => 'daily-intake-calories',
            'getParam' => 'dailyIntakeCalories',
            'specify' => 'losing-weight',
            'icon' => 'daily-intake.png',
        ];



        $healthPagesGetPages[55] = [
            'pageName' => 'daily-intake-protein',
            'getParam' => 'dailyIntakeProtein',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[507] = [
            'pageName' => 'daily-intake-protein',
            'getParam' => 'dailyIntakeProtein',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[508] = [
            'pageName' => 'daily-intake-protein',
            'getParam' => 'dailyIntakeProtein',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[509] = [
            'pageName' => 'daily-intake-protein',
            'getParam' => 'dailyIntakeProtein',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[510] = [
            'pageName' => 'daily-intake-protein',
            'getParam' => 'dailyIntakeProtein',
            'specify' => 'losing-weight',
            'icon' => 'daily-intake.png',
        ];


        $healthPagesGetPages[56] = [
            'pageName' => 'daily-intake-fat',
            'getParam' => 'dailyIntakeFat',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[511] = [
            'pageName' => 'daily-intake-fat',
            'getParam' => 'dailyIntakeFat',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[512] = [
            'pageName' => 'daily-intake-fat',
            'getParam' => 'dailyIntakeFat',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[513] = [
            'pageName' => 'daily-intake-fat',
            'getParam' => 'dailyIntakeFat',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[57] = [
            'pageName' => 'daily-intake-carbohydrates',
            'getParam' => 'dailyIntakeCarbohydrates',
            'specify' => 'none',
            'icon' => 'daily-intake.png',

        ];
        $healthPagesGetPages[514] = [
            'pageName' => 'daily-intake-carbohydrates',
            'getParam' => 'dailyIntakeCarbohydrates',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',

        ];
        $healthPagesGetPages[515] = [
            'pageName' => 'daily-intake-carbohydrates',
            'getParam' => 'dailyIntakeCarbohydrates',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',

        ];
        $healthPagesGetPages[516] = [
            'pageName' => 'daily-intake-carbohydrates',
            'getParam' => 'dailyIntakeCarbohydrates',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',

        ];


        $healthPagesGetPages[58] = [
            'pageName' => 'daily-intake-water',
            'getParam' => 'dailyIntakeWater',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[517] = [
            'pageName' => 'daily-intake-water',
            'getParam' => 'dailyIntakeWater',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',
        ];



        /** Суточные нормы потребления орехов*/
        $healthPagesGetPages[59] = [
            'pageName' => 'daily-intake-nuts',
            'getParam' => 'dailyIntakeNuts',
            'specify' => 'none',
            'icon' => 'daily-intake.png',

        ];
        $healthPagesGetPages[518] = [
            'pageName' => 'daily-intake-nuts',
            'getParam' => 'dailyIntakeNuts',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',

        ];
        $healthPagesGetPages[519] = [
            'pageName' => 'daily-intake-nuts',
            'getParam' => 'dailyIntakeNuts',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',

        ];


        $healthPagesGetPages[60] = [
            'pageName' => 'daily-intake-iron',
            'getParam' => 'dailyIntakeIron',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[520] = [
            'pageName' => 'daily-intake-iron',
            'getParam' => 'dailyIntakeIron',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[521] = [
            'pageName' => 'daily-intake-iron',
            'getParam' => 'dailyIntakeIron',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];




        $healthPagesGetPages[61] = [
            'pageName' => 'daily-intake-sugar',
            'getParam' => 'dailyIntakeSugar',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];


        $healthPagesGetPages[62] = [
            'pageName' => 'daily-intake-vitamin-c',
            'getParam' => 'dailyIntakeVitaminC',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[522] = [
            'pageName' => 'daily-intake-vitamin-c',
            'getParam' => 'dailyIntakeVitaminC',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[523] = [
            'pageName' => 'daily-intake-vitamin-c',
            'getParam' => 'dailyIntakeVitaminC',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[524] = [
            'pageName' => 'daily-intake-vitamin-c',
            'getParam' => 'dailyIntakeVitaminC',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',
        ];



        $healthPagesGetPages[63] = [
            'pageName' => 'daily-intake-vitamin-d',
            'getParam' => 'dailyIntakeVitaminD',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[525] = [
            'pageName' => 'daily-intake-vitamin-d',
            'getParam' => 'dailyIntakeVitaminD',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[526] = [
            'pageName' => 'daily-intake-vitamin-d',
            'getParam' => 'dailyIntakeVitaminD',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[527] = [
            'pageName' => 'daily-intake-vitamin-d',
            'getParam' => 'dailyIntakeVitaminD',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[528] = [
            'pageName' => 'daily-intake-vitamin-d',
            'getParam' => 'dailyIntakeVitaminD',
            'specify' => 'pregnant',
            'icon' => 'daily-intake.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/pregnancy-calculator-by-date-of-conception/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];



        $healthPagesGetPages[64] = [
            'pageName' => 'daily-intake-vitamin-e',
            'getParam' => 'dailyIntakeVitaminE',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[532] = [
            'pageName' => 'daily-intake-vitamin-e',
            'getParam' => 'dailyIntakeVitaminE',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[533] = [
            'pageName' => 'daily-intake-vitamin-e',
            'getParam' => 'dailyIntakeVitaminE',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[65] = [
            'pageName' => 'daily-intake-vitamin-d3',
            'getParam' => 'dailyIntakeVitaminD3',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[529] = [
            'pageName' => 'daily-intake-vitamin-d3',
            'getParam' => 'dailyIntakeVitaminD3',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[530] = [
            'pageName' => 'daily-intake-vitamin-d3',
            'getParam' => 'dailyIntakeVitaminD3',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[531] = [
            'pageName' => 'daily-intake-vitamin-d3',
            'getParam' => 'dailyIntakeVitaminD3',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[66] = [
            'pageName' => 'daily-intake-vitamin-b12',
            'getParam' => 'dailyIntakeVitaminB12',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[67] = [
            'pageName' => 'daily-intake-vitamin-omega-3',
            'getParam' => 'dailyIntakeVitaminOmega3',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[534] = [
            'pageName' => 'daily-intake-vitamin-omega-3',
            'getParam' => 'dailyIntakeVitaminOmega3',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[535] = [
            'pageName' => 'daily-intake-vitamin-omega-3',
            'getParam' => 'dailyIntakeVitaminOmega3',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[536] = [
            'pageName' => 'daily-intake-vitamin-omega-3',
            'getParam' => 'dailyIntakeVitaminOmega3',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[68] = [
            'pageName' => 'daily-intake-zinc',
            'getParam' => 'dailyIntakeZinc',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[537] = [
            'pageName' => 'daily-intake-zinc',
            'getParam' => 'dailyIntakeZinc',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[538] = [
            'pageName' => 'daily-intake-zinc',
            'getParam' => 'dailyIntakeZinc',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[539] = [
            'pageName' => 'daily-intake-zinc',
            'getParam' => 'dailyIntakeZinc',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[69] = [
            'pageName' => 'daily-intake-iodine',
            'getParam' => 'dailyIntakeIodine',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];


        $healthPagesGetPages[70] = [
            'pageName' => 'daily-intake-magnesium',
            'getParam' => 'dailyIntakeMagnesium',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[540] = [
            'pageName' => 'daily-intake-magnesium',
            'getParam' => 'dailyIntakeMagnesium',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[541] = [
            'pageName' => 'daily-intake-magnesium',
            'getParam' => 'dailyIntakeMagnesium',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[542] = [
            'pageName' => 'daily-intake-magnesium',
            'getParam' => 'dailyIntakeMagnesium',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[71] = [
            'pageName' => 'daily-intake-potassium',
            'getParam' => 'dailyIntakePotassium',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];


        $healthPagesGetPages[72] = [
            'pageName' => 'daily-intake-calcium',
            'getParam' => 'dailyIntakeCalcium',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[543] = [
            'pageName' => 'daily-intake-calcium',
            'getParam' => 'dailyIntakeCalcium',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[544] = [
            'pageName' => 'daily-intake-calcium',
            'getParam' => 'dailyIntakeCalcium',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[545] = [
            'pageName' => 'daily-intake-calcium',
            'getParam' => 'dailyIntakeCalcium',
            'specify' => 'childrens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[546] = [
            'pageName' => 'daily-intake-calcium',
            'getParam' => 'dailyIntakeCalcium',
            'specify' => 'pregnant',
            'icon' => 'daily-intake.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/pregnancy-calculator-by-the-first-fetal-movements/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];


        $healthPagesGetPages[73] = [
            'pageName' => 'daily-intake-folic-acid',
            'getParam' => 'dailyIntakeFolicAcid',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[547] = [
            'pageName' => 'daily-intake-folic-acid',
            'getParam' => 'dailyIntakeFolicAcid',
            'specify' => 'womens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[548] = [
            'pageName' => 'daily-intake-folic-acid',
            'getParam' => 'dailyIntakeFolicAcid',
            'specify' => 'mens',
            'icon' => 'daily-intake.png',
        ];
        $healthPagesGetPages[549] = [
            'pageName' => 'daily-intake-folic-acid',
            'getParam' => 'dailyIntakeFolicAcid',
            'specify' => 'pregnant',
            'icon' => 'daily-intake.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/pregnancy-calculator-by-ultrasound-scan/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];


        $healthPagesGetPages[74] = [
            'pageName' => 'daily-intake-salt',
            'getParam' => 'dailyIntakeSalt',
            'specify' => 'none',
            'icon' => 'daily-intake.png',
        ];

        $healthPagesGetPages[6] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'none',
            'icon' => 'heart-rate.png',
        ];

        $healthPagesGetPages[75] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'adult',
            'icon' => 'heart-rate.png',
        ];

        $healthPagesGetPages[76] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'womens',
            'icon' => 'heart-rate.png',
        ];

        $healthPagesGetPages[77] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'mens',
            'icon' => 'heart-rate.png',
        ];

        $healthPagesGetPages[78] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'childrens',
            'icon' => 'heart-rate.png',
        ];

        $healthPagesGetPages[79] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'girls',
            'icon' => 'heart-rate.png',
        ];

        $healthPagesGetPages[80] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'boys',
            'icon' => 'heart-rate.png',
        ];

        $healthPagesGetPages[81] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'teenagers',
            'icon' => 'heart-rate.png',
        ];

        $healthPagesGetPages[82] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'pregnant',
            'icon' => 'heart-rate.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/gestational-age-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $healthPagesGetPages[83] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'walking',
            'icon' => 'heart-rate.png',
        ];

        $healthPagesGetPages[84] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'exercise',
            'icon' => 'heart-rate.png',
        ];

        $healthPagesGetPages[85] = [
            'pageName' => 'heart-rate',
            'getParam' => 'heartRate',
            'specify' => 'inDream',
            'icon' => 'heart-rate.png',
        ];

        $healthPagesGetPages[8] = [
            'pageName' => 'blood-pressure',
            'getParam' => 'bloodPressure',
            'specify' => 'none',
            'icon' => 'heart-pressure.png',
        ];

        $healthPagesGetPages[86] = [
            'pageName' => 'blood-pressure',
            'getParam' => 'bloodPressure',
            'specify' => 'adult',
            'icon' => 'heart-pressure.png',
        ];
        $healthPagesGetPages[87] = [
            'pageName' => 'blood-pressure',
            'getParam' => 'bloodPressure',
            'specify' => 'womens',
            'icon' => 'heart-pressure.png',
        ];
        $healthPagesGetPages[88] = [
            'pageName' => 'blood-pressure',
            'getParam' => 'bloodPressure',
            'specify' => 'mens',
            'icon' => 'heart-pressure.png',
        ];
        $healthPagesGetPages[89] = [
            'pageName' => 'blood-pressure',
            'getParam' => 'bloodPressure',
            'specify' => 'childrens',
            'icon' => 'heart-pressure.png',
        ];
        $healthPagesGetPages[90] = [
            'pageName' => 'blood-pressure',
            'getParam' => 'bloodPressure',
            'specify' => 'girls',
            'icon' => 'heart-pressure.png',
        ];
        $healthPagesGetPages[91] = [
            'pageName' => 'blood-pressure',
            'getParam' => 'bloodPressure',
            'specify' => 'boys',
            'icon' => 'heart-pressure.png',
        ];
        $healthPagesGetPages[92] = [
            'pageName' => 'blood-pressure',
            'getParam' => 'bloodPressure',
            'specify' => 'teenagers',
            'icon' => 'heart-pressure.png',
        ];
        $healthPagesGetPages[550] = [
            'pageName' => 'blood-pressure',
            'getParam' => 'bloodPressure',
            'specify' => 'pregnant',
            'icon' => 'heart-pressure.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/pregnancy-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];


        $healthPagesGetPages[9] = [
            'pageName' => 'eye-pressure',
            'getParam' => 'eyePressure',
            'specify' => 'none',
            'icon' => 'eye-pressure.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/baby-eye-color-calculator/?embed=1&title=1" width="280" height="520" frameborder="0" scrolling="no" allowfullscreen> </iframe>'
        ];

        $healthPagesGetPages[93] = [
            'pageName' => 'eye-pressure',
            'getParam' => 'eyePressure',
            'specify' => 'womens',
            'icon' => 'eye-pressure.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/baby-eye-color-calculator/?embed=1&title=1" width="280" height="520" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[94] = [
            'pageName' => 'eye-pressure',
            'getParam' => 'eyePressure',
            'specify' => 'mens',
            'icon' => 'eye-pressure.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/baby-eye-color-calculator/?embed=1&title=1" width="280" height="520" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $healthPagesGetPages[31] = [
            'pageName' => 'humidity-rate',
            'getParam' => 'humidityRate',
            'specify' => 'none',
            'icon' => 'air.png',
        ];

        $healthPagesGetPages[110] = [
            'pageName' => 'humidity-rate',
            'getParam' => 'humidityRate',
            'specify' => 'flat',
            'icon' => 'air.png',
        ];
        $healthPagesGetPages[111] = [
            'pageName' => 'humidity-rate',
            'getParam' => 'humidityRate',
            'specify' => 'childrens',
            'icon' => 'air.png',
        ];
        $healthPagesGetPages[112] = [
            'pageName' => 'humidity-rate',
            'getParam' => 'humidityRate',
            'specify' => 'winter',
            'icon' => 'air.png',
        ];


        $healthPagesGetPages[10] = [
            'pageName' => 'growth-rate',
            'getParam' => 'growthRate',
            'specify' => 'none',
            'icon' => 'height.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/child-future-height-calculator/?embed=1&title=1" width="280" height="630" frameborder="0" scrolling="no" allowfullscreen> </iframe>'
        ];

        $healthPagesGetPages[95] = [
            'pageName' => 'growth-rate',
            'getParam' => 'growthRate',
            'specify' => 'adult',
            'icon' => 'height.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/child-future-height-calculator/?embed=1&title=1" width="280" height="630" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[96] = [
            'pageName' => 'growth-rate',
            'getParam' => 'growthRate',
            'specify' => 'womens',
            'icon' => 'height.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/pregnancy-weight-gain-calculator/?embed=1&title=1" width="280" height="720" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[97] = [
            'pageName' => 'growth-rate',
            'getParam' => 'growthRate',
            'specify' => 'mens',
            'icon' => 'height.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/child-future-height-calculator/?embed=1&title=1" width="280" height="630" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[98] = [
            'pageName' => 'growth-rate-childrens',
            'getParam' => 'growthRateChildrens',
            'specify' => 'childrens',
            'icon' => 'height.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/child-future-height-calculator/?embed=1&title=1" width="280" height="630" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[99] = [
            'pageName' => 'growth-rate-childrens',
            'getParam' => 'growthRateChildrens',
            'specify' => 'under-one-year-childrens',
            'icon' => 'height.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/child-future-height-calculator/?embed=1&title=1" width="280" height="630" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[100] = [
            'pageName' => 'growth-rate-childrens',
            'getParam' => 'growthRateChildrens',
            'specify' => 'girls',
            'icon' => 'height.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/child-future-height-calculator/?embed=1&title=1" width="280" height="630" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[101] = [
            'pageName' => 'growth-rate-childrens',
            'getParam' => 'growthRateChildrens',
            'specify' => 'boys',
            'icon' => 'height.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/child-future-height-calculator/?embed=1&title=1" width="280" height="630" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[102] = [
            'pageName' => 'growth-rate-teenagers',
            'getParam' => 'growthRateTeenagers',
            'specify' => 'teenagers',
            'icon' => 'height.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/child-future-height-calculator/?embed=1&title=1" width="280" height="630" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];






        $healthPagesGetPages[23] = [
            'pageName' => 'growth-rate',
            'getParam' => 'growthRate',
            'specify' => 'none',
            'icon' => 'weight.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/baby-weight-and-height-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $healthPagesGetPages[103] = [
            'pageName' => 'growth-rate',
            'getParam' => 'growthRate',
            'specify' => 'womens',
            'icon' => 'weight.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/baby-weight-and-height-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'
        ];
        $healthPagesGetPages[104] = [
            'pageName' => 'growth-rate',
            'getParam' => 'growthRate',
            'specify' => 'mens',
            'icon' => 'weight.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/baby-weight-and-height-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[105] = [
            'pageName' => 'growth-rate-childrens',
            'getParam' => 'growthRateChildrens',
            'specify' => 'childrens',
            'icon' => 'weight.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/baby-weight-and-height-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[106] = [
            'pageName' => 'growth-rate-childrens',
            'getParam' => 'growthRateChildrens',
            'specify' => 'under-one-year-childrens',
            'icon' => 'weight.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/baby-weight-and-height-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[107] = [
            'pageName' => 'growth-rate-childrens',
            'getParam' => 'growthRateChildrens',
            'specify' => 'girls',
            'icon' => 'weight.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/baby-weight-and-height-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[108] = [
            'pageName' => 'growth-rate-childrens',
            'getParam' => 'growthRateChildrens',
            'specify' => 'boys',
            'icon' => 'weight.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/baby-weight-and-height-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[109] = [
            'pageName' => 'growth-rate-teenagers',
            'getParam' => 'growthRateTeenagers',
            'specify' => 'teenagers',
            'icon' => 'weight.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/baby-weight-and-height-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];


        $healthPagesGetPages[34] = [
            'pageName' => 'body-temperature-rate',
            'getParam' => 'bodyTemperatureRate',
            'specify' => 'none',
            'icon' => 'temperature.png',
        ];

        $healthPagesGetPages[113] = [
            'pageName' => 'body-temperature-rate',
            'getParam' => 'bodyTemperatureRate',
            'specify' => 'childrens',
            'icon' => 'temperature.png',
        ];

        $healthPagesGetPages[114] = [
            'pageName' => 'body-temperature-rate',
            'getParam' => 'bodyTemperatureRate',
            'specify' => 'under-one-year-childrens',
            'icon' => 'temperature.png',
        ];

        $healthPagesGetPages[115] = [
            'pageName' => 'body-temperature-rate',
            'getParam' => 'bodyTemperatureRate',
            'specify' => 'adult',
            'icon' => 'temperature.png',
        ];

        $healthPagesGetPages[116] = [
            'pageName' => 'body-temperature-rate',
            'getParam' => 'bodyTemperatureRate',
            'specify' => 'pregnant',
            'icon' => 'temperature.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/pregnancy-calculator/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $healthPagesGetPages[117] = [
            'pageName' => 'body-temperature-rate',
            'getParam' => 'bodyTemperatureRate',
            'specify' => 'rectal',
            'icon' => 'temperature.png',
        ];

        $healthPagesGetPages[118] = [
            'pageName' => 'body-temperature-rate',
            'getParam' => 'bodyTemperatureRate',
            'specify' => 'mouth',
            'icon' => 'temperature.png',
        ];



        $healthPagesGetPages[50] = [
            'pageName' => 'blood-calculator',
            'getParam' => 'bloodCalculator',
            'specify' => 'none',
            'icon' => 'blood.png',
        ];
        $healthPagesGetPages[119] = [
            'pageName' => 'blood-calculator',
            'getParam' => 'bloodCalculator',
            'specify' => 'womens',
            'icon' => 'blood.png',
        ];
        $healthPagesGetPages[120] = [
            'pageName' => 'blood-calculator',
            'getParam' => 'bloodCalculator',
            'specify' => 'mens',
            'icon' => 'blood.png',
        ];
        $healthPagesGetPages[121] = [
            'pageName' => 'blood-calculator',
            'getParam' => 'bloodCalculator',
            'specify' => 'childrens',
            'icon' => 'blood.png',
        ];
        $healthPagesGetPages[122] = [
            'pageName' => 'blood-calculator',
            'getParam' => 'bloodCalculator',
            'specify' => 'period',
            'icon' => 'blood.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/pregnancy-calculator-by-menstrual-period/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];

        $healthPagesGetPages[52] = [
            'pageName' => 'how-much-drink-water',
            'getParam' => 'howMuchDrinkWater',
            'specify' => 'none',
            'icon' => 'water.png',
        ];
        $healthPagesGetPages[123] = [
            'pageName' => 'how-much-drink-water',
            'getParam' => 'howMuchDrinkWater',
            'specify' => 'womans',
            'icon' => 'water.png',
        ];
        $healthPagesGetPages[124] = [
            'pageName' => 'how-much-drink-water',
            'getParam' => 'howMuchDrinkWater',
            'specify' => 'mens',
            'icon' => 'water.png',
        ];
        $healthPagesGetPages[125] = [
            'pageName' => 'how-much-drink-water',
            'getParam' => 'howMuchDrinkWater',
            'specify' => 'adult',
            'icon' => 'water.png',
        ];
        $healthPagesGetPages[126] = [
            'pageName' => 'how-much-drink-water',
            'getParam' => 'howMuchDrinkWater',
            'specify' => 'childrens',
            'icon' => 'water.png',
        ];
        $healthPagesGetPages[127] = [
            'pageName' => 'how-much-drink-water',
            'getParam' => 'howMuchDrinkWater',
            'specify' => 'newborns',
            'icon' => 'water.png',
        ];
        $healthPagesGetPages[128] = [
            'pageName' => 'how-much-drink-water',
            'getParam' => 'howMuchDrinkWater',
            'specify' => 'pregnant',
            'icon' => 'water.png',
            'embed' => '<iframe src="https://womencalc.com/'. Yii::$app->language . '/pregnancy-calculator-by-menstrual-period/?embed=1&title=1" width="280" height="590" frameborder="0" scrolling="no" allowfullscreen> </iframe>'

        ];
        $healthPagesGetPages[129] = [
            'pageName' => 'how-much-drink-water',
            'getParam' => 'howMuchDrinkWater',
            'specify' => 'lose-weight',
            'icon' => 'water.png',
        ];

        $healthPagesGetPages[130] = [
            'pageName' => 'how-much-water-in-man',
            'getParam' => 'howMuchWaterInMan',
            'specify' => 'none',
            'icon' => 'water.png',
        ];

        $healthPagesGetPages[131] = [
            'pageName' => 'how-much-water-in-man',
            'getParam' => 'howMuchWaterInMan',
            'specify' => 'childrens',
            'icon' => 'water.png',
        ];

        $healthPagesGetPages[132] = [
            'pageName' => 'comfortable-temperature',
            'getParam' => 'comfortableTemperature',
            'specify' => 'none',
            'icon' => 'air-temperature.png',
        ];


        $healthPagesGetPages[133] = [
            'pageName' => 'comfortable-temperature',
            'getParam' => 'comfortableTemperature',
            'specify' => 'flat',
            'icon' => 'air-temperature.png',
        ];
        $healthPagesGetPages[135] = [
            'pageName' => 'comfortable-temperature',
            'getParam' => 'comfortableTemperature',
            'specify' => 'winter',
            'icon' => 'air-temperature.png',
        ];
        $healthPagesGetPages[136] = [
            'pageName' => 'comfortable-temperature',
            'getParam' => 'comfortableTemperature',
            'specify' => 'childrens',
            'icon' => 'air-temperature.png',
        ];
        $healthPagesGetPages[137] = [
            'pageName' => 'comfortable-temperature',
            'getParam' => 'comfortableTemperature',
            'specify' => 'sleep',
            'icon' => 'air-temperature.png',
        ];
        $healthPagesGetPages[138] = [
            'pageName' => 'comfortable-temperature',
            'getParam' => 'comfortableTemperature',
            'specify' => 'newborns',
            'icon' => 'air-temperature.png',
        ];

        $healthPagesGetPages[139] = [
            'pageName' => 'comfortable-temperature',
            'getParam' => 'comfortableTemperature',
            'specify' => 'water',
            'icon' => 'air-temperature.png',
        ];



        $healthPagesGetPages[140] = [
            'pageName' => 'human-biorhythms',
            'getParam' => 'humanBiorhythms',
            'specify' => new \DateTime(),
            'icon' => 'bio.png',

        ];

        $healthPagesGetPages[5800] = [
            'pageName' => 'human-biorhythms',
            'getParam' => 'humanBiorhythms',
            'specify' => new \DateTime(),
            'icon' => 'bio.png',

        ];

        $healthPagesGetPages[5801] = [
            'pageName' => 'human-biorhythms',
            'getParam' => 'humanBiorhythms',
            'specify' => new \DateTime(),
            'icon' => 'bio.png',

        ];

        $healthPagesGetPages[5802] = [
            'pageName' => 'human-biorhythms',
            'getParam' => 'humanBiorhythms',
            'specify' => new \DateTime(),
            'icon' => 'bio.png',

        ];




        $healthPagesGetPages[142] = [
            'pageName' => 'life-span',
            'getParam' => 'lifeSpan',
            'specify' => 'none',
            'icon' => 'span.png',
        ];
        $healthPagesGetPages[143] = [
            'pageName' => 'life-span',
            'getParam' => 'lifeSpan',
            'specify' => 'mens',
            'icon' => 'span.png',
        ];
        $healthPagesGetPages[144] = [
            'pageName' => 'life-span',
            'getParam' => 'lifeSpan',
            'specify' => 'womens',
            'icon' => 'span.png',
        ];


        $healthPagesGetPages[145] = [
            'pageName' => 'bad-habits',
            'getParam' => 'none',
            'specify' => 'none',
            'icon' => 'habbits.png',
        ];

        $healthPagesGetPages[146] = [
            'pageName' => 'smoking-index',
            'getParam' => 'smokingIndex',
            'specify' => 'none',
            'icon' => 'habbits.png',
        ];
        $healthPagesGetPages[147] = [
            'pageName' => 'nicotine-addiction',
            'getParam' => 'nicotineAddiction',
            'specify' => 'none',
            'icon' => 'habbits.png',
        ];
        $healthPagesGetPages[148] = [
            'pageName' => 'price-of-smoking',
            'getParam' => 'priceOfSmoking',
            'specify' => 'none',
            'icon' => 'habbits.png',
        ];
        $healthPagesGetPages[149] = [
            'pageName' => 'alcohol-withdrawal',
            'getParam' => 'alcoholWithdrawal',
            'specify' => 'none',
            'icon' => 'habbits.png',
        ];
        $healthPagesGetPages[150] = [
            'pageName' => 'alcohol-withdrawal',
            'getParam' => 'alcoholWithdrawal',
            'specify' => 'none',
            'icon' => 'habbits.png',
        ];
        $healthPagesGetPages[151] = [
            'pageName' => 'alcohol-withdrawal',
            'getParam' => 'alcoholWithdrawal',
            'specify' => 'none',
            'icon' => 'habbits.png',
        ];

        $healthPagesGetPages[5799] = [
            'pageName' => 'alcohol-withdrawal',
            'getParam' => 'alcoholWithdrawal',
            'specify' => 'none',
            'icon' => 'habbits.png',
        ];



        return $healthPagesGetPages[$pageId];

    }



}

