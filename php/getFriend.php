<?php 

session_start();  

class getFriend
{
    
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
    

    function getFriends()
    {
       
        $friendArray = array();
        $email = $_SESSION['logEmail'];
        //go and get connected ect
         $conn = $this->connectDB();
        //echo "past connect";
       
        //query has issues when you add in the actual email, great
     //  $EMAIL = strval($email);
      
        
        $sql = "SELECT * FROM `$email`";
        $result = mysqli_query($conn, $sql);
        
        
        
        if(mysqli_num_rows($result) > 0) {
           //has friends
        
           while($row = $result->fetch_assoc())
             {
               
              $name = $row['friend_displayName'];
              $fEmail = $row['friend_email'];
              $friend = $name . " " . $fEmail;
              $friendArray[] =  $friend;
             
             
         }
           
        }
        else //no entry was found
        {
             
              
            $friendArray['noF'] = "No Friends Found";
        }
        
       $_SESSION['friendArray'] =  $friendArray;
        //return
        //header('Location: ../php/friends.php'); //exi
       //exit;
       //test echo
     
       
       //echo "array " + $friendArray;
      // return $friendArray;
       mysqli_close($conn); 
       
    }
    
    
    
    
    
}


?>