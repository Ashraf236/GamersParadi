<?php 
      require_once('../service/usersService.php');
      session_start();
      $usname = $_SESSION['username'];
      echo $usname;
      
    if(isset($_POST['changeName'])){
		if(empty($_POST['username'])){
			header('location: ../view/userEdit.php?msg=null_username');
		}
		else{
		$urname = $_POST['username'];
		$ch=editUserName($urname,$usname);
		
		if($ch){
		header('location: ../php/logOut.php?msg=changed_username');
	   }
	   else{
	   	     header('location: ../view/userEdit.php?msg=uname_not_chnged');
	   }

	   }
	}
	if(isset($_POST['changeEmail'])){
		if(empty($_POST['email'])){
			header('location: ../view/userEdit.php?msg=null_email');
		}
		else{
		$uemail = $_POST['email'];
		$ch=editUserEmail($uemail,$usname);
		if($ch){
		header('location: ../php/logOut.php?msg=changed_email');
	   }
	   else{
	   	     header('location: ../view/userEdit.php?msg=email_not_chnged');
	   }
	}
	if(isset($_POST['changePassword'])){
		if(empty($_POST['password']&&$_POST['con_pass'] )){
			header('location: ../view/userEdit.php?msg=null_password');
		}
		else if(!($_POST['password']==$_POST['con_pass'] )){
			header('location: ../view/userEdit.php?msg=password_not_matched');
		}
		else{
		$upass = $_POST['con_pass'];
		$ch=editUserPassword($upass,$usname);
		
		if($ch){
		header('location: ../php/logOut.php?msg=changed_password');
	   }
	   else{
	   	     header('location: ../view/userEdit.php?msg=pass_not_chnged');
	   }
	   }
	}

?>