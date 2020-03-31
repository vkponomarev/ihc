<?php

namespace common\models\mainPagesData;



use Yii;

class MainPagesDataCanonical
{

    function canonical($givenUrl, $mainUrl){



        if ($mainUrl){

            if ($givenUrl == $mainUrl){

                Yii::$app->params['canonical'] = \yii\helpers\Url::home(true) . Yii::$app->language . '/' . Yii::$app->params['mainPagesArray'][$mainUrl] . '/';

            }else{

                Yii::$app->params['canonical'] = \yii\helpers\Url::home(true) . Yii::$app->language . '/' . Yii::$app->params['mainPagesArray'][$mainUrl] . '/' . $givenUrl . '/';

            }

        }else{

            Yii::$app->params['canonical'] = \yii\helpers\Url::home(true) . Yii::$app->language . '/';

        }


/*
        if  ($givenUrl == $mainUrl)
            Yii::$app->params['canonical'] = \yii\helpers\Url::home(true) . Yii::$app->language . '/' . Yii::$app->params['mainPagesArray'][$mainUrl];

        else
            Yii::$app->params['canonical'] = \yii\helpers\Url::home(true) . Yii::$app->language . '/' . Yii::$app->params['mainPagesArray'][$mainUrl] . '/' . $givenUrl . '/';
*/
    }

}

