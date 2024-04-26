<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Name = $_POST['Name'];
$Surname = $_POST['Surname'];
$Secondname = $_POST['Secondname'];
$login = $_POST['login'];
$password = $_POST['password'];
$surepassword = $_POST['surepassword'];

$sql = "INSERT INTO users (Name, Surname, Secondname, login, password, surepassword) VALUES ('$Name', '$Surname', '$Secondname', '$login', '$password', '$surepassword')";
# $sql = "INSERT INTO `users` (`ID`, `Name`, `Surname`, `Secondname`, `login`, `password`, `surepassword`) VALUES (NULL, 'свусу', 'усуусв', 'увсувсв', 'bxqkxb@gmail.com', 'wd3d3ed3ed', 'ed3de3d3ed');"
if ($conn->query($sql) === TRUE) {
    echo "Регистрация прошла успешно!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>