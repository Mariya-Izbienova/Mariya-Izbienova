<?php

require_once "function.php";

// двумерный массив со списком записей
$items_list = [];

// HTML код главной страницы
$page_content = renderTemplate('main.php', ['items' => $items_list]);

// окончательный HTML код
$layout_content = renderTemplate('layout.php',
['partners' => $page_content, 'title' => 'Mountain king']);

// вывод на экран итоговой страницы
print($layout_content);