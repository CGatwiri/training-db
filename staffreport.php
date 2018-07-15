<?php
	include("config.php");
	session_start();
	

	$sqli="SELECT *
	FROM staffmembers
	FULL OUTER JOIN traininglog 
	ON staffmembers.EmployeeNumber = traininglog.EmployeeNumber WHERE  staffmembers.EmployeeNumber='1004' ";
	
	if ($conn->query($sqli) === TRUE) 
	{
		echo "New Training record created successfully";
		header("location: registerTraining.html");
	} 
	else 
	{
		echo "Error: " . $sqli . "<br>" . $conn->error;
	}
	
	$conn->close();
?>