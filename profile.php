<html>

<head>

<link rel="stylesheet" href="style.css" type="text/stylesheet" />

</head>

<body>

<?php

            include("connection.php");

            session_start();

            $id=$_SESSION['i'];


$query=mysqli_query($conn,"select * from stu where id=$id ");

$row = mysqli_fetch_array($query);

if($id == '')

{

            echo "<script>window.location.href='loginform.php'</script>";

}

else

{

echo "<p>";

$img=$row['image'];

echo "<img src='$img' height='300px' width='300px' align='left' />";

echo "<div align='center'>";

echo "<br>first name is ".$row[1];

echo "<br>last name is ".$row[2];

echo "<br>your date of birth is ".$row[7];

echo "<br>gender is ".$row[5];

echo "<br>your subjects are ".$row[6];

echo "<br><a href='update_form.php'>update</a>";

echo "</div>";

echo "</p>"; 
}

?>

 

<div align="right">

<form action="logout.php" method="post" >

<input type="submit" value="logout" />

</form>

</div>

</body>

</html>