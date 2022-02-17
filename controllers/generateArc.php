<?php


$conn = mysqli_connect
("127.0.0.1", "root", "", "blogPS");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





$query = "SELECT Title, Content FROM arttabel WHERE id = " . $artToShow;
$result = mysqli_query($conn, $query);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col-lg-6 col-md-12 generatedBox">' .
            "<h1>" . $row["Title"] . "</h1>" .
            "<h3>" . $row["Content"] . "</h3>" .
            '</div>';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>