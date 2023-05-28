<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('img/Icon.png') }}" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>MoviePlanet</title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo"><i class="ri-film-fill"></i>MOVIEPLANET <span>ENTERTAIMENT</span></a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="#" class="nav__link">Nosotros</a>
                    </li>
                    <li>
                        <a href="#" class="nav__link">Contactanos</a>
                    </li>
                    <li>
                        <a href="#" class="nav__link user ri-user-line""></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
