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
		<title>About us</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
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
						<a href="profile.php">My account</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
			<section>
				
				<div class="about-us">
					
						<div class="group-name">
							<h1>Group 24<h1>
						</div>
						<div class="about-group-content">
							<p>Group information</p>
						</div>
						<div class="group-content">
						<p>This website was build by group 24</p>
						<p>Our aim of this project is CR-DI</p>
						</div>
						<div class="name-member">
							<div class="member-heading">
								<h3>Group member</h3>
							</div>
								<img src="profile/avatar1.png" alt="a profile picture" onclick="overlayon()">
								<div id="overlaywindow">
									<div class="container" onclick="overlayoff()">
										<p>I'm Truong. Nothing else</p>
									</div>
								</div>
							<p>Nguyen Tan Truong</p>
								<img src="profile/avatar2.png" alt="a profile picture" onclick="overlayon()">
								<div id="overlaywindow">
									<div class="container" onclick="overlayoff()">
										<p>I'm Huy. Nothing else</p>
									</div>
								</div>
							<p>Vo Quoc Huy</p>
								<img src="profile/avatar3.png" alt="a profile picture" onclick="overlayon()">
								<div id="overlaywindow">
									<div class="container" onclick="overlayoff()">
										<p>I'm Tien. Nothing else</p>
									</div>
								</div>
							<p>Nguyen Duc Tien</p>
						</div>
					
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
		<script src="java/overlay.js"></script>
	</body>
</html>