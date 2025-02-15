<?php

# Масив для збереження значень
$serverData = [
    # Шлях від кореневої директорії
    'ROOT' => rtrim($_SERVER['DOCUMENT_ROOT'], '/'),
    # Поточний системний час
    'TM' => time(),
    # Ім'я файлу, до якого виконується звернення
    'PHP_SELF' => _filter($_SERVER['PHP_SELF']),
    # Домен сайту
    'HTTP_HOST' => _filter($_SERVER['HTTP_HOST']),
    # Ім'я сервера
    'SERVER_NAME' => _filter($_SERVER['SERVER_NAME']),
    # Схема (http/https)
    'SCHEME' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http',
    # Повний URL, включаючи схему, домен та шлях
    'FULL_URL' => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . _filter($_SERVER['HTTP_HOST']) . _filter($_SERVER['PHP_SELF']),
    # Реферер
    'REFERER' => _filter($_SERVER['HTTP_REFERER'] ?? 'none'),
    # Откуда пришли
    'HTTP_REFERER' => isset($_SERVER['HTTP_REFERER']) ? _filter($_SERVER['HTTP_REFERER']) : 'none',
];

# Визначаємо константи з масиву
foreach ($serverData as $key => $value) {
    define($key, $value);
}

