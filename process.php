<?php
    
session_start();

$con = mysqli_connect('localhost','root', 'password');

mysqli_select_db($con, 'idiscover');

$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from users where username = '$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:loginsuccess.html');
}
else{
    header('location:loginfailed.html');
}
?>