<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
    <title>BMW</title>
    <style>
        body {
            margin: 0;
            width: 100%;
        }
        .container {
            text-align: center;
            margin: 20px;
            width: 100%;
            
        }
        .frame {
            border: 2px solid black;
            padding: 5px;
            margin-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            height: 355px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
        }
        .buy-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            border-radius: 5px;
            margin-left: 47%;
        }
        .slider {
            width: 100%;
            overflow: hidden;
            margin-top: -35%;
        }

        .slide {
            display: none;
        }

        .slide img {
            width: 100%;
            height: 350px;
        }

        .active {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="site-name"><h1>AutoTrackPro</h1></div>
        <hr>
        <div class="site-description">
            <p><h3>Умный учет автотранспорта и планирование ремонатов</h3></p>
        </div>    
    </header>
    <div class="search">
        <div class="search-bar">
            <input type="text" placeholder="Поиск на сайте...">
            <button type="submit">Поиск</button>
        </div>
        <h1>BMW 3 Series</h1>
        <div class="buttons">
            <a href="register.php"><button>Регистрация</button></a>
            <a href="enter.php"><button>Авторизация</button></a>
        </div>
    </div>
    <div class="container">
        <div class="frame">
            <div class="slider">
                <div class="slide"><img src="BMW-3.jpg" width="550px" height="300px" alt="Изображение 1"></div>
                <div class="slide"><img src="BMW-3.jpg" width="550px" height="300px" alt="Изображение 2"></div>
                <div class="slide"><img src="BMW-3.jpg" width="550px" height="300px" alt="Изображение 3"></div>
            </div>
        </div>
    </div>
        <h2>Характеристика</h2>
        <table>
            <tr>
                <th>Номер авто</th>
                <th>Марка/модель</th>
                <th>Год выпуска</th>
                <th>Пробег</th>
                <th>Дата последнего тех. обслуживания</th>
                <th>Дата последнего ремонта</th>
                <th>Сроки страхования</th>
                <th>Расходы на топливо</th>
                <th>Состояние авто</th>
                <th>Затраты на обслуживание</th>
                <th>Предыдущие владельцы</th>
            </tr>
            <tr>
                <td>12345</td>
                <td>BMW X5</td>
                <td>2018</td>
                <td>50 000 км</td>
                <td>01.10.2021</td>
                <td>15.05.2021</td>
                <td>01.09.2022</td>
                <td>$500</td>
                <td>Отличное</td>
                <td>$1000</td>
                <td>2</td>
            </tr>
        </table>
        <a href="#" class="buy-button">Купить</a>
    </div>
    <footer>
        <div class="footer">
        <div class="row">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        
        <div class="row">
        <ul>
        <li><a href="#">Связаться с нами</a></li>
        <li><a href="#">Наши услуги</a></li>
        <li><a href="#">Политика конфиденциальности</a></li>
        <li><a href="#">Условия и положения</a></li>
        </ul>
        </div>
        
        <div class="row">
        AutoTrackPro Copyright © 2024 Inferno - All rights reserved || Designed By: Vladislav
        </div>
        </div>
        </footer>
</body>
<script src="script.js"></script>
</html>