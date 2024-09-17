
<?php

 include "authguard.php";
 include "menu.html";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>

    <div class="d-flex align-items-center justify-content-center vh-100">
<form action="upload.php" method="post" class="w-50 bg-secondary p-4" enctype="multipart/form-data">
<input class="form-control mt-3" name="name" type="text" placeholder="Product Name">
<input class="form-control mt-2" name="price" type="text" placeholder="Product Price">
<textarea class="form-control mt-2" name="detail" cols="30" rows="5" placeholder="Product Description"></textarea>
<input class="form-control mt-2" name="pdtimg" type="file" placeholder="Product Name">
<div class="text-center mt-2">
    <button class="btn btn-success">Upload</button>
</div>
</form>
</div>

</body>
</html>







