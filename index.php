<?php
$title = "Библиотека программиста - книги по программированию в высоком качестве";
$template = "default";

//Подключение модуля статьи
require_once("modules/article.php");
//Подключение модуля меню
require_once ("modules/menu.php");
//Подключение модуля обработки комментариев
//require_once ("modules/add_comment.php");
//Подключение файла шаблона
require_once("templates/$template/index.html");