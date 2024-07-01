<?php
// Ваш токен Telegram бота
$telegramToken = '7324950397:AAF5dQUGbnYEOZ9A2uiYeO_SZXBVrgHQ1bg';

// Ваш chat_id
$chatId = '704160356'; // Ваш реальный chat_id

// Получение данных из формы и отправка сообщения в Telegram
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $telegramMessage = "New message from Contact Form:\n\nFull Name: $fullname\nEmail: $email\nMessage: $message";

    $url = "https://api.telegram.org/bot$telegramToken/sendMessage?chat_id=$chatId&text=" . urlencode($telegramMessage);

    // Отправка запроса к API Telegram
    $response = file_get_contents($url);

    // Проверка ответа (можно добавить дополнительные проверки)
    if ($response === false) {
        echo 'Error sending message';
    } else {
        echo 'Message sent successfully';
    }
}
?>
