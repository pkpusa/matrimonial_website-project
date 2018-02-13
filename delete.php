<!DOCTYPE HTML>
<html>
<head>
    <title>Matrimonial Web Application</title></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Css coding starts !-->
    <style>
body {
    font-family: Verdana,sans-serif;
    font-size: 0.9em;
    background-image:url(img/newbg.jpg);
   
    background-repeat:repeat ;
   
    
}


table, th, td {
    border: 1px solid black;
}

header{

    padding:0px;
    margin-top: 0px;
    color: white;
    background-color:lightblack;
    padding-top: 0px;
    color: red;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    
}

#from_bg{
        background-image: url(img/kanyadan.JPG);
       background-size:cover;
        height: 700px;
    
        margin-bottom: 30px;

        
        }
        
div.head{
        float:right;
        }
        
        h1 a{
            
            text-decoration: none;
            color: aliceblue;
            text-decoration-style: solid;
            font-family: cursive;
            font-size: 50px;
            
        }
        
.nav{
            
    background-color: red;
    color: aliceblue;
    padding: 5px;
        }
        
input[type=text], [type=email], [type=tel], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit], [type=button] {
    width: 200px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit], [type=button]:hover {
    background-color: #45a049;
}

form {
    margin-top: 50px;
    margin-bottom: 100px;
    border-radius: 30px;
    background-color: #f2f2f2;
    padding: 20px;
    left:20%;
    

    
    position: absolute;
}

.opc{
    filter: alpha(opacity=60);   
    opacity: 0.9;
    
    }

.footer{
 margin-top: 50px;
       
       text-align: center;    
       width: 100%;
        bottom: 2%;
        height: 100px;
        background-color: dimgrey;
        position: fixed;
        margin-top: 50px;
        
        
}
        
