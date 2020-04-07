<?php

/* Подключение сценариев */
require_once ('data_lots.php');
require_once ('functions.php');
require_once ('global_var.php');
require_once ('data.php');
/* Подключение сценариев ^ */

$add_content = renderTemplate('add.php', [] );
$layout_content = renderTemplate('layout.php',
        [
            'main' => $add_content,
            'title' => 'Добовление лота',
            'categories' => $categories,
            'is_auth' => $is_auth,
            'user_name' => $user_name,
            'user_avatar' => 'img/user.jpg',
            'add_lot' => $add_lot
        ]);
    print($layout_content);
 ?>
