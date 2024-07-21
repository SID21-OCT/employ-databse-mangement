<?php
include("config.php");
	//var_dump($_POST);
	$Name = $_POST['Name'];
	$Destination = $_POST['Destination'];
	$Place_Posting = $_POST['Place_Posting'];
	$Grade = $_POST['Grade'];
	$Mobile_no= $_POST['Mobile_no'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];

	// Database connection
	
			 $sql="INSERT into employ_master (Name,Destination,Place_Posting,Grade,Mobile_no,Email,Address) 
			 values('$Name','$Destination','$Place_Posting','$Grade','$Mobile_no','$Email','$Address')";
			 
			 
				 
if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

		//$stmt="insert into employ_master (Name,Destination,Place_Posting,Grade,Mobile_no,Email,Address) 
		//values('$Name','$Destination','$Place_Posting','$Grade','$Mobile_no','$Email','$Address')";
		//$stmt = $conn->prepare("insert into employ_master (Name,Destination,Place_Posting,Grade,Mobile_no.,Email,Address) values(?, ?, ?, ?, ?, ?,?)");
		//$stmt->bind_param("ssssis",$Name,$Destination,$Place_Posting,$Grade,$Mobile_no,$Email,$Address);
		//$result = mysqli_query($conn,$stmt);
		//$execval = $stmt->execute();
		//echo $execval;
		echo '<script>alert("Registration  successfully...");window.location.href="login.php";</script>';
		//header('location:login.php');
		//$stmt->close();
		$conn->close();
?>