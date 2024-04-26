// login.php
<?php
// Подключение к базе данных
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$username = $_POST['username'];
$password = $_POST['password'];

// Запрос к базе данных для проверки авторизации
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Пользователь авторизован
    echo "Добро пожаловать, $username!";
} else {
    // Неверные учетные данные
    echo "Неверное имя пользователя или пароль.";
}

$conn->close();
?>
