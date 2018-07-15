<?php
	include("config.php");
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$myusername = mysqli_real_escape_string($conn, $_POST['username']);
		$mypassword = mysqli_real_escape_string($conn, $_POST['password']);
		
		$sql = "SELECT AdminID from admin WHERE Username = '$myusername' and Password = '$mypassword' ";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$active = $row['active'];
		
		$count = mysqli_num_rows($result);
		
		if($count == 1)
		{
			$_SESSION['login_user'] = $myusername;
			
			header("location: boom.html");
		}else
		{
			header("location: start.html");
			$error = "Your login Name or Password is invalid";
		}
	}
?>