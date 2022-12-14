<?php

            include("connection.php");

            session_start();

            $id=$_SESSION['i'];

            $query=mysqli_query($conn,"select * from stu where id=$id");

            $row = mysqli_fetch_array($query);

           

?>

<html>

<head>

<link rel="stylesheet" href="style.css" type="text/stylesheet">

</head>

<body>

<form action="update.php" method="post" enctype="multipart/form-data">

<table border="1" align="center" class="table">

<tr>

            <td>first name :: </td>

            <td><input type="text" name="fname" value="<?php echo $row[1]?>" /></td>

</tr>

<tr>

            <td>last name :: </td>

            <td><input type="text" name="lname" value="<?php echo $row[2]?>" /></td>

</tr>

<tr>

            <td>user name :: </td>

            <td><input type="text" name="lname" value="<?php echo $row[3]?>" disabled="disabled"/></td>

</tr>

<tr>

            <td>Date of birth :: </td>

            <td><?php $r=explode('-',$row['date']);

                                                $d=$r[0];

                                                $m=$r[1];

                                                $y=$r[2];?>

                                                <select name="date">

                                                <?php for($i=1;$i<=31;$i++)

                                                {

                                                            if($d == $i)

                                                            {?>

                                                            <option value="<?php echo $i;?>" selected="selected"><?php echo $i;?></option>

                                                            <?php continue;

                                                            }?>

                                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>

                                                <?php } ?></select>

                                                <select name="month">

                                                <?php $arr=array('jan','feb','mar','apr','may','june','july','aug','sep','oct','nov','dec');

                                                                        foreach($arr as $x)

                                                                        {

                                                                                    if($m == $x )

                                                                                    {?>

                                                                                                <option value="<?php echo $x;?>" selected="selected"><?php echo $x;?></option>

                                                                                    <?php continue;

                                                                                    }?>

                                                                                    <option value="<?php echo $x;?>"><?php echo $x;?></option>

                                                                        <?php } ?></select>

                                                <select name="year">

                                                <?php for($i=1980;$i<=2012;$i++)

                                                {

                                                            if($y == $i)

                                                            {?>

                                                            <option value="<?php echo $i;?>" selected="selected"><?php echo $i;?></option>

                                                            <?php continue;

                                                            }?>

                                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>

                                                <?php } ?></select>

                                                </td>

</tr>

<tr>

            <td>gender :: </td>

            <td><?php $g=$row[5];

                                                if($g == 'male')

                                                {?>

                                                            Male<input type="radio" name="gender" value="male" checked="checked" />

                                                            Female<input type="radio" name="gender" value="female" />

                                                <?php }

                                                elseif($g == 'female')

                                                { ?>

                                                            Male<input type="radio" name="gender" value="male" />

                                                            Female<input type="radio" name="gender" value="female" checked="checked" />

                                                <?php } ?></td>

</tr>

<tr>

            <td>subjects :: </td>

            <td><?php $a=explode (",",$row[6]);

                                                if($a[0] == 'c')

                                                { ?>

                                                            C <input type="checkbox" name="sub[]" value="c" checked="checked" />

                                                <?php }

                                                else

                                                { ?>

                                                            C <input type="checkbox" name="sub[]" value="c" />

                                                <?php }

                                                if ($a[0]=='c++' || $a[1] == 'c++')

                                                { ?>

                                                            C++ <input type="checkbox" name="sub[]" value="c++" checked="checked" />

                                                <?php }

                                                else

                                                { ?>

                                                            C++ <input type="checkbox" name="sub[]" value="c++" />

                                                <?php }

                                                if ($a[0]=='php' || $a[1] == 'php' || $a[2] == 'php')

                                                { ?>

                                                            PHP <input type="checkbox" name="sub[]" value="php" checked="checked" />

                                                <?php }

                                                else

                                                {?>

                                                            PHP <input type="checkbox" name="sub[]" value="php" />         

                                                <?php } ?>

                                                </td>

</tr>

<tr>

            <td>change your profile pic</td>

            <td><input type="file" name="file" /></td>

</tr>

<tr><td colspan="2" align="center"><input type="submit" name="submit" value="update" /></td></tr>

</table>

</form>

</body>

</html>