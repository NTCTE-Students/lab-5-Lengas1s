<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($message)) {
        echo "Все поля должны быть заполнены.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Неверный формат электронной почты.";
    } elseif (strlen($message) < 10) {
        echo "Сообщение должно содержать не менее 10 символов.";
    } else {
        echo "Сообщение отправлено успешно!";
        // Здесь можно добавить код для обработки сообщения
    }
}
?>