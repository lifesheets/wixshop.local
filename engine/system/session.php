<?php

# Встановлення імені сесії
session_name('SID');

# Перевірка успішного запуску сесії
if (!session_start()) {
    die('Помилка під час запуску сесії');
}

# Отримання і захист ідентифікатора сесії
$sessID = addslashes(session_id());

# Безпечне створення нового ідентифікатора сесії
if (!preg_match('/^[a-fA-F0-9]{32}$/', $sessID)) {
    $sessID = bin2hex(random_bytes(16));
}
