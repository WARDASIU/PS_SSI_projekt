<?php
if (isset($_POST['RegSubmit'])){
    if(empty($_POST['nameReg']) || empty($_POST['passReg'])){
        if (empty($_POST['nameReg'])){
            echo '<script>';
            echo 'alert("Fill empty Name")';
            echo '</script>';
            unset($_POST['nameReg']);
        }
        if (empty($_POST['passReg'])){
            echo '<script>';
            echo 'alert("Fill empty Password")';
            echo '</script>';
            unset($_POST['passReg']);
        }
    }else{
        $name = $_POST['nameReg'];
        $pass = $_POST['passReg'];
        $hash = password_hash($pass,CRYPT_BLOWFISH);

        $sql = "INSERT INTO Users (Name ,Password, Type)
            VALUES ('$name','$hash',2)";

        $conn = mysqli_connect
        ("127.0.0.1", "root", "", "blogPS");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql2 = "SELECT Name FROM Users WHERE Name='$name'";
        $sqlQuery2=mysqli_query($conn,$sql2);
        if(mysqli_num_rows($sqlQuery2)>=1)
        {
            echo '<script>';
            echo 'alert("Login already exists")';
            echo '</script>';
        }
        else
        {
            mysqli_query($conn, $sql);
        }

        mysqli_close($conn);
    }
}




if (isset($_POST['logInSubmit'])){
    if(empty($_POST['nameLogin']) || empty($_POST['passLogin'])){
        if (empty($_POST['nameLogin'])){
            echo '<script>';
            echo 'alert("Fill empty Name")';
            echo '</script>';
            unset($_POST['nameLogin']);
        }
        if (empty($_POST['passLogin'])){
            echo '<script>';
            echo 'alert("Fill empty Password")';
            echo '</script>';
            unset($_POST['passLogin']);
        }
    }else{
        $name = $_POST['nameLogin'];
        $pass = $_POST['passLogin'];

        $conn = mysqli_connect
        ("127.0.0.1", "root", "", "blogPS");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT Name,Password FROM Users WHERE Name='$name'";
        $sqlQuery=mysqli_query($conn,$sql);


        if(mysqli_num_rows($sqlQuery)==0){
            echo '<script>';
            echo 'alert("Wrong Data!")';
            echo '</script>';
        }else {
            $row = mysqli_fetch_assoc($sqlQuery);
            if (password_verify($pass,$row['Password'])){
                $_SESSION['user'] = $name;
                echo "<meta http-equiv='refresh' content='0'>";
            }
        }

        mysqli_close($conn);
    }
}



?>