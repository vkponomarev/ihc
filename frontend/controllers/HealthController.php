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

/**
 * MainPage controller
 *
 * Контроллер для главной страницы сайта
 *
 *
 *
 */
class HealthController extends Controller
{



    public function actionIndex()
    {


        $mainPagesData = new MainPagesData('health-2','health-2');

        $getPagesIcon = (new HealthPagesGetIcon())->healthPagesGetIcon();

        return $this->render('index', [

            'parentCategories' => $mainPagesData->parentCategories,
            'getUrls' => $mainPagesData->getUrls,
            'getPagesIcon'=> $getPagesIcon,

        ]);

    }



    public function actionUrl($url)
    {


        $mainPagesData = new MainPagesData($url,'health-2');

        $healthPages = new HealthPages($mainPagesData->pageId);

        return $this->render($mainPagesData->workUrl, [

            'parentCategories' => $mainPagesData->parentCategories,
            'getPages' => $healthPages->getPages,
            'getParams' => $healthPages->getParams,
            'result' => $healthPages->result,
            'getUrls' => $mainPagesData->getUrls,
            'breadcrumbs' => $mainPagesData->breadcrumbs,

        ]);

    }







}
