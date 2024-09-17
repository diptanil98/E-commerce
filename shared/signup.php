<?php

$uname=$_POST['username'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$usertype=$_POST['usertype'];

if($pass1!=$pass2){
    echo "Password Mismatch";
    die;
}

$cipher=md5($pass1);
 echo $cipher;

$conn=new mysqli("localhost","root","","pro1",3307);
 try{
    mysqli_query($conn,"insert into user(username,password,usertype) values('$uname','$cipher','$usertype')");
    echo "Registration Success!!";
 }
 catch(Exception $ex){
    echo $ex;
 }
?>