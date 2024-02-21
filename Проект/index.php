<?php
require_once "helpers/function.php";
if (!empty($_SESSION['user'])) {
    header("Location: http://localhost:3000/admpanel/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoTrackPro</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <header>
        <img width="100px" height="100px" src="images/logo.png" alt="Логотип">
        <h1>AutoTrackPro: Умный учет автотранспорта и планирование ремонтов</h1>
    </header>
    <nav>
        <a href="/">Главная</a>
        <a href="/admpanel">Административная панель</a>
    </nav>
    <main>
       
    <p class="error"> 
            <?php
            $login = strip_tags($_GET['login'] ?? "");
            $password = strip_tags($_GET['password'] ?? "");
            if ($login && $password) {
            if (loge($login, $password)) {
                header("Location: http://localhost:3000/admpanel");
                $_SESSION['user'] = $loge;
            }
        }
            ?>
        </p>

        <form>
            <label>
                Логин
                <input type="text" name="login">
            </label>
            <label>
                Пароль
                <input type="password" name="password">
            </label>
            <button>Войти</button>
        </form>
    </main>
</body>
<script src="scripts/main.js"></script>
</html>