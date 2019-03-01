<?php

//email and password (display name is set on register)
$Pass = $_POST['pass'];
$Email = $_POST['email'];
$DisplayName = $_POST['name'];
$cID = $_POST['cid']; //ignoring CID for now, setting flag to zero

function getCflag()
{
    return 0;
    //todo, link into api to search for clinican data
}


//method to connect to DB
function connectDB()
{
    //Connect to the database (using hard coded values as the database wont change")
    $conn = mysqli_connect("localhost", "esofmsna_User", "Lemming17", "esofmsna_LoginDatabase");
    //mysql_select_db($dbname, $connection);
    if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    
    } 
    return $conn;
}

//check if DB contains value
function register()
{
    
        //setup global vars;
    global $Pass, $Email, $DisplayName, $cID;
   
    $cFlag = getCflag();
    //get our database connection
    $conn = connectDB();
    //create query
    $sql = "SELECT pass FROM LoginTable WHERE email='$Email'";
    //get result
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        //we already had an entry 
        echo "Account Already exists with that email";
       header('Location: ../index.html'); //exit back to index.html
       return false;
       exit;
    }
    else //no entry, no accout with that email exists, insert new data
    {
    $sql2 = "INSERT INTO LoginTable (email, pass, displayname,cFlag) VALUES ('$Email', '$Pass', '$DisplayName', '$cFlag')";
    //get result
     if ($conn->query($sql2) === TRUE) {
        echo "Account Created, Please log in";
        header('Location: ../index.html'); //exit back to index.html
         return true;
     } 
     else 
     {
     echo "Error: " . $sql . "<br>" . $conn->error;
     return false;
     }
       
    }

    mysqli_close($conn);

}
 register();
?>