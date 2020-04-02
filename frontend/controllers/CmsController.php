<?php
namespace frontend\controllers;

use common\models\Advertising;
use common\models\cmsPages\CmsPages;
use common\models\healthPages\HealthPages;
use common\models\Mail;
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
class CmsController extends Controller
{



    public function actionUrl($url)
    {

        $mainPagesData = new MainPagesData($url,'cms');

        $cmsPages = new CmsPages($mainPagesData->pageId);

        $model = new Mail();

        if ($model->load(Yii::$app->request->post()) && $_POST['Mail']['check'] === 'nospam'){

            if ($model->validate() && $model->save()){
                $model->contact(Yii::$app->params['emailto']);
                Yii::$app->session->setFlash('success', 'send');
                //$pageViewData['successMess'] = true
                $this->refresh();
                return false;
            }

        }


        return $this->render($mainPagesData->workUrl, [

            'getPages' => $cmsPages->getPages,
            'getParams' => $cmsPages->getParams,
            'result' => $cmsPages->result,
            'getUrls' => $mainPagesData->getUrls,
            'model' => $model,

        ]);

    }




}
