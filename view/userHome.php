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
    $userlist = getUser($_SESSION['username']);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0" >
      
        <tr>
          <td height="900px">
            <select id="myselect" onchange="view_myselect(this.value)">
              <option value="">Menu</option>
              <option value="product">GiftCards</option>
              <option value="edit">Edit Profile</option>
              <option value="messege">Contact us</option>
            </select>           
          </td>

          <td id="homeView" height="900px">
             
                <h1>Welcome <?php echo $userlist['name'] ?> <br/>
                <h2>User name: <?php echo $userlist['uname'] ?></h2>
                <h2>Email: <?php echo $userlist['email'] ?></h2>
                <h2>Contact No: <?php echo $userlist['contactno'] ?></h2>
                <h2>Address: <?php echo $userlist['address'] ?></h2>
                <h2>Date of Birth: <?php echo $userlist['dob'] ?></h2>
                <h2>User type: <?php echo $userlist['usertype'] ?></h2>
                </h1>
            </td>
        </tr>
    </table>
    <script type="text/javascript" src="../script/frameScript.js"></script>
</body>
</html>
<?php
    include_once('../view/footer.php');
?>