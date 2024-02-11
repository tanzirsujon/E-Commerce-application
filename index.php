<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurnitureHub</title>
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="utils.css">
 
</head>

<body>
    <header>
        <nav class="flex a-item">
            <div class="left flex j-center a-item">
                <div class="logo">
                    <img src="images/1552095835.png" alt=" logo">
                    <div class="Explore relative">
                        <a href="" class="text-D">Explore <span>Plus</span> <img src="images/plus_aef861.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="form relative">
                    <form action="web.php" method="post">
                        <input type="text" placeholder="Search for products,brands and more" class="inp-1">
                        <div class="search">
                            <button type="submit"><img src="images/icons8-search-50.png" alt="logo"></button>
                        </div>
                    </form>

                </div>
                <div class="button">
                    <a href="change.php">

                <button class="btn-1">Login</button>
                </a>
                </div>
            </div>
            <div class="right">
                <ul class=" flex a-item j-spaceA ">
                    <li><a href="">HOME</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li class=" relative"> <a href="">
                            <svg id="svg-1" class="V3C5bO" width="19" height="16" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="_1bS9ic"
                                    d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86"
                                    fill="#fff"></path>
                            </svg>
                            <span>Cart</span>
                        </a></li>

                </ul>
            </div>
        </nav>
    </header>

    <?php
 require 'data.php';
 $sql = "SELECT * FROM product";
 $result = mysqli_query($conn,$sql);

 ?>
   

<div class="container1">
<div class="cards flex j-center a-item f-wrap">
<?php while($row=mysqli_fetch_array($result)){
            ?>
<div class="card">
  <img src="<?= $row['product_image'];?>" class="c-img">
  <div class=" c-info">
    <h5 class="p-1"> Product : <?=$row['product_name']; ?> </h5>
    <p class="p-2">Price: <?=number_format($row['product_price']);?> tk</p>
    <a href=" order.php?id=<?= $row['id'];?>"  class="a-1 "><Button class="bb-1">Buy Now</Button></a>
  </div>
</div>
<?php } ?>
</div>
</div>


<script src="script.js"></script>
  
<footer>
    <div class="cright flex j-center a-item ">
        ALL COPYRIGHT BELONGS TO &copyFURNITUREHUB
    </div>
</footer>

</body>

</html>