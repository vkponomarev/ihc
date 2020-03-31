<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.08.19
 * Time: 18:06
 */

use common\models\Pages;


/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */
/* @var $pages \common\models\Pages */

$this->params['pagesTranslations'] = $pagesTranslations;
$this->params['currentLanguages'] = $currentLanguages;
$this->params['languagesSwitcher'] = $languagesSwitcher;
$this->params['menuItems'] = $menuItems;
$this->params['mainPageCategories'] = $mainPageCategories;
$this->params['currentPageId'] = $currentPageId;
$this->params['allAdvertising'] = $allAdvertising;
$this->params['pages'] = $pages;
$this->params['alternate'] = $alternate;
$this->params['canonical'] = $canonical;
//$this->params['isEmbed'] = $isEmbed;


?>

<?php
//mysqli_query(,'SET NAMES ISO-8859-1' );

?>


<div class="container  container-no-top-padding-extended">
dsgre
</div>


<?php

//Одежда $sizesMassive = [0,2,4,6,8,10,12,14,16,18,20,22,24,26,32,34,36,38,40,42,44,46,48,50,52,54,56,58,60,62,64,66,68,70,72,74];
//Головные уборы $sizesMassive = [6,'6 1/2','6 3/4','6 3/8','6 5/8','6 7/8',7,'7 1/2','7 1/4','7 1/8','7 3/4','7 3/8','7 5/8','7 7/8',8,'8 1/4','8 1/8',36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65];
//Бандажи $sizesMassive = [1,2,3,4,5,6,7,36,38,40,42,44,46,48,50,70,75,80,85,90];
//Боди $sizesMassive = [1,2,3,4,5,6,7,34,36,38,40,42,44,46,48,50,52,54,56,58,60,62,64,66];
//Бюстгалтеры $sizesMassive = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,16,18,20,22,24,26,28,30,32,34,36,38,40,42,44,70,75,80,85,90,95,100,105,110,115,'AA','A','B','C','D','DD','DDD/F','E','F','FF','G','GG','H','I','J','K','L'];
//Корсеты $sizesMassive = [2,4,6,8,10,12,14,16,18,20,22,34,36,38,40,42,44,46,48,50,52,54,56,58,60];
//Купальники $sizesMassive = [38,40,42,44,46,48,50,52,54,56,58,60,62,64,65,66,70];
//Майки $sizesMassive = [40,42,44,46,48,50,52,54,56,58,60];
//Панталоны $sizesMassive = [6,8,10,12,14,16,18,20,22,24,26,28,34,36,38,40,42,44,46,48,50,52,54,56,58,60,62];
//Пижамы $sizesMassive = [4,6,8,10,12,14,38,40,42,44,46,48,50,52];
//Плавки $sizesMassive = [26,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,46,48,50,52,54,56,58,60,62];
//Термобелье $sizesMassive = [4,6,8,10,12,14,16,18,20,42,44,46,48,50,52,54,56,58,60,62,64,66];
//Трусы $sizesMassive = [4,5,6,7,8,9,10,11,12,13,14,38,40,42,44,46,48,50,52,54,56,58,60,62,64,66,70,72];
//Колготки $sizesMassive = [2,3,4,5,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36,38,40,42,44,46,48,50,52,54,56,58,60,62,64,66,68];
//Чулки $sizesMassive = [2,3,4,5,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36,38,40,42,44,46,48,50,52,54,56,58,60,62,64,66,68];
//Носки $sizesMassive = [3,3.5,4,4.5,5,5.5,6,6.5,7,8,8.5,9,9.5,10,10.5,11,11.5,12,12.5,13,14,16,22,23,24.5,25,27,29,31,35,36,37,38,39,40,41,43,44,47,48];
//Очки $sizesMassive = [40,47,49,50,51,52,54,55,56,58,62];
//Перчатки $sizesMassive = [4.5,5,5.5,6,6.5,7,7.5,8,8.5,9,9.5,10,10.5,11,11.5,12,13];
//Ремни $sizesMassive = [1,2,3,4,6,8,10,12,14,16,18,20,22,24,26,34,36,38,40,42,44,46,48,50,52,54,60,65,70,75,80,85,90,95,100,105,110,115,120];
//Кольца $sizesMassive = [2,3,3.5,4,4.5,5,5.5,6,6.5,7,7.5,8,8.5,9,9.5,10,10.5,11,12,12.5,13,14,15,16,17,18,19,20,21,22,23,24,25,26];
//Бренды
/*$sizesMassive = [
        'Mizuno','Orllet','Shoeika','Abercrombie','Aeropostale','Alpha Industries','American Apparel','American Eagle',
        'Angelina','Armani','Artemis','asics','Asos','Babygo','Bauer','benetton','bonprix','braggart',
        'CCM','Calvin Klein','Canada Goose','Caprice','Carters','Clarks','Columbia','Conte','Converse',
        'Crocs','Crosby','DC Shoes','Demar','Didriksons','Diesel','Dim','Dr Martens','EVA','Easton',
        'Ecco','Esprit','Faberlic','Felina','Fest','Forever 21','Fred Perry','Furla','Gap','Gas','Geox',
        'Gloria Jeans','Goon','Gucci','Guess','Gusti','Gymboree','H&M','Hanes','Hollister','Hot shapers','Huggies',
        'Hunter','Huppa','Intimissimi','Jordan','Kapika','Keddo','Kerry','Kivat','Kuoma','Lacoste','Lane Bryant',
        'lassie','Lee','Lenne','Levis','Libero','Louisvuitton','Mango','Mayoral','Medela','Merrell','Merries','Michael Kors',
        'Milavitsa','Milton','Minimen','Moncler','Montana','Moony','Mothercare','Mursu','New Balance','New Era',
        'Next','Nike','Norfin','Nоrveg','Old Navy','Omsa','Oodji','Oshkosh','Pampers','Puma','Ralph Lauren','Reebok',
        'Reima','Rieker','Salomon','Samsonite','Sankom','Saucony','Sela','Seni','Skechers','Superfit','Svesta',
        'Tena','The north face','Timberland','Tom Tailor','Tommy Hilfiger','Torrid','True Religion',
        'Two Angel','Ullapopken','Under Armour','Unga','Vans','Victoria Secret','Viking','Vintage','Vitacci',
        'Wrangler','Zara'
                ];*/




    $pages = Pages::find()->all();

echo '<pre>';
//var_dump($texts);
//print_r($pages);
echo '</pre>';
    echo $pages[2]->url;

foreach ($pages as $page) {

    echo $page->url . '<br>';
    echo $pageNewUrl = $page->url . '-' . $page->id . '<br>';
   //  $page->url = $pageNewUrl;
   // $page->update();

  /*  $pages_id = $startId;
    $languages_id = 1;
    $menu_name = 'Размеры ' . $sizesMassive[$x];
    $index_name = 'Размеры ' . $sizesMassive[$x];
    $title = 'Размеры ' . $sizesMassive[$x] . ' онлайн | Таблица размеров';
    $plates_title = 'Размеры ' . $sizesMassive[$x];
    $h1 = 'Размеры ' . $sizesMassive[$x];
    $description = 'Размеры ' . $sizesMassive[$x] . ' для мужчин и женщин - онлайн калькулятор позволяет с высокой точностью рассчитать размеры брендовой одежды и обуви ' . $sizesMassive[$x] . ' для взрослых и детей мальчиков и девочек в виде таблицы.';
    $text1 = 'Бесплатный онлайн сервис расчета размеров бренда ' . $sizesMassive[$x];
    $active = '1';*/



/*
    $model = new \common\models\Pages();
    $model->pages_id = $pages_id;
    $model->languages_id = 1;
    $model->menu_name = $menu_name;
    $model->index_name = $index_name;
    $model->title = $title;
    $model->plates_title = $plates_title;
    $model->h1 = $h1;
    $model->description = $description;
    $model->text1 = $text1;
    $model->active = $active;

    $model->short_description = '';
    $model->keywords = '';
    $model->text2 = '';

    $model->save();
*/

 //   $startId++;
//    $x++;






  /*  echo $pages_id . '<br>';
    echo $languages_id . '<br>';
    echo $index_name . '<br>';
    echo $title . '<br>';
    echo $plates_title . '<br>';
    echo $h1 . '<br>';
    echo $description . '<br>';
    echo $text1 . '<br>';*/


}



?>














