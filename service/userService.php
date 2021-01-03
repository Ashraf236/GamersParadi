<?php
    
    include('../model/dbConnector.php');

    function userValidate($userName, $Password){

		$conn = getConnection();
		$sql = "select * from users where uname='$userName' and password='$Password'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if($row!=null){
		    return true;
		}
		else{
		    return false;
		}
	}
	function validateByUsername($un){
		$conn = getConnection();
        
		//if(!$conn){
		//	echo "DB connection error";
		//}
		//else{
        $sql = "select * from users where uname='$un'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		//return $row;
		if($row!=null){
		    //$res=[];
		    //$res = array_push($res, $row);
		    return true;
		}
		else{
		    return false;
		    //echo "no user sql";
		}
		//}
		//}
    };
    function getByUsername($un){
		$conn = getConnection();
        
		//if(!$conn){
		//	echo "DB connection error";
		//}
		//else{

		$sql = "select * from users where uname='$un'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		//return $row;
		//if($row!=null){
		   // $res=[];
		    //$res = array_push($res, $row);
		    return $row;//$res;
		//}
		//else{
		   //return false;
		    ///echo "no user sql";
		//}
		//}
		//}
    };
    function getUser($usname){

		$conn = getConnection();
		$sql = "select * from users where uname = '$usname'";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		//$users = [];
		//array_push($users, $row);

		//while ($row = mysqli_fetch_assoc($result)) {
		//	array_push($users, $row);
		//}

		return $row;
	};

    function validateByEmail($em){
		$conn = getConnection();
        
		//if(!$conn){
		//	echo "DB connection error";
		//}
		//else{

		$sql = "select * from users where email ='$em'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		//return $row;
		if($row!=null){
		    //$res=[];
		    //$res = array_push($res, $row);
		    return true;
		}
		else{
		    return false;
		    //echo "no user sql";
		}
		//}
		//}
    };
   function register($nm,$eml,$unm,$ad,$cnt,$dofb,$pass){
   	$conn = getConnection();
   	$utyp="user";
   	$sql ="insert into users (`uname`, `name`, `email`, `password`, `address`, `contactno`, `dob`, `usertype`) values ('$unm','$nm','$eml','$pass','$ad','$cnt','$dofb','$utyp')";
   	$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
   };
   function editUserName($funame,$fusn){
	    $conn = getConnection();
		$sql = "update users set uname ='$funame' where uname='$fusn'";
		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	};
	function editUserEmail($fuemail,$fid){
		$conn = getConnection();
		$sql = "update users set email ='$fuemail' where uname ='$fid'";
		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	};
	function editUserPassword($fupassword,$fid){
		$conn = getConnection();
		$sql = "update users set password ='$fupassword' where uname ='$fid'";
		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	};
	function editUserDOB($fudob,$fid){
		$conn = getConnection();
		$sql = "update users set dob ='$fudob' where uname ='$fid'";
		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	};
	function editName($fnm,$fid){
		$conn = getConnection();
		$sql = "update users set name ='$fnm' where uname ='$fid'";
		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	};
	function editUserAddress($fuadd,$fid){
		$conn = getConnection();
		$sql = "update users set address ='$fuadd' where uname ='$fid'";
		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	};
	function editUserContant($fuct,$fid){
		$conn = getConnection();
		$sql = "update users set dob ='$fuct' where uname ='$fid'";
		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	};
?>