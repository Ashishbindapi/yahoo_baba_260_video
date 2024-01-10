<?php
//Stetotime & strftime function

// echo date("d-m-y",(strtotime("now"));
// echo date("d-m-Y H",strtotime("+5 hours")) . "<br>";

// echo strftime("%B %d %Y,%X %Z")."<br>";

echo strftime("%B %d %Y,%X %Z",mktime(21,30,0,05,18,2023))."<br>";
echo strftime("%B %d %Y,%X %Z %S",mktime(21,30,0,05,18,2023))."<br>";

echo gmstrftime("%B %d %Y,%X %Z %S",mktime(21,30,0,05,18,2023))."<br>";


