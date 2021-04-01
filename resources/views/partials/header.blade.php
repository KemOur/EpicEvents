<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Welcome | EpicEvents </title>
    <link rel="stylesheet" href="./css/app.css">



    <script>
        const navSlide = () => {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.nav-links');

            burger.addEventListener('click', () => {
                nav.classList.toggle('nav-active');
            });

            burger.classList.toggle('toggle');
        }

        navSlide();
    </script>
</head>

<body>
<div class="container">

    <header>
        <img src="./img/imgx.png" class="img-bg">

        <div class="nav-area">
            <nav>
                <div class="logo">
                        <a href="/"><img src="./img/logo.png" class="img_logo"></a>
                        </div>

                        <ul class="nav-links">
                            <li><a href="#">Influenceurs</a></li>
                            <li><a href="#">Formations</a></li>
                            <li><a href="/agency">L'agence</a></li>
                            <li><a href="#">Contact</a></li>

                        </ul>
                        <div class="burger" onclick="navSlide()">
                            <div class="line1"></div>
                            <div class="line2"></div>
                            <div class="line3"></div>
                        </div>
                    </nav>

            <div class="agence">
                <p class="p_ami">AGENCE DE MEDIA <br> ET D'INFLUENCE</p>
                <p class="p_lmfael">Les meilleures formations assurés 100 % en ligne</p>
                <br>
                <button class="profite">J'en profite </button>
            </div>
        </div>
    </header>
