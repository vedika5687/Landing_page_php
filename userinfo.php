<?php

$con = mysqli_connect("localhost","root","root");
mysqli_select_db($con, 'ved');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "INSERT INTO userinfodata (user, email, mobile, comments) VALUES ('$user','$email','$mobile','$comments')"; 


mysqli_query($con, $query);
?>