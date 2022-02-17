<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta name="description" content="Blog,
    stworzony przez studenta Uniwersytetu Slaskiego.
     Informatyka. Specjalizacja Inzynieria systemow informatycznych" />
    <meta name="keywords" content="Blog, Uniwersytet Slaski" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Pawel S" />
    <meta name="copyright" content="Copyright Pawel S" />
    <title>Home Blog</title>
    <link type="text/css" rel="stylesheet" href="styles/style.css"/>
    <link type="text/css" rel="stylesheet" href="styles/styleForRegisterForm.css"/>
    <link type="text/css" rel="stylesheet" href="styles/menuButton.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/registerForm.js"></script>
    <script src="scripts/logInForm.js"></script>
    <script src="scripts/accountManagment.js"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
</head>
<body>
<?php
    include("controllers/navbar.php");
?>
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/ImageFifthSlide.png" alt="Code Fragment PHP">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/ImageSecondSlide.jpg" alt="JavaScript">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/ImageThirdSlide.jpg" alt="Bootstrap">
            </div>
        </div>
    </div>
</section>
<div class="row" style="height: 50px"></div>
<div class="container">
    <div class="row position-relative">
        <div class="outlayer position-absolute"></div>
        <div class="col-md-4 categoryImages"><img src="img/FirstCatBox.jpg"></div>
        <div class="col-md-4 categoryImages"><img src="img/FirstCatBox.jpg"></div>
        <div class="col-md-4 categoryImages"><img src="img/FirstCatBox.jpg"></div>
    </div>
</div>
<div class="container-fluid" id="catBox"></div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 px-0">
            <div class="fixedImage">
                <h5 id="textOnFixedImg">
                    Używamy również uwierzytelniania biometrycznego,
                    aby zapewnić bezpieczne leczenie. Możemy uzyskać dostęp
                    do wszystkich rodzajów osób i ich danych z dowolnego miejsca,
                    więc nie ma potrzeby udawania się do ośrodka zdrowia.
                    Rozumiemy, że każda osoba jest inna, a nasi konsultanci
                    i lekarze dbają o to, by opieka nad pacjentem
                    była dostosowana do każdej osoby.
                    Wiemy, że ludzie chcą uzyskać najlepszą możliwą opiekę i staramy się im pomóc.
                </h5>
            </div>
        </div>
    </div>
</div>

<div class="row" style="height: 50px"></div>

<div class="container">
    <div class="ReverseBoxes">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="p-3 RevBoxesClass">
                    <span>
                        <img src="img/RevBoxes3.jpg" alt="PHP code">
                    </span>
                    <h5>
                        Do walidacji wizyt służy unikalny proces,
                        a my zapewniamy całodobową obsługę klienta.
                        Aby wesprzeć naszą misję, obecnie działamy
                        w dwóch lokalizacjach w Adelajdzie w Australii Południowej
                        i Sydney w Australii.
                        Nasz najbardziej pracowity czas pracy przypada
                        na tydzień i działamy również w dwóch lokalizacjach
                        w Melbourne, SA i Brisbane, QLD.
                        Naszym celem jest zapewnienie naszej grupie pacjentów
                        kompleksowej obsługi wszystkiego, czego potrzebują.
                    </h5>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="p-3 RevBoxesClass">
                    <div class="d-none d-md-none d-lg-block">
                        <h5>
                            Do walidacji wizyt służy unikalny proces,
                            a my zapewniamy całodobową obsługę klienta.
                            Aby wesprzeć naszą misję, obecnie działamy
                            w dwóch lokalizacjach w Adelajdzie w Australii Południowej
                            i Sydney w Australii.
                            Nasz najbardziej pracowity czas pracy przypada
                            na tydzień i działamy również w dwóch lokalizacjach
                            w Melbourne, SA i Brisbane, QLD.
                            Naszym celem jest zapewnienie naszej grupie pacjentów
                            kompleksowej obsługi wszystkiego, czego potrzebują.
                        </h5>
                    </div>
                    <span>
                        <img src="img/RevBoxes4.jpg" alt="">
                    </span>
                    <div class="d-lg-none">
                        <h5>
                            W Saremeda współpracujemy z wieloma czołowymi lekarzami
                            i dentystami w Wielkiej Brytanii i na całym świecie,
                            aby opracować zupełnie nową technologię poprawiającą
                            jakość wizyt dentystycznych, a nasze usługi mają
                            być najlepsze dostępne w Wielkiej Brytanii.
                            Zostaliśmy niedawno wybrani jako najlepsze
                            spa w Londynie na Good News.com.au, gdzie 70% osób
                            stwierdziło, że jesteśmy „Dobry”
                            lub „Dość dobrzy” podczas ostatnich dwóch wizyt.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr style="height: 25px;">
<div class="row">
    <h2 style="margin: 0 auto;
    padding-bottom: 25px;">
        Dodaj Post
    </h2>
</div>
<h3 style="text-align: center;">
    <button type="button" class="btn btn-secondary"
            data-container="body" data-toggle="popover" data-placement="right"
            data-content="[b]pogrubienie[/b]

                        [i]pochylenie[/i]
                                    [color=blue]kolor[/color]
                                                [u]podkreślenie[/u]">
        Kliknij by zobaczyć obsługiwane formaty!
    </button>
</h3>
<hr style="height: 25px;">


<div class="container">
    <div class="row">
<!--        pages/posts.php-->
        <form method="POST" style="margin: 0 auto" action="controllers/addPostController.php">
            <div class="col-lg-12">
                <div class="cent">
                    <label>
                        <h3>Tytuł:</h3>
                        <input type="text" name="title" style="width: 100%">
                    </label>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="cent">
                    <h3>Treść:</h3>
                    <textarea placeholder="Textarea obsluguje BBCode" style="width: 100%"
                            name="content" id="postCont" cols="130" rows="6"></textarea>
                </div>
            </div>
            <div class="cent">
                <input name="postSubmit" type="submit" style="margin-bottom: 50px; padding: 5px 15px" value="Dalej"/>
            </div>
        </form>
    </div>
</div>


<hr style="height: 25px;">
<div class="row">
    <h2 style="margin: 0 auto;
    padding-bottom: 25px;">
        Artykuły
    </h2>
</div>
<h3 style="text-align: center">
    By zobaczyć więcej artykułów
    przejdź do strony naciskając przycisk
</h3>
<hr style="height: 25px;">


<article>
    <div class="container">
        <div class="row" style="margin-left: 0; margin-right: 0;">
            <?php $artToShow = 1;
            include('controllers/generateArc.php'); ?>
            <?php $artToShow = 2;
            include('controllers/generateArc.php'); ?>
            <?php $artToShow = 3;
            include('controllers/generateArc.php'); ?>
            <?php $artToShow = 4;
            include('controllers/generateArc.php'); ?>
        </div>
        <form action="Articels.php?page=1" method="post">
            <div class="center" style="text-align: center; margin: 20px;">
                <button name="submit2" type="submit" class="btn btn-primary">
                    Przejdz do artykułów
                </button>
            </div>
        </form>
    </div>
</article>

<hr style="height: 25px;">
<div class="row">
    <h2 style="margin: 0 auto;
    padding-bottom: 25px;">
        Komentarze
    </h2>
</div>
<h3 style="text-align: center">
    Uzupełnij pola.
    Podaj swoję imię, mail oraz treść by dodać swój komentarz!
</h3>
<hr style="height: 25px;">

<section>
    <div class="container">
        <form method="POST">
            <div class="form-group">
                <div class="row" style="padding: 15px">
                    <div class="col-lg-5 col-md-12">
                        <label for="exampleFormControlInput1">Imię:</label>
                        <input type="text" name="nick" class="form-control" id="exampleFormControlInput1"
                               placeholder="Twoje imie" required>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <label for="exampleFormControlInput1">Email:</label>
                        <input type="text" name="email" class="form-control" id="exampleFormControlInput1"
                               placeholder="nazwa@domena.xyz">
                    </div>

                    <div class="col-lg-12">
                        <label style="margin-top: 10px;">Komentarz:</label>
                        <textarea name="comment" class="form-control"
                                  rows="4" required></textarea>
                    </div>
                </div>
                <div class="center" style="text-align: center">
<!--                        <input type='text' name='valueCaptcha'>-->
                        <?php include("controllers/formController.php");?>
                        <div class="g-recaptcha brochure__form__captcha" data-callback="recaptchaCallback" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                    <button id="capButt" name="captchaSubmit" type="submit" class="btn btn-primary" style="margin: 15px">Dodaj</button>
                </div>
            </div>
            <!--            <script src="scripts.js"></script>-->
        </form>
    </div>
</section>

<?php
include "controllers/footer.php";
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>