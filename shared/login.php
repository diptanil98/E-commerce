<?php

session_start();
$_SESSION['login_status']=false;

$uname=$_POST['username'];
$pass=$_POST['pass'];
$cipher=md5($pass);



$conn=new mysqli("localhost","root","","pro1",3307);

$sql_result=mysqli_query($conn,"select * from user where username='$uname' and password='$cipher'");

$db_row=mysqli_fetch_assoc($sql_result);
 
if(mysqli_num_rows($sql_result)>0)
{
    echo "Login Success";
    $_SESSION['login_status']=true;
    $_SESSION['usertype']=$db_row['usertype'];
    $_SESSION['userid']=$db_row['userid'];
    $_SESSION['username']=$db_row['username'];
    
    if($db_row['usertype']=='vendor'){
        header("location:../vendor/home.php");
    }
    elseif($db_row['usertype']=='Customer'){
        header("location:../customer/view.php");
    }
}
else{
    echo "<h1>Invalid Credential<h1>";
    
}

?>