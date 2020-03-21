<?php
/* Функция форматирования цены и добавления знака рудля*/
   function cost_format ($cost)
{
    if ($cost > 1000) {
        $cost = number_format($cost, 0 ,' ',' ');
    } else { $cost = (ceil($cost));}

    $cost .= ' &#8381';

    return $cost;
}

/* Функция форматирования цены и добавления знака рудля ^ */

/* Функция для шаблонизации динамического контента */
function renderTemplate ($name, $data) {

    $name = 'templates/' . $name;

    if (!is_readable($name)) {
        return 'Шаблон с именем ' . $name . ' не существует или недоступен для чтения';
    }
    ob_start();

    extract($data);

    require $name;

    return ob_get_clean();
};
/* Функция для шаблонизации динамического контента ^ */

/* Функции для фильтрации вводимых и выводимых данных против XSS Атак*/
/* Выводит как есть*/
function esc($str) {

	$text = htmlspecialchars($str);

	return $text;
}
/*Скрывает теги*/
function str($str) {

	$text = strip_tags($str);

	return $text;
}
/* Функции для фильтрации вводимых и выводимых данных против XSS Атак ^ */
/* Функция таймер времени до закрытия лота */
function lotLifeTime () {
        $current_date = date_create("now");
        $limit_date = date_create("tomorrow midnight");

        return date_interval_format(date_diff($current_date, $limit_date), "%H:%I");
    }
/* Функция таймер времени до закрытия лота ^ */
?>
