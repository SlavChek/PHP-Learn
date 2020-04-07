<?php

/* Подключение сценариев */
require_once ('data_lots.php');
require_once ('functions.php');
require_once ('global_var.php');
require_once ('data.php');
/* Подключение сценариев ^ */

/* Идентификатор лота */
$id = $_GET['id'];
if (!$products[$id]) {
    header($_SERVER['SERVER_PROTOCOL'] . '404 - Запрашиваемое снаряжение пропало в лавине))');
    //header("Location: ../../err/404.php");
    exit;
}
/* Идентификатор лота ^ */

/* Передаём информацию для шаблонизатора */
$lot_content = renderTemplate('lot.php', ['products' => $products, 'categories' => $categories, 'bets' => $bets, 'id' => $id] );
$layout_content = renderTemplate('layout.php',
        [
            'main' => $lot_content,
            'title' => 'Карточка лота',
            'categories' => $categories,
            'is_auth' => $is_auth,
            'user_name' => $user_name,
            'user_avatar' => 'img/user.jpg',
            'add_lot' => $add_lot
        ]);
    print($layout_content);
/* Передаём информацию для шаблонизатора */
 ?>
