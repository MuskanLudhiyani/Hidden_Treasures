
<?php
$email=$_POST["ei"];
$pass=$_POST["p"];
$sn="localhost";
$un="root";
$pass="";
$con=mysql_connect($sn,$un,$pass);
$sql="use ht";
mysql_query($sql,$con);
$sql="select password from user where email='$email'";
$c=mysql_query($sql,$con);
$flag=0;
while($row=mysql_fetch_array($c))
{
if({$row['password']}==$p)
{
$flag=1;
echo "<p align='center'>LOGIN SUCCESSFULL</p><br>";
break;
}
}
mysql_close($con);
if($flag==0)
echo "<p align='center'>INVALID CREDENTIALS</p>";
if($flag==1)
header("Location: hiddentreasures.html",true,301);
?>
