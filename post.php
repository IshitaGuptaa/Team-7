<?php session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbas";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$name= $_SESSION['name'];
$reg=$_SESSION['reg'];
$gender=$_SESSION['gender'];



echo"<div style='position:relative'><div style='margin: 40px 3%;position:absolute' width='28%'><p> NAME- ".$name."<br/>Reg No- ".$reg."<br/>Gender- ".$gender."</p>";
echo"<form action='forms.php' method='POST'><p>BED-TYPE-</p>";
echo"<input type='radio' name='bed' value='2'  required>2-bed<br><input type='radio' name='bed' value='4' required>4-bed<br><input type='radio' name='bed' value='6' required>6-bed";
echo"<p>STATE</p>";
echo"<select name='State' required>";
echo"<option value=''>None</option>";
echo"<option value='Andhra Pradesh'>Andhra Pradesh</option>";
echo"<option value='Arunachal Pradesh'>Arunachal Pradesh</option>";
echo"<option value='Assam'>Assam</option>";
echo"<option value='Bihar'>Bihar</option>";
echo"<option value='Chhattisgarh'>Chhattisgarh</option>";
echo"<option value='Goa'>Goa</option>";
echo"<option value='Gujarat'>Gujarat</option>";
echo"<option value='Haryana'>Haryana</option>";
echo"<option value='Himachal Pradesh'>Himachal Pradesh</option>";
echo"<option value='Jammu and Kashmir'>Jammu and Kashmir</option>";
echo"<option value='Jharkhand'>Jharkhand</option>";
echo"<option value='Karnataka'>Karnataka</option>";
echo"<option value='Kerala'>Kerala</option>";
echo"<option value='Madhya Pradesh'>Madhya Pradesh</option>";
echo"<option value='Maharashtra'>Maharashtra</option>";
echo"<option value='Manipur'>Manipur</option>";
echo"<option value='Meghalaya'>Meghalaya</option>";
echo"<option value='Mizoram'>Mizoram</option>";
echo"<option value='Nagaland'>Nagaland</option>";
echo"<option value='Odisha'>Odisha</option>";
echo"<option value='Punjab'>Punjab</option>";
echo"<option value='Rajasthan'>Rajasthan</option>";
echo"<option value='Sikkim'>Sikkim</option>";
echo"<option value='Tamil Nadu'>Tamil Nadu</option>";
echo"<option value='Telangana'>Telangana</option>";
echo"<option value='Tripura'>Tripura</option>";
echo"<option value='Uttar Pradesh'>Uttar Pradesh</option>";
echo"<option value='Uttarakhand'>Uttarakhand</option>";
echo"<option value='West Bengal'>West Bengal</option>";
echo"<option value='NRI'>NRI</option>";

echo"</select>";









echo"<p>CONTACT DETAILS</p>";
echo"<p>Mail Id</p><input type='mail' name='mail_id'  size='40' placeholder='abc@gmail.com' required> </input>";
echo"<p>Phone No</p><input type='number' name='phoneno'  size='40' placeholder='9876543210' required> </input>";

echo"<p><br/></p><input type='Submit' value='Submit' style='padding:6px 50px;'></input></div>";

echo"<div style=width:28%;margin-left:40%;margin-top:40px;position:absolute>";
echo"<p>Your Qulaities</p><p><br/></p>";

echo"<p>1) Do you Smoke</p>";

echo"<input type='radio' name='smoke' value='0'  required >No";
echo"<input type='radio' name='smoke' value='1' required >Yes";

echo"<p>2) Do you Drink</p>";

echo"<input type='radio' name='drink' value='0' required >No";
echo"<input type='radio' name='drink' value='1' required >Yes";

echo"<p>3) Are you Vegiterian</p>";
echo"<input type='radio' name='veg' value='1' required >No";
echo"<input type='radio' name='veg' value='0' required>Yes";



echo"<p>4) Do you sleep early</p>";
echo"<input type='radio' name='sleep' value='1' required >No";
echo"<input type='radio' name='sleep' value='0' required>Yes";


echo"<p>5) Are you short tempered</p>";
echo"<input type='radio' name='anger' value='0' required>No";
echo"<input type='radio' name='anger' value='1' required>Yes";


echo"<p>6) Do you keep room tidy</p>";
echo"<input type='radio' name='clean' value='1' required>No";
echo"<input type='radio' name='clean' value='0' required>Yes";



echo"</div>";



echo"<div style=width:28%;margin-left:70%;margin-top:40px;position:absolute>";
echo"<p>Roommate qulaity preference</p><p><br/></p>";

echo"<p>1)Is it ok if your roommate Smokes</p>";

echo"<input type='radio' name='smokes' value='1' required>No";
echo"<input type='radio' name='smokes' value='0' required>Yes";

echo"<p>2)Is it ok if your roommate Drinks</p>";

echo"<input type='radio' name='drinks' value='1' required>No";
echo"<input type='radio' name='drinks' value='0'required >Yes";

echo"<p>3)Is it ok if your roommate is Vegiterian</p>";
echo"<input type='radio' name='vegs' value='1' required>No";
echo"<input type='radio' name='vegs' value='0' required>Yes";



echo"<p>4)Is it ok if your roommate Sleeps late in night</p>";
echo"<input type='radio' name='sleeps' value='1'required >No";
echo"<input type='radio' name='sleeps' value='0' required>Yes";


echo"<p>5) Is it ok if your roommate is short tempered</p>";
echo"<input type='radio' name='angers' value='1'required >No";
echo"<input type='radio' name='angers' value='0'required >Yes";


echo"<p>6) Is it ok if your roommate keeps room untidy</p>";
echo"<input type='radio' name='cleans' value='1'required >No";
echo"<input type='radio' name='cleans' value='0' required>Yes";



echo"</div></form></div>";











}
catch(PDOException $e) {
header("Location:oops_log_in_1.html");exit();
}
$conn = null;
?>    