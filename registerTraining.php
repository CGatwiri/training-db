<?php
	include("config.php");
	session_start();
	
	$trainingID=$_POST['trainingID'];
	$trainingName=$_POST['trainingName'];
	$trainingType=$_POST['trainingType'];
	$trainingVenue=$_POST['trainingVenue'];
	$trainingDate=$_POST['trainingDate'];
	$trainerName=$_POST['trainerName'];
	$trainerEmailaddress=$_POST['trainerEmailaddress'];

	$sqli="INSERT INTO trainings(TrainingID,TrainingTitle,TrainingType,TrainingVenue,TrainingDate,Trainer,TrainerEmail)
	VALUES('$trainingID','$trainingName','$trainingType','$trainingVenue','$trainingDate','$trainerName','$trainerEmailaddress')";

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