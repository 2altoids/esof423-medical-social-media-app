<?php
//this is a script used to run the function in the loginLogic Class
require 'loginLogic.php';
//start a session
session_start();

$Pass = $_POST['pass'];
$Email = $_POST['email'];
//$Name = $_POST['name'];
//call loginLogic




$LoginClass = new loginLogic();
$LoginClass->LoginDB($Pass,$Email);

?>