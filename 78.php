<?php
// Convert_uuencode & Convert_uudecode

$str = "Hello would";

$encodeString = convert_uuencode($str) . "<br>";
echo $encodeString;

$dencodeString = convert_uudecode($encodeString);
echo $dencodeString;