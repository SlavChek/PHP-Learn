<?php
/* Устанавливаем временную зону*/
date_default_timezone_set("Europe/Samara");
/* Устанавливаем временную зону ^ */
$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';

/* массив с категориями товаров и их изображений */
$categories = [
    ['title' => 'Доски и лыжи',
     'image' => 'promo__item--boards'],
    ['title' => 'Крепления',
     'image' => 'promo__item--attachment'],
    ['title' => 'Ботинки',
     'image' => 'promo__item--boots'],
    ['title' => 'Одежда',
     'image' => 'promo__item--clothing'],
    ['title' => 'Инструменты',
     'image' => 'promo__item--tools'],
    ['title' => 'Разное',
     'image' => 'promo__item--other']
];
/* массив с категориями товаров и их изображений ^ */

 /* массив с продукцией */
$products = [
    ['title' => '2014 Rossignol Distroct snowboard',
     'category' => $categories[0]['title'],
     'cost' => 10999,
     'url' => 'img/lot-1.jpg'],
     ['title' => 'DC Ply Mens 2016/2017 Snowboard',
      'category' => $categories[0]['title'],
      'cost' => 159999,
      'url' => 'img/lot-2.jpg'],
     ['title' => 'Крепления Union Contact Pro 2015 года, размер L/XL',
      'category' => $categories[1]['title'],
      'cost' => 8000,
      'url' => 'img/lot-3.jpg'],
     ['title' => 'Ботинки для сноуборда DC Mutiny Charocal',
      'category' => $categories[2]['title'],
      'cost' => 10999,
      'url' => 'img/lot-4.jpg'],
     ['title' => 'Куртка для сноуборда DC Mutiny Charocal',
      'category' => $categories[3]['title'],
      'cost' => 7500,
      'url' => 'img/lot-5.jpg'],
     ['title' => 'Маска Oakley Canopy',
      'category' => $categories[5]['title'],
      'cost' => 5400,
      'url' => 'img/lot-6.jpg']
   ];
   /* массив с продукцией ^ */

   /* Подключаем страницу с функциями */
require_once ('functions.php');
    /* Подключаем страницу с функциями ^ */

    /* Передаём информацию для шаблонизатора */
$page_content = renderTemplate('index.php', ['products' => $products, 'categories' => $categories] );
$layout_content = renderTemplate('layout.php',
        [
            'main' => $page_content,
            'title' => 'Главная',
            'categories' => $categories,
            'is_auth' => $is_auth,
            'user_name' => $user_name,
            'user_avatar' => 'img/user.jpg'
        ]);
    print($layout_content);
    /* Передаём информацию для шаблонизатора */



?>
