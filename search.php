<html>
<head>
</head>
<body>
<?php
require('bcon.php');
if(isset($_POST['submit']))
{
   $id=$_POST['ei'];
   $sql="select * from libary where ID=$id";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0)
   {
     while($row=mysqli_fetch_assoc($result))
     {
         echo"BOOK NAME : ".$row["BOOKNAME"]."<br>";
         echo"AUTHOR : ".$row["AUTHOR"]."<br>";
         echo"PUBLISHER : ".$row["PUBLISHER"]."<br>";
         echo"QUANTITY : ".$row["QUANTITY"]."<br>";
         echo"PRICE : ".$row["PRICE"]."<br><br>";
     }
   }
   else
   {
       echo"falied";
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
</center>
</form>
</body>
</html>