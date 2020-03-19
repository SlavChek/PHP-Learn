<?php
$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';

/* массив с катигориями товаров */
$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];
/* массив с катигориями товаров ^ */

 /* массив с продукцией */
$products = [
    ['title' => '2014 Rossignol Distroct snowboard',
     'category' => $categories[0],
     'cost' => 10999,
     'url' => 'img/lot-1.jpg'],
     ['title' => 'DC Ply Mens 2016/2017 Snowboard',
      'category' => $categories[0],
      'cost' => 159999,
      'url' => 'img/lot-2.jpg'],
     ['title' => 'Крепления Union Contact Pro 2015 года, размер L/XL',
      'category' => $categories[1],
      'cost' => 8000,
      'url' => 'img/lot-3.jpg'],
     ['title' => 'Ботинки для сноуборда DC Mutiny Charocal',
      'category' => $categories[2],
      'cost' => 10999,
      'url' => 'img/lot-4.jpg'],
     ['title' => 'Куртка для сноуборда DC Mutiny Charocal',
      'category' => $categories[3],
      'cost' => 7500,
      'url' => 'img/lot-5.jpg'],
     ['title' => 'Маска Oakley Canopy',
      'category' => $categories[5],
      'cost' => 5400,
      'url' => 'img/lot-6.jpg']
   ];
   /* массив с продукцией ^ */

require_once ('functions.php');

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
?>
