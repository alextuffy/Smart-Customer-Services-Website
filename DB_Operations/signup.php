<?php
	
	$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'dbconnect.php';  

	
    $unitNum = $_POST["unit_num"]; 
	$street_name = $_POST["street_name"];
	$city = $_POST["city"];
	$province = $_POST["province"];
	
	$username = $_POST["username"]; 
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$email = $_POST["email"]; 
	$phone = $_POST["phone"]; 
    $password = $_POST["password"]; 
    $cpassword = $_POST["password2"];
            
    $sql = "Select * from user where username='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
	
    if($num == 0) {
		$sqlE = "Select * from user where email='$email'";
    
		$resultE = mysqli_query($conn, $sqlE);
    
		$numE = mysqli_num_rows($resultE); 
		if ($numE != 0){
			echo "<script>
					alert('Email Not Available');
					window.location.href='../signup.html';
					</script>";
		}
		
		else{
			if(($password == $cpassword) && $exists==false) {
		
				$hash = password_hash($password, 
									PASSWORD_DEFAULT);
				
				
				// Password Hashing is used here. 
				$sql = "INSERT INTO `user` ( `username`, 
					`password`, `firstName`, `lastName`, `email`, `phone`,`admin`)
					VALUES ('$username', 
					'$hash', '$first_name', '$last_name', '$email', '$phone',0)";
			
				$result1 = mysqli_query($conn, $sql);
				
				$userPK = $conn->insert_id;
				
				$sqlAddress = "INSERT INTO `address` ( `unitNum`, 
					`streetName`, `city`, `province`, `userID`) VALUES ('$unitNum', 
					'$street_name', '$city','$province', $userPK)";
		
				$result2 = mysqli_query($conn, $sqlAddress);
				
				if ($result && $result2) {
					header('Location: ../home.php');
				}
				
				
				
			} 
			else { 
				echo "<script>
					alert('Passwords do not match');
					window.location.href='../signup.html';
					</script>";
						
			}
		}
		exit();
    }// end if 
    
   if($num>0) 
   {
      echo "<script>
				alert('Username not available');
				window.location.href='../signup.html';
				</script>"; 
   } 
   
}//end if   
    
?>

