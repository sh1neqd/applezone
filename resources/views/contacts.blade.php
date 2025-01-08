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

<footer>
    <div class="contacts-container">
        <div class="contacts-title">
            Контакты
        </div>
</footer>


<div class="maps-container">


    <div class="maps-text">
        <div class="mapsText-left">
            <div class="mapsText-left1">
                Адрес<br>
                улица Ленина, 100, Уфа,<br> Республика Башкортостан
            </div>
            <div class="mapsText-left2">
                Телефон <br>
                8 (927) 929-29-17
            </div>
        </div>
        <div class="mapsText-right">
            <div class="mapsText-right1">
                Режим работы <br>
                Ежедневно с 10:00-22:00
            </div>
            <div class="mapsText-right2">
                Email <br>
                RavilIbakov102@yandex.ru
            </div>
        </div>
    </div>

    <div class="maps">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab4faaf433d5f157672926a856b59f32bba2f023971d27812d11d2945938129cf&amp;width=754&amp;height=677&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>

</div>


<div class="legal_information">
    <div class="lin_container">
        <div class="lin-titleContainer">
            <div class="lin-title">
                Юридическая информация
            </div>
        </div>
    </div>
    <div class="lin-infoContainer">
        <div class="lin-info">
            Наименование организации: ИП Ибаков Равиль Фидратович<br>
            Юридический и почтовый адрес: Уфа, ул. Ленина, 100, 450006<br>
            ИНН: 020404087928<br>
            БИК: 044525411234<br>
            РС: 40802810116050001425<br>
            КС: 30101810145250000411<br>
        </div>
    </div>
</div>
</div>


<footer>
    <div class="footer-container">
        <div class="footer-text">
            Сайт носит сугубо информационный характер и не является публичной офертой, определяемой Статьей 437 (2) ГК РФ. Apple, логотип Apple и изображения Apple являются зарегистрированными товарными знаками компании Apple Inc. в США и других странах. App Store является знаком обслуживания компании Apple Inc. Instagram принадлежит компании Meta, признанной экстремистской организацией и запрещенной в РФ.
        </div>
    </div>
</footer>

</body>
</html>
