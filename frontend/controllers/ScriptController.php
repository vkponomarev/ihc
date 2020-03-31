<?php
namespace frontend\controllers;

use common\models\Advertising;
use common\models\healthPages\HealthPages;
use common\models\healthPages\HealthPagesGetIcon;

use common\models\healthPages\HealthPagesGetPages;
use common\models\mainPagesData\MainPagesData;
use common\models\mainPage\MainPage;
use common\models\Pages;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class ScriptController extends Controller
{



    public function actionTranslate()
    {

        echo 'dfgdfsg';
        $this->layout = 'script';
        return $this->render('translate', [



        ]);

    }









}
