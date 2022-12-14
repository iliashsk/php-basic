<html>

<head>

<title>User registartion form</title>

<link rel="stylesheet" href="style.css" type="text/css"  />

</head>

 

<body>

<h1>user registartion form</h1>

<hr />

 

<form action="formdata.php" name="reg" method="post" enctype="multipart/form-data">

<table class="table" align="center" border="1" >

<tr>

            <td>Firstname :: </td>

            <td><input type="text" name="first"  /></td>

</tr>

 

<tr>

            <td>Lastname :: </td>

            <td><input type="text" name="last"  /></td>

</tr>

<tr>

            <td>Username :: </td>

            <td><input type="" name="uname" /></td>

</tr>

<tr>

            <td>Password :: </td>

            <td><input type="password" name="pass"</td>

</tr>

<tr>

            <td>Date Of Birth :: </td>

            <td>Date <select name="date">

                                    <?php for($i=1;$i<=31;$i++)

                                                            {?>

                                                            <option><?php echo $i;?></option>

                                                            <?php } ?></select>

                     Month <select name="month">

                        <?php $arr=array('jan','feb','mar','apr','may','june','july','aug','sep','oct','nov','dec');

                                    foreach($arr as $i)

                                                {?>

                                                            <option><?php echo $i;?></option>

                                                <?php } ?></select>

                                    Year <select name="year">

                                    <?php for($i=1980;$i<=2012;$i++)

                                                            {?>

                                                            <option><?php echo $i;?></option>

                                                            <?php } ?></select>      </td>                           

</tr>

<tr>

            <td>Gender :: </td>

            <td>Male<input type="radio" name="gender" value="male" />Female<input type="radio" name="gender" value="female"  /></td>

</tr>

<tr>

            <td>Subject :: </td>

            <td>C<input type="checkbox" name="sub[]" value="c" />C++<input type="checkbox" name="sub[]" value="c++" />PHP<input type="checkbox" name="sub[]" value="php" /></td>

</tr>

<tr>

            <td>Upload Image :: </td>

            <td><input type="file" name="file" /></td>

</tr>

<tr>

            <td colspan="2"><input type="submit" name="submit" value="register" /></td>

</tr>

<tr>

            <td colspan="2">already have an account??<a href="loginform.php">login here</a></td>

</tr>

 

</table>

<hr />

</form>

</body>

</html>