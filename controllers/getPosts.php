<?php




$conn = mysqli_connect
("127.0.0.1", "root", "", "blogPS");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





$query = "SELECT title, content FROM post";
$result = mysqli_query($conn, $query);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="container">' .
            '<div class="row">' .
            '<div class="col-lg-12" id="post">' .
                $row["title"] .
            '</div>' .
            '</div>' .
            '<div class="row">' .
            '<div class="col-lg-12" id="post">' .
                $row["content"] .
            '</div>' .
            '</div>' .
            '</div>';
        echo '<hr style="height: 25px">';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>