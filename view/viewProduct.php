<?php

include('../model/dbConnector.php');
$conn = getconnection();
$sql = "select * from product";
$res = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Products</title>

</head>
<body>
   <center> 
      <h3>Product List</h3>
  <table border="1"> 
    <tr>
      <td>PRODUCT ID</td>
      <td>PRODUCT NAME</td>
      <td>CREDIT</td>
      <td>PLATFORM</td>
      <td>PRICE</td>
      <td>ACTION</td>
    </tr>

  <?php while($data = mysqli_fetch_assoc($res)){ ?>

      <tr>
        <td><?=$data['pid']?></td>
        <td><?=$data['pname']?></td>
        <td><?=$data['pcredit']?></td>
        <td><?=$data['platform']?></td>
        <td><?=$data['price']?></td>
        <td>
          <a href="pbuy.php?id=<?=$data['pid']?>">Buy</a>
        </td>
      </tr>
  <?php } ?>

  </table>
</center>
</body>
</html>

