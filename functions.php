<?php
		
	//loome AB ühenduse
    require_once("../config_global.php");
    $database = "if15_skmw";
    
    
    //check connection
   
	
	
	function logInUser($email, $hash){
		
		//muutuja väljaspool funktsiooni. GLOBALS saab kätte kõik muutujad msi kasutusel.
		 $mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
		
		$stmt = $mysqli->prepare("SELECT id, email FROM user_sample WHERE email=? AND password=?"); 
        $stmt->bind_param("ss", $email, $hash);
        $stmt->bind_result($id_from_db, $email_from_db);
		$stmt->execute();
			if($stmt->fetch()){
                    echo "Kasutaja logis sisse id=".$id_from_db;
                }else{
                    echo "Wrong credentials!";
                }
                $stmt->close();
				$mysqli->close();
	}
	
	
	//siin võtan login.phpst vastu need muutujad.
	function createUser($create_email, $hash){
		
		$mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
		
		$stmt = $mysqli->prepare("INSERT INTO user_sample (email, password) VALUES (?,?)");
		$stmt->bind_param("ss", $create_email, $hash);
		$stmt->execute();
        $stmt->close();
		$mysqli->close();	
	}
	

?>