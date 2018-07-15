<?php
	include("config.php");
	session_start();
	
	$trainingLogID=$_POST['trainingLogID'];
	$trainingID=$_POST['trainingID'];
	$employeeID=$_POST['employeeID'];
	
	$sqli="INSERT INTO traininglog(TrainingLogID,EmployeeNumber,TrainingID)
	VALUES('$trainingLogID','$trainingID','$employeeID')";

	if ($conn->query($sqli) === TRUE) 
	{
		echo "New Training Log created successfully";
		header("location: registerTraining.html");
	} 
	else 
	{
		echo "Error: " . $sqli . "<br>" . $conn->error;
	}
	
	$conn->close();
?>