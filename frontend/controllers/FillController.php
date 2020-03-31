<?php
namespace frontend\controllers;

use common\models\Blog;
use common\models\mainPagesData\MainPage;

use common\models\Mail;
use common\models\Pages;
use common\models\Advertising;
use common\models\components\WomanCalculators;
use common\models\PagesText;
use common\models\PagesTextSecond;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use mPDF;
use kartik\mpdf\Pdf;

/**
 * Site controller
 */
class FillController extends Controller
{

  /*
  *  Здесь выводятся все элементы блога
  */
    public function actionIndex()
    {

        $currentLanguage = MainPage::currentLanguage();
        $languageSelection = MainPage::languageSelection();
        $pageText = MainPage::pageText(1, $currentLanguage['id'],0);

        $currentLanguages = Pages::currentLanguages();
        $allPages = Pages::allPages();
        $allPagesTranslations = Pages::allPagesTranslations($currentLanguages->id);
        $languagesSwitcher = Pages::languagesSwitcher();
        $alternate = Pages::alternate(0,$languagesSwitcher,$currentLanguages);
        $canonical = Pages::canonical(0,$currentLanguages);

        return $this->render('index', [
            'pages' => 0,
            'pagesTranslations' => Pages::onePagesTranslations($currentLanguages->id,'index'),
            'currentLanguages' => $currentLanguages,
            'languagesSwitcher' => $languagesSwitcher,
            'menuItems' => Pages::menuItems($allPages, $allPagesTranslations),
            'mainPageCategories' => Pages::mainPageCategories($allPages, $allPagesTranslations),
            'currentPageId' =>  Pages::currentPageId('index'),
            'allAdvertising' => Advertising::allAdvertising(),
            'alternate' => $alternate,
            'canonical' => $canonical,

        ]);

    }

    public function actionUrl()
    {

        $currentLanguage = MainPage::currentLanguage();
        $languageSelection = MainPage::languageSelection();
        $pageText = MainPage::pageText(1, $currentLanguage['id'],0);

        $currentLanguages = Pages::currentLanguages();
        $allPages = Pages::allPages();
        $allPagesTranslations = Pages::allPagesTranslations($currentLanguages->id);
        $languagesSwitcher = Pages::languagesSwitcher();
        $alternate = Pages::alternate(0,$languagesSwitcher,$currentLanguages);
        $canonical = Pages::canonical(0,$currentLanguages);

        return $this->render('url', [
            'pages' => 0,
            'pagesTranslations' => Pages::onePagesTranslations($currentLanguages->id,'index'),
            'currentLanguages' => $currentLanguages,
            'languagesSwitcher' => $languagesSwitcher,
            'menuItems' => Pages::menuItems($allPages, $allPagesTranslations),
            'mainPageCategories' => Pages::mainPageCategories($allPages, $allPagesTranslations),
            'currentPageId' =>  Pages::currentPageId('index'),
            'allAdvertising' => Advertising::allAdvertising(),
            'alternate' => $alternate,
            'canonical' => $canonical,

        ]);

    }




}
