<?php
		
	//functions.php
	//siia tulevad funktsioonid
	
	function logInUser(){
		
	}
	
	function createUser(){
		$stmt = $mysqli->prepare("INSERT INTO user_sample (email, password) VALUES (?,?)");
		$stmt->bind_param("ss", $create_email, $hash);
		$stmt->execute();
        $stmt->close();

?>