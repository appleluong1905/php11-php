<?php
// cau 1
class Car {
	// cau 3
	public $carName;
	private $lisenceCar = "2005535443543";
	protected $modelCar = "model car protected";
	private $manufactureCar;
	public function getRun(){

	}
	public function getStop(){

	}
	// tiep tuc goi thuoc tinh private
	public function getLisenceModel(){
		echo $this->lisenceCar;
	}

}

//cau 2
class Mercedes extends Car {
	// tiep tuc goi thuoc tinh protected
	public function getMerModel(){
		echo $this->modelCar;
	}
	// tiep tuc goi thuoc tinh private
	public function getMerLisenceModel(){
		echo $this->lisenceCar;
	}
}
	$car = new Car();
	$car->getLisenceModel();
	 echo "<br>";
 // goi thuoc tinh public
 $mercedes = new Mercedes();
 $mercedes->carName = "Mer 2018";

 echo $mercedes->carName;
  echo "<br>";
  $mercedes->getMerModel();
  echo "<br>";
  $mercedes->getMerLisenceModel();
 // goi thuoc tinh protected
  $mercedes->modelCar = "new Model";
 echo $mercedes->modelCar;

?>