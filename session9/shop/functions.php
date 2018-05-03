<?php
function checkEmpty($value,$nameCheck) {
	if(empty($value)) {
		$errCheck = "Vui lòng không để trống " . $nameCheck;
		$validate = false;
	}
	else {
		$errCheck = false;
	}
	return $errCheck;
}
function checkPass($password,$nameCheck){
	$patternPass = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/";
	$value = preg_match($patternPass, $password);
	if (empty($password)) {
		$nameCheck = "Vui lòng không để trống password";
	} 
	else if ($value == false){
		$nameCheck = "Mật khẩu phải đúng định dạng";
	}
	else {
		$nameCheck = "";
	}
	//var_dump($nameCheck); exit();
	return $nameCheck;
}
function checkEmail($email,$nameCheck) {
	if (empty($email)) {
    	$nameCheck = "Vui lòng điền email";
  	}
  	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$nameCheck = "Vui lòng điền đúng định dạng email";
  	}
  	else $nameCheck = "";
  	return $nameCheck;
}
function checkPhone($phone,$nameCheck) {
	$patternPhone = "/^[0-9]{9,11}$/";
	$value = preg_match($patternPhone,$phone);
	if (empty($phone)) {
		$nameCheck = "Vui lòng nhập số điện thoại";
	}
	else if(!$value) {
  		$nameCheck = "Vui lòng nhập đúng định dạng số điện thoại";
	}
	else $nameCheck = "";
	return $nameCheck;
}
function checkAvatar($avatar,$nameCheck){
	if ($avatar['size'] > 1048576) {
		$nameCheck = "Ảnh không vượt quá 1MB";
	}
	else $nameCheck = "";
	return $nameCheck;
}
function UploadAvatar($fileAvatar) {
	if($fileAvatar['error'] == 0){
        $path = "uploads/";
        $AvatarName = uniqid().$fileAvatar['name'];
        move_uploaded_file($fileAvatar['tmp_name'], $path.$AvatarName);
        return $AvatarName;
    }else{
       return $AvatarName = "default.png";
    }
}
function InsertData($conn,$name,$username,$password,$email,$phone,$avatar) {
	//encoce Pass
	$encode_pass = md5($password);
	//inserted into the database
	$sqlInsert = "INSERT INTO user
	(name,username,password,email,phone,avatar)
	VALUES ('$name','$username','$encode_pass','$email','$phone','$avatar')";
	return $conn->query($sqlInsert);
}
function ListUser($conn) {
	$sqlList = "SELECT * FROM user";
	return $conn->query($sqlList);
}
?>