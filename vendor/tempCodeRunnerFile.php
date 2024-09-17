<?php
if($status){
    echo "Updated product successfully";
    header("location:view.php");
}
else{
    echo "Error in update";
    echo mysqli_error($conn);
}