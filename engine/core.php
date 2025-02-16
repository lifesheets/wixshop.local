<?php

# Встановлення сесії
require_once(ENGINE_DIR . '/system/global/session.php');
# Константи та псевдо змінних та функцій
require_once(ENGINE_DIR . '/system/global/redefinition.php');
# Підключення конфігураційного файлу сайту
require_once(ENGINE_DIR . '/system/global/config.php');
# Помилки інтерпретатора
require_once(ENGINE_DIR . '/system/global/interpretator.php');
# Інсталятор cms движка
require_once(ENGINE_DIR . '/system/global/install.php');
# Проста капча від ботів
require_once(ENGINE_DIR . '/system/global/captcha.php');

# Підключення ключових конфігураційних файлів системи
require_once(ENGINE_DIR . '/system/global/connect.php');
require_once(ENGINE_DIR . '/system/global/users.php');