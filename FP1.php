<?php
 $servername="######";
 $dBUsername="######";
 $dBPassword="######";
 $dBName="######";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$token = $_POST['Token'];
$stat = 'Donated';
$sql="UPDATE MandlaEtfuSupport SET city='".$stat."' WHERE city='".$token."' ";
mysqli_query($conn,$sql);
header("Location:Donated.php");
exit();
?>
