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

</body>
</html>



<?php

include "authguard.php";
include "menu.html";

$conn=new mysqli("localhost","root","","pro1",3307);

$sql_result=mysqli_query($conn,"select * from product where owner=$_SESSION[userid]");

while($dbrow=mysqli_fetch_assoc($sql_result)){

    echo "<div class='parent'>

<div>
$dbrow[name]</div>
<div>$dbrow[price]</div>
<img src='$dbrow[impath]'>
<div>$dbrow[detail]</div>
    
    <div class='action'>
    <a href='edit_products.php?pid=$dbrow[pid] & name=$dbrow[name] & price=$dbrow[price] & detail=$dbrow[detail]'><button>Edit</button></a>
    <a href='deletepdt.php?pid=$dbrow[pid]'><button>Delete</button></a>
    </div>
    
    </div>";
    
    

    

}


?>