
<?php
$name=$_POST["n"];
$mno=$_POST["mn"];
$email=$_POST["ei"];
$dob=$_POST["dob"];
$gen=$_POST["g"];
$loc=$_POST["l"];
$pass=$_POST["p"];
$sn="localhost";
$un="root";
$pass="";
$con=mysql_connect($sn,$un,$pass);
$sql="use ht";
$c=mysql_query($sql,$con);
$sql="insert into user values('$name','$email','$mno','$dob','$loc','$gen','$pass')";
$c=mysql_query($sql,$con);
if($c)
{
  echo "<p align='center'>YOU HAVE BEEN SIGNED UP SUCCESSFULLY, PLEASE LOGIN TO USE YOUR ACCOUNT</p>";
}
else
{
  echo "<p align='center'>SIGNUP FAILED</p><br><p align='center'>THIS E-MAIL ID HAS ALREADY BEEN REGISTERED</p>";
}
mysql_close($con);
?>
