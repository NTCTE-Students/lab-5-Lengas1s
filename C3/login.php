<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (empty($username) || empty($password)) {
        echo "Все поля должны быть заполнены.";
    } elseif (strlen($username) < 4) {
        echo "Имя пользователя должно содержать минимум 4 символа.";
    } else {
        echo "Вход выполнен успешно!";
        // Здесь можно добавить код для проверки данных пользователя
    }
}
?>