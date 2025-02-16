<?php

# Встановлення сесії
require_once(ENGINE_DIR . '/system/global/include/session.php');
# Константи та псевдо змінних та функцій
require_once(ENGINE_DIR . '/system/global/include/redefinition.php');
# Підключення конфігураційного файлу сайту
require_once(ENGINE_DIR . '/system/global/include/config.php');
# Помилки інтерпретатора
require_once(ENGINE_DIR . '/system/global/include/interpretator.php');
# Інсталятор cms движка
require_once(ENGINE_DIR . '/system/global/include/install.php');
# Проста капча від ботів
require_once(ENGINE_DIR . '/system/global/include/captcha.php');
