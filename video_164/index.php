<?php
$conn = mysqli_connect("localhost", "root", "", "news-template") or die("Connection Failed");

$sql = "UPDATE `user` SET `last_name` = 'Malik' WHERE `last_name` = 'Kapoor'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $affectedRows = mysqli_affected_rows($conn);
    echo "Total Rows Updated: " . $affectedRows;
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
