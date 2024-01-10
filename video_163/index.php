<?php
$conn = mysqli_connect("localhost","root","","news-template") or die("Connection Failed");

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql) or die("Query Failed");

$row = mysqli_fetch_row($result);

echo "<pre>";
print_r($row);
echo "</pre>";

// echo $row['first_name'] . " " . $row['last_name'];

// while ($row = mysqli_fetch_assoc($result)) {
//     echo $row['first_name'] . " " . $row['last_name']. "<br>";
// }