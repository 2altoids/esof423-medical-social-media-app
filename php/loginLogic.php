<?php
class loginLogic {



//method to connect to DB
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

//function to connect to vb and verify entered credentials
function LoginDB ($Pass, $Email)
{
    echo "login Logic";
    //setup global vars;
    //global $Pass, $Email;
    
    //get our database connection
    $conn = $this->connectDB();

     echo "Pre query";
    //create query
    $sql = "SELECT pass FROM LoginTable WHERE email='$Email'";
    //get result
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
         while($row = $result->fetch_assoc())
         {
            $StoredPass = $row["pass"];
           
           if($StoredPass == $Pass)
            {   echo "Password match";
                //passwords are the same, push home page
                
                //set session vars b4 leaving
                //query the name
                
                $Name = $this->getName($Email);
                
                $_SESSION['logName'] = $Name;
                $_SESSION['logEmail'] = $Email;
                
                header('Location: ../php/user.php'); //exit
                 return true;
                 exit;
            }
             else
            { //passwords do not match echo faliure and kick to index
             echo "Password Mismatch";
             header('Location: ../index.html'); //exit back to index.html
             return false;
              exit;
            }
        } 
    }
    else //if no data echo failed login and re direct to index
    {
        echo "No password for that email account";
      header('Location: ../index.html'); //exit back to index.html
       return false;
       exit;
    }
    
    mysqli_close($conn);
}

    
function getName($Email)
{
    
    $conn = $this->connectDB();
    
    $name = "";
    $sql = "SELECT displayName FROM LoginTable WHERE email='$Email'";
    //get result
    $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
      while($row = $result->fetch_assoc())
         {
            $name = $row["displayName"];
         }
     }
    
    return $name;
    
}
    
    
    
}
//email and password (display name is set on register)
//$Pass = $_POST['pass'];
//$Email = $_POST['email'];
//call login
//echo "Pre login call";
//$LoginClass = new login();
//$LoginClass->LoginDB($Pass,$Email);

?>
