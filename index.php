<?php

# Визначаємо кореневий каталог сайту
define('ROOT_DIR', dirname(__FILE__));

# Встановлюємо константи для директорій
const ENGINE_DIR = ROOT_DIR . '/engine';
const PLUGIN_DIR = ROOT_DIR . '/plugins';
const STYLES_DIR = ROOT_DIR . '/styles';
const UPLOAD_DIR = ROOT_DIR . '/upload';

# Підключаємо основний файл ядра
require_once(ENGINE_DIR . '/core.php');

# Підключаємо файл ініціалізації
require_once(ENGINE_DIR . '/init.php');

# Тестовий файл для розробки
require_once(PLUGIN_DIR . '/sandbox.php');
