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
                           Creation Of Table                               
------------------------------------------------------------------------------------------------------------*/
       /* $creation = 'CREATE TABLE IF NOT EXISTS `members` (
			`fname` VARCHAR(40),
			`lname` VARCHAR(40),
			`age` INT(3),
			`doj` DATE,
			PRIMARY KEY(`fname`, `lname`));';
	//Execute sql command
	       mysql_query($creation);

	//Check the error
	   if (mysql_errno()) {
		echo "Error while creating table : " . mysql_error() . "<br>";
	   } else {
		echo "Successfully created table<br>";
	   }
          */   

/*----------------------------------------------------------------------------------------------------------
                            Making variables to get Data From The form                               
------------------------------------------------------------------------------------------------------------*/

$name = mysqli_real_escape_string($conn, $_POST['Name']);
$mail = mysqli_real_escape_string($conn, $_POST['number']);
$phone = mysqli_real_escape_string($conn, $_POST['Email']);
$address = mysqli_real_escape_string($conn, $_POST['addr']);
             
/*----------------------------------------------------------------------------------------------------------
                            Insertion into the table through Php                              
------------------------------------------------------------------------------------------------------------*/


$sql = "INSERT INTO matrimony (name, number, email, address) VALUES ('$name', '$mail', '$phone', '$address')";

if($conn->query($sql) === TRUE){
    
    echo"Record added sucessfully";
    
}
else
{
    echo"Error" . $sql . "<br/>" . $conn->error;
    
}


                /*$sql = "SELECT id, Name FROM user";
                $result = $conn->query($sql);

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