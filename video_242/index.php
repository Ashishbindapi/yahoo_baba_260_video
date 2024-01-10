<?php
//$_FILES
if (isset($_FILES['image'])) {

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    if (move_uploaded_file($file_tmp, "upload-images/" . $file_name)) {
        echo "Successfully uploaded.";
    } else {
    }
    echo "Could not upload the file.";
}
?>
<html><?php
class student{
	
	public $course;
	private $first_name;
	private $last_name;
	private $detail = ['name'=>'Test Name','age'=>'20'];

	public function setName($fname, $lname)
	{
		$this->first_name = $fname;
		$this->last_name = $lname;
	}

	public function __isset($name){
		echo isset($this->detail[$name]);
	}
	
}

$test = new student();
// $test->setName("Yahoo","Baba");

echo empty($test->city);
?>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" /><br><br>
        <input type="submit" />
    </form>
</body>

</html>ggggggggg