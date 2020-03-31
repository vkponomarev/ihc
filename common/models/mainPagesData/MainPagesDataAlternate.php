<?php

namespace common\models\mainPagesData;



use Yii;

class MainPagesDataAlternate
{

    function alternate($givenUrl, $mainUrl){


        if ($mainUrl){

            if ($givenUrl == $mainUrl){

                Yii::$app->params['alternate'] = Yii::$app->params['mainPagesArray'][$givenUrl] . '/';

            }else{

                Yii::$app->params['alternate'] = Yii::$app->params['mainPagesArray'][$mainUrl] . '/' . $givenUrl . '/';

            }

        }else{

            Yii::$app->params['alternate'] = '';

        }

    }

}

