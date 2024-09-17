<?php

include "authguard.php";
$conn=new mysqli("localhost","root","","pro1",3307);

$pid=$_GET['pid'];

echo "To be deleted PID=$pid";

$status=mysqli_query($conn,"delete from product where pid=$pid");
header("location:view.php");

if($status){
    echo "Removed product successfully";
}
else{
    echo "Error in deletion";
    echo mysqli_error($conn);
}


?>