<?php

# Масив для збереження значень
$serverData = [
    'ROOT' => rtrim($_SERVER['DOCUMENT_ROOT'], '/'),                                                                                                              // Шлях від кореневої директорії
];

# Визначаємо константи з масиву
foreach ($serverData as $key => $value) {
    define($key, $value);
}
