<?php
/* Устанавливаем временную зону*/
date_default_timezone_set("Europe/Samara");
/* Устанавливаем временную зону ^ */

$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';


   /* Подключаем страницу с функциями */
require_once ('functions.php');
    /* Подключаем страницу с функциями ^ */

    /* Подключенны массивы с категориями */
require_once ('data_lots.php');
    /* Подключенны массивы с категориями ^ */


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
