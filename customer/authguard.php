
<?php


session_start();

if(!isset($_SESSION['login_status']) || !isset($_SESSION['usertype'])){
    echo "Login skipped:Please login first";
    die;
}
if($_SESSION['login_status']==false){
    echo "Forbidden Access";
    die;
}

if ($_SESSION['usertype']!='Customer'){
echo "Unauthorised Access";
die;
}

echo "<div style='display:flex;justify-content:space-around;background-color:bisque;padding:4px'>
<div>$_SESSION[usertype]</div>
<div>$_SESSION[userid]:$_SESSION[username]</div>
<div>
<a href='../shared/logout.php'>Logout</a></div>
</div>";


?>