<html>
<body>
<?php
require('login.php');
if(isset($_POST['login']))
{
$name=$_POST['username'];
$password=$_POST['password'];
$sql="select*from user_registration where username='$name'AND password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
   echo"success";
}
else
{
   echo"login failed";
}
mysqli_close($conn);
}
else
{
?>
<h1>SIGN IN</h1>
<form align="center" action="" method="POST">
<label><b>USERNAME</b></label>
<input type="text"  name="username" value=""><br><br>
<label><b>PASSWORD</b></label>
<input type="password" name="password" value=""><br><br>
<input type="submit" name="login"value="LOGIN">
<?php
}
?>
</form>
</body>
</html>