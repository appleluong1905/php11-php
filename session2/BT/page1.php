<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	  body{
	  	width: 350px;
	  	border: 1px solid black;
	  	margin: 0px auto;
	  }
	  form{
	  	padding: 12px;
	  }
	  input{
	  	margin: 2px;
	  }
	  select{
	  	margin: 5px;
	  }
	</style>
	<title></title>
</head>
<body>
	<form action="page2.php" method="post" enctype="multipart/form-data">
		<label>Email</label>
		<input type="text" name="user_email">
		<input type="submit" value="submit"><br>
		City:<select name = "city">
			<option value="">Choose city</option>
			<option value="1">Da Nang</option>
			<option value="2">Ha Noi</option>
			<option value="3">Ho Chi Minh</option>
		</select><br>
		Gender:
		female<input type="radio" name="gender" value="female" >
		male<label></label>
		<input type="radio" name="gender" value="male" >
		<br>
		<label>upload avatar</label>
		<input type="file" name="file">
		<input type="submit" name="upload" value="upload">
	</form>
</body>
</html>