<?php

// Подключаемся к базе данных
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "autoschool";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверяем подключение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Проверяем, был ли отправлен запрос методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Получаем данные из формы
    $name = $_POST["name"];
    $telephone = $_POST["tel"];
    $telephone = "+".$telephone;
    $categorie = $_POST["select"];
    // echo "<script>alert('$test')</script>";
    // Готовим запрос на вставку данных
    $sql = "INSERT INTO userrequests (`name`, `telephone`, `categorie`)
VALUES ('$name', '$telephone', '$categorie')";

    // Выполняем запрос
    if (mysqli_query($conn, $sql)) {
        // echo "<script>alert('succes')</script>";
        header('Location: index.html');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Закрываем соединение с базой данных
    mysqli_close($conn);

}





?>