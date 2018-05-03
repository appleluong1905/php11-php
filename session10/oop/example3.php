<?php 
class Car {
	public function getRun(){
		echo "Xe chay";
	}
}
class Mercedes extends Car {
	public function __construct(){
		$this->getRun();
	}
	// tinh da hinh
	// public function getRun(){
	// 	echo "Xe mercedes chay";
	// }
}
$car = new Car();
$car->getRun();
echo "<br>";
$car = new Mercedes();
//$car->getRun();

//
?>