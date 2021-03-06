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
                    U??ywamy r??wnie?? uwierzytelniania biometrycznego,
                    aby zapewni?? bezpieczne leczenie. Mo??emy uzyska?? dost??p
                    do wszystkich rodzaj??w os??b i ich danych z dowolnego miejsca,
                    wi??c nie ma potrzeby udawania si?? do o??rodka zdrowia.
                    Rozumiemy, ??e ka??da osoba jest inna, a nasi konsultanci
                    i lekarze dbaj?? o to, by opieka nad pacjentem
                    by??a dostosowana do ka??dej osoby.
                    Wiemy, ??e ludzie chc?? uzyska?? najlepsz?? mo??liw?? opiek?? i staramy si?? im pom??c.
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
                        Do walidacji wizyt s??u??y unikalny proces,
                        a my zapewniamy ca??odobow?? obs??ug?? klienta.
                        Aby wesprze?? nasz?? misj??, obecnie dzia??amy
                        w dw??ch lokalizacjach w Adelajdzie w Australii Po??udniowej
                        i Sydney w Australii.
                        Nasz najbardziej pracowity czas pracy przypada
                        na tydzie?? i dzia??amy r??wnie?? w dw??ch lokalizacjach
                        w Melbourne, SA i Brisbane, QLD.
                        Naszym celem jest zapewnienie naszej grupie pacjent??w
                        kompleksowej obs??ugi wszystkiego, czego potrzebuj??.
                    </h5>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="p-3 RevBoxesClass">
                    <div class="d-none d-md-none d-lg-block">
                        <h5>
                            Do walidacji wizyt s??u??y unikalny proces,
                            a my zapewniamy ca??odobow?? obs??ug?? klienta.
                            Aby wesprze?? nasz?? misj??, obecnie dzia??amy
                            w dw??ch lokalizacjach w Adelajdzie w Australii Po??udniowej
                            i Sydney w Australii.
                            Nasz najbardziej pracowity czas pracy przypada
                            na tydzie?? i dzia??amy r??wnie?? w dw??ch lokalizacjach
                            w Melbourne, SA i Brisbane, QLD.
                            Naszym celem jest zapewnienie naszej grupie pacjent??w
                            kompleksowej obs??ugi wszystkiego, czego potrzebuj??.
                        </h5>
                    </div>
                    <span>
                        <img src="img/RevBoxes4.jpg" alt="">
                    </span>
                    <div class="d-lg-none">
                        <h5>
                            W Saremeda wsp????pracujemy z wieloma czo??owymi lekarzami
                            i dentystami w Wielkiej Brytanii i na ca??ym ??wiecie,
                            aby opracowa?? zupe??nie now?? technologi?? poprawiaj??c??
                            jako???? wizyt dentystycznych, a nasze us??ugi maj??
                            by?? najlepsze dost??pne w Wielkiej Brytanii.
                            Zostali??my niedawno wybrani jako najlepsze
                            spa w Londynie na Good News.com.au, gdzie 70% os??b
                            stwierdzi??o, ??e jeste??my ???Dobry???
                            lub ???Do???? dobrzy??? podczas ostatnich dw??ch wizyt.
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
                                                [u]podkre??lenie[/u]">
        Kliknij by zobaczy?? obs??ugiwane formaty!
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
                        <h3>Tytu??:</h3>
                        <input type="text" name="title" style="width: 100%">
                    </label>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="cent">
                    <h3>Tre????:</h3>
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
        Artyku??y
    </h2>
</div>
<h3 style="text-align: center">
    By zobaczy?? wi??cej artyku????w
    przejd?? do strony naciskaj??c przycisk
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
                    Przejdz do artyku????w
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
    Uzupe??nij pola.
    Podaj swoj?? imi??, mail oraz tre???? by doda?? sw??j komentarz!
</h3>
<hr style="height: 25px;">

<section>
    <div class="container">
        <form method="POST">
            <div class="form-group">
                <div class="row" style="padding: 15px">
                    <div class="col-lg-5 col-md-12">
                        <label for="exampleFormControlInput1">Imi??:</label>
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