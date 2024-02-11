<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utils.css">
    <style>
.con{
    height:100vh ;
    width: auto;
    display:flex;
    justify-content: space-around;

    align-items: center;

}
button{
    
    height: 8vh;
    width: 10vw;
    outline: none;
    border: none;
   
    background: rgb(146, 66, 66);
    color:white;
    text-align: center;
    font-weight: 600;
    border-radius: 6px;
    font-family: 'Roboto', sans-serif;



}
button:hover{
    cursor: pointer;
}
    </style>
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
                       
                    </form>

                </div>
                <div class="button">
                    <button class="btn-1">Login</button>
                </div>
            </div>
            <div class="right">
                <ul class=" flex a-item j-spaceA ">
                    <li><a href="index.php">HOME</a></li>
                   
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
    
<div class="con">
    <div class="add">
        <a href="add.php"><button>Add Product</button></a>
        
    </div>
    <div class="remove">
    <a href="remove.php"><button>Remove Product</button></a>

    </div>
    <div class="update">
    <a href=""><button>Update Product</button></a>

    </div>
</div>

<footer>
    <div class="cright flex j-center a-item ">
        ALL COPYRIGHT BELONGS TO &copyFURNITUREHUB
    </div>
</footer>
</body>
</html>