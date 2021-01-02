<?php
 include('../service/userService.php');
//header('Content-Type: application/json');
if(isset($_POST['submit'])){

echo $_POST['dob'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$dateb=$_POST['dob'];
		$password=$_POST['password'];
		$con_pass=$_POST['con_pass'];
		$unameCheck = validateByUsername($username);
		$emailCheck = validateByUsername($email);

		if ($name==""||$email==""||$username==""||$address==""||$contact==""||$dateb==""||$password==""||$con_pass=="") {

			header("location: ../view/registration.php?null_sub");
		}
		else{
			$unameCheck = validateByUsername($username);
		    $emailCheck = validateByEmail($email);
			if($unameCheck){
			    header("location: ../view/registration.php?uname_exist");
		    }
		    if($emailCheck){
		    	header("location: ../view/registration.php?email_exist");
		    }
		    else if($password!==$con_pass){
		    	header("location: ../view/registration.php?password didn't match");
		    }
		    else{
		    	$status = register($name,$email,$username,$address,$contact,$dateb,$con_pass); 
		
		         if($status){
			         header("location: ../view/logIn.php?reg_succ"); 
		          }
		         else{
		         	header("location: ../view/registration.php?reg_un");
		         }
		    }
		}
}
else{
	header("location: ../view/registration.php?php_val_failed");
}