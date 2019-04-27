<?php

session_start();  



$friendName = $_POST['fName'];
$friendMail = $_POST['fMail'];
$currentEmail = $_SESSION['logEmail'];


//class addFriends {
    
function addFriend($email, $friend_email, $friend_displayName){
        
             $conn = connectDB();
            
        //create query
       
       // Select 1 from table_name will return false if the table does not exis
       
       
        $sql = "SELECT friend_email FROM '$email' WHERE friend_email = '$friend_email'";
        $result = mysqli_query($conn, $sql);
        
    
        if(mysqli_num_rows($result)>0) {
            echo 'You already have this user added as a friend';
            //already had a friend
        }
        else //no entry was found
        {
        
        
        $sql2 = "INSERT INTO `$email` (friend_email, friend_displayName) VALUES ('$friend_email', '$friend_displayName')";
        if ($conn->query($sql2) === TRUE) {
            echo "Friend added";
            header('Location: ../php/friends.php'); //exit
            return true;
            exit;
        }
        else
        {
            echo "Error: " . $sql . '<br>' . $conn->error;
            return false;
            header('Location: ../php/friends.php'); //exit
        }
        
       
        }
        
        mysqli_close($conn); 
    }
        
    
    
    
    function connectDB()
    {
    //Connect to the database (using hard coded values as the database wont change")
       
    $conn = mysqli_connect("localhost", "esofmsna_User", "Lemming17", "esofmsna_FriendsDataBase");
    //mysql_select_db($dbname, $connection);
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
    } 
    return $conn;
    }
    
    
    
   
//}



addFriend($currentEmail, $friendMail, $friendName);

//$friendAdder = new addFriends();
//$friendAdder->addFriend($currentEmail, $friendEmail, $friendName);




?>