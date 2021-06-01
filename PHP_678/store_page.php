<?php
    // session_start();
    // if(file_exists(('install.php')) {
    //     echo '<script>alert("You must delete install.php")</script>'
    //     exit();
    // }

    // require 'store_functions.php';
    // $stores = read_all_stores();

    require 'product_functions.php';
    require 'store_functions.php';
    $id = $_GET['id'];
    $products= read_all_products();
    $stores = read_all_stores();
    usort($products,'date_sorting');
    $count = 0;
?>

<DOCTYPE html>
    <html lang="en">
        <head>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <title>Store Home</title>
            <link rel="stylesheet" href="css/style1.css">
        </head>
        <body class="storehome">    
            <header class="header">
                <nav>
					<div class="mainlogo">
						<a href="index.php" class="logo">
							<h1>LUXMall</h1>
						</a>
						<a href="store_page.php?id=<?=$id?>" class="logo">
                                <?php
                                foreach ($stores as $store) {
                                    if ($id == $store['id']) {
                                ?>
                                    <h1> <?=$store['name']?></h1>
                                <?php
                                    }
                                }
                                ?>
						</a>
					</div>
					<input type="checkbox" id="menu-btn">
					<label for="menu-btn" class="menu-icon">
						<i class="fa fa-bars"></i>
					</label>
                    <ul class="navi">
                        <li><a href="store_page.php">Home</a></li>
						<li>
							<div class="browse-store">
								<button class="dropbtn">Browse Product</button>
								<div class="dropdown-content">
								<a href="browse_product_by_category.html">Browse Product by Category</a>
								<br><br>
								<a href="browse_product_by_created_time.php?id=<?=$id?>">Browse Product by Created Time</a>
							    </div>
						</li>
                        <li><a href="aboutus.html">About us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <main class="main">
                <section id="left">
                    New Products
                    <?php
                    foreach ($products as $p) {
                        if ($p['store_id'] == $id) { 
                        ?>
                         <div class="product-box">
                        <img src="images/Iphone12.jpg"/>
                        <a href="productdetail.html" class="pro-name"><?=$p['name']?></a>
                        <p><?=$p['price']?>$</p>
                        </div>
                        <?php
                        $count++;
                        if ($count ==5){
                            break;
                        }
                    }
                }
                ?>
                </section>
                <section id="right">
                    Feature Products
                    <?php
                    foreach ($products as $p) {
                        if ($p['featured_in_store'] == 'TRUE' && $p['store_id'] == $id ) {
                            ?>
                            <div class="product-box">
                            <img src="images/imac.jpg"/>
                            <a href="productdetail-imac.html" class="pro-name"><?=$p['name']?></a>
                            <p><?=$p['price']?>$</p>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    </div>
                </section>
            </main>          
            <footer class="footer">
				<nav class="nav-footer">
					<ul class="list-footer">
                        <li><a href="copyright.html">Copyright</a></li>
                        <li><a href="ToS.html">Term of service</a></li>
                        <li><a href="privacy.html">Privacy</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </footer>
        </body>
    </html>