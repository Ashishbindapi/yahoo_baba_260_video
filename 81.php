<?php
// Strip_tages & Wordwrap
$str = "Hello <b>Would</b>,Hello <i>Earth</i>";

echo strip_tags($str, "<b>");

$str = "This would is beautiful";
echo wordwrap($str, 4, "<br>",true);
