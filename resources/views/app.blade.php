<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редакция</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
        ])
</head>
<body>
    <div class="container">
        <header>
            <h1>Редакция</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Главная</a></li>
                    <li><a href="{{ route('conf') }}">Регистрация участников конференции</a></li>
                    <li><a href="{{ route('gallery') }}">Фотогаллерея</a></li>
                    <li><a href="#">Прайс-лист</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </header>
            @yield('content')
        <footer>
            <p>&copy; 2012-2013 ЗАО «Компания» info@name.ru</p>
        </footer>
    </div>
</body>
</html>