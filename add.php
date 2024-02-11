


<?php
require 'data.php';
$msg = "";
if(isset($_POST['submit'])){
    $p_name=$_POST['pName'];
    $p_price=$_POST['pPrice'];
    $target_dir = "newimage/";
    $target_file = $target_dir.basename($_FILES['pImage']["name"]);
    move_uploaded_file($_FILES['pImage']["tmp_name"], $target_file);
    $sql = "INSERT INTO product(product_name,product_price,product_image)VALUES('$p_name','$p_price','$target_file')";
    if(mysqli_query($conn,$sql)){
$msg = "product added to the database";
    }
    else{
        $msg= "Failed";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   
</head>
<body>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 bg-light mt-5 rounded">
                    <h2 class="text-center p-2">Add product Information</h2>
                    <form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
                        <div class="form-group">
                            <input type="text" name="pName" class="form-control" placeholder="Product name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="pPrice" class="form-control" placeholder="Product price" required>
                        </div>
                       <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="pImage" class="custom-file-input" id="customFile" required>
                            <label for="customFile " class="custom-file-label">Choose product Image</label>
                        </div>
                       </div>
                       <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-danger btn-block" value="Add">
                       </div>
                       <div class="form-group">
                        <h5 class="text-center"> <?=$msg;?> </h5>
                       </div>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mt-3 bg-light rounded p-4">
                    <a href="index.php" class= "btn btn-warning btn-block btn-lg">Go to product page</a>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>