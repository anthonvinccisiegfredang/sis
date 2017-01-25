<?php

include 'header.php';

	if (isset($_POST['register']))
	{
		$studentNo = $_POST['sid'];
		$lastName = $_POST['ln'];
		$firstName = $_POST['fn'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];

		echo "<h2>Welcome, " . $firstName . " " . $lastName . "!</h2>"; 
		echo"<h4>Your ID number is: " . $studentNo . "</h4>";
        
		echo"<h4>Your email address is: " . $emailAddress. "</h4>";
            
        
		echo"<h4>Your password is: " . $password . "</h4>";
            
        
		echo"<h4>Your birthday is: " . $birthDate. "</h4>";
            
		
		echo"<h4>The time is: " . date('c')."</h4>";
        
        echo" <br/><br/><br/><br/>";



	}
	else
	{
		header('location: register.php');



	}

include 'footer.php';

?>
        
    
    
