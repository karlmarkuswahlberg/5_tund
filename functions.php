<?php
		
	//functions.php
	//siia tulevad funktsioonid
	
	function hello1($name, $age){
		echo "Tere ".$name." kes on ".$age." aastat vana.";
	}
	
	function hello2($name){
		return "Tere ".$name; //v�tab selle jupi, mis on return j�rel ja paneb selle j�rele, mis on all: hello2. Tagastab
	}
	
	echo "<br>";
	hello1("Juku, 5");
	echo "<br>";
	echo hello2("Juhan");
?>