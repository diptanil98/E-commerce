<?php

include "authguard.php";
$conn=new mysqli("localhost","root","","pro1",3307);

$address=$_GET['address'];
$total=$_GET['total'];

$username=$_SESSION['username'];
$userid=$_SESSION['userid'];

$status=mysqli_query($conn,"insert into order_parent(username,userid,total_amount,address)values('$username','userid','$total','$address')");
if($status)
{
$orderid=$conn->insert_id;

$sql_result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid where userid=$_SESSION[userid]");
while($dbrow=mysqli_fetch_assoc($sql_result))
{
    mysqli_query($conn,"insert into orders(orderid,pid,amount) values($orderid,$dbrow[pid],$dbrow[price])");
}

}

?>


