<?php

            include("connection.php");

            session_start();

            $id=$_SESSION['i']; 

            $f=$_POST['fname'];

            $l=$_POST['lname'];

            $g=$_POST['gender'];

            $s=$_POST['sub'];

            $c=implode(",",$s);

            $d=$_POST['date'];       

            $m=$_POST['month'];

            $y=$_POST['year'];

            $d=$d.'-'.$m.'-'.$y;

            $file=$_FILES['file']['name'];

            $file2=time().rand(000,999).$file ;

            $folder="image/".$file2 ;

            $temp=$_FILES['file']['tmp_name'];

            move_uploaded_file($temp,$folder);

            if($file==NULL)

            {

                                    $query="update stu set fname='$f',lname='$l',gender='$g',subject='$c',date='$d' where id='$id'";

                                    $result=mysqli_query($conn,$query) or die("sc".mysqli_error());

                                    echo "<script> window.location.href='profile.php'</script>";

 

           

            }

            else

            {

                        $query=mysqli_query($conn,"select * from stu where id=$id");

                        $row = mysqli_fetch_array($query);

                       unlink($row['image']);

                        $query="update stu set fname='$f',lname='$l',gender='$g',subject='$c',date='$d',image='$folder' where id='$id'";

                        $result=mysqli_query($conn,$query) or die("sc".mysqli_error());

                        echo "<script> window.location.href='profile.php'</script>";

            }

           

 

?>