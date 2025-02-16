<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приклад HTML Форми</title>
    <?= template::header() ?>
</head>
<body>

<h1>Приклад HTML Форми</h1>
<form action="#" method="post">

    <!-- Текстове поле -->
    <label for="name">Ім'я:</label>
    <input type="text" id="name" name="name" required placeholder="Введіть ваше ім'я">
    <br><br>

    <!-- Пароль -->
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required placeholder="Введіть ваш пароль">
    <br><br>

    <!-- Email -->
    <label for="email">Електронна пошта:</label>
    <input type="email" id="email" name="email" required placeholder="Введіть вашу електронну пошту">
    <br><br>

    <!-- Номер телефону -->
    <label for="phone">Телефон:</label>
    <input type="tel" id="phone" name="phone" placeholder="Введіть номер телефону">
    <br><br>

    <!-- Число -->
    <label for="age">Вік:</label>
    <input type="number" id="age" name="age" min="18" max="99" required placeholder="Введіть ваш вік">
    <br><br>

    <!-- Дата -->
    <label for="dob">Дата народження:</label>
    <input type="date" id="dob" name="dob" required>
    <br><br>

    <!-- Час -->
    <label for="time">Час:</label>
    <input type="time" id="time" name="time">
    <br><br>

    <!-- Файл -->
    <label for="file">Завантажити файл:</label>
    <input type="file" id="file" name="file" accept=".jpg, .png, .pdf">
    <br><br>

    <!-- Радіо кнопки -->
    <label>Стать:</label>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Чоловік</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Жінка</label>
    <br><br>

    <!-- Перемикач -->
    <label for="subscribe">Підписка на новини:</label>
    <input type="checkbox" id="subscribe" name="subscribe" value="yes">
    <br><br>

    <!-- Вибір з випадаючого списку -->
    <label for="country">Країна:</label>
    <select id="country" name="country">
        <option value="ukraine">Україна</option>
        <option value="usa">США</option>
        <option value="canada">Канада</option>
        <option value="uk">Велика Британія</option>
    </select>
    <br><br>

    <!-- Текстове поле для багаторядкового вводу -->
    <label for="message">Повідомлення:</label>
    <textarea id="message" name="message" rows="4" cols="50" placeholder="Напишіть ваше повідомлення"></textarea>

    <br><br>

    <?= template::captcha() ?>

    <br>

    <!-- Кнопка відправки -->
    <button type="submit">Відправити</button>

    <?= template::footer() ?>
</form>

</body>
</html>


