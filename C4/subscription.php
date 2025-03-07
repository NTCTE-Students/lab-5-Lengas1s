<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));

    if (empty($email)) {
        echo "Поле электронной почты должно быть заполнено.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Неверный формат электронной почты.";
    } else {
        echo "Вы успешно подписались на рассылку!";
        // Здесь можно добавить код для добавления электронной почты в базу данных
    }
}
?>