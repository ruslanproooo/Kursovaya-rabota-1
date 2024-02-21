<?php
session_start(); // Сервер понимает какая страница открыта в браузере
$BD = mysqli_connect("localhost", "root", "", "auto");
if (!$BD) {
    die ("ошибка подключения");
}

function loge ($login, $password)
{
    global $BD;
    $result = mysqli_query($BD, "SELECT * FROM `users` where login = '$login' and password = '$password';");
    return mysqli_num_rows($result);
}