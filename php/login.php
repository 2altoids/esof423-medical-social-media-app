<?php
 
//Sample Database Connection Script 
//Setup connection variables, such as database username
//and password
$hostname="localhost";
$username="esofmsna_User";
$password="Lemming17";
$dbname="esofmsna_LoginDatabase";
$usertable="LoginTable";
//email and password (display name is set on register)
$Pass = $_POST['pass'];
$Email = $_POST['email'];
 
//Connect to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);
//mysql_select_db($dbname, $connection);
 if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



    echo "Pre query";
    //create query
    $sql = "SELECT pass FROM LoginTable WHERE email='$Email'";
    //get result
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
         while($row = $result->fetch_assoc())
         {
            $StoredPass = $row["pass"];
           
           if($StoredPass == $Pass)
            {   echo "Password match";
                //passwords are the same, push home page
                header('Location: ../html/clinician.html'); //exit
                 exit;
            }
             else
            { //passwords do not match echo faliure and kick to index
             echo "Password Mismatch";
             header('Location: ../index.html'); //exit back to index.html
              exit;
            } 
        
        
        
        } 
    }
    else //if no data echo failed login and re direct to index
    {
        echo "No password for that email account";
       header('Location: ../index.html'); //exit back to index.html
       exit;
    }
    
    

mysqli_close($connection);
 
?>

