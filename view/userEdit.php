<?php
  if (session_status() == PHP_SESSION_NONE) 
  {
      session_start();
  }
    if(isset($_SESSION['status']) || isset($_COOKIE['isValid']))
    {
        include_once('../view/header.php');
    }
    else
    {
        header('location: ../view/logIn.php');
        exit;
    }
    require_once('../service/userService.php');
    $user = getUser($_SESSION['username']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT PROFILE</title>
</head>
<body>
	 <center>
	 	<h1>EDIT PROFILE INFORMATION</h1>
	 	<table border="0">
	 		 
	 		   <tr>
	 		   	 <td>
	 				<form method="POST" action="../php/editCheck.php" onsubmit="return regUnameCheck()">
	 					Username :  <?php echo $user['uname']; ?>
	 					<input type="name" name="username" id="username" oninput="checkUser()" onkeypress="regUnameCheck()">
	 					<input type="submit" name="submit" value="submit">
	 					<p id="errorMsg"> </p>
	 					<p id="unameMsg"> </p>
	 				</form>
	 				 <script type="text/javascript" src="../script/script.js"></script>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>
	 				<form method="POST" action="../php/editCheck.php" onsubmit="return regEmailCheck()">
	 					Email :  <?php echo $user['email']; ?>
	 					<input type="email" name="email" id="email" oninput="regEmailCheck()">
	 					<input type="submit" name="changeEmail" value="changeEmail">
	 					<p id="availabiltyMsg"> </p>
	 					<p id="emailMsg"> </p>
	 				</form>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>
	 				<form method="POST" action="../php/editCheck.php" onsubmit="return regConPassCheck()">
	 					Password :<br> 
	 					New Password :<input type="password" name="password" id="password" oninput="regPassCheck()"><br><br>
	 					Retype Password :<input type="password" name="con_pass" id="con_pass" oninput="regConPassCheck()">
	 					<input type="submit" name="changePassword" value="changePassword">
	 					<p id="passMsg"> </p>
	 					<p id="con_passMsg"> </p>
	 				</form>
	 			</td>
	 		</tr>
	 	</table>
	 	 <script type="text/javascript" src="../script/script.js"></script>   
	 	</body>
	 </center>
	 <a href="../view/userHome.php">Back</a>
</body>
</html>