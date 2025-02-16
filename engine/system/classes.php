<?php

spl_autoload_register(function ($name_class) {
    # Перевіряємо, чи існує файл класу в зазначеній директорії
    if (is_file(ENGINE_DIR . '/classes/' . $name_class . '.class.php')) {
        # Підключаємо файл класу
        require_once(ENGINE_DIR . '/classes/' . $name_class . '.class.php');
    }
});