.tbl{
            
    overflow:scroll; 
    max-height: height:500px;">
        }



        
    </style>
    
   <script>
       
    
        function validateAlpha(){
        var textInput = document.getElementById("fname").value;
        textInput = textInput.replace(/[^A-Za-z]/g, "");
        document.getElementById("fname").value = textInput;
            
    
        var textInput = document.getElementById("lname").value;
        textInput = textInput.replace(/[^A-Za-z]/g, "");
        document.getElementById("lname").value = textInput;
        }
       
        function isNumberKey(){
        var textInput = document.getElementById("tel").value;
        textInput = textInput.replace(/[^0-9]/g, "");
        document.getElementById("tel").value = textInput;
        }  
       
        function validateForm() {
        var x = document.forms["form1"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
            {
            alert("Not a valid e-mail address");
        return false;
            }
        }

        function mailchk(){
        var fistInput = document.getElementById("email").value;
        var secondInput = document.getElementById("rmail").value;
        }
       
        function myFunction(x) {
        x.style.background = "#F28ECE";
        }
       
        function bigimg() {
        document.getElementById("myImg").height = "60";
        document.getElementById("myImg").width = "60";
        }
       function bigimg2(){
        document.getElementById("insta").height = "60";
        document.getElementById("insta").width = "60";
       }
       function bigimg3(){
        document.getElementById("twit").height = "60";
        document.getElementById("twit").width = "60";
       }
       function bigimg4(){
        document.getElementById("whatsapp").height = "60";
        document.getElementById("whatsapp").width = "60";
       }
       function bigimg5(){
        document.getElementById("gplus").height = "60";
        document.getElementById("gplus").width = "60";
        }

        function realimg() {
        document.getElementById("myImg").height = "40";
        document.getElementById("myImg").width = "40";
        }
       function realimg2(){
        document.getElementById("insta").height = "40";
        document.getElementById("insta").width = "40";
       }
       
       function realimg3(){
        document.getElementById("twit").height = "40";
        document.getElementById("twit").width = "40";
       }
       function realimg4(){ 
       document.getElementById("whatsapp").height = "40";
        document.getElementById("whatsapp").width = "40";
       }
       
       function realimg5(){
        document.getElementById("gplus").height = "40";
        document.getElementById("gplus").width = "40";
        }
        
       
       
       function onSubmit(){
           
       validateForm();
        var answer = confirm("Do you want to submit");
            if(answer)
                window.location.href="connected.html"
            else
                alert("you data not submitted");
                window.location.href = "contact_us.html"
        }
        
        
       
       
</script> 
    
<body>
    
    <header><a href = "9th.html" style = "color : red;"><img src="img/wed_logo.png" > </a>
        <div class="head"><img src="img/whatss.png"><strong style="font-size: 30px;">+91-9931021948</strong><br><br><br>
        <a href="form1.html" style="font-size: 30px;">Register For Free</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="form.html" style="font-size: 30px;">Login</a></div>
    </header>
        
    <div class="nav">
        <center><h1><a href ="contact_us.html">Our Registered Candidates</a></h1>
               
        </center>
    </div>    
    
   
    
   <div id="from_bg"> 

       <div class="opc">
            
           
     <form action="viewdb.php"> <div class="tbl">
         
<span style="color: blue; text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px yellow; font-size: 30px;">
 
<!-- -----------------------------------------------------------------------------------------------------------                                            PHP Code starts here    
 ----------------------------------------------------------------------------------------------------------!--->   
<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "sample";

      //creating connection for mysql

    $conn = new mysqli($server, $user, $pass, $dbname);

    //cheacking connection

    if($conn->connect_error){
        die("COnnection failed : " . $conn->connect_error);
    
        }

/*----------------------------------------------------------------------------------------------------------
                            Making variables to get Data From The form                               
------------------------------------------------------------------------------------------------------------*/

/*$name = mysqli_real_escape_string($conn, $_POST['fname']);
$mail = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['tel']);
$address = mysqli_real_escape_string($conn, $_POST['addr']);*/
             
/*----------------------------------------------------------------------------------------------------------
                            Insertion into the table through Php                              
------------------------------------------------------------------------------------------------------------*/
    

/*$sql = "INSERT INTO user (name, email, mob, addr) VALUES ('$name', '$mail', '$phone', '$address')";

if($conn->query($sql) === TRUE){
    
    echo"Record added sucessfully";
    
}
else
{
    echo"Error" . $sql . "<br/>" . $conn->error;
    
}
*/

/*----------------------------------------------------------------------------------------------------------
                           Deletion of data from the table through Php                              
-----------------------------------------------------------------------------------------------------------*/
        
    
        $userid = $_POST['username'];
        
         
         if($userid == "")
         {
             echo"No recrod Found";
        }
         else{
             
        echo "USERNAME : " . $userid . "<br><br>";
        $sql = "SELECT id, username, Name, email, mob, addr FROM user";
        $result = $conn->query($sql);

        $sql1 = "DELETE FROM user WHERE username='$userid'";
        $conn->query($sql1);
        
        if ($conn->errno) {
            echo "Error deleting record: " . $conn->error;
        } else {
            echo "Record deleted successfully";
        } 
             
    }


        

/*$sql = "SELECT id, Name FROM user";
$result = $conn->query($sql;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["Name"] . "<br>";
    }
} else {
    echo "0 results";
}*/



    

$conn->close();

?>
         
         
          
         
            
             

         </span><br> <br></div>
            
                    
           <input type="submit" value="View DataBase" onclick="contact_us.php">&nbsp;&nbsp;
         
      
    
     
    
        <a href="form.html">
        <input type="button" value="Register New">
         </a>
           </form>
       </div>
    </div>
  
    
    
    
<div class="footer">    
    <div>
    All rights reserved © 2016 PerfectJodi Matrimonial Services.
    <br/> Designed and developed by Pr@kash Thakur(1747246)
    </div>
    <div style="right:80">
        <a href ="https://www.facebook.com/"><img id="myImg" src="img/fb-art.png" height="40px" width="40px" onmouseenter="bigimg();" onmouseleave="realimg();"></a>&nbsp;&nbsp;&nbsp;
        
        <a href="https://www.instagram.com"><img id="insta" src="img/insta.png" height="40px" width="40px" onmouseenter="bigimg2();" onmouseleave="realimg2();" ></a>&nbsp;&nbsp;&nbsp;
        
        <a href="https://www.twitter.com"><img id="twit" src="img/twit.png" height="40px" width="40px" onmouseenter="bigimg3();" onmouseleave="realimg3();"></a>&nbsp;&nbsp;&nbsp;
        
        <a href="https://web.whatsapp.com"><img id="whatsapp" src="img/what.jpg" height="40px" width="40px" onmouseenter="bigimg4();" onmouseleave="realimg4();"></a>&nbsp;&nbsp;&nbsp;
        
        <a href="https://www.google.co.in"><img id="gplus" src="img/gggg.jpg" height="40px" width="40px" onmouseenter="bigimg5();" onmouseleave="realimg5();"></a>
        
    </div>
</div>
 
</body>
    
</html>




