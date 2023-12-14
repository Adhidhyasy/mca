<html>
<body>
<center>
<h1><b><big>LIBRARY MANAGEMENT SYSTEM</big></b></h1>
</center>
<?php
require('bcon.php');
$sql="select * from libary";
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
?>
</body>
</html>