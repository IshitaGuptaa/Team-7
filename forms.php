<?php session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") 

		$servername = "localhost";
		$username = "root";
		$password = "";

		try
			{
			
				

		
		$gender=$_SESSION['gender'];
		$name=$_SESSION['name'];
		$regno=$_SESSION['reg'];


		$namee= test_input($_POST['State']);
			if(preg_match("/^[a-zA-Z ]*$/",$namee))
				{$_SESSION['State']=$namee; }
			else
				{ 
				header("Location:oops_log_in_1.html"); exit;
				}



		$namef= test_input($_POST['phoneno']);
			if(preg_match("/[7-9]{1}[0-9]{9}/",$namef))
				{$_SESSION['phoneno']=$namef; }
			else
				{ 
				   header("Location:oops_log_in_1.html"); exit;
				}



			$mail_id= test_input($_POST['mail_id']);
			
			if(!filter_var($mail_id, FILTER_VALIDATE_EMAIL))
				{
				header("Location:oops_log_in_1.html");
				exit;
				}
			else{
				$_SESSION['mail_id']=$mail_id;
				}

			

			




  			$conn = new PDO("mysql:host=$servername;dbname = dbas",$username,$password);
  			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

   			if ($_SERVER["REQUEST_METHOD"] == "POST") {
     			



$stmt = $conn->prepare("INSERT INTO dbas.roommate VALUES (:Name,:Regno,:Gender,:State,:bedtype,:mailid,:mobileno)");
     			$stmt->bindParam(':Regno',$regno);
			$stmt->bindParam(':Name',$name);
    		 	$stmt->bindParam(':Gender',$gender);
     			$stmt->bindParam(':State',$State);
			$stmt->bindParam(':bedtype',$bed);			
      			$stmt->bindParam(':mailid',$mail_id);
			$stmt->bindParam(':mobileno',$mobileno);
			  			
			
			$State = $_SESSION['State'];
			$bed=$_POST['bed'];
			
     			$mail_id=$_SESSION['mail_id'];
			$mobileno = $_SESSION['phoneno'];  

     			$stmt->execute();









$stmt = $conn->prepare("INSERT INTO dbas.qualities VALUES (:regno,:smoke,:drink,:veg,:anger,:sleep,:clean)");
     			$stmt->bindParam(':regno',$regno);
			
    		 	$stmt->bindParam(':smoke',$_POST['smoke']);
     			$stmt->bindParam(':drink',$_POST['drink']);
			$stmt->bindParam(':veg',$_POST['veg']);			
      			$stmt->bindParam(':anger',$_POST['anger']);
			$stmt->bindParam(':sleep',$_POST['sleep']);
			$stmt->bindParam(':clean',$_POST['clean']);			  			
    			$stmt->execute();







$stmt = $conn->prepare("INSERT INTO dbas.preferences VALUES (:regno,:smokes,:drinks,:vegs,:angers,:sleeps,:cleans)");
     			$stmt->bindParam(':regno',$regno);
			
    		 	$stmt->bindParam(':smokes',$_POST['smokes']);
     			$stmt->bindParam(':drinks',$_POST['drinks']);
			$stmt->bindParam(':vegs',$_POST['vegs']);			
      			$stmt->bindParam(':angers',$_POST['angers']);
			$stmt->bindParam(':sleeps',$_POST['sleeps']);
			$stmt->bindParam(':cleans',$_POST['cleans']);			  			
    			$stmt->execute();








   			
	
header("Location:home.html"); exit;
                         }		
			
    		}



		catch(PDOException $e)
    			{
			echo "<h1 style='font-size:45px;text-align:center;margin-top:300px;'>ALREADY SUBMITTED THE FORM</h1>";
		exit; 	
  			 
    			}

		$conn = null; 







function test_input($data){

$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

	
?>