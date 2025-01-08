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
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=Open+Sans:wght@400;800&family=Tinos:wght@400;700&display=swap" rel="stylesheet">
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
        <form action="{{ route('register') }}" method="post" novalidate autocomplete="off">
            @csrf
            <h1>Регистрация</h1>
            <div class="errors">
                <ul>
                    @foreach($errors->all() as $message)
                        <li>
                            {{ $message }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="input-box">
                <input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Почта" required>
                <i class='bx bx-user' ></i>
            </div>
            <div class="input-box">
                <input type="text" id="password" name="password" value="{{ old('password') }}" placeholder="Пароль" class="password" required>
                <i class='bx bxs-lock-alt'></i>
                <span class="btn-pas" onclick="togglePassword('password')">
        <img src="{{ Vite::asset('resources/img/eyes.png') }}" alt="" class="input-icon">
    </span>
            </div>
            <div class="input-box">
                <input type="text" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Подтвердите пароль" class="confirm-password" required>
                <i class='bx bxs-lock-alt'></i>
                <span class="btn-pas" onclick="togglePassword('confirm-password')">
        <img src="{{ Vite::asset('resources/img/eyes.png') }}" alt="" class="input-icon">
    </span>
            </div>


            <button type="submit" class="btn" onclick="">Зарегистрироваться</button>
        </form>
    </div>
</div>
<script>
    function togglePassword(fieldId) {
        const passwordInput = document.getElementById(fieldId);
        const passwordType = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', passwordType);
    }
</script>


</body>
</html>
