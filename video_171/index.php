<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Marks: <input type="text" name="marks" autocomplete="off">
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <?php
    if (isset($_REQUEST['submit'])) {
        $options = array(
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )

        );
        if(filter_input(INPUT_POST,"marks", FILTER_VALIDATE_INT,$options)){
            echo "Marks is Valid";
        }else{
            echo "Marks is not Valid";
        }
    }
    ?>
</body>
</html>