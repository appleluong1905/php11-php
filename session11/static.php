<?php 
class User {
	public static $name = "PHP11";
	public static function getName(){
		echo "PHP11-2";
	}
}
// $user = new User;
// $user->getName();
echo "<br>";
//echo User::$name;
echo "<br>";
echo User::getName();
?>