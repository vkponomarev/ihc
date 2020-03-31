<?php

namespace common\models\mainPagesData;



use common\models\healthPages\HealthPages;
use Yii;
use yii\web\NotFoundHttpException;
use common\models\healthPages\HealthPagesGetPages;

class MainPagesDataEmbedPage
{


    /**
     *  Нам нужно
     * 1. Выделить из урла конкретную страницу которая эмбед
     * $embedUrl =  Yii::$app->request->get('embed-url');
     * $embedTitle =  Yii::$app->request->get('title');
     * $embedUrlExploded = explode("/", $embedUrl);
     *
     *
     * 2. Узнать у этой страницы pageId и проверить ее
     * То есть воспользоваться $checkResult = new MainPagesDataUrlCheck($givenUrl);
     * из нее мы получим ID
     * Потом нам нужны будут $Pages->getParams
     *
     */


    function __construct(){

        $this->getEmbedParams = $this->getEmbedParams();

        $checkResult = new MainPagesDataUrlCheck($this->getEmbedParams['embedUrlExploded'][1]);

        $this->getEmbedPageParams = $this->getEmbedPageParams($checkResult->pageId,$this->getEmbedParams['embedUrlExploded'][0]);
        //print_r($getEmbedPageParams);

    }


    function getEmbedParams(){

        $embedUrl = Yii::$app->request->get('embed-url');

        return [

            'embedUrl' => $embedUrl,
            'embedTitle' => Yii::$app->request->get('title'),
            'embedUrlExploded' => explode("/", $embedUrl),

            ];

    }

    public function getEmbedPageParams($pageId, $mainPage){

        if ($mainPage=='health') {
            return (new HealthPages($pageId,1));
        }

    }
}

