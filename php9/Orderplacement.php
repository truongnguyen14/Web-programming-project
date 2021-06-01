<?php
    session_start();
		
    if (file_exists('install.php')) {
        echo '<script>alert("you must delete install.php")</script>';
        exit();		
    }

    if (!isset($_SESSION['username'])) {
        header('location: login.php');
    }
?>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
        <title>Order Placement</title>
        <link rel="stylesheet" href="cartpage.css">
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <div class="forgot">
            CHECK OUT
            <li class="cart">
                <a href="ordertest.html">
                    Cart<text>      </text><span>0</span>
                </a>
            </li>
        </div>
        <div class="coupons">
            <input id="discount" type="text" placeholder="Enter discount code">
            <button id="checkcoupon" onclick="checkdiscount()">Enter Coupon</button>
        </div>
        <div class="products-container">
            <div class="product-header">
                <h5 class="product-title">PRODUCT</h5>
                <h5 class="price">PRICE</h5>
                <h5 class="quantity">QUANTITY</h5>
                <h5 class="total">TOTAL</h5>
            </div>
            <div class="products">
                
            </div>
            
        </div>
        <form method="POST">
            <a href="ThankYou.html" name="button1" class="addcart" id="thankyou">ORDER</a>
        </form>
        <script src="addtocheckout.js"></script>  
    </body>
</html>