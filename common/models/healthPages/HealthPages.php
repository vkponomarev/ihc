<?php

namespace common\models\healthPages;


use Yii;
use yii\web\NotFoundHttpException;





class HealthPages
{


    function __construct($pageId, $embed = 0){

        $this->getPages = $this->healthPagesGetPages($pageId);
        $this->getParams = $this->healthPagesGetParams($this->getPages['getParam']);

        if (!$embed)
        {
            $this->result = $this->healthPagesResult($this->getPages['getParam'], $this->getParams);
        }

    }



    function healthPagesGetPages($pageId){

        return (new HealthPagesGetPages)->healthPagesGetPages($pageId);

    }

    function healthPagesGetParams($getParam){

        return (new HealthPagesGetParams)->healthPagesGetParams($getParam);

    }

    function healthPagesResult($getCalculationFunction,$getParams){

        return (new HealthPagesResult)->HealthPagesResult($getCalculationFunction,$getParams);

    }





}
