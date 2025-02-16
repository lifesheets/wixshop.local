<?php

# Увімкнення показу помилок залежно від конфігурації
if (config('app_debug') === true) {
    # Включаємо відображення всіх помилок
    ini_set('error_reporting', E_ALL);                      # Показуємо всі помилки
    ini_set('display_errors', 1);                           # Увімкнено відображення помилок
    ini_set('display_startup_errors', 1);                   # Увімкнено відображення помилок при запуску PHP
} else {
    # Вимикаємо відображення помилок
    ini_set('display_errors', 0);                           # Вимикаємо відображення помилок
    ini_set('display_startup_errors', 0);                   # Вимикаємо відображення помилок при запуску PHP
    error_reporting(0);                                        # Вимикаємо всі рівні звітності про помилки
}
