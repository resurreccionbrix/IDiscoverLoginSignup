<?php

session_start();


$con = mysqli_connect('localhost','root', 'password');

mysqli_select_db($con, 'idiscover');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from users where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location:accdidntregister.html');
}else{
	$reg = "Insert into users(firstname, lastname, username, password) values ('$firstname', '$lastname','$username', '$password')";
	mysqli_query($con, $reg);
	header('location:accregistered.html');
}
?>