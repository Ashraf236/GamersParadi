
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1 align='center'>Registration</h1>
    <center>
        <form method="POST" action="../php/registrationCheck.php" onsubmit="return regValidation()">
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" id="name" onmousemove="regNameCheck()" onkeypress="nmRemover()"></td>
                        <td id="nameMsg"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" id="email" oninput="regEmailCheck()"></td>
                        <td id="emailMsg"></td>
                        <td id="availabiltyMsg"></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name='username' id="username" oninput="regUnameCheck() "></td>
                        <td id="unameMsg"></td>
                        <td id="errorMsg"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" id="address" oninput="regAddrsCheck()"></td>
                        <td id="addMsg"></td>
                    </tr>
                    <tr>
                        <td>Contact no</td>
                        <td><input type="text" name="contact" id="contact" oninput="regContCheck()"></td>
                        <td id="contactMsg"></td>
                    </tr>
                    <tr>
                        <td>Date Of Birth</td>
                        <td><input type="date" name="dob" id="dob" oninput="regDobCheck()"></td>
                        <td id="dobMsg"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id="password" oninput="regPassCheck()"></td>
                        <td id="passMsg"></td>
                    </tr>
                    <tr>
                        <td>Confirm password</td>
                        <td><input type="password" name="con_pass" id="con_pass" oninput="regConPassCheck()"></td>
                        <td id="con_passMsg"></td>
                    </tr>
    
                    <tr>
                        <td></td>
                        <td colspan="2">
                            <input type="submit" name="submit" value="submit">
                            <button type="reset">Reset</button>
                            <a href="../">Back</a>
                        </td>
                        <td></td>

                    </tr>
                    
                    
                </table>
             <script type="text/javascript" src="../script/script.js"></script>   
        </form>
    </center>
</body>
</html>
<?php
  
    if(isset($_GET['null_sub'])){

     echo"All input field must be inserted";
    }
    elseif(isset($_GET['uname_exist'])){
        
      echo"User name already exist";
    }
    elseif(isset($_GET['email_exist'])){
        
      echo"email already exist";
    }
?>
