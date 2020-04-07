<?php

   /* Подключаем страницу с функциями */
require_once ('functions.php');
    /* Подключаем страницу с функциями ^ */

    /* Подключен массив с категориями */
require_once ('data_lots.php');
    /* Подключен массив с категориями ^ */

    /* Подключение глобальных переменных */
require ('global_var.php');
    /* Подключение глобальных переменных ^ */

    /* Подключен массив со ставками пользователей */
require_once ('data.php');
    /* Подключен массив со ставками пользователей ^ */

    /* Передаём информацию для шаблонизатора */
$page_content = renderTemplate('index.php', ['products' => $products, 'categories' => $categories] );
$layout_content = renderTemplate('layout.php',
        [
            'main' => $page_content,
            'title' => 'Главная',
            'categories' => $categories,
            'is_auth' => $is_auth,
            'user_name' => $user_name,
            'user_avatar' => 'img/user.jpg',
            'add_lot' => $add_lot
        ]);
    print($layout_content);
    /* Передаём информацию для шаблонизатора */

?>
