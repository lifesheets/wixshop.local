<?php

# Довжина CAPTCHA та значення для генерації випадкових чисел
$captcha_length = 5;
$captcha_random_seed = "152639487";

# Функція для генерації випадкової CAPTCHA
function generate_random_captcha($length) {
    $characters = '0123456789';
    $captcha = '';
    for ($i = 0; $i < $length; $i++) {
        $captcha .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $captcha;
}

# Перевірка, чи є параметр 'image' у запиті
if (isset($_REQUEST['image'])) {
    # Отримуємо параметр 'image' із запиту

    # Функція для генерації зображення на основі числа
    function write_image_number($num_c) {
        # Базова частина для кодування картинки
        $number_c = "R0lGODlhCgAMAIABAFNTU////yH5BAEAAAEALAAAAAAKAAwAAAI";
        # Визначення бази для кожного числа
        if ($num_c == "0") { $len_c = "63"; $number_c .= "WjIFgi6e+QpMP0jin1bfv2nFaBlJaAQA7"; }
        if ($num_c == "1") { $len_c = "61"; $number_c .= "UjA1wG8noXlJsUnlrXhE/+DXb0RUAOw=="; }
        if ($num_c == "2") { $len_c = "64"; $number_c .= "XjIFgi6e+QpMPRlbjvFtnfFnchyVJUAAAOw=="; }
        if ($num_c == "3") { $len_c = "64"; $number_c .= "XjIFgi6e+Qovs0RkTzXbj+3yTJnUlVgAAOw=="; }
        if ($num_c == "4") { $len_c = "64"; $number_c .= "XjA9wG8mWFIty0amczbVJDVHg9oSlZxQAOw=="; }
        if ($num_c == "5") { $len_c = "63"; $number_c .= "WTIAJdsuPHovSKGoprhs67mzaJypMAQA7"; }
        if ($num_c == "6") { $len_c = "63"; $number_c .= "WjIFoB6vxmFw0pfpihI3jOW1at3FRAQA7"; }
        if ($num_c == "7") { $len_c = "61"; $number_c .= "UDI4Xy6vtAIzTyPpg1ndu9oEdNxUAOw=="; }
        if ($num_c == "8") { $len_c = "63"; $number_c .= "WjIFgi6e+QpMP2slSpJbn7mFeWDlYAQA7"; }
        if ($num_c == "9") { $len_c = "64"; $number_c .= "XjIFgi6e+QpMP0jinvbT2FGGPxmlkohUAOw=="; }

        # Відправка заголовків для зображення
        header("Content-type: image/gif");
        header("Content-length: $len_c");

        # Виведення зображення, декодувавши base64
        echo base64_decode($number_c);
    }

    # Генерація CAPTCHA
    $captcha_value = generate_random_captcha($captcha_length);

    # Виведення значення CAPTCHA на екран (наприклад, у сесії або як частину HTML)
    echo "Ваш CAPTCHA код: $captcha_value";

    # Виводимо закодоване зображення на екран
    if (array_key_exists('image', $_REQUEST)) {
        # Отримуємо параметр 'image' із запиту
        $num_c = $_REQUEST['image'];
        # Перевірка значення на відповідність за допомогою хешу MD5
        for ($i = 0; $i < 10; $i++) {
            # Якщо хеш MD5 співпадає з введеним значенням, генеруємо зображення
            if (md5($i + $captcha_random_seed) == $num_c) {
                # Виводимо картинку для цього числа
                write_image_number($i);
                exit;
            }
        }
    }

    exit;
}

# Параметр для зберігання ключа CAPTCHA (можна використовувати для перевірки)
$captcha_key = '';
