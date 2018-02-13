<html>
    <head>
        <title>Logout page</title>
    <style>
        body{
            background-color: red;
            font-size: 30px;
            color:aliceblue;
        }
        
        
    </style>
    </head>
    <body>
<?php
    /*-----------------------------------------------------------------------------------------------------------
                    PHP Code to Destroy Session And Cookie After CLick on LogOut Button
    --------------------------------------------------------------------------------------------------------------*/
    
    session_start();
    session_destroy();
    if(isset($_COOKIE['email']) and isset($_COOKIE['pass']))
    {
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];
        setcookie('email',$email,time()-1);
        setcookie('pass',$pass,time()-1);
        
    }
    echo "You sucessfully Logout Matrimonial Database. Click here to <a href='login.php'>LogIn Again</a>";

?>
    </body>
</html>