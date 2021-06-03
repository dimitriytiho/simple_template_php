<?php

// Показывать все ошибки PHP
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


// Подключаем необходимое
// Папка приложения
$dir = dirname( __DIR__ );

// Автозагрузчик composer
require_once $dir . '/vendor/autoload.php';

// Функции
require_once $dir . '/vendor/core/func.php';

// Файл конфигурации app (Создайте папку config и в ней файл app.php)
if (is_file($dir . '/config/app.php')) {
    $app = require_once $dir . '/config/app.php';
}


// Заголовок запрещающий индексацию сайта
header('X-Robots-Tag: noindex,nofollow');


?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $app['name'] ?? null ?></title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>

    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col">

        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script>
    $(function () {

    })

    document.addEventListener('DOMContentLoaded', function() {

    }, false)
</script>
</body>
</html>