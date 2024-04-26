<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <div class="site-name"><h1>Регистрация</h1></div>
    <div class="containers">
        <div class="form">
            <form action="function.php" method="post">
            <input type="text" name = "Name" placeholder="Имя">
            <input type="text" name = "Surname" placeholder="Фамилия">
            <input type="text" name= "Secondname" placeholder="Отчество">
            <input type="email" name = "login" placeholder="Почта">
            <input type="password" name = "password" placeholder="Пароль">
            <input type="password" name = "surepassword" placeholder="Подтвердите пароль">
            <input type="checkbox" id="agree">
            <label for="agree">Согласен с обработкой персональных данных</label>
            <button type="submit">Зарегистрироваться</button>
            <a href="index.php"><button type="button" class="back-button">Назад</button></a>
        </div>
    </div>
</body>
</html>