<?php 
class User{
	var $name = "Nam";
	var $old;
	function getName(){
		return $this->name;
	}
	protected function getOld(){
		return 27;
	}
}
class Student extends User{
	function getNewName(){
		return $this->getOld();
	}
}
$user = new User();
//echo $user->getName();
echo "<br>";
//echo $user->getOld();
echo "<br>";

$student = new Student();
echo $student->getNewName();
?>