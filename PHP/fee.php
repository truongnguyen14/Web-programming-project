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
		<title>Fee</title>
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
			<div class="fee-container">
				<div class="fee-heading">
					<h1>Fee</h1>
				</div>
				<div class="fee-table">
					<div class="table-content">
						<table>
							<caption>Fees information</caption>
							<thead>
								<tr>
								  <th>Type of fee</th>
								  <th>Unit</th>
								  <th>Amount</th>
								  <th>Note</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2">Memebership</td>
									<td>Month</td>
									<td>39$</td>
									<td></td>
								</tr>
								<tr>
									<td>Year</td>
									<td>59$</td>
									<td></td>
								</tr>
								<tr>
									<td rowspan="2">Shop owner</td>
									<td>Month</td>
									<td>50$</td>
									<td></td>
								</tr>
								<tr>
									<td>Year</td>
									<td>100$</td>
									<td></td>
								</tr>
								<tr>
									<td rowspan="2">Delivery</td>
									<td>Domestic</td>
									<td>15$-20$</td>
									<td>Depend on delivery distance</td>
								</tr>
								<tr>
									<td>Worldwide</td>
									<td>50$-150$</td>
									<td>Depend on delivery destination and country taxes</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="warning">
					<p>*Fee can be changed in a certain of time without notice</p>
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