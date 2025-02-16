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
    # Браузер пользователя
    'BROWSER' => isset($_SERVER['HTTP_USER_AGENT']) ? _filter($_SERVER["HTTP_USER_AGENT"]) : 'none',
    # IP пользователя
    'IP' => _filter(filter_var($_SERVER["REMOTE_ADDR"], FILTER_VALIDATE_IP)),
    # Полный URL адрес запрашиваемой страницы
    'REQUEST_URI' => isset($_SERVER["REQUEST_URI"]) ? _filter($_SERVER["REQUEST_URI"]) : '/',
];

# Визначаємо константи з масиву
foreach ($serverData as $key => $value) {
    define($key, $value);
}
