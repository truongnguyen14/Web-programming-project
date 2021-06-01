<?php
    // session_start();
    // if(file_exists(('install.php')) {
    //     echo '<script>alert("You must delete install.php")</script>'
    //     exit();
    // }

    require 'store_functions.php';
    $stores = read_all_stores();
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
                <h2>Browse Stores by Name</h2>
            </div>
            <div class="mycart">
                <a href="mycart.html" class="cartword">My cart</a>
                <i class="fas fa-cart-plus"></i>
            </div>
            <nav class="Alphabet-Nav">
                <a href="browse_store_by_name.php?id=0">#</a>
                <a href="browse_store_by_name.php?id=1">A</a>
                <a href="browse_store_by_name.php?id=2">B</a>
                <a href="browse_store_by_name.php?id=3">C</a>
                <a href="browse_store_by_name.php?id=4">D</a>
                <a href="browse_store_by_name.php?id=5">E</a>
                <a href="browse_store_by_name.php?id=6">F</a>
                <a href="browse_store_by_name.php?id=7">G</a>
                <a href="browse_store_by_name.php?id=8">H</a>
                <a href="browse_store_by_name.php?id=9">I</a>
                <a href="browse_store_by_name.php?id=10">J</a>
                <a href="browse_store_by_name.php?id=11">K</a>
                <a href="browse_store_by_name.php?id=12">L</a>
                <a href="browse_store_by_name.php?id=13">M</a>
                <a href="browse_store_by_name.php?id=14">N</a>
                <a href="browse_store_by_name.php?id=15">O</a>
                <a href="browse_store_by_name.php?id=16">P</a>
                <a href="browse_store_by_name.php?id=17">Q</a>
                <a href="browse_store_by_name.php?id=18">R</a>
                <a href="browse_store_by_name.php?id=19">S</a>
                <a href="browse_store_by_name.php?id=20">T</a>
                <a href="browse_store_by_name.php?id=21">U</a>
                <a href="browse_store_by_name.php?id=22">V</a>
                <a href="browse_store_by_name.php?id=23">W</a>
                <a href="browse_store_by_name.php?id=24">X</a>
                <a href="browse_store_by_name.php?id=25">Y</a>
                <a href="browse_store_by_name.php?id=26">Z</a>
            </nav>
            <div class="ps-heading">
                <br />
                <br />
                <h2>Results:</h2>
            </div>
            <section id="feature-store">
                <div class="store">
                    <?php
                    if (isset($_GET['id'])) {
                        $name_id = $_GET['id'];
                        if ($name_id == 0) {
                            $name_pattern = "/^[0-9]+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 1) {
                            $name_pattern = "/^A+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 2) {
                            $name_pattern = "/^B+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 3) {
                            $name_pattern = "/^C+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 4) {
                            $name_pattern = "/^D+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 5) {
                            $name_pattern = "/^E+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 6) {
                            $name_pattern = "/^F+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 7) {
                            $name_pattern = "/^G+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 8) {
                            $name_pattern = "/^H+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 9) {
                            $name_pattern = "/^I+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 10) {
                            $name_pattern = "/^J+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 11) {
                            $name_pattern = "/^K+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 12) {
                            $name_pattern = "/^L+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 13) {
                            $name_pattern = "/^M+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 14) {
                            $name_pattern = "/^N+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 15) {
                            $name_pattern = "/^O+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 16) {
                            $name_pattern = "/^P+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 17) {
                            $name_pattern = "/^Q+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 18) {
                            $name_pattern = "/^R+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 19) {
                            $name_pattern = "/^S+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 20) {
                            $name_pattern = "/^T+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 21) {
                            $name_pattern = "/^U+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 22) {
                            $name_pattern = "/^V+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 23) {
                            $name_pattern = "/^W+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 24) {
                            $name_pattern = "/^X+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 25) {
                            $name_pattern = "/^Y+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                        if ($name_id == 26) {
                            $name_pattern = "/^Z+/";
                            foreach ($stores as $s) {
                                if (preg_match($name_pattern,$s['name'])) {
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
                    }
                    ?>
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