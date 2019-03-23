<?php session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST"){

	if(empty($_POST['reg']) || empty($_POST['password']))
	{	
       header("Location: oops_log_in_1.html" );
	}

	else
	{	$reg=$_POST['reg'];
		$pass=$_POST['password'];

		$servername='localhost';
		$username='root';
		$password='';

		try{
			$conn = new PDO("mysql:host=$servername;dbname=dbas", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$stmt=$conn->prepare("SELECT name,regno,gender,password FROM dbas.student WHERE regno='$reg' and password='$pass' ");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$data=$stmt->fetch();

			if(($data['regno']==$reg) && ($data['password']==$pass)){



$_SESSION['reg']=$reg;
$_SESSION['gender']=$data['gender'];
$_SESSION['name']=$data['name'];









header("Location: home.html" );
exit();

}
			else{ 
				header("Location: oops_log_in_1.html" );
				exit();
    			}
		}

		catch(PDOException $e)
			{ 
			echo $e->getMessage();
			}
		$conn=null;
	}
}
?>



