<?php

            include("connection.php");

            $f=$_POST['first'];

            $l=$_POST['last'];

            $u=$_POST['uname'];

            $p=$_POST['pass'];

            $p=md5($p);

            $g=$_POST['gender'];

            $s=$_POST['sub'];

            $c=implode(",",$s);

            $d=$_POST['date'];       

            $m=$_POST['month'];

            $y=$_POST['year'];

            $d=$y.'-'.$m.'-'.$d;

            $file=$_FILES['file']['name'];

            $file=time().rand(000,999).$file ;

            $folder="image/".$file ;

            $temp=$_FILES['file']['tmp_name'];

            move_uploaded_file($temp,$folder);

           

            

            $result=mysqli_query($conn,"insert into stu (fname,lname,mobile,pwd,gender,subject,date,image) values ('$f','$l','$u','$p','$g','$c','$d','$folder')") or die("insert query error ".mysqli_error());

            echo "<script> window.location.href='loginform.php'</script>";

?>