<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/style.css', 'resources/css/reset.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cookie&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=Open+Sans:wght@400;800&family=Tinos:wght@400;700&display=swap"
        rel="stylesheet">
    <title>AppleZone</title>
</head>
<body>

<header>
    <div class="header-line">
        <div class="img-logo">
            <img class="apple-img1" src="{{ Vite::asset('resources/img/AppleZoneLogo1.png') }}" alt="">
        </div>
        <nav>
            <div class="nav-container">
                <a class="nav-item" href="/">Главное</a>
                <a class="nav-item" href="garanty">Гарантия</a>
                <a class="nav-item" href="installment">Рассрочка</a>
                <a class="nav-item" href="contacts">Контакты</a>
                <a class="nav-item" href="catalog">Каталог</a>
                <a class="nav-item" href="login">Вход</a>
            </div>
        </nav>
    </div>
</header>

<div class="wrapper-container">
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Имя пользователя" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Пароль" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember">
                <label for=""> <input type="checkbox">Запомнить меня</label>
                <a href="#">Забыли пароль?</a>
            </div>

            <button type="submit" class="btn">Логин</button>

            <div class="register-link">
                <p>Нет аккаунта?<a href="register"> Регистрация</a></p>
            </div>
        </form>
    </div>
</div>


</body>
</html>
