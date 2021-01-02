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
?>