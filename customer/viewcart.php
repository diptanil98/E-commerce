<html>
    <head>
        <style>
.parent{
    background-color:bisque;
    width:200px;
    margin:10px;
    display:inline-block;
    padding:20px;
}
img{
    width:100%;
    height:200px;
}
            </style>
            </head>
            <body>
         <script>
function popup(cartid){
    res=confirm('Are you sure you want to delete?');
    if(res){
        location.href='deletecart.php?cartid=${cartid}';
    }
}


            </script>
</body>
</html>



<?php

include "authguard.php";
include "menu.html";

$conn=new mysqli("localhost","root","","pro1",3307);

$sql_result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid where userid=$_SESSION[userid]");
$total=0;
while($dbrow=mysqli_fetch_assoc($sql_result))
{
    $total+=$dbrow['price'];
    echo "<div class='parent'>

<div>
 $dbrow[name]</div>
 <div>$dbrow[price]</div>
 <img src='$dbrow[impath]'>
 <div>$dbrow[detail]</div>
    
    <div class='action'>
    <a href='deletecart.php?cartid=$dbrow[cartid]'><button>Remove from the Cart</button></a>
    </div>
    
    </div>";
    
}

echo "<form method='get' class='w-50' action='placeorder.php'>
<textarea class='form-control' row='5' required name='address' placeholder='Enter Address'></textarea>
<div class='display-4'>
Total Amount = $total
<input name='total' hidden value='$total'> 
<a> <button class='btn btn-danger'>Place Order</button></a>
</div> 
</form>
"


?>