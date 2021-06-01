<!DOCTYPE html>
<?php session_start();		/*prevent execute if install.php still exists*/
		 if (file_exists('install.php')) {
			 echo '<script>alert("you must delete install.php")</script>';
			exit();		
  }
?>
<html lang="en">
	<head>
		<meta charset="uft-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<title>Welcome to Luxury mall online</title>
		<link rel="stylesheet" type="text/css" href="css/stylemain.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<nav>
				<div class="mainlogo">
					<a href="index.php" class="logo">
						<h1>LUXMall</h1>
					</a>
				</div>
				<input type="checkbox" id="menu-btn">
				<label for="menu-btn" class="menu-icon">
					<i class="fa fa-bars"></i>
				</label>
				<ul class="navi">
					<li>
						<a href="index.php">Home page</a>
					</li>
					<li>
						<div class="browse-store">
                            <button class="dropbtn">Browse</button>
                            <div class="dropdown-content">
                            <a href="browse_store_by_name.php">Browse Stores by Name</a>
							<br><br>
                            <a href="browse_store_by_category.php">Browse Stores by Category</a>
                        </div>
					</li>
					<li>
						<a href="aboutus.php">About us</a>
					</li>
					<li>
						<a href="fee.php">Fees</a>
					</li>
					<li>
						<a href="FAQ.php">FAQ</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
					<li>
						<a href="login_form.php">My account</a>
					</li>
				</ul>
			</nav>	
		</header>
		<main>
			<section id="mycart1">
			<div class="mycart">
				<a href="#" class="cartword">My cart</a>
				<i class="fa fa-cart-plus"></i>
			</div>
			</section>
			<section id="new-store">
				<div class="ps-heading">
					<h2><font>New</font> Store</h2>
				</div>
				<div class="store">
					<?php 
					include 'product.php';
					$stores = read_store();
					$count = 0;
					usort($stores, 'date_comparison');
					foreach ($stores as $s){
						$store_id = $s['id'];
						$store_name = $s['name'];
						$count++;
						  if ($count > 10) {
							break;
						  }
					?>
					<div class="store-icon">
						<img src="images/logo1.jpg"/>
						<a href="StorHome.php" class="store-name"><?php echo $store_name?></a>
						<a href="StorHome.php" class="enter-store">Explore</a>
					</div>
					<?php
					}
					?>
				</div>
				<div class="see-more">
				<a href="#" class="seebutt">See more</a>
				</div>			
			</section>
			<section id="new-product">
				<div class="ps-heading">
					<h2><font>New</font> product</h2>
				</div>
				<div class="product">
					<img id="scroll-left" class="arrow" src="images/arrow-left.png">
					<div class="product-boxes" id="scroller">
						<?php
						$products = read_product();
						$stores = read_store();
						$count = 0;
						$new_product=[];
						foreach($products as $t){
							$featuremall= $t['featured_in_mall'];
							if ($featuremall == 'TRUE'){
								$new_product[] = $t;
							}
							usort($new_product, 'date_comparison');		
						}
						foreach ($new_product as $p) {
						  $id = $p['id'];
						  $name = $p['name'];
						  $price = $p['price'];
						  $store = $p['store_id'];
						  $count++;
						  if ($count > 10) {
							break;
						  }
							foreach ($stores as $s){
							$store_id = $s['id'];
							$store_name = $s['name'];
							$feature = $s['featured'];
									if ($store == $store_id){										  
						?>	
						<div class="product-box">
							<img src="images/iphone12.jpg"/>
							<a href="productdetail.php" class="pro-name"><?php echo $name?></a>
							<p><?php echo $price?>$</p>
							<a href="StorHome.php" class="pro-store"><?php echo $store_name?></a>
							<a href="OrderPlacement.php" class="addcart">Add to cart</a>
						</div>
						<?php
												  }	
						  }
						}
					?>
					</div>
					<img id="scroll-right" class="arrow" src="images/arrow-right.png">
				</div>
					<div class="see-more">
					<a href="#" class="seebutt">See more</a>
					</div>
		  </section>		
		  <section id="feature-product">
            <div class="ps-heading">
                <h2>Feature product</h2>
            </div>
            <div class="product">
                <img id="scroll-left2" class="arrow" src="images/arrow-left.png">
                <div class="product-boxes" id="scroller2">
					<?php
						$products = read_product();
						$stores = read_store();
						$count = 0;
						$new_product=[];
						foreach($products as $t){
							$featuremall= $t['featured_in_mall'];
							if ($featuremall == 'TRUE'){
								$new_product[] = $t;
							}
						}
						foreach ($new_product as $p) {
						  $id = $p['id'];
						  $name = $p['name'];
						  $price = $p['price'];
						  $store = $p['store_id'];
						  $count++;
						  if ($count > 10) {
							break;
						  }
							foreach ($stores as $s){
							$store_id = $s['id'];
							$store_name = $s['name'];
							$feature = $s['featured'];
									if ($store == $store_id){										  
						?>	
                    <div class="product-box2" >
                        <img src="images/ipad.jpg"/>
                        <a href="productdetail.php" class="pro-name"><?php echo $name?></a>
                        <p><?php echo $price?>$</p>
                        <a href="StorHome.php" class="pro-store"><?php echo $store_name?></a>
                        <a href="OrderPlacement.php" class="addcart">Add to cart</a>
                    </div>
					<?php
												  }	
						  }
						}
					?>
                </div>
                <img id="scroll-right2" class="arrow" src="images/arrow-right.png">
            </div>
            <div class="see-more">
                <a href="#" class="seebutt">See more</a>
            </div>	
        </section>
			<section id="feature-store">
				<div class="ps-heading">
					<h2>Feature store</h2>
				</div>
				<div class="store">
					<?php 
					$stores = read_store();
					$count = 0;
					foreach ($stores as $s){
						$store_id = $s['id'];
						$store_name = $s['name'];
						$count++;
						  if ($count > 10) {
							break;
						  }
					?>
					<div class="store-icon">
						<img src="images/logo3.png"/>
						<a href="StorHome.php" class="store-name"><?php echo $store_name?></a>
						<a href="StorHome.php" class="enter-store">Explore</a>
					</div>
					<?php
						}
					?>
				</div>	
				<div class="see-more">
					<a href="#" class="seebutt">See more</a>
				</div>
			</section>
		</main>
		<footer class="footer">
			<nav class="nav-footer">
				<ul class="list-footer">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="copyright.php">Copyright</a>
				</li>
				<li>
					<a href="ToS.php">Term of service</a>
				</li>
				<li>
					<a href="privacy.php">Privacy</a>
				</li>
				</ul>
			</nav>
		</footer>
		<div class="cookie">
			This website is using cookies. You have to accept it<a href="https://gdpr-info.eu/">Learn more</a>. <a class="cookiebtn">I understand</a>
			</div>
		<script src="java/cookies.js"></script>
	<script src="java/script.js"></script>
	</body>
	
</html>