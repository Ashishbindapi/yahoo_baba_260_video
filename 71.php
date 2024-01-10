<?php
// String Compare Functions

// echo  strncmp("Hello would", "Hello would! Hello", 6);
// echo  strncasecmp("Hello would", "Hello would! Hello", 6);
// echo  strnatcmp("Hello would", "Hello would! Hello", 5);
// echo  strcmp("Hello would", "Hello would! Hello");
// echo  strnatcmp("Hello would", "Hello would! Hello");
// echo  strnatcasecmp("Hello would", "Hello would! Hello");
// echo  substr_compare("Hello would", "Hello would! Hello",-2,2);
echo  similar_text("Hello would", "Hello would! Hello",$per);
echo "Percentnge :".$per;