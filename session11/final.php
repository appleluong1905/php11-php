<?php 
class User {
	final public function getName(){
		echo "PHP11 final";
	}
}
class Student extends User {
	// public function getName(){
	// 	echo "PHP11 final student";
	// }
}
$student = new Student;
$student->getName();
?>