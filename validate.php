<?php
    // cheacking username and password

    $myemail = "prakashkumar";
    $mypass = "12345";
    
    if(isset($_POST['login'])) 
        {
        $email = $_POST['email'];
        $pass =  $_POST['password'];
        if( $email == $myemail and $pass == $mypass)
        {
            if(isset($_POST['remember']))
            {
                // Setting time to save cookie data 
                
                setcookie('email', $email, time()+60*60*7);
                setcookie('pass', $pass, time()+60*60*7);
            }
            
            //Starting of session
            
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            header("location: viewdb.php");
        }
        else
        {
            echo "Email or password Invalid click here to <a href='login.php'>try again</a>";
        }
    }else{
        header("location: login.php");
    }
    
?>