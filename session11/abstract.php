<?php 
abstract class User {
	abstract public function getName();
	abstract public function getName2();
}
class Student extends User {
    public function getName(){
		echo "PHP 11-1";
	}
	public function getName2(){
		echo "PHP 11-2";
	}
	public function getName3(){
		echo "PHP11 -3";
	}
}
$student = new Student;
$student->getName();
echo "<br>";
$student->getName3();
?>