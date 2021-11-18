<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8"> 
<title></title>
<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
    <header>
        <div class="head">
            <div class="row">
                <div class="logo">
                    <img src="/logo.png">
                    <p>Добрый сайт</p>
                </div>
            <nav>
                <a href="">Главная</a>
                <a href="">Блог</a>
            </nav>
            </div>
        </div>
    </header>
    <div>
    @yield('content')
    </div>
    <footer>
        <div class="footer">
            <h2>Подвал сайта</h2>
        </div>
    </footer>
</body>
</html>