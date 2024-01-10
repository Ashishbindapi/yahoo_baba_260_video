<?php
$stu_id = $_POST['id'];
$stu_name = $_POST['name'];
$stu_address = $_POST['address'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['phone'];

$conn = mysqli_connect("localhost","root","","yahoo_baba") or ("connection failled");
$sql = " UPDATE student SET name = '{$stu_name}',address = '{$stu_address}', class = '{$stu_class}', phone = '{$stu_phone}' WHERE id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("location: http://localhost/php/143_to_147/crud/index.php");

mysqli_close($conn);
?>
