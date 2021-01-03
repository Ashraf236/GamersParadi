<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>
<body>
    <h1 align='center'>Leave a messege</h1>
    <center>
        <form  action="">
                <table>
                    <tr>
                        <td>username</td>
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
                        <td>Messege</td>
                        <td><input height="400px" type="text"name="text" id="text"></td>
                        <td id="txtMsg"></td>
                   </tr>
                   <tr>
                        <td></td>
                        <td><input type="submit" name="submit" id="submit"></td>
                        <td id="txtMsg"></td>
                   </tr>
               </table>
             <script type="text/javascript" src="../script/script.js"></script>   
        </form>
    </center>
</body>
</html>