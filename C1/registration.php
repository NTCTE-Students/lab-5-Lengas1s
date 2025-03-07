<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));

    if (empty($username) || empty($password) || empty($confirm_password)) {
        echo "Все поля должны быть заполнены.";
    } elseif ($password !== $confirm_password) {
        echo "Пароли не совпадают.";
    } else {
        echo "Регистрация прошла успешно!";
        // Здесь можно добавить код для сохранения данных пользователя в базу данных
    }
}
?>