<?php
	// session_start();
	// if(file_exists(('install.php')) {
	// 	echo '<script>alert("You must delete install.php")</script>'
	// 	exit();
	// }

    require 'product_functions.php';
    $products = read_all_products();

    // Sort the array 
    usort($products,'date_sorting');

    //Reverse the array
    $reversed_product = uasort($products,function ($a, $b) {
    if ($a['created_time'] == $b['created_time']) {
        return 0;
    }
    return ($a['created_time'] > $b['created_time']) ? -1 : 1;
});

    $id = $_GET['id'];
    $count = 0;
    $limit = 0;

    //Define pagination elements
    $number_of_results = count($products);
    $results_per_page = 2;
    if(isset($_GET["page"]))
	{
		$page=$_GET["page"];
	}
	else
	{
		$page=1;
	}

	$start_from=($page-1)*02;

?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
            <title>Browse Products</title>
            <link rel="stylesheet" href="css/style1.css">
        </head>
        <body class="storehome">    
            <header class="header">
                <nav>
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
                <div class="ps-heading">
                    <br><br><br>
                    <h4>Browse Products by Created Time:</h4>
                </div>  
                <br>
                <form action="" method="POST">
                    <div class="category-select" style="width:250px;">
                        <select id='option' name='option'>
                            <option value="Option 0" disabled selected> -- Choose a categories: -- </option>
                            <option value="from_newest">Newest First</option>
                            <option value="from_oldest">Oldest First</option>
                        </select>  
                    </div>
                    <input class="browse_btn" type="submit" name="submit" value="Browse Product"> 
                </form>
                <div class="ps-heading">
                    <h3>Results:</h3>
                <section id="feature-store">
                    <div class="store">
                        <?php
                            if (isset($_POST['option'])) {
                                $get_option = $_POST['option'];
                                if ($get_option = 'from_newest') {
                                    foreach ($products as $p) {
                                        if ($p['store_id'] == $id) { 
                                        ?>
                                        <div class="product-box">
                                        <img src="images/Iphone12.jpg"/>
                                        <a href="productdetail.html" class="pro-name"><?=$p['name']?></a>
                                        <p><?=$p['price']?>$</p>
                                        </div>
                                        <?php
                                            $limit++;
                                            if ($limit ==2) {
                                            }
                                            $count++;
                                        }
                                    }
                                }
                                elseif ($get_option ='from_oldest') {
                                    foreach ($reversed_products as $p) {
                                        if ($p['store_id'] == $id) { 
                                        ?>
                                        <div class="product-box">
                                        <img src="images/Iphone12.jpg"/>
                                        <a href="productdetail.html" class="pro-name"><?=$p['name']?></a>
                                        <p><?=$p['price']?>$</p>
                                        </div>
                                        <?php
                                            $count++;
                                    }
                                }
                            }
                            $number_of_result = $count;
                            $number_of_page = ceil ($number_of_result / $results_per_page);  
                            if($page>1)
                            {
                                echo "<a href='index.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
                            }
                            for($i=1;$i<$number_of_page;$i++)
                            {
                                echo "<a href='index.php?page=".$i."' class='btn btn-primary'>$i</a>";
                            }
                            if($i>$page)
                            {
                                echo "<a href='index.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";
                            }
                        }
                        ?>
                    </div>
		        </section>		
            </main>      
            <footer class="footer">
                <nav>
                    <ul class="navi">
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