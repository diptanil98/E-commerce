<?php

include "authguard.php";
$conn=new mysqli("localhost","root","","pro1",3307);

$cartid=$_GET['cartid'];

$status=mysqli_query($conn,"delete from cart where cartid=$cartid");
if($status){
    echo "Item removed from the cart";
    header('location:viewcart.php');
}
else{
    echo "Error in deletion";
    echo mysqli_error($conn);
}


?>