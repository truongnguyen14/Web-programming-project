<?php
	// session_start();
	// if(file_exists(('install.php')) {
	// 	echo '<script>alert("You must delete install.php")</script>'
	// 	exit();
	// }

    require 'store_functions.php';
    $stores = read_all_stores();
    $categories = read_all_categories();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="uft-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<title>Shopping mall online</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<header>
		<nav>
			<a href="index.php" class="logo">
				<h1>LUXMall</h1>
			</a>
			<input type="checkbox" class="menu-but" id="menu-but">
			<label for="menu-icon">Menu</label>
			<ul class="navi">
				<li>
					<a href="index.php">Home page</a>
				</li>
				<li>
					<div class="browse-store">
                        <button class="dropbtn">Browse</button>
                        <div class="dropdown-content">
                        <a href="browse_store_by_name.html">Browse Stores by Name</a>
                        <a href="browse_store_by_category.html">Browse Stores by Category</a>
                        </div>
				</li>
				<li>
					<a href="aboutus.html">About us</a>
				</li>
				<li>
					<a href="fee.html">Fees</a>
				</li>
				<li>
					<a href="FAQ.html">FAQ</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="account.html">My account</a>
				</li>
			</ul>
		</nav>	
	</header>
	<main>
		<div class="ps-heading">
			<h2>Browse Stores by Category:</h2>
		<div class="mycart">
			<a href="mycart.html" class="cartword">My cart</a>
			<i class="fas fa-cart-plus"></i>
		</div>
        <form action="" method="GET">
            <div class="category-select" style="width:250px;">
                <select id="cat_id" name="cat_id">
                <option value="Option 0" disabled selected>  ---Choose a category:---</option>
                    <?php
                    foreach ($categories as $c) {
                    ?>
                    <option value="<?=$c['id']?>"><?=$c['name']?></option>
                    <?php
                    }
                    ?>
                </select>
            </div> 
            <input class="browse_btn" type="submit" name="submit" value="Browse Store"> 
        </form>
        <div class="ps-heading">
			<br />
			<br />
			<h2>Results:</h2>
		</div>
		<section id="feature-store">
			<div class="store">
                <?php
                if (isset($_GET['cat_id'])) {
                    $get_cat_id = $_GET['cat_id'];
                    foreach ($stores as $s) {
                        if ($get_cat_id == $s['category_id']) {
                            ?>
                            <div class='store-icon'>
                                <img src='images/logo1.jpg'/>
                                <a href='store_page.php?id=<?=$s['id']?>' class='store-name'><?=$s['name']?></a>
                                <a href='store_page.php?id=<?=$s['id']?>' class='enter-store'>Explore</a>
                            </div>
                            <?php
                        }
                    }
                }
                            ?>
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
				<a href="copyright.html">Copyright</a>
			</li>
			<li>
				<a href="ToS.html">Term of service</a>
			</li>
			<li>
				<a href="privacy.html">Privacy</a>
			</li>
			</ul>
		</nav>
	</footer>
</html>