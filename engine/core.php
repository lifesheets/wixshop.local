<?php

# Встановлення сесії
require_once(ENGINE_DIR . '/system/session.php');
# Константи та псевдо змінних та функцій
require_once(ENGINE_DIR . '/system/redefinition.php');
# Масиви для збереження значень
require_once(ENGINE_DIR . '/system/constants.php');
# Функції для роботи движка
require_once(ENGINE_DIR . '/system/helpers.php');
# Підключення конфігураційного файлу сайту
require_once(ENGINE_DIR . '/system/config.php');
# Помилки інтерпретатора
require_once(ENGINE_DIR . '/system/interpretation.php');
# Інсталятор cms движка
require_once(ENGINE_DIR . '/system/install.php');
# Проста капча від ботів
require_once(ENGINE_DIR . '/system/captcha.php');
# Автозавантаження функцій з папки /engine/functions/
require_once(ENGINE_DIR . '/system/functions.php');
# Автозавантаження класів з папки /engine/classes/
require_once(ENGINE_DIR . '/system/classes.php');
# Актуальна версія сайту (Wap/Web)
# require_once(ENGINE_DIR . '/system/themes.php');
