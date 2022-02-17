<?php

function enterToDB()
{
    $nick = $_POST['nick'];
    $email = $_POST['email'];
    $text = $_POST['comment'];
    $sql = "INSERT INTO comments (Nick,Email,Text)
            VALUES ('$nick','$email','$text')";

    $conn = mysqli_connect
    ("127.0.0.1", "root", "", "blogPS");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    unset($_POST['nick']);
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

//include("myCaptcha.php");
include("googleCaptcha.php");


if (isset($_POST['captchaSubmit'])) {
    if (!empty($_SESSION['user'])) {
        $email = $_POST['email'];
        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

        $recaptcha = $_POST['g-recaptcha-response'];
        $res = reCaptcha($recaptcha);

        if ($recaptcha != '') {
            if (preg_match($regex, $email)) {
                $message = "Email is valid, data successfully added!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                enterToDB();
            } else {
                $message = " Email is incorrect";
                echo $message;
                $_POST['email'] = '';
            }
        } else {
            echo " Captcha is unselected!";
        }
    } else {
        echo '<script type="text/javascript">alert("Musisz być zalogowany, by dodać komentarz!");history.go(-1);</script>';
    }
}

?>