<?php 
// what's OOP?
// Object-oriented programming
// Class
// Camel case

class User{
	// thuoc tinh
	private $name = "Canh";
	protected $phone = "0988794607";
	private $old;
	// phuong thuc
	public function getName(){
		echo $this->name;
	}
}
//khoi tao doi tuong User
$user = new User();
$user->getName();
echo "<br>";
//echo $user->name;
echo "<br>";
//ke thua
class Student extends User{
	public function getNewName(){
		echo "Canh ke thua";
		echo $this->name;
	}
}
//khoi tao doi tuong Student
$student = new Student();
$student->getNewName();
echo "<br>";
//echo $student->name;
//
// Tinh dong goi

// Tinh Da Hinh
// Khoi tao




?>