<?php
session_start();
if ($_SESSION['user'] != 'admin') header("Location: http://localhost/13.10%20test/pageNotFound.php");
?>
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
    <title>User Managment</title>
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
<div class="row" style="height: 100px;"></div>
<?php
if ($_SESSION['user'] = 'admin'){
    $conn = mysqli_connect
    ("127.0.0.1", "root", "", "blogPS");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $query = "SELECT Name FROM Users";
    $result = mysqli_query($conn, $query);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo '<h1 style="text-align: center; width: 100%">Zarejestrowani użytkownicy</h1>';
    echo '<form method="POST">';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["Name"];
            echo '<div class="col-lg-3 col-md-6 generatedBox" style="text-align: center; margin: 0 auto; min-width: 350px">' .
                "<h2>" . $name . ' ' .
                '<button type="submit" name="delete" class="btn btn-primary" value="' . $name . '" style="background-color: white; border: none;">' .
                '<i id="minus" class="fas fa-minus" style="color: blue;"></i>' .
                '</button>' .
                "</h2>" .
                '</div>';
        }
    } else {
        echo "0 results";
    }
    echo '</form>';


    if (isset($_POST['delete'])) {
        header("Refresh:0");
        $name = $_POST['delete'];
        $query = "DELETE FROM Users WHERE Name='$name'";
        mysqli_query($conn,$query);
    }

    mysqli_close($conn);
}else{
    echo '<script>alert("Nie masz dostępu")</script>';
    header("Location: http://localhost/13.10%20test/pageNotFound.php");
}
include("controllers/RegisterAndLoginFormController.php");
?>