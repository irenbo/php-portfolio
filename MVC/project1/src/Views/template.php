<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> --><!--маска телефона -->

<!--Эти стили передать через переменную в массиве $data -->
    <link rel="stylesheet" href="/css/main-page.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="/css/style-news.css">
     <link rel="stylesheet" href="/css/style-test.css">
     <link rel="stylesheet" href="/css/blog.css">
<!--Окончание блока -->
<?php if(isset($css)):?>
<link rel="stylesheet" href='<?php $css?>'>
<?php endif?>
<!-- Здесь код на добавление стилей -->

</head>
<body>

<header>
    <nav>
        <a id="logo" href="index.html"></a>
        <ul>
            <li class="active"><a href="/">Главная</a></li>
            <li class="hover"><a href="/service/common">Услуги</a>
                <ul class="hide-menu">
                    <li><a href="/service/processing">Фотосъемка</a></li>
                    <li><a href="/service/processing">Обработка</a></li>
                    <li><a href="/service/brief">Сайт</a></li>
                    <li><a href="service/diagnostic">Психодиагностика</a></li>
                </ul>
            </li>
            <li><a href="/info/blog">Блог</a></li>
            <li><a href="/info/contacts">Контакты</a></li>
        </ul>
        <form method="post" action="/account/auth">
            <input type="email"  name="email" placeholder="e-mail">
            <input type="password"  name="password" placeholder="пароль">
            <button type="submit">Войти</button>
        </form>
    </nav>
</header>

<!--Попробовать без main? <?php //include_once $content;?> -->
<!-- <main><?php //include_once $content;?></main> -->
<?php include_once $content;?>
    
<footer>
<div id="contacts"> 
        <h3>Follow Me</h3>
        <div>
            <a href="#">
                <img alt="Telegram" src="/img/tele.png">
            </a>
            <a href="#">
                <img alt="Facebook" src="/img/vk.png">
            </a>
            <a href="#">
                <img alt="Twitter" src="/img/skype.png">
            </a>
        </div>
    </div>
    <div class="copyright">
        &copy; 2019 WebDeva. All rights reserved.
    </div>
</footer>
</body>
</html>