<?php
	

	include('../service/userService.php');

	if(isset($_POST['submit'])){

		session_start();
		$uname 		= $_POST['username'];
		$password 	= $_POST['password'];

		if(empty($uname) || empty($password)){
			header("location: ../view/logIn.php?null_sub");
			//echo "null submission";

		}
		else{
			$userCheck = userValidate($uname,$password); 
			 if($userCheck){
			 	$user=[];
			 	$user = getByUsername($uname);
				$_SESSION['status']  = "true";
				$userType = $user['usertype'];
				echo $userType;
				if($userType =='admin'){
					setcookie('isValid', 'true', time()+3600, '/');
					$_SESSION['username'] = $uname; 
				    header('location: ../view/adminHome.php');
			    }
			    else if($userType=='user'){
			    	setcookie('isValid', 'true', time()+3600, '/');
			    	$_SESSION['username'] = $uname;
			    	header('location: ../view/userHome.php');
			    }
			    else{

		            header("location: ../view/logIn.php?invalid_user");
		        }
			}
			else{
				header("location: ../view/logIn.php?invalid_detail");
				//echo "Invalid username/password";
			}
		}

	}

	
	else{
	  header("location: ../view/logIn.php");
	}

?>