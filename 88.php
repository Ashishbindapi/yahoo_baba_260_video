<?php
// mktime & gmmktime
echo "Time & Date :". date("d-m-y h:i:sa"). "<br><br>";

echo date("d-m-y h:i:sa",mktime(0,0,0,15,2023));

echo "<br>";

echo date("d-m-y h:i:sa",gmmktime(0,0,0,15,2023));