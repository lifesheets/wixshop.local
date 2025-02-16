<?php

# Визначаємо кореневий каталог сайту
define('ROOT_DIR', dirname(__FILE__));

# Встановлюємо константу для директорії движка
const ENGINE_DIR = ROOT_DIR . '/engine';

# Підключаємо основний файл ядра
require_once(ENGINE_DIR . '/core.php');

# Підключаємо файл ініціалізації
require_once(ENGINE_DIR . '/init.php');
