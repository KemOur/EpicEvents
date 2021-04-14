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
            /*
            burger.addEventListener('click', () => {
                nav.classList.toggle('nav-active');
            });
            */
            burger.addEventListener('click', nav.classList.toggle('nav-active') );

            burger.classList.toggle('toggle');
        }
        navSlide();
    </script>
</head>

<body>
<div class="container">
    <div id="divThomas">
    <header>
        <div class="nav-area">
            <nav>
                <div class="logo">
                        <a href="/"><img src="./img/logo.png" class="img_logo"></a>
                        </div>

                        <ul class="nav-links">
                            <li><a href="#Nos_influenceurs">Influenceurs</a></li>
                            <li><a href="#Nos_services">Formations</a></li>
                            <li><a href="/agency">L'agence</a></li>
                            <li><a href="#fomulaire">Contact</a></li>

                        </ul>
                        <div class="burger" onclick="navSlide()">
                            <div class="line1"></div>
                            <div class="line2"></div>
                            <div class="line3"></div>
                        </div>
                    </nav>

            <div class="agence">
                <p class="p_ami">AGENCE DE MEDIA <br> ET D'INFLUENCE</p>
                <br>
                <button class="profite button2"><a style="color: white; text-decoration: none" href="#fomulaire">J'en profite </a></button></button>
            </div>
        </div>

    </header>
    </div>
</div>
