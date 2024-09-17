<?php

include "authguard.php";
include "menu.html";
$conn=new mysqli("localhost","root","","pro1",3307);
$pid=$_GET['pid'];
$name=$_GET['name'];
$price=$_GET['price'];
$detail=$_GET['detail'];
$status=mysqli_query($conn,"UPDATE product set price='$price', detail='$detail' where pid='$pid'");

if($status){
    echo "Updated product successfully";
    header("location:view.php");
}
else{
    echo "Error in update";
    echo mysqli_error($conn);
}
mysqli_close($conn);

?>