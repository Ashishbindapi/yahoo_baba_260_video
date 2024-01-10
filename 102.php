<?php
//$_COOKIE Variable
// $cookie_name = "user";
// $cookie_value = "Yahoo Baba";

// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

echo "Cookie Value :". $_COOKIE['user'];
setcookie("user", "", time() - (86400 * 30), "/");
