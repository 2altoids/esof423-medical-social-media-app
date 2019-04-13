<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Friends</title>
	<link rel="stylesheet" href="../css/user.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
* {
  box-sizing: border-box;
}
	</style>
</head>

<body>

<div class="header">
  <h1>Friends</h1>
</div>

<div class="navbar">
	<a href="../php/user.php">Home</a>
	<a href="../php/account.php">Account</a>
	<a href="#">Friends</a>
	<input type="text" placeholder="Search..">
</div>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>User Information</p>
    
  </div>
  <div class="main">
    <button type="button" onclick="Add Friend">Add Friend</button>
    <h2>Friends</h2>
    <h5>List of Friends</h5>
   <br>
    
  </div>
</div>


<div class="footer">
	Andrew Smith | Kyle Busch | James Tomasko | Kala Lightner<br>
	ESOF 423 SocialMediaApp
	<a href="https://github.com/2altoids/esof423-medical-social-media-app">Click for User Doumentation</a>
</div>
	
</body>
</html>


<?php //add user to friends here

Class friends{
    
    function addFriend($email, $friend_email, $friend_displayName) //add a friend to an account with the given name
    {
         $conn = connectDB("localhost","esofmsna_User","Lemming17","esofmsna_FriendsDatabase");
    //create query
    $sql = "SELECT friend_email FROM $Email";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0) {
        echo 'You already have this user added as a friend';
        //already had a friend
    }
    else //no entry was found
    {
    
    $sql2 = "INSERT INTO $Email ($friend_email, $friend_displayName) VALUES ('$Fmail', '$Fname')";
    //get result
     if ($conn->query($sql2) === TRUE) {
        echo "Friend added";
         return true;
     }
     else
     {
     echo "Error: " . $sql . '<br>' . $conn->error;
     return false;
     }
        
    
    
    
    function connectDB()
    {
    //Connect to the database (using hard coded values as the database wont change")
    $conn = mysqli_connect("localhost", "esofmsna_User", "Lemming17", "esofmsna_LoginDatabase");
    //mysql_select_db($dbname, $connection);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
    } 
    return $conn;
    }
    
}



?>
