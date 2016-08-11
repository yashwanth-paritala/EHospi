	<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root', '','u153965993_usrd');

		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
		$query = "INSERT INTO login VALUES ('$fname','$lname','$username','$phone','$gphone','$email','$password','$cpassword')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
    	//	print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />';
		  header("Location:signin.php");
		}
		else{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
		
	?>
