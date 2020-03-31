<?php

namespace common\models\mainPage;


use Yii;
use yii\web\NotFoundHttpException;





class MainPage
{


    function __construct(){

        $this->mainPageCategories = $this->mainPageCategories();

    }


    function mainPageCategories(){

        return MainPageCategories::mainPageCategories();

    }


}
