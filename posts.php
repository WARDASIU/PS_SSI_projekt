<!doctype html>
<html lang="en">
<head>
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
</head>
<body>

<?php
include("controllers/navbar.php");
?>

<div class="container">
    <div class="row" style="height: 200px">
        <hr>
    </div>
</div>
<?php
session_start();
?>
<?php

function change($str){
    $changed = $str;
    $changed=preg_replace("#\[b\](.*?)\[/b\]#si", "<b>\\1</b>", $changed);
    $changed=preg_replace("#\[i\](.*?)\[/i\]#si", "<i>\\1</i>", $changed);
    $changed=preg_replace("#\[u\](.*?)\[/u\]#si", "<u>\\1</u>", $changed);
    $changed=preg_replace("#\[color=(http://)?(.*?)\](.*?)\[/color\]#si", "<span style=\"color:\\2\">\\3</span>", $changed);
    return $changed;
}

if (!empty($_SESSION['title']) || !empty($_SESSION['content'])){
    $titleToEdit = $_SESSION['title'];
    $contentToEdit = $_SESSION['content'];

    $readyTitle = change($titleToEdit);
    $readyContent = change($contentToEdit);

    echo '<div class="container">
    <div class="row">
        <div class="col-lg-12" id="post"><h3>Title</h3>
            '.$readyTitle.'
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" id="post"><h3>Content</h3>
            '.$readyContent .'
        </div>
    </div>
</div>';

}

echo '<form method="post" style="text-align: center;"><input type="submit" name="readyPost" value="Dodaj Post"/></form>';

if (isset($_POST['readyPost']) && !empty($_SESSION['title']) && !empty($_SESSION['content'])){
    $date = date("Y-m-d H:i:s", time());
    $sql = "INSERT INTO post (title,content,add_date)
            VALUES ('$readyTitle','$readyContent','$date')";
    $conn = mysqli_connect
    ("127.0.0.1", "root", "", "blogPS");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    unset($_POST['title']);
    unset($_POST['content']);
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: allPosts.php");
}
?>

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
