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
    <title>All Posts</title>
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
<div class="row" style="height: 100px"></div>
<?php
include("controllers/navbar.php");
?>
<?php include('controllers/getPosts.php'); ?>
<?php include("controllers/RegisterAndLoginFormController.php"); ?>
</body>
</html>