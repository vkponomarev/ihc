<?php

namespace common\models\mainPagesData;


use Yii;


/**
 * @param $currentPage
 * @param $pageIsUsingKeys
 *
 *
 * function __construct($currentPage, $pageIsUsingKeys)
 * Данная функция инициализирует основные данные (которые будут загружаться для каждой страницы сайта):
 * 1. Текущий язык.
 * 2. Меню выбора других языков.
 * 3. Сео тексты для страницы title, h1, description, text1, text2
 * 4. Проверка URL
 *
 *
 * function currentLanguage()
 * Вытаскиваем все данные текущего языка
 * languages.id,
 * languages.name,
 * languages.url,
 * languages.active
 * И записываем в глобальную переменную текущий язык текстом
 *
 *
 *
 * function languageSelection()
 * Достаем все активные языки для построения меню выбора языков
 * languages.name,
 * languages.url
 *
 *
 *
 *
 * function pageText($currentPage, $currentLanguage, $pageIsUsingKeys)
 * Вытаскиваем и записываем в глобальные переменные сео текста для текущей страницы сайта
 * pages_text.title,
 * pages_text.h1,
 * pages_text.description,
 * pages_text.text1,
 * pages_text.text2
 *
 *
 */
class MainPagesData
{


    function __construct($givenUrl, $mainUrl)
    {

        /** Запускаем проверку введенного урла если какие либо ошибки возвращаем 404
         * Если все нормально возвращаем pageId
         */
        $checkResult = new MainPagesDataUrlCheck($givenUrl);

        /** Вытаскиваем текущий язык и его данные и записываем в глобальную переменную*/
        $currentLanguage = $this->currentLanguage();
        /** Вытаскиваем все активные языки для построения выбора языка и записываем в глобальную переменную*/
        $this->languageSelection();

        /** Записываем в глобальные переменные все сео текста данной страницы*/
        $this->pageText($checkResult->pageId, $currentLanguage['id']);

        /** Объявляем переменную pageId*/

        $this->pageId = $checkResult->pageId;


        /** Записываем в глобальную переменную наше меню на определенном языке*/
        $this->menu($currentLanguage['id']);

        $this->mainBreadcrumb($mainUrl);

        /** Если мы не на главной странице то вытаскиваем внутренние категории текущей категории*/
        $this->parentCategories = $this->parentCategories($checkResult->pageId, $currentLanguage['id'], $givenUrl, $checkResult->parentPageId);

        $this->mainPagesArrayMainPage();

        $this->breadcrumbs = $this->mainPagesBreadcrumbs($checkResult->parentPageId, $currentLanguage['id'], $givenUrl);

        /** Записываем в глобальную переменную массив с главными страницами сайта*/


        /** Проверяем это встроенная страница или нет и присваиваем ссответствующие данные
         * Yii::$app->controller->layout layout обычный или для embed
         * $this->workUrl рабочий урл страницы
         * Yii::$app->params['embed'] true/false
         * Yii::$app->params['embedTitle'] true/false
         */
        $this->workUrl = $this->embed();

        $this->getUrls = [

            'mainUrl' => $this->mainPagesArray($mainUrl),
            'url' => $givenUrl,

        ];

        $this->canonical($givenUrl, $mainUrl);
        $this->alternate($givenUrl, $mainUrl);

    }

    function currentLanguage()
    {

        $currentLanguage = MainPagesDataLanguage::currentLanguage();
        Yii::$app->params['currentLanguageName'] = $currentLanguage['name'];
        Yii::$app->params['currentLanguageId'] = $currentLanguage['id'];
        return $currentLanguage;

    }


    function languageSelection()
    {

        $languageSelection = MainPagesDataLanguage::LanguageSelection();
        Yii::$app->params['languageSelection'] = $languageSelection;
        //return $currentLanguage;

    }


    function pageText($currentPageId, $currentLanguageId)
    {

        $pageText = MainPagesDataPageText::pageText($currentPageId, $currentLanguageId);
        //return $pageText;
        Yii::$app->params['title'] = $pageText['title'];
        Yii::$app->params['h1'] = $pageText['h1'];
        Yii::$app->params['description'] = $pageText['description'];
        Yii::$app->params['text1'] = $pageText['text1'];
        Yii::$app->params['text2'] = $pageText['text2'];

    }


    function menu($currentLanguageId)
    {

        $menu = MainPagesDataMenu::menu($currentLanguageId);
        Yii::$app->params['menu'] = $menu;
        //$key = array_search($mainUrl, array_column($menu, 'url'));
        //Yii::$app->params['breadcrumbsMain'] = $menu[$key];


    }

    function mainBreadcrumb($mainUrl)
    {

        $key = array_search($mainUrl, array_column(Yii::$app->params['menu'], 'url'));
        Yii::$app->params['breadcrumbsMain'] = Yii::$app->params['menu'][$key];

    }

    function parentCategories($pageId, $currentLanguageId, $givenUrl, $parentPageId)
    {

        if ($givenUrl <> 'index-1') {

            $parentCategories = MainPagesDataParentCategories::parentCategories($pageId, $currentLanguageId, $parentPageId);
            return $parentCategories;
        } else {

            return 0;

        }

    }

    function mainPagesArrayMainPage()
    {

        $mainPagesArray = MainPagesDataArray::mainPagesArrayMainPage();
        Yii::$app->params['mainPagesArray'] = $mainPagesArray;

    }

    function mainPagesBreadcrumbs($parentPageId, $currentLanguageId, $givenUrl)
    {

        return (new MainPagesDataBreadcrumbs)->mainPagesBreadcrumbs($parentPageId, $currentLanguageId, $givenUrl);

    }

    function embed()
    {

        $embed = new MainPagesDataEmbed();
        return $embed->workUrl;

    }

    function mainPagesArray($mainUrl)
    {

        return $mainPagesArray = MainPagesDataArray::mainPagesArray($mainUrl);

    }

    function canonical($givenUrl, $mainUrl)
    {

        (new MainPagesDataCanonical())->canonical($givenUrl, $mainUrl);

    }

    function alternate($givenUrl, $mainUrl)
    {

        (new MainPagesDataAlternate())->alternate($givenUrl, $mainUrl);

    }



    function test()
    {

        echo 'test is good';

    }


}
