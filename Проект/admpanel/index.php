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
</body>
</html>