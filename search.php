
<?php
$city=$_POST["cn"];
$sn="localhost";
$un="root";
$pass="";
$con=mysql_connect($sn,$un,$pass);
$sql="use ht";
mysql_query($sql,$con);
$sql="select name,state,pincode from cities where name='$city'";
$c=mysql_query($sql,$con);
$flag=0;
while($row=mysql_fetch_array($c))
{
$flag=1;
echo "<p align='center'>{$row['name']} ({$row['pincode']}) , {$row['state']}</p><br><br>";
}
mysql_close($con);
if($flag==0)
echo "<p align='center'>NO DATA FOUND</p>";
if($flag==1)
{
$sql="select name,information from hiddentreasures where cityname='$city'";
$c=mysql_query($sql,$con);
$flag=0;
while($row=mysql_fetch_array($c))
{
echo echo "<p align='center'>{$row['name']}:                {$row['info']}</p><br><br>";
}
mysql_close($con);
if($flag==0)
echo "<p align='center'>NO DATA FOUND</p><br>";
}
?>
