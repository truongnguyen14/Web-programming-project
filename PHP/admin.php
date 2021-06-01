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
		<title>Welcome to Luxury mall online</title>
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
                            <a href="browse_store_by_name.html">Browse Stores by Name</a>
							<br><br>
                            <a href="browse_store_by_category.html">Browse Stores by Category</a>
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
		<body>
			<section>
				<div class="photo">
					<h1>Edit member photo</h1>
				<?php
					    if (isset($_POST['act'])) {
						if (!empty($_POST['pic'])){
							$selected = $_POST['pic'];
							if ($selected == 'member1'){
							if ($_FILES["profile_image"]["error"] == UPLOAD_ERR_OK) {
							  // store new image as avatar.png (overwrite the current file)
							  $new_location = 'profile/avatar1.png';    
							  move_uploaded_file($_FILES['profile_image']['tmp_name'], $new_location);
							  echo '<h2>Done</h2>';
							}
							}
							if ($selected == 'member2'){
							if ($_FILES["profile_image"]["error"] == UPLOAD_ERR_OK) {
							  // store new image as avatar.png (overwrite the current file)
							  $new_location = 'profile/avatar2.png';    
							  move_uploaded_file($_FILES['profile_image']['tmp_name'], $new_location);
							  echo '<h2>Done</h2>';
							}
							}
							if ($selected == 'member3'){
							if ($_FILES["profile_image"]["error"] == UPLOAD_ERR_OK) {
							  // store new image as avatar.png (overwrite the current file)
							  $new_location = 'profile/avatar3.png';    
							  move_uploaded_file($_FILES['profile_image']['tmp_name'], $new_location);
							  echo '<h2>Done</h2>';
							}
							}
						}
					  }
				?>
				<form enctype="multipart/form-data" method="post" action="admin.php">
					<select name="pic" id="selection" class="selecion">
						<option value=" " disabled selected>Select one</option>
						<option  value="member1">member 1</option>
						<option  value="member2">member 2</option>
						<option value="member3">member 3</option>
					</select>
				  <input type="file" name="profile_image">
				  <input type="submit" name="act" value="Upload">
				</form>
				<div class="edit-page">
				<?php
					if(isset($_POST['acte'])){
						if (!empty($_POST['section'])){
							$select = $_POST['section'];
							if ($select == 'privacy'){
								if (file_exists("privacy.txt")){
									$file = "privacy.txt";
									$current = file_get_contents($file);
								}else{
									$myfile = fopen("privacy.txt","w");
									header("Refresh:0");
								}
							}
							if ($select == 'Tos'){
								if (file_exists("Tos.txt")){
									$file = "Tos.txt";
									$current = file_get_contents($file);
								}else{
									$myfile = fopen("Tos.txt","w");
									header("Refresh:0");
								}
							}
							if ($select == 'copyright'){
								if (file_exists("copyright.txt")){
									$file = "copyright.txt";
									$current = file_get_contents($file);
								}else{
									$myfile = fopen("copyright.txt","w");
									header("Refresh:0");
								}
							}
						}
					}
				?>
					<h2>Edit privacy ,Tos ,copyright policies</h2>
					<form enctype="multipart/form-data" method="post" action="process.php">
						<select name="section" id="selection" class="selecion">
							<option value=" "disabled selected>Select to edit</option>
							<option  value="privacy">privacy</option>
							<option  value="Tos">Tos</option>
							<option  value="copyright">copyright</option>
						</select>
						<textarea rows="10" cols= "80" name="comment" value="edit"></textarea>
						<input type="submit" name="acte" value="Update">
					</form>
				</div>
		</body>
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
	</body>
	
</html>