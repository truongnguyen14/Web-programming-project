<?php
  session_start();

    // if (file_exists('install.php')) {
    //     echo '<script>alert("you must delete install.php")</script>';
    //     exit();	
    // }

    if (isset($_POST['act'])) {
         $uname = $_POST['username'];
         $usernameval = file_get_contents('account/username.txt');
         $pass = $_POST['pass'];
         $hash = file_get_contents('../pass.txt');
         if (password_verify($pass, $hash) && $uname == $usernameval) {
             header('location: profile.php');
         }
    $status = 'Invalid username/password';
   }
?>


<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Login Form</title>
            <link rel="stylesheet" href="css/login_form2.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>
            <div class="container">
				<header>
						<nav>
							<div class="mainlogo">
								<a href="index.php" class="logo">
									<h1>LUXMall</h1>
								</a>
							</div>
							<input type="checkbox" id="menu-but">
							<label for="menu-but" class="menu-icon">
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
                <div class="title">
                    <h3>LOG IN</h3>
                
                <form class="login_form" action="profile.php" name="form" method="post" onsubmit="return validation()"  >
                    <div class="ibox">
                        <input type="text" placeholder="Email" name="username" id="input_email">
                    </div>
                    <div id="error_email">Please provide your email</div>
                    <div class="ibox">
                        <input type="password" placeholder="Password" name="pass" id="input_password">
                    </div>
                    <div id="error_password">Please provide your password</div>
                    <input class="btn" type="submit" name="act" id="login" value="Login" onclick="getEmail()">     
                </form>	
            <a class="box1" href="forgotpass.php">Forgot your password?</a>
            <a class="box2" href="account.php"><b>CREATE AN ACCOUNT</b></a>
			</div>
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
									<a href="Tos.php">Term of service</a>
								</li>
								<li>
									<a href="privacy.php">Privacy</a>
								</li>
								</ul>
							</nav>
						</footer>
			</div>
			<div class="cookie">
			This website is using cookies. You have to accept it<a href="https://gdpr-info.eu/">Learn more</a>. <a class="cookiebtn">I understand</a>
			</div>
		<script src="cookies.js"></script>
            <script src="login_form.js"></script>
        </body>
    </html>