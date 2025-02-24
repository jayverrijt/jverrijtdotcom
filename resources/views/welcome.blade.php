<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML ICON -->
    <link rel="icon" type="image/png" sizes="*" rel="noopener" target="_blank" href="{{asset('store/pictures/logos/logo-500.png')}}">
    <link rel="icon" type="image/png" sizes="200x200" rel="noopener" target="_blank" href="{{asset('store/pictures/logos/logo-200.png')}}">
    <link rel="icon" type="image/png" sizes="500x500" rel="noopener" target="_blank" href="{{asset('store/pictures/logos/logo-500.png')}}">
    <link rel="icon" type="image/png" sizes="1000x1000" rel="noopener" target="_blank" href="{{asset('store/pictures/logo/logo-1000.png')}}">
    <link rel="icon" type="image/png" rel="noopener" target="_blank" href="{{asset('store/pictures/logos/logo-500.png')}}">

    <!-- Dynamic Title -->
    <title>Jay</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/global.css')}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- JavaScript -->
    <script src="{{asset('assets/js/blur.js')}}"></script>
</head>
<body>
<div class="container">
    <div class="headerBlock" id="hb">
        <h1>Breng Je Geweldige Ideeen Tot Leven</h1>
    </div>
    <div class="statsBlock" id="sb">
        <div class="statOne">
            <h1>2+</h1>
            <p>Jaren ervaring</p>
        </div>
        <div class="statTwo">
            <h1>17+</h1>
            <p>Projecten gedaan</p>
        </div>
        <div class="statThree">
            <h1>4+</h1>
            <p>Clienten</p>
        </div>
    </div>
    <div class="navBlock" id="nb">
        <i onclick="blurOn()" class="fas fa-bars"></i>
    </div>
    <div class="personalBlock" id="pb">
        <div class="fotoHolder"></div>
        <div class="nameHolder">
            <p>Naam:</p>
            <h1>Jayze Verrijt</h1>
        </div>
        <div class="locationHolder">
            <div class="locationInfoHolder">
                <p>Locatie:</p>
                <h1>Helmond, NB</h1>
            </div>
            <div class="locationImgHolder">
            </div>
        </div>
        <div class="socialHolder">
            <div class="LinkedIn">
                <i class="fab fa-linkedin-in" onclick="window.open('https://www.linkedin.com/in/jayverrijt0/')"><a href=""></a></i>
            </div>
            <div class="Instagram">
                <i class="fab fa-instagram" onclick="window.open('https://www.instagram.com/jayzeverrijt0/')"><a href=""></a></i>
            </div>
            <div class="Snapchat">
                <i class="fab fa-snapchat-ghost" onclick="window.open('https://snapchat.com/t/1CuMfaBb')"><a href=""></a></i>
            </div>
            <div class="GitHub">
                <i class="fab fa-github" onclick="window.open('https://github.com/jayverrijt')"><a href=""></a></i>
            </div>
            <div class="Mail">
                <i class="fas fa-at" onclick="window.open('mailto:no-reply@jverrijt.com')"><a href=""></a></i>
            </div>
        </div>
    </div>
    <div class="projectHolder" id="ph">
        <div class="nameHolder2">
            <p>Top Projects</p>
        </div>
        <div class="pjHolder">
            <div class="pj1">
                <div class="infoBox" onclick="window.open('{{route('welcome')}}')">
                    <!--GoodLookz-->
                    <h2>Good-Lookz</h2>
                    <p>Gemaakt voor 4People Communications tijdens mijn stage. Hier kan je kleding onderling met je vrienden uitlenen zolang ze de zelfde maat hebben als jou.</p>
                </div>
                <img class="pjImg" src="{{asset('logos/GL-transparent.png')}}">
            </div>
            <div class="pj2">
                <div class="infoBox" onclick="window.open('{{route('welcome')}}')">
                    <!--SensititivtyCheck-->
                    <h2>Sensitivity-Check</h2>
                    <p>Gemaakt voor 4People Communications tijdens en na mijn stage. Hier kan je testen of ja Hooggevoeligheid (HSP) hebt.</p>
                </div>
                <img class="pjImg" src="{{asset('logos/SC-transparent.png')}}">
            </div>
            <div class="pj3">
                <div class="infoBox" onclick="window.open('{{route('welcome')}}')">
                    <!--GeldBegeleiding-->
                    <h2>GeldBegeleiding</h2>
                    <p>Website gemaakt voor Geld Begeleiding BV. Op de webite kan je je aanmelden voor de nieuwsbrief, workshops en service informatie</p>
                </div>
                <img class="pjImg" src="{{asset('logos/GB-transparent.png')}}">
            </div>
        </div>
    </div>
    <div class="aboutHolder" id="ah">
        <div class="nameHolder2">
            <p id="am">About me</p>
        </div>
    </div>
    <div class="hamburgerMenu" id="hm" style="display: none !important;">
        <div class="navBlock2">
            <i onclick="blurOff()" class="fas fa-times"></i>
        </div>
        <div class="navItem">
            <a href="{{route('welcome')}}"><p class="navItemP">Home</p></a>
        </div>
        <div id="item2" class="navItem">
            <a href="{{route('projects.index')}}"><p class="navItemP">Projecten</p></a>
        </div>
        <div id="item3" class="navItem">
            <a href="{{route('contact.index')}}"><p class="navItemP">Contact</p></a>
        </div>
    </div>
</div>
</body>
</html>
