<?php
	session_start();
	$conn = new mysqli('localhost','root','none','php11_shop');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>