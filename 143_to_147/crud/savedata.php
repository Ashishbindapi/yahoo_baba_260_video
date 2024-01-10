<?php
$stu_name = $_POST['name'];
$stu_address = $_POST['address'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['phone'];

$conn = mysqli_connect("localhost","root","","yahoo_baba") or ("connection failled");
$sql = "INSERT INTO student (name, address, class, phone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("location: http://localhost/php/143_to_147/crud/index.php");

mysqli_close($conn);
?>