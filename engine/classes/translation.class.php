<?php

# Клас для роботи з переведенням слів

class translation {

    /**
     * Функція для виведення переведеного тексту
     *
     * @param string $text Текст для переведення
     * @return string Переведений текст або оригінал, якщо переклад відсутній
     */

    public static function show(string $text): string {
        global $translation_array;

        # Приводимо текст до нижнього регістру для порівняння
        $str = mb_strtolower($text, 'UTF-8');
        # За замовчуванням використовуємо оригінальний текст
        $translate = $text;

        # Перевіряємо наявність перекладу
        if (isset($translation_array[$str][0])) {
            # Якщо переклад є, використовуємо його
            $translate = $translation_array[$str][0];
        }
        # Повертаємо або перекладений, або оригінальний текст
        return $translate;
    }
}
