<?php
include "koneksi.php";
$getProfile = mysql_query("select * from user where username='$_COOKIE[username]'");
$profile = mysql_fetch_array($getProfile);
?>
<!DOCTYPE html>
<html>
<head>
<title>E-MEUBEL | Interior & Furniture | Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Majestic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/baru.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.0.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body>
	<!----start-header---->
	<div class="header" id="home">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/logo-2.png" alt=""></a>
			</div>
			<div class="navigation">
			 <span class="menu"></span> 
				<ul class="navig">
					<li><a href="index.php">Home</a><span> </span></li>
					<li><a href="about.php">About</a><span> </span></li>
					<li><a href="gallery.php">Commodity</a><span> </span></li>
					<li><a href="contact.php">Contact</a><span> </span></li>
					<?php
					include"koneksi.php";
					if(!isset($_COOKIE['username'])){
					?>
					<li><a href="register.php">Register</a><span> </span></li>
					<li><a href="login.php">Login</a><span> </span></li>
					<?php
					}else{
					?>
					<li><a class="active" href="myprofile.php">Profile</a><span> </span></li>
					<?php
					if(isset($_COOKIE['id_suplier'])){
					?>
					<li><a href="orderan.php">Orderan</a><span> </span></li>
					<?php
					}
					?>
					<li><a href="logout.php">Logout</a><span> </span></li>
					<?php
					}
					?>
					<li><a href="cart.php"><img src="images/bag.png" alt="" /></a><span> </span></li>
				</ul>
			</div>
				 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
		</div>
	</div>	
	<!----end-header---->
	<!--contact-starts-->
	<div class="contact">
		<div class="container">
			<div class="contact-top">
				<div class="col-md-12 contact-left heading">
					<h1><?php echo"$profile[nama_lengkap]"?></h1>
				</div>
				<div class="col-md-2 contact-left heading">
					<div class="foto"><img src="avatar/<?php echo"$profile[avatar]"?>" height="150px" width="150px"></div>
				</div>
				<div class="col-md-10 contact-left heading">
					<p>Username : <?php echo"$profile[username]"?></p>
					<p>Email : <?php echo"$profile[email]"?></p>
					<p>Alamat : <?php echo"$profile[alamat]"?></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="contact-bottom">
				<div class="col-md-4 contact-left heading">
					<h2>Update Profile</h2>
				</div>
				<div class="col-md-8">
					<p>Username</p><input type="text" class="teks" value="<?php echo"$profile[username]"?>" disabled/>
					<p>Nama Lengkap</p><input type="text" class="teks" value="<?php echo"$profile[nama_lengkap]"?>" />
					<p>Email</p><input type="text" class="teks" value="<?php echo"$profile[email]"?>" />
					<p>Alamat Lengkap </p><input type="text" class="teks" value="<?php echo"$profile[alamat]"?>" />
						<div class="submit-btn">
							<form>
								<input type="submit" value="Update">
							</form>
						</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!----contact-end---->
	<!--footer-starts--> 
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 footer-left">
					<p>Design by Raka Kurnia N</p>
				</div>
				<div class="col-md-4 footer-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="google"> </span></a></li>
						<li><a href="#"><span class="pin"> </span></a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-left">
					<h3>Address</h3>
					<p>RKN Company 
					<span>Jalan Leuser 28</span>
					(0341) 331 757</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--footer-ends--> 
</body>
</html>
