<?php

include "authguard.php";

$userid=$_SESSION['userid'];
print_r($_POST);

echo "<br>";

$from_path=$_FILES['pdtimg']['tmp_name'];
$to_path="../shared/images/".$_FILES['pdtimg']['name'];

//echo "FROM Path=$from_path";
//echo "<br>TO Path=$to_path";

move_uploaded_file($from_path,$to_path);

$conn=new mysqli("localhost","root","","pro1",3307);
$status=mysqli_query($conn,"insert into product(name,price,detail,impath,owner) values('$_POST[name]',$_POST[price],'$_POST[detail]','$to_path',$userid)");

if($status){
    echo "Product Uploaded Successfully";
    header("location:view.php");
}
else{
    echo "Error in SQL";
    echo msqli_error($conn);
}
?>