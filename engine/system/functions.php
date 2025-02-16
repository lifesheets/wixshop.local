<?php

# Відкриваємо директорію з функціями
$catalog_functions = opendir(ENGINE_DIR . '/functions');

# Перебираємо файли у директорії
while ($file_function = readdir($catalog_functions)) {
    # Перевіряємо, чи файл має розширення .php
    if (preg_match('#\.php$#i', $file_function)) {
        # Підключаємо файл функції
        require_once(ENGINE_DIR . '/functions/' . $file_function);
    }
}

# Закриваємо директорію після обробки
closedir($catalog_functions);
