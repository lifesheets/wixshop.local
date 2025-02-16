<?php

# Шлях до файлу конфігурації
$configFilePath = ENGINE_DIR . "/configs/settings.ini";

# Спробуємо прочитати INI файл з обробкою помилок
$config = @parse_ini_file($configFilePath, false);

# Перевірка на успішність читання файлу
if ($config === false) {
    # Повертаємо порожній масив, якщо сталася помилка
    $config = [];
}

# Додаткова перевірка, якщо файл прочитано, але порожній
if (empty($config)) {
    error_log("Конфігураційний файл порожній: " . $configFilePath);
}
