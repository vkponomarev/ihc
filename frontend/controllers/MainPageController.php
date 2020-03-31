<?php
namespace frontend\controllers;

use common\models\Advertising;
use common\models\healthPages\HealthPagesGetIcon;
use common\models\mainPagesData\MainPagesData;
use common\models\mainPage\MainPage;
use common\models\Pages;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * MainPage controller
 *
 * Контроллер для главной страницы сайта
 *
 *
 *
 */
class MainPageController extends Controller
{



    public function actionIndex()
    {


        $mainPagesData = new MainPagesData('index-1',0);

        $mainPage = new MainPage();

        $getPagesIcon = (new HealthPagesGetIcon())->healthPagesGetIcon();

        return $this->render('index', [

            'mainPageCategories' => $mainPage->mainPageCategories,
            'getPagesIcon'=> $getPagesIcon,

        ]);

    }


}
