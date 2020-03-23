<?php
    session_start();
    if ($_SESSION['user']) {
    header( 'Location: profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

            <!--Форма регистрации-->

    <form action="vendor/singup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свой имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой Логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите свой пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="index.php">Авторизуйтесь</a>
        </p>
        <?php
        if ($_SESSION['message']) {
          echo '<p class="msg" ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>
</html >