<?php 
//set mot gia tri cookie
setcookie("USERNAME", "Canh", time() + 10, '/');
//get cookie
echo $_COOKIE['USERNAME'];
//delete cookie
//setcookie("USERNAME","", time() - 10, "/");
unset($_COOKIE['USERNAME']);

echo $_COOKIE['USERNAME'];
//get cookie
//echo $_COOKIE['USERNAME'];
?>