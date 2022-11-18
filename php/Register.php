<?php
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Age = $_POST['Age'];
    $DateOfBirth = $_POST['Date of Birth']
    $Contact = $_POST['Contact'];

    $conn = new mysqli('localhost','root','','Register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, Email, Password, Age, Date of Birth, Contact) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiii", $Name, $Email, $Password, $Age, $DateofBirth, $Contact);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
 ?>