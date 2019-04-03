<?php
//this is a script used to run the function in the loginLogic Class
require 'loginLogic.php';

$Pass = $_POST['pass'];
$Email = $_POST['email'];
//call loginLogic
echo "Pre loginLogic call";

#$LoginClass = new loginLogic();
#$LoginClass->LoginDB($Pass,$Email);

$LoginCall = new loginLogic();
$LoginCall->LoginDB($Pass,$Email);
?>