<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudioKiss</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>


    <div class="background-container">
        <nav class="nav">
            <div class="container">
                <div class="nav-text">
                    <ul class="nav__list">
                        <li class="nav__item"><p class="logo__nav">Studio Kiss</p></li>
                        <li class="nav__item"><a class="nav__link" href="#">+7 (912) 991 11 02</a></li>
                        <li class="nav__item"><a class="nav__link" href="#"><img class="inst__logo" src="image/instwhite.png" alt="Instagram"></a></li>
                    </ul>
                    <hr>
                    <ul class="nav__list nav__list--main">
                        <li class="nav__item2"><a class="nav__link" href="index.html">Главная</a></li>
                        <li class="nav__item2"><a class="nav__link" href="about.html">О нас</a></li>
                        <li class="nav__item2"><a class="nav__link" href="price.html">Наши услуги</a></li>
                        <li class="nav__item2"><a class="nav__link" href="contacts.html">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="header">
            <div class="container">
                <p class="header__subtitle">
                    ФОТОСЕССИИ В STUDIO KISS
                </p>
                <button class="transparent-button">Забронировать</button>
            </div>
        </header>
        
        <button class="mobile-nav-button" id="mobile-nav-button">☰</button>
    
        <div class="sidebar" id="sidebar">
            <button class="close-btn" id="close-btn">×</button>
            <div class="sidebar-content">
                <ul class="sidebar__list">
                    <li class="siderbar__item"><a class="sidebar__link" href="index.html">Главная</a></li>
                    <li class="siderbar__item"><a class="sidebar__link" href="about.html">О нас</a></li>
                    <li class="siderbar__item"><a class="sidebar__link" href="price.html">Наши услуги</a></li>
                    <li class="siderbar__item"><a class="sidebar__link" href="contact.html">Контакты</a></li>
                </ul>
                <ul class="sidebar__list2">
                    <li class="siderbar__item2"><a class="sidebar__link2" href="#">+7 (912) 991 11 02</a></li>
                    <li class="siderbar__item2"><a class="sidebar__link2" href="#">studiokiss@gmail.com</a></li>
                    <li class="siderbar__item2"><a class="sidebar__link2" href="#"><img class="inst__logo" src="image/instwhite.png" alt=""></a></li>
                </ul>
                
            </div>
        </div>
    
        <script>
            document.getElementById('mobile-nav-button').addEventListener('click', function() {
                document.getElementById('sidebar').style.right = '0'; 
            });
    
            document.getElementById('close-btn').addEventListener('click', function() {
                document.getElementById('sidebar').style.right = '-250px'; 
            });
        </script>
    </div>