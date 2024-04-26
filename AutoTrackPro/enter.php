<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="site-name"><h1>Авторизация</h1></div>
    <div class="login-form">
        <div class="input-container">
        <form action="login.php" method="post">
            <input type="email" placeholder="Введите вашу почту" required>
        </div>
        <div class="input-container">
            <input type="password" placeholder="Введите пароль" required>
        </div>
        <div class="checkbox-container">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Запомнить пароль</label>
        </div>
        <button type="submit" class="login-button">Войти</button>
        <a href="index.php"><button type="button" class="back-button">Назад</button></a>
    </div>
</body>
</html>