<?php
	$origincity = $_POST['origin city'];
	$destination = $_POST['destination'];
	
	$date = $_POST['date'];
    $number = $_POST['no. of pasenger'];

	// Database connection
	$conn = new mysqli('localhost','root','','','airlines');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(origin city, destination,date, no.of pasenger) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $origincity, $destination, $date, $no.of pasenger);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
