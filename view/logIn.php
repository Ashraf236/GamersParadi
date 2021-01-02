<?php
     if(isset($_GET['reg_succ'])){

	 echo"registration successfull. please login";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>
	<form method="POST" action="../php/logInCheck.php" onsubmit="return validate()">
		<fieldset>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username" onkeyup=" checkUser()" onkeypress="nameRemover()" onblur="blr()"/></td>
					<td id="userMsg"> </td>
					<td></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password" onkeyup="passRemover()"/></td>
					<td id="passMsg"> </td>
					<td></td>
				</tr>
				<tr>
					<td ></td>
					<td><input type="submit" name="submit" value="submit" onmousemove=" validate()"/>
					
                      <a href="../view/registration.php">Register</a><br>
                      <a href="../">Back</a>
					</td>
					<td id="errorMsg"></td>
				</tr>

			</table>
		 </fieldset>
	</form>
	<script type="text/javascript" src="../script/script.js"></script>
</body>
</html>

<?php
 
	
	if(isset($_GET['null_sub'])){

	 echo"All input field must be inserted";
	}
	elseif(isset($_GET['invalid_detail'])){
		
	  echo"No user found. wrong Username/ password";
	}

?>

