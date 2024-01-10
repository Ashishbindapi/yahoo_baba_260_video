<?php
// md5 & sha1

$str = "Hello";

echo "This String : ".$str."<br><br>";

echo "md5 Binary : ".md5($str,true)."<br><br>";

echo "md5 Binary : ".md5($str)."<br><br>";

echo "sha1 Binary : ".sha1($str,true)."<br><br>";

echo "sha1 HEX : ".sha1($str)."<br><br>";

if(md5($str)=="8b1a9953c4611296a827abf8c47804d7"){
    echo "Password Matched";
}