<?php
class parentClass {
  
}

class childClass extends parentClass {
  
}

$obj = new childClass();

if (is_subclass_of($obj, 'parentClass')) {
    echo "This \$obj is an object of a subclass of parentClass.";
} else {
    echo "This \$obj is not an object of a subclass of parentClass.";
}
?>
