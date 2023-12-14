<html>
<head>
<title>search</title>
</head>
<body>
<?php
require('bcon.php');
if(isset($_POST['submit']))
{
   $id=$_POST['ei'];
   $sql="delete from libary where ID=$id";
   $result=mysqli_query($conn,$sql);
   if($result)
   {
     echo "one record successfully deleted";
   }
   else
   {
     echo "Deletion failed";
   }
mysqli_close($conn);
}
else
{
?>
<center>
<h1><b><big>LIBRARY MANAGEMENT SYSTEM</big></b></h1>
  <form action="" method="post">
  <label>ENTER ID</label>
  <input type="text" name="ei" value="">
  <input type="submit" name="submit" value="SUBMIT">
  <?php
}
?>
</form>
</center>
</body>
</html>