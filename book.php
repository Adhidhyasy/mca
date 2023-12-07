<html>
<body>
<?php
require('bcon.php');
if(isset($_POST['submit']))
{
$n=$_POST['BOOKNAME'];
$n1=$_POST['AUTHOR'];
$n2=$_POST['PUBLISHER'];
$n3=$_POST['QUANTITY'];
$n4=$_POST['PRICE'];
$sql="insert into libary(BOOKNAME,AUTHOR,PUBLISHER,QUANTITY,PRICE)values('$n','$n1','$n2','$n3','$n4');";
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
<h1>LIBARY MANAGEMENT</h1>
<fieldset>
<label><b>BOOK NAME</b></label>
<input type="text" name="BOOKNAME" ><br><br>

<label><b>AUTHOR</b></label>
<input type="text" name="AUTHOR" ><br><br>

<label><b>PUBLISHER</b></label>
<input type="text"  name="PUBLISHER" ><br><br>

<label><b>QUANTITY</b></label>
<input type="text" name="QUANTITY"><br><br>

<label><b>PRICE</b></label>
<input type="text" name="PRICE" ><br><br>

<input type="submit" name="submit" value="SUBMIT">
</center>
<?php
}
?>
</form>
</body>
</html>