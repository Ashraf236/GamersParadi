<?php

    if(isset($_SESSION['status']) || isset($_COOKIE['isValid']))
    {
        
    

?>


<table width='100%'>
    <tr >
        
        <td align="Left">
             <a href="../view/userHome.php"><h1>Gamers Paradi</h1></a>
        </td>
   
        
        <td align="right">
            Welcome  
            <a href=""><?php 
            
            echo $_SESSION['username'];
            ?></a>
            | <a  href="../php/logOut.php">Log Out</a>|
        </td>
    </tr>
</table>

<?php

    }

    else
    {
?>


<table width='100%'>
        <tr >
            <td align="right">
                <a href="../">Front Page</a>|
                <a href="../view/logIn.php">Login</a>|
                <a href="../view/registration.php">Registration</a>|
            </td>
        </tr>
    </table>



<?php

    

    }

?>
