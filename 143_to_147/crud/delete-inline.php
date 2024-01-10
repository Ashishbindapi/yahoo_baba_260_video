<?php
   $stu_id = $_GET['id'];
   include 'config.php';
   $sql = "DELETE FROM student WHERE id = {$stu_id}";
   $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

   header("location: http://localhost/php/143_to_147/crud/index.php");
   mysqli_close($conn);
?> 