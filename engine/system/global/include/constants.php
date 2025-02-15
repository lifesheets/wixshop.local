<?php

# Масив для збереження значень
$serverData = [
    'ROOT' => rtrim($_SERVER['DOCUMENT_ROOT'], '/'),                                                                                                              // Шлях від кореневої директорії
    'TM' => time(),                                                                                                                                                         // Поточний системний час
    'PHP_SELF' => _filter($_SERVER['PHP_SELF']),                                                                                                                            // Ім'я файлу, до якого виконується звернення
];

# Визначаємо константи з масиву
foreach ($serverData as $key => $value) {
    define($key, $value);
}
