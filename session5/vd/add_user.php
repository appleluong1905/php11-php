<!DOCTYPE html>
<html>
<head>
	<title>Example 1 - Session 2</title>
	<style type="text/css">
		span{
			color: red;
		}
	</style>
</head>
<body>
	<?php 
	include 'connectdb.php';
	//var_dump($_POST);
	$errName = $errEmail = $errCity = $errGender =$errUsername = 
	$errPassword = $errPhone = $errAvatar = "";
	$name = $email = $city = $gender = $password = "";
	$check = true;
	$arrCity = array(1 => "Da Nang", 2 => "Ha Noi", 3 => "Ho Chi Minh");
	$arrGender = array('male' => "Male", 'female' => "Female");

	if(isset($_POST['register'])){
		// var_dump($_POST);
		// exit();
		//var_dump($_FILES);
		//echo "ban dan dang ky";
		$name        = $_POST['name'];
		$email       = $_POST['email'];
		$username    = $_POST['username'];
		$password    = $_POST['password'];
		$phone       = $_POST['phone'];
		$avatar      = $_FILES['avatar'];
		$description = $_POST['description'];
		if($name == ""){
			$errName = "vui long dien ten vao";
			$check = false;
		}
		if($email == ""){
			$errEmail = "vui long dien email vao";
			$check = false;
		}
		//bat dau check username ton tai chua?
		$sqlCheckUserName = "SELECT id FROM users WHERE username = '$username'";
		$resultCheckUserName = $conn->query($sqlCheckUserName);
		if($resultCheckUserName->num_rows){
			$errUsername = "Username nay da duoc su dung";
			$check = false;
		}
		//ket thuc check username ton tai chua?
		
		if($username == ""){
			$errUsername = "vui long chon username vao";
			$check = false;
		}
		$checkpassword = "/^([\w_\.!@#$%^&*()]+){1}([A-Z]){6,}$/";
		if($password == ""){
			$errPassword = "vui long chon password vao";
			$check = false;
		}if(!preg_match($checkpassword,$password)) {
			$errPassword = "It nhat co 1 ky tu dac biet va 6 ky tu tro len";
			$check = false;
		}
		if($phone == ""){
			$errPhone = "vui long chon phone vao";
			$check = false;
		}
		if($_FILES['avatar']['error'] != 0){
			$errAvatar = "vui long chon avatar";
			$check = false;
		}if($_FILES['avatar']['size'] > 1048576){
			$errAvatar = "avatar lon hon 1MB";
			$check = false;
		}else{
			//duong dan luu file
			$path = "uploads/";
			$fileName = uniqid().$avatar['name'];
			$pathSave = $path.$fileName;

			move_uploaded_file($avatar['tmp_name'], $pathSave);

		}
		$password    = md5($_POST['password']);
		//in du lieu ra
		if($check){
			$sql = "INSERT INTO users (name, username, password, avatar, phone, email, description)
			VALUES ('$name', '$username', '$password', '$fileName', '$phone', '$email', '$description')";
			//var_dump($sql);exit();
			$conn->query($sql);
			//tro ve trang list user
			header("Location: list_user.php");
		}
	}
	?>
	<h1>Form post</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" name = "register" method="post" enctype="multipart/form-data">
		<p>Name:<input type="text" name="name" value="<?php echo $name;?>">
		<span><?php echo $errName;?></span>
		</p>
		<p>Email:<input type="email" name="email" value="<?php echo $email;?>">
		<span><?php echo $errEmail;?></span>
		</p>
		<p>Username:<input type="text" name="username" value="<?php echo $username;?>">
		<span><?php echo $errUsername;?></span>
		</p>
		<p>Password:<input type="password" name="password" value="<?php echo $password;?>">
		<span><?php echo $errPassword;?></span>
		</p>
		<p>Phone:<input type="text" name="phone" value="<?php echo $phone;?>">
		<span><?php echo $errPhone;?></span>
		</p>
		<p>Avatar:<input type="file" name="avatar">
		<span><?php echo $errAvatar;?></span>
		</p>
		<p>Description:<textarea name="description" rows="5"></textarea></p>
		<p><input type="submit" name="register" value="Register"></p>
	</form>
</body>
</html>