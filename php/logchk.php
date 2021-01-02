<?php
 include('../service/userService.php');
header('Content-Type: application/json');
if(isset($_POST['userCheck'])){
		$data = $_POST['userCheck'];
		$json = json_decode($data, true);
		$username = $json["unme"];
		$password = $json["pass"];
	    $status = userValidate($username,$password);
	    
		if($status){
			
			echo "true";
		}
		else{
			
			echo "false";
		}
	}
else if(isset($_POST['userSearch'])){
		$data = $_POST['userSearch'];
		$json = json_decode($data, true);
		$username = $json["uname"];
		
	    $status = validateByUsername($username);
	   
		if($status){
			
			
			echo 'username already exist';
			
		}
		else{
			
			echo 'username dsnt exist; *can be used for new Reg';
			
		}
	}
	else if(isset($_POST['emailSearch'])){
		$data = $_POST['emailSearch'];
		$json = json_decode($data, true);
		$chkEmail = $json["emil"];
		
	    $status = validateByEmail($chkEmail);
	    
		if($status){
			
			
			echo 'email already exist; *use another';
			
		}
		else{
			
			echo 'email dsnt exist; *can be used for new Reg';
			
		}
	}	
 else{
 	echo "js validation failed";
 	return false;
 }	
?>	