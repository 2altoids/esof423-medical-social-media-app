<!DOCTYPE html>
<?php  session_start(); ?>

<html>

<head>
	<meta charset="UTF-8">
	<title>Account</title>
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
  <h1>Account</h1>
</div>

<div class="navbar">
	<a href="../php/user.php">Home</a>
	<a href="#">Account</a>
	<a href="../php/friends.php">Friends</a>
	<a href="../php/posts.php">Messages</a>
	<input type="text" placeholder="Search..">
</div>

    
 
  <div class="main">
    <h2>Edit User Profile</h2>
    <div class="container">
        <h3>Edit Account Information</h3>
		<form action="/action_page.php">
			<label for="fname">First Name</label>
			<input type="text" id="fname" name="firstname" placeholder="First Name">
			
			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lastname" placeholder="Last Name">
			
			<label for="pnum">Phone Number</label>
			<input type="text" id="pnum" name="phonenumber" placeholder="Phone Number">
			
			<label for="email">Email</label>
			<input type="text" id="email" name="email" placeholder="Email">
			
			<label for="address">Address</label>
			<input type="text" id="address" name="address" placeholder="Address">
			
			<label for="medHist">Medical History</label>
			<textarea id="medHist" name="medHist" placeholder="Any medical history..." style="height:200px"></textarea>
			
			<label for="addInfo">Additional Information</label>
			<textarea id="addInfo" name="addInfo" placeholder="Any additional information..." style="height:200px"></textarea>
       
			<input type="submit" value="Apply">
		</form>
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