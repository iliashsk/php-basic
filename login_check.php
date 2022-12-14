
<?php
include("connection.php");
session_start();
$u=$_POST['user'];
$p=$_POST['pass'];
$pass=md5($p);
echo $u;
$m='kishan';
$dbq="select * from stu where pwd='$pass' and mobile='$u' ";
$query=mysqli_query($conn,$dbq);
$row=mysqli_fetch_array($query);
echo "<br>".$row[0];
$_SESSION['i']=$row[0];
 echo "<script> window.location.href='profile.php'</script>";?>