<?php
session_start();
if (isset($_POST['postSubmit'])){
    if ($_SESSION['user'] == 'admin'){
        $_SESSION['title'] = $_POST['title'];
        $_SESSION['content'] = $_POST['content'];
        header("Location: ../posts.php");
    }else{
        echo '<script type="text/javascript">alert("Tylko admin może dodawać posty!");history.go(-1);</script>';
    }
}
?>