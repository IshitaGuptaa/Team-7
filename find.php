<?php session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbas";



echo"<div style='margin-bottom:40px'><div><img src='vitlog.png' style='margin:20px;height:100px;width:100px;'><div style='font-size:49px; margin-top:30px;float:right;margin-right:150px'>VELLORE INSTITUTE OF TECHNOLOGY</div></div></div>";


echo"<p style='margin-top:40px;font-size:30px;margin-left:100px'>ALL-</p>";


$gender=$_SESSION['gender'];
echo"<p style='margin-top:50px'></p>";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM dbas.roommate where Gender='$gender'"); 
    $stmt->execute();
  
     while($row = $stmt->fetch())          
    {echo"<div style='border-bottom-style: solid;width:50%;margin-left:330px;margin-top:50px'><span style='margin-left:30px'>".$row['Name']."</span><span style='margin-left:50px'>".$row['Regno']."</span><span style='margin-left:50px'>".$row['State']."</span><span style='margin-left:50px'>Bed type- ".$row['bedtype']." bed</p>";
    echo"<button style='float:right;margin-top:-37px;margin-right:30px;background-color:black'><a href=show.php' style='text-decoration:none;color:white'>view</a></button></div>";	}
}
catch(PDOException $e) {
    echo "Error:" . $e->getMessage();
}
$conn = null;











?>