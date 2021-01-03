<?php 
      require_once('../service/userService.php');
      session_start();
      $usname = $_SESSION['username'];
      
    if(isset($_POST['submit'])){
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
	else if(isset($_POST['changeEmail'])){
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
   }
	else if(isset($_POST['changePassword'])){
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
	else if(isset($_POST['changeDOB'])){
		if(empty($_POST['dob'])){
			header('location: ../view/userEdit.php?msg=null_date');
		}
		else{
		$udob = $_POST['dob'];
		$ch=editUserDOB($udob,$usname);
		if($ch){
		header('location: ../php/logOut.php?msg=changed_DOB');
	   }
	   else{
	   	     header('location: ../view/userEdit.php?msg=dob_not_chnged');
	   }
	}
   }
   else if(isset($_POST['changeAddress'])){
		if(empty($_POST['address'])){
			header('location: ../view/userEdit.php?msg=null_add');
		}
		else{
		$uadd = $_POST['address'];
		$ch=editUserAddress($uadd,$usname);
		if($ch){
		header('location: ../php/logOut.php?msg=changed_Add');
	   }
	   else{
	   	     header('location: ../view/userEdit.php?msg=add_not_chnged');
	   }
	}
   }
   else if(isset($_POST['changeName'])){
		if(empty($_POST['name'])){
			header('location: ../view/userEdit.php?msg=null_nm');
		}
		else{
		$un = $_POST['name'];
		$ch=editName($un,$usname);
		if($ch){
		header('location: ../php/logOut.php?msg=changed_nm');
	   }
	   else{
	   	     header('location: ../view/userEdit.php?msg=nm_not_chnged');
	   }
	}
   }
   else if(isset($_POST['changeContact'])){
		if(empty($_POST['contact'])){
			header('location: ../view/userEdit.php?msg=null_cnt');
		}
		else{
		$ucn = $_POST['contact'];
		$ch=editUserContact($ucn,$usname);
		if($ch){
		header('location: ../php/logOut.php?msg=changed_cnt');
	   }
	   else{
	   	     header('location: ../view/userEdit.php?msg=cnt_not_chnged');
	   }
	}
   }

?>