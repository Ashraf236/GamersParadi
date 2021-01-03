<?php
     include('../model/dbConnector.php');

     function getAllProduct(){

		$conn = getConnection();
		$sql = "select * from product where '1'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
		    
	};
	
?>     