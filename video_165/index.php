<?php
$conn = mysqli_connect("localhost", "root", "", "news-template") or die("Connection Failed");

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

print_r(mysqli_error_list($conn));
die;

$str = "";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['first_name']." ". $row['last_name'] . "<br>";
    }
}