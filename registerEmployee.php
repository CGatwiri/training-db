<?php
	include("config.php");
	session_start();

	$employeeNum=$_POST['employeeNumber'];
	$employeeNam=$_POST['employeeName'];
	$age=$_POST['age'];
	$employeeAddress=$_POST['emailaddress'];
	$phoneNum=$_POST['phoneNumber'];
	$gender=$_POST['sex'];
	$department=$_POST['department'];
	$station=$_POST['station'];

	$sqli="INSERT INTO staffmembers(EmployeeNumber,EmployeeName,EmployeeAge,EmployeeAddress,EmployeePhoneNumber,EmployeeGender,Department,EmployeeStation)
	VALUES('$employeeNum','$employeeNam','$age','$employeeAddress','$phoneNum','$gender','$department','$station')";

	if ($conn->query($sqli) === TRUE) 
	{
		echo "New Employee record created successfully";
		header("location: registerEmployee.html");
	} 
	else
	{
		echo "Error: " . $sqli . "<br>" . $conn->error;
	}
	$conn->close();


?>