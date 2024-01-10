<?php
//$_SESSION Variable

session_start();

$_SESSION['name'] = $value; //set session name & value

echo $_SESSION['name']; //Get Session value

//Delete Session

session_start(); //Remove all session variables
session_destroy();//Destory the session