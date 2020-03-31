<?php

namespace common\models\mainPage;



use Yii;

class MainPageCategories
{

    public function mainPageCategories(){

        $mainPageCategories = Yii::$app->db
            ->createCommand('
            select
            pages.id,
            pages.parent_id,
            pages.url,
            pages_text.plates_title
            from
            pages
            inner join pages_text on pages_text.pages_id = pages.id
            where pages.main_page_active = 1
            and pages_text.languages_id = ' . Yii::$app->params['currentLanguageId'] . '
            order by pages.sort
            ')
            ->queryAll();

        //echo '<pre>';
        //var_dump($texts);
        //print_r($mainPageCategories);
        //echo '</pre>';

        return $mainPageCategories;

    }



}

