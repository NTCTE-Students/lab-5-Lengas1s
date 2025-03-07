<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $date = htmlspecialchars(trim($_POST['date']));
    $time = htmlspecialchars(trim($_POST['time']));

    if (empty($name) || empty($date) || empty($time)) {
        echo "Все поля должны быть заполнены.";
    } elseif (!DateTime::createFromFormat('Y-m-d', $date)) {
        echo "Неверный формат даты.";
    } elseif (!DateTime::createFromFormat('H:i', $time)) {
        echo "Неверный формат времени.";
    } else {
        echo "Бронирование успешно!";
        // Здесь можно добавить код для сохранения информации о бронировании
    }
}
?>