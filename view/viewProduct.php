<?php
  
        include('../service/productService.php');
        $productList[] = getAllProduct(); 
        var_dump($productList);
    
?>
<!DOCTYPE html>
<html>
<head>
  <title>Products</title>

</head>
<body> 
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

  <?php for($i=0; $i<=count($productList); $i++){ ?>

      <tr>
        <td><?=$productList[$i]['pid']?></td>
        <td><?=$productList[$i]['pname']?></td>
        <td><?=$productList[$i]['pcredit']?></td>
        <td><?=$productList[$i]['platform']?></td>
        <td><?=$productList[$i]['price']?></td>
        <td>
          <a href="pbuy.php?id=<?=$productList[$i]['pid']?>">Buy</a>
        </td>
      </tr>
  <?php } ?>

  </table>
</body>
</html>