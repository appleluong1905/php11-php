
<?php
if (isset($_POST['upload'])) {
	$file_name =$_FILES['file']['name'];
	$file_type =$_FILES['file']['type'];
	$file_size =$_FILES['file']['size'];
	$file_tem_loc =$_FILES['file']['tmp_name'];
	$file_store ="upload/.".$file_name;
	if(move_uploaded_file($file_tem_loc,$file_store)){
		echo "file are upload";
	}
}
	   if(isset($_POST['user_email'])== true && empty($_POST['user_email'])== false){
	   	$email =$_POST['user_email'];

	   	if (filter_var($email,FILTER_VALIDATE_EMAIL) == true) {
	   		echo "Day la chuan email";
	   	}else{
	   		echo "Day khong phai dung chuan email";
	   	}
	}
?>