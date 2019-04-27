<!DOCTYPE html>

<?php  

require 'getFriend.php';
session_start();  


$friendClass = new getFriend();
$friendClass->getFriends();

$fArray = $_SESSION['friendArray'];
?>


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
	<a href="../php/posts.php">Messages</a>
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
    <form action="../php/addFriend.php" method = "POST" id="form1">
      
          <label for="Friend Email"><b>Email</b></label>
    <input type="text" placeholder="Enter Friends Email" name="fMail" required>

       <label for="Friend Name"><b>Name</b></label>
      <input type="test" placeholder="Enter Friends Name" name="fName" required>
      
      
      
  </form>
    <button type="submit" form="form1">Add Friend</button>
   
    
    
    <h2>Friends</h2>
    <h5>List of Friends</h5>
    <?php  
    $fArray = $_SESSION['friendArray'];
    
    
    if($fArray['noF'] != "No Friends Found")
    {
          foreach($fArray as $item)
         {
            echo $item;
            echo "<br>";
         }
    
    }
    else
    {
        echo $fArray['noF']; 
    }
  
    
    ?>
    
    
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

