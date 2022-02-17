<?php
include("controllers/navbar.php");


$conn = mysqli_connect
("127.0.0.1", "root", "", "blogPS");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$currentPage = $_GET['page'];
$currentPage += 1;
$sql = 'SELECT COUNT(ID) as cnt FROM arttabel';
$res = $conn->query($sql);
$data = $res->fetch_assoc();
$count = $data['cnt'];
$page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
$limit = 4;
$from = $page * $limit;
$allPage = ceil($count / $limit);

$query = 'SELECT Title, Content FROM arttabel LIMIT ' . $from . ',' . $limit;
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col-lg-6 col-md-12 generatedBox">' .
            "<h1>" . $row["Title"] . "</h1>" .
            "<h3>" . $row["Content"] . "</h3>" .
            '</div>';
    }
}
if(!empty($_SESSION['user'])){
    if($_SESSION['user'] == 'admin'){
        echo '<form method="post" enctype="multipart/form-data" style="margin: 25px auto; width: 100%">
        <label for="myfile">Wybierz plik:</label>
        <input type="file" name="uploadfile" id="fileSelect">
        <input type="submit" name="submitFile" value="Dodaj plik">
    </form>';
    }else{
        echo '<p style="margin: 15px auto">By móc dodawać pliki, musisz być zalogowany jako admin!</p>';
    }
}else{
    echo '<p style="margin: 15px auto">By móc dodawać pliki, musisz być zalogowany jako admin!</p>';
}

if(isset($_POST['submitFile'])) {
    if ($_FILES['uploadfile']['type'] != 'text/plain'){
        echo '<script>alert("Mozna dodawac tylko pliki typu txt!")</script>';
    }else{
        $filename = $_FILES['uploadfile']['name'];
        $fileContent = file_get_contents($_FILES['uploadfile']['tmp_name']);
        $date = date("Y-m-d", time());
        $name = substr($filename, 0, -4);
        $query = "INSERT INTO arttabel (title,content,date) 
                    VALUES ('$name','$fileContent','$date')";
        $result = mysqli_query($conn, $query);
    }
}

echo "<div style='width: 100%'>";

echo '<a href="Articels.php?page=1" style="float: left;
 width:33.33333%;
  text-align:left;">
  Pierwsza strona</a>';


echo '<a href="Articels.php?page=' . $currentPage . '" style="float: left;
  width:33.33333%;
  text-align:center;">Nastepna strona</a>';

if ($page < ($allPage - 1)) {
    echo '<a href="Articels.php?page=' . $allPage . '" style="float: left;
  width:33.33333%;
  text-align:right;">Ostatnia strona</a>';
}
echo "</div>";
?>