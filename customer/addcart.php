<?php


include "authguard.php";
$conn=new mysqli("localhost","root","","pro1",3307);
$userid=$_SESSION['userid'];


$pid=$_GET['pid'];

$status=mysqli_query($conn,"insert into cart(userid,pid) values($userid,$pid)");

if($status){
    echo "Product added successfully";
}
else{
    mysqli_error($conn);
}



?>