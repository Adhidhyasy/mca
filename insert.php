<html>
<body>
<?php
require('login.php');
if(isset($_POST['submit']))
{
$n=$_POST['firstname'];
$n1=$_POST['lastname'];
$n2=$_POST['username'];
$n3=$_POST['password'];
$n4=$_POST['address'];
$sql="insert into user_registration(firstname,lastname,username,password,address)values('$n','$n1','$n2','$n3','$n4');";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo"new records successfully created";
}
mysqli_close($conn);
}
else
{
?>
<form method="POST" action="">
<center>
<h1>REGISTRATION</h1>
<fieldset>
<label><b>FIRSTNAME</b></label>
<input type="text" name="firstname"value=""><br><br>
<label><b>LASTNAME</b></label>
<input type="text" name="lastname"value=""><br><br>
<label><b>USERNAME</b></label>
<input type="text"  name="username" value=""><br><br>
<label><b>PASSWORD</b></label>
<input type="password" name="password" value=""><br><br>
<label><b>ADDRESS</b>
<textarea name="address" rows="10" cols="10"></textarea></label>
<br><br>
<input type="submit" name="submit"value="SUBMIT">
</center>
<?php
}
?>
</form>
</body>
</html>