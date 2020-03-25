<?php
/* массив с категориями товаров и их изображений */
$categories = [
    ['title' => 'Доски и лыжи',
     'c_style' => 'promo__item--boards'],
    ['title' => 'Крепления',
     'c_style' => 'promo__item--attachment'],
    ['title' => 'Ботинки',
     'c_style' => 'promo__item--boots'],
    ['title' => 'Одежда',
     'c_style' => 'promo__item--clothing'],
    ['title' => 'Инструменты',
     'c_style' => 'promo__item--tools'],
    ['title' => 'Разное',
     'c_style' => 'promo__item--other']
];
/* массив с категориями товаров и их изображений ^ */

 /* массив с продукцией */
$products = [
    ['title' => '2014 Rossignol Distroct snowboard',
     'category' => $categories[0]['title'],
     'cost' => 10999,
     'u_image' => 'img/lot-1.jpg',
     'description' => 'Описание замело метелями'],
     ['title' => 'DC Ply Mens 2016/2017 Snowboard',
      'category' => $categories[0]['title'],
      'cost' => 159999,
      'u_image' => 'img/lot-2.jpg',
      'description' => 'Описание замело метелями'],
     ['title' => 'Крепления Union Contact Pro 2015 года, размер L/XL',
      'category' => $categories[1]['title'],
      'cost' => 8000,
      'u_image' => 'img/lot-3.jpg',
      'description' => 'Описание замело метелями'],
     ['title' => 'Ботинки для сноуборда DC Mutiny Charocal',
      'category' => $categories[2]['title'],
      'cost' => 10999,
      'u_image' => 'img/lot-4.jpg',
      'description' => 'Описание замело метелями'],
     ['title' => 'Куртка для сноуборда DC Mutiny Charocal',
      'category' => $categories[3]['title'],
      'cost' => 7500,
      'u_image' => 'img/lot-5.jpg',
      'description' => 'Описание замело метелями'],
     ['title' => 'Маска Oakley Canopy',
      'category' => $categories[5]['title'],
      'cost' => 5400,
      'u_image' => 'img/lot-6.jpg',
      'description' => 'Описание замело метелями']
   ];
   /* массив с продукцией ^ */
 ?>
