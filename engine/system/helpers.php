<?php

# Функція для роботи з параметрами GET
function get($data, $d = 0) {
    # Перевіряємо, чи існує параметр у GET-запиті
    return isset($_GET[$data]) ? ($d == 0 ? remove_script($_GET[$data]) : $_GET[$data]) : null;
}

# Функція для роботи з параметрами POST
function post($data, $d = 0) {
    # Перевіряємо, чи існує параметр у POST-запиті
    return isset($_POST[$data]) ? ($d == 0 ? remove_script($_POST[$data]) : $_POST[$data]) : null;
}

# Функція для роботи з параметрами COOKIE
function cookie($name) {
    # Перевіряємо, чи існує cookie з заданим ім'ям
    return isset($_COOKIE[$name]) ? remove_script($_COOKIE[$name]) : null;
}

# Функція для роботи з параметрами SESSION
function session($data, $param = 'no_data') {
    # Якщо параметр не переданий, повертаємо значення сесії або встановлюємо нове значення
    if ($param == 'no_data') {
        return isset($_SESSION[$data]) ? (!is_array($_SESSION[$data]) ? remove_script($_SESSION[$data]) : $_SESSION[$data]) : null;
    } else {
        # Якщо параметр переданий, оновлюємо значення в сесії
        return $_SESSION[$data] = $param;
    }
}

# Функція для налаштувань конфігурацій
function config($data, $param = null) {
    global $config;
    # Якщо параметр не переданий, повертаємо значення конфігурації після фільтрації
    return $param === null ? _filter($config[$data]) : ($config[$data] = $param);
}

# Функція для визначення версії сайту (мобільний/десктоп)
function type_version(): bool {
    # Массив популярних мобільних пристроїв та браузерів
    $mobile_array = array(
        'ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi',
        'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola',
        'smartphone', 'blackberry', 'playstation portable', 'tablet browser'
    );
    # Отримуємо інформацію про браузер користувача
    $agent = strtolower(BROWSER);
    # Перевіряємо, чи є згадка про мобільний пристрій в рядку агента
    foreach ($mobile_array as $value) {
        if (strpos($agent, $value) !== false) {
            # Якщо є, повертаємо true
            return true;
        }
    }
    # Якщо не знайдено - повертаємо false
    return false;
}

# Функція для редіректу
function redirect($url, $refresh = 0) {
    /*
     * $url - URL для перенаправлення
     * $refresh - Затримка перед перенаправленням (за замовчуванням 0)
     */
    return $refresh <= 0 ? header('Location: ' . $url) . exit() : header('Refresh: ' . $refresh . '; url=' . $url) . exit();
}
