<?php
	$inputNama= $_POST['inputNama'];
	$konfirmasi = $_POST['konfirmasi'];

	// Database connection
	$conn = new mysqli('localhost','root','','bliis');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into input_bliis(inputNama, konfirmasi) values(?, ?)");
		$stmt->bind_param("ss", $inputNama, $konfirmasi);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>