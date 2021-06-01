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
		<title>Frequently asked questions</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<nav>
				<div class="mainlogo">
					<a href="index.html" class="logo">
						<h1>LUXMall</h1>
					</a>
				</div>
				<input type="checkbox" id="menu-btn">
				<label for="menu-btn" class="menu-icon">
					<i class="fa fa-bars"></i>
				</label>
				<ul class="navi">
					<li>
						<a href="index.html">Home page</a>
					</li>
					<li>
						<div class="browse-store">
                            <button class="dropbtn">Browse</button>
                            <div class="dropdown-content">
                            <a href="browse_store_by_name.html">Browse Stores by Name</a>
							<br><br>
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
						<a href="profile.html">My account</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		<div>
			<div class="FAQ-heading">
			<h1>Common questions</h1>
			</div>
			<div class="question-container">
				<div class="accordion">
					<div class="question-item" id="question1">
						<a href="#question1" class="question-link">How can we purchase the product?
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
						</a>
						<div class="answer">
							<div class="answer1">
							<p>Press "Add to cart" button or "Buy now" button then the website will automatically 
								delivery you to the order page.</p>
							</div>
						</div>
					</div>
					<div class="question-item" id="question2">
						<a href="#question2" class="question-link">where can we make account?
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
						</a>
						<div class="answer">
							<p>On top the right page, there is the button call "My account". Click or press on it to register your account.</p>
						</div>
					</div>
					<div class="question-item" id="question3">
						<a href="#question3" class="question-link">How can we find the product?
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
						</a>
						<div class="answer">
							<p>Press or click "Browse" button on navigation bar to find your product.</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
		</main>
		<footer class="footer">
			<nav class="nav-footer">
				<ul class="list-footer">
				<li>
					<a href="index.html">Home</a>
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
		<div class="cookie">
			This website is using cookies. You have to accept it<a href="https://gdpr-info.eu/">Learn more</a>. <a class="cookiebtn">I understand</a>
			</div>
		<script src="java/cookies.js"></script>
	</body>
</html>