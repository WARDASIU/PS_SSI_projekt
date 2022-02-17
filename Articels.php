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
    <title>Articels</title>
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
$currentPage = $_GET['page'];
echo $currentPage;
if(!is_numeric($currentPage)){
    header("Location: http://localhost/13.10%20test/pageNotFound.php");
}
?>

<?php
include("controllers/navbar.php");
?>

<div class="container">
    <div class="row" style="height: 200px">
        <hr>
    </div>
</div>

<article>
    <div class="container">
        <div class="row">
            <?php include('generateArtPage.php'); ?>
        </div>
    </div>
</article>
<?php include("controllers/RegisterAndLoginFormController.php"); ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<?php
include "controllers/footer.php";
?>

</body>
</html>