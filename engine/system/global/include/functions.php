<?php

# Функція для роботи з параметрами GET
function get($data, $d = 0) {
    # Перевіряємо, чи існує параметр у GET-запиті
    return isset($_GET[$data]) ? ($d == 0 ? remove_script($_GET[$data]) : $_GET[$data]) : null;
}

