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
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact us</title>
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
			<div class="form-heading">
				<h1>Form contact</h1>
			</div>
			<div class="form-box">
				<fieldset>
					<legend>Please fulfill the contact form</legend>
					<form method="get" id="form" name="Form" action="file.html" class="input-group" onsubmit="return validate();" >
						<div class="purpose">
							Contact purpose
							<select name="title">
								<option value="none">purpose</option>
								<option value="1">customer service</option>
								<option value="2">partnership</option>
							</select>
						</div>
						<div>
							Name: <input type="text" id="Name" name="name" placeholder="Enter your name" class="name-field" ></textarea>
						</div>
						<div>
							Phone number: <input type="tel" id="phone" name="phone" placeholder="Please enter your phone number" class="input-field"></textarea>
						</div>
						<div>
							Email: <input type="text" id="mail" name="email" placeholder="Enter your email address" class="input-field"></textarea>
						</div>
						<div>
							Preffered contact method: <input type="radio" name="contact-method" value="email" class="radio" required> Email
							<input type="radio" name="contact-method" value="phone" class="radio"> Phone
						</div>
						<div required>
						  Contact days: <input type="checkbox" name="contact-time" value="Monday" class="checkbox"> Monday
							<input type="checkbox" name="contact-time" value="Tuesday" class="checkbox"> Tuesday
							<input type="checkbox" name="contact-time" value="Wednesday" class="checkbox"> Wednesday
							<input type="checkbox" name="contact-time" value="Thursday" class="checkbox"> Thursday
							<input type="checkbox" name="contact-time" value="Friday" class="checkbox"> Friday
							<input type="checkbox" name="contact-time" value="Saturday" class="checkbox"> Saturday
							<input type="checkbox" name="contact-time" value="Sunday" class="checkbox"> Sunday
						</div>
						<div class="message">
						   Message <textarea id="messen" name="message" rows="10" cols="45" onkeyup="validateMessage();"></textarea>
							<div class="noti-box">
							<span id="notify" aria-live="polite"></span>
							</div>
						</div>	
						<div class="form-button">
							<input type="reset" value="Clear" class="forms-button">
							<input type="submit" value="Send" id="Submit" class= "forms-button">
						</div>
					</form>	
				</fieldset>
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
	<script src="java/jvscript.js"></script>
	</body>	
</html>