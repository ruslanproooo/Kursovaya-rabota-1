<?php
require_once "../helpers/function.php";
if (!empty($_SESSION['user'])) {
    header("Location: http://localhost:3000");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoTrackPro</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    <header>
        <img width="100px" height="100px" src="../images/logo.png" alt="Логотип">
        <h1>AutoTrackPro: Умный учет автотранспорта и планирование ремонтов</h1>
    </header>
    <main>
        <h2>Информация о пользователе</h2>
        <table>
            <tr>
                <th>ID Пользователя</th>
                <th>Login</th>
                <th>Password</th>
                <th>Images</th>
            </tr>
            <?php
            foreach (getOrders() as $order) {
                ?>
                <tr>
                    <td><?= $order['ID'] ?></td>
                    <td><?= $order['login'] ?></td>
                    <td><?= $order['password'] ?></td>
                    <td><?= $order['images'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <h1 class="page-title">Пример работы слайдера</h1>
	  <div class="slider-container">
	    <div class="slider">
        <?php
            foreach (getOrders() as $order) {
                ?>
	      <img src="<?= $order['images'] ?>" width="600" height="400" alt="Белый пушистый кот">
          <?php } ?>
	    </div>
	    <button class="prev-button" type="button" aria-label="Посмотреть предыдущий слайд">&lt;</button>
	    <button class="next-button" type="button" aria-label="Посмотреть следующий слайд">&gt;</button>
	  </div>

    </main>  
    <script src="scripts/main.js"></script>
</body>
</html>