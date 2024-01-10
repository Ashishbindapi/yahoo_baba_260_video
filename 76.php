<?php
// Htmlentities & htmlspecialchars
// $str = "A 'quote' is <b>bold</b>";
$str = '<a href="https://www.yahoobaba.net">Yahoo Baba Website</a>';
echo $str . "<br><br>";
// echo htmlentities($str, ENT_NOQUOTES);
$html = htmlspecialchars($str, ENT_NOQUOTES);
echo $html;

echo htmlspecialchars_decode($html);

echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "<pre>";