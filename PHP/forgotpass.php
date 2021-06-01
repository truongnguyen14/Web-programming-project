<DOCTYPE html>
<?php session_start();		/*prevent execute if install.php still exists*/
		 if (file_exists('install.php')) {
			 echo '<script>alert("you must delete install.php")</script>';
			exit();		
  }
?>
    <html lang="en">
        <head>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <title>Forgot Password</title>
            <link rel="stylesheet" href="css/style1.css">
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
						<a href="login_form.html">My account</a>
					</li>
				</ul>
			</nav>	
		</header>
            <div class="forgot">
                <div class="password-box">
                    <form class="inputpassword">
						<P>ENTER EMAIL TO RESET YOUR PASSWORD<P>
                        <input type="email" class="newpassword" placeholder="Enter your email" id="myInput" required>
                        <button type="submit" class="reset">Confirm</button>
                    </form>
                </div>
            </div>
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