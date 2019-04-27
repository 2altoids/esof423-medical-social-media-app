<?php


class register {

function getCflag()
{
    return 0;
    //todo, link into api to search for clinican data
}


//method to connect to DB
function connectDB($ip, $userName, $userPass, $dbTable)
{
    //Connect to the database (using hard coded values as the database wont change")
    echo "connecting to DB";
    $conn = mysqli_connect($ip,$userName,$userPass,$dbTable);
    //mysql_select_db($dbname, $connection);
    if ($conn->connect_error) {
    echo "conn error";
    die("Connection failed: " . $conn->connect_error);
    
    } 
    return $conn;
}

//check if DB contains value
function RegisterUsr($Pass, $Email, $DisplayName, $cID)
{
    
   
    $cFlag = $this->getCflag();
    //get our database connection
    echo "setup connection";
    $conn = $this->connectDB("localhost","esofmsna_User","Lemming17","esofmsna_LoginDatabase");
    //create query
    $sql = "SELECT pass FROM LoginTable WHERE email='$Email'";
    //get result
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        //we already had an entry 
        echo "Account Already exists with that email";
       //header('Location: ../index.html'); //exit back to index.html
       return false;
       //exit;
    }
    else //no entry, no accout with that email exists, insert new data
    {
    $sql2 = "INSERT INTO LoginTable (email, pass, displayname,cFlag) VALUES ('$Email', '$Pass', '$DisplayName', '$cFlag')";
    //get result
     if ($conn->query($sql2) === TRUE) {
        echo "Account Created, Please log in";
        //header('Location: ../index.html'); //exit back to index.html
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

function addFriendTable($Pass, $Email, $DisplayName, $cID)
{
    $conn = $this->connectDB("localhost","esofmsna_User","Lemming17","esofmsna_FriendsDataBase");
    
    
    //add a new table based off the users email containg email and username of "friended" accounts
    $sql = "CREATE TABLE IF NOT EXISTS `$Email` (
    friend_email varchar (50) NOT NULL,
    friend_displayName varchar(50) NOT NULL
    )";
    
    if (mysqli_query($conn, $sql)) {
    echo "Table Friends created successfully";
    } else {
    echo "Error creating table: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
}

function returnLogin()//return to login page
{
    header('Location: ../index.html'); //exit back to index.html
}
 
 
}
 
 
 
//email and password (display name is set on register)
$Pass = $_POST['pass'];
$Email = $_POST['email'];
$DisplayName = $_POST['name'];
$cID = $_POST['cid']; //ignoring CID for now, setting flag to zero
 
 echo "Starting registation process";
$RegClass = new register();
$RegClass-> RegisterUsr($Pass, $Email, $DisplayName, $cID);
echo "registration done";
$RegClass-> addFriendTable($Pass, $Email, $DisplayName, $cID);
echo "table added";
$RegClass->returnLogin();
 
 
?>