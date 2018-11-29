<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700i,900&amp;subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/libs.min.css"> <!-- Подключаем CSS -->
    <link rel="stylesheet" href="../../css/main.css"> <!-- Подключаем CSS -->
    <link rel="stylesheet" href="../../fontawesome-free-5.4.1-web/css/all.css"/> <!-- Подключаем иконки -->
</head>
<body>
<header id='header' class='header'>
    <div class="container-fluid">
        <div class="row justify-content-sm-between justify-content-center align-items-center">
            <div class="col-lg-3 col-sm-5 col-auto">
                <img src="../../img/Logo_1.png" alt="logo" class="logo">
            </div>
            <div class="col-lg-4 col-sm-4 description text-center">
                - всё про содержание, ремонт и строительство автомобильных дорог
            </div>
            <div class="col-lg-3 col-sm-3 offset-lg-2 col-auto">
                <ul class="nav registr">
                    <li class="nav-item registr__item">
                        <a class="nav-link active" href="registration.php">Регистрация</a>
                    </li>
                    <li class="nav-item registr__item">
                        <!-- КНОПКА ВОЙТИ -> Button trigger modal -->

                        <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-sm">
                            Войти
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- МОДАЛЬНОЕ ОКНО -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="../login.php" method="post" class="form-horizontal mt-3" role="form">
                <div class="form-group">
                    <label for="login" class="col-auto control-label sr-only">Ваш логин</label>
                    <div class="col-auto input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-bed"></i>
                            </div>
                        </div>
                        <input type="text" name="login" id="login" placeholder="Введите логин" class="form-control"
                               autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-auto control-label sr-only">Пароль</label>
                    <div class="col-auto input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-unlock-alt"></i>
                            </div>
                        </div>
                        <input type="password" name="password" id="password" placeholder="Введите пароль"
                               class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Войти</button>
                <button type="submit" class="btn btn-primary btn-block" name="admin">
                    Войти администратором
                </button>
            </form> <!-- /form -->
        </div>
    </div>
</div>
<!--ВЕРХНЯЯ НАВИГАЦИОННАЯ ПАНЕЛЬ-->
<nav id='menu' class="menu navbar navbar-expand-lg">
    <a class="navbar-brand" href="../index.php" style="color: #ef6c00">Avtodorogi.by</a> <!--изменил цвет брэнда-->
    <!--изменил цвет тогглера-->
    <button style="background-color: #ef6c00" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"</span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../news.php">Новости <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Технологии
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Содержание</a>
                    <a class="dropdown-item" href="#">Ремонт</a>
                    <a class="dropdown-item" href="#">Строительство</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Проектирование</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Техника
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Автобитумовоз</a>
                    <a class="dropdown-item" href="#">Автогудронатор</a>
                    <a class="dropdown-item" href="#">Автогрейдер</a>
                    <a class="dropdown-item" href="#">Автосамосвал</a>
                    <a class="dropdown-item" href="#">Асфальтоукладчик</a>
                    <a class="dropdown-item" href="#">Бульдозер</a>
                    <a class="dropdown-item" href="#">Каток</a>
                    <a class="dropdown-item" href="#">Поливо-моечная</a>
                    <a class="dropdown-item" href="#">Погрузчик</a>
                    <a class="dropdown-item" href="#">Скрепер</a>
                    <a class="dropdown-item" href="#">Экскаватор</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Библиотека
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">ТНПА</a>
                    <a class="dropdown-item" href="#">Книги</a>
                    <a class="dropdown-item" href="#">Научные статьи</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Студентам
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Контрольные</a>
                    <a class="dropdown-item" href="#">Курсовые</a>
                    <a class="dropdown-item" href="#">Дипломы</a>
                </div>
            </li>
        </ul>
        <form action="../search.php" method="post" class="search form-inline my-2 my-lg-0">
            <input name = "search" class="form-control mr-sm-2" type="search" placeholder="Поиск..." aria-label="Search">
            <button name = "submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
        </form>
    </div>
</nav>
<?php require $file; ?>
<!--ПОДВАЛ-->
<footer id="footer" class="footer">
    <div class="container-fluid">
        <div class="row justify-content-lg-between justify-content-center">
            <!--КОНТАКТЫ-->
            <div class="col-lg-3 col-sm-3 col-6">
                <div class="row justify-content-start">
                    <div class="col-lg-11 offset-lg-1">
                        <div class="footerContacts">
                            <p>Если у Вас появились какие-то вопросы, замечания, предложения, просьбы обращайтесь</p>
                            <div class="row justify-content-start align-items-center contacts">
                                <a class="col-lg-2" href="#"><img src="../../img/Email.png" alt="E-mail"></a>
                                <a class="col-lg-10" href="#">
                                    admin@avtodorogi.by
                                </a>
                            </div>
                            <div class="row justify-content-start align-items-center contacts">
                                <a class="col-lg-2" href="#"><img src="../img/Skype.png" alt="Skype"></a>
                                <a class="col-lg-10" href="#">
                                    avtodorogi.by
                                </a>
                            </div>
                            <div class="row justify-content-start align-items-center contacts">
                                <a class="col-lg-2" href="#"><img src="../../img/Viber.png" alt="Viber"></a>
                                <a class="col-lg-10" href="#">
                                    375 (29) 399-45-63
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--О ПРОЕКТЕ-->
            <div class="col-lg-2 col-sm-3 col-6">
                <div class="footerProject">
                    <ul>
                        <a href="#">
                            <li>О проекте</li>
                        </a>
                        <a href="#">
                            <li>Рекламодателям</li>
                        </a>
                        <a href="#">
                            <li>Правила сайта</li>
                        </a>
                        <a href="#">
                            <li>Пользовательское соглашение</li>
                        </a>
                    </ul>
                </div>
            </div>
            <!--МЕНЮ-->
            <div class="col-lg-2 col-sm-3 col-6">
                <div class="footerMenu">
                    <ul>
                        <a href="/news.php">
                            <li>Новости</li>
                        </a>
                        <a href="#">
                            <li>Организации РБ</li>
                        </a>
                        <a href="#">
                            <li>Технологии</li>
                        </a>
                        <a href="#">
                            <li>Техника</li>
                        </a>
                        <a href="#">
                            <li>Библиотека</li>
                        </a>
                        <a href="#">
                            <li>Студентам</li>
                        </a>
                    </ul>
                </div>
            </div>
            <!--СОЦИАЛЬНЫЕ СЕТИ-->
            <div class="col-lg-2 col-sm-3 col-6">
                <div class="footerNetworks">
                    <div>
                        <p>Подписывайтесь</p>
                        <a href="#"><img src="../../img/OK.png" alt="Одноклассники"></a>
                        <a href="#"><img src="../../img/ВК.png" alt="ВКонтакте"></a>
                    </div>
                </div>
            </div>
            <!--ЛОГОТИП-->
            <div class="col-lg-3 col-auto">
                <div>
                    <img src="../../img/Logo_2.png" alt="Logo">
                </div>
            </div>
        </div>
</footer>
<script src="../../js/libs.min.js"></script>
<script src="../../js/common.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>
</html>

