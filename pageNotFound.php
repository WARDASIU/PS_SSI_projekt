<?php
session_start();
?>
<html>
<head>
    <title>
Page Not Found!
    </title>
    <style>
        *{
        padding:0px;
        margin:0px;
        }
        body{
        background: url(https://bashcloud.github.io/404.jpg) center bottom;
        background-size: cover;
        width: 100vw;
        height: 100vh;
        display:flex;
        justify-content: center;
        align-items: flex-end;
        font-family: Roboto, sans-serif;
        }
        .content{
        color:#fff;
        opacity:0.3;
        text-align:center;
        user-select:none;
        }
        .title{
        font-size:20vh;
        font-weight: 900;
        opacity:0.5;
        }
        .subtitle{
        font-size:6vh;
        font-wieght:600;
        padding-bottom: 2vh;
        }
        .description{
        font-size:2vh;
        padding-bottom: 4vh;
        }
    </style>
</head>
<body>
<?php
include("controllers/navbar.php");
?>
<div class="content">
    <div class="title">404</div>
    <div class="subtitle">NOTHING FOUND</div>
    <div class="description">You are on the wrong path. Try to navigate to Home
    </div>

    <?php
    include "controllers/footer.php";
    ?>

</body>
</html>