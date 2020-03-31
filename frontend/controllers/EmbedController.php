<?php
namespace frontend\controllers;

use common\models\Advertising;
use common\models\components\WomanCalculators;
use common\models\healthPages\HealthPages;
use common\models\mainPagesData\MainPagesData;
use common\models\mainPagesData\MainPagesDataEmbed;
use common\models\mainPage\MainPage;
use common\models\mainPagesData\MainPagesDataEmbedPage;
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
class EmbedController extends Controller
{



    public function actionIndex()
    {
        $embedUrl = Yii::$app->request->get('embed-url');

        if ($embedUrl) {

            $embed = new MainPagesDataEmbedPage();

            $mainPagesData = new MainPagesData('embed-47', 0);

            return $this->render('index', [

                'getParams' => $embed->getEmbedPageParams->getParams,
                'embedUrl' => $embed->getEmbedParams['embedUrl'],
                'embedTitle' => $embed->getEmbedParams['embedTitle'],

            ]);
        }else{

            $mainPagesData = new MainPagesData('embed-47', 0);

            return $this->render('embed');

        }

    }


}
