

<?php

	if($_POST["submit"]) {
		$recipient="valeria_felder@outlook.com";
		$subject="Website Contact Form Submission";
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];

		$senderEmail=$_POST["senderEmail"];

		$message=$_POST["contactMessage"];

			$mailBody="Name:
			$sender\nEmail:
			$senderEmail\n\n$contactMessage";

			mail($recipient,$subject, $mailBody, "From: $firstname " " $lastname <$senderEmail>");

			$thankYou="<p>Thank you! Your message has been sent. </p>";
	}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="..js/sticky.js"></script>
	<title>The Close-Knit Family | Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Affordable and professional web design">
	<meta name="keywords" content="web design, affordable web design, front end developer, website builder, website architect">
	<meta name="author" content="Valeria Felder">
	
</head>
<body class="body-container">
	<header id="header-section">
		<nav id="header-nav">
		   <ul class="navbar">
			   <li class="navbutton"><a href="../html/index.html" class="nav-link"><img src="img/logo.png" alt="logo" /></a></li>

			   <li class="navbutton"><a href="../html/index.html" class="nav-link-active">Home</a></li>
			   <li class="navbutton"><a href="../html/about.html" class="nav-link">About</a></li>
			   <li class="navbutton">
				   <a href="../html/programs.html" class="nav-link">Programs & Resources</a>
				   <!--<div class="dropdown-content">
					<a class="header_links" href="../html/programs.html">PROGRAMS</a>
					<a class="header_links" href="../html/programs.html/#core-values">CORE VALUES</a>
					<a class="header_links" href="../html/programs.html/#media">MEDIA RESOURCES</a>
				</div> -->
				</li>
			   <li class="navbutton"><a href="../html/contact.html" class="nav-link">Contact</a></li>
			   <li class="navbutton"><a href="../html/products.html" class="nav-link">Products</a></li>
			   <li class="navbutton"><a href="../html/blog.html" class="nav-link">Blog</a></li>
		   </ul> 
		</nav>
	</header>

	<!--PHP thank you -->
	<?=$thankYou ?>

	<div class="main">
		<section class="contact-section">
			<section class="contact-image">
				<h2>Let's work together</h2>
			</section>

			<!-- Contact Form using Netlify -->
			<section class="contact-form">
				<form name="contact" method="POST" action="contact.php" data-netlify="true" id="contact_form">
					<h2 class="contact-text">Contact Form</h2>

					<div class="form-lines">
						<label for="fname">Name:</label>
						<div class="name-block">
							<input type="text" id="fname-field" name="firstname" placeholder="First Name...">
							<input type="text" id="lname-field" name="lastname" placeholder="Last Name...">
						</div>
					</div>
					
					

					<div class="form-lines">
						<label for="email">Email:</label>
						<input type="text" id="email field" name="senderEmail" placeholder="name@example.com">
					</div>
				   
					<div class="form-lines"> 
						<label for="message">Message:</label>
						<textarea id="message field" name="contactMessage" placeholder="Your message..."></textarea>
						
					</div>
					<div class="form-lines">
						<label id="contact_form_label"> Verification: </label>
						<div data-netlify-recaptcha="true"></div>
					</div>

					<input type="submit" name="submit" class="contact-page-button">
					<!--<div class="contact-page-button-div"><a href="#" class="contact-page-button">Submit</a></div>
-->
					
					
				</form>
			</section>
		</section>

		
		
	</div>

	<footer>
		<section class="footer-box">
			<section class="small-footer-box">
				<form name="contact" method="POST" netlify-honeypot="bot-field" data-netlify="true" id="footer_form">
					<h3>VISIT VALERIE'S BLOG</h3>
					<input id="footer_subscribe_window" type="email" name="email" placeholder="example@email.com" />
					<input id="footer_subscribe_button" type="submit" name="subscribe" value=">>" />
				</form>
			</section>
			<section class="small-footer-box">
				<p>&copy 2019 by Valerie Felder</p>
				<p>Web Development by Valeria Felder</p>
			</section>
		</section>

		<section class="footer-box">
			<section class="small-footer-box">
				<h3>STAY CONNECTED</h3>
				<ul class="social-media-icons">
					<li id="social_media_icon_box">
						<img src="../img/flogo_RGB_HEX-72.png" width="29" />
					</li>
					
					<li id="social_media_icon_box">
						<img src="../img/glyph-logo_May2016.png" width="29" />
					</li>

					<li id="social_media_icon_box">
						<img src="../img/badgeRGB-white.png" width="29" />
					</li>

					<li id="social_media_icon_box">
						<img src="../img/badgeRGB-white.png" width="29" />
					</li>

					<li id="social_media_icon_box">
						<img src="../img/badgeRGB-white.png" width="29" />
					</li>

				</ul>

			</section>
			<section class="small-footer-box">
				<h3>CONTACT VALERIE</h3>
				<p>valeriefelder@thecloseknitfamily.com</p>
				<p>979.324.1865</p>
			</section>
		</section>
		
		<section class="links-footer-box">
			<h3>USEFUL LINKS</h3>
			
			<p><a class="useful_links" href="../html/index.html">Home</a></p>
			<p><a class="useful_links" href="../html/programs.html">Programs</a></p>
			<p><a class="useful_links" href="../html/blog.html">Blog</a></p>
			<p><a class="useful_links" href="../html/programs.html/#core-values">Core Values</a></p>
			<p><a class="useful_links" href="../html/contact.html">Book Valerie & Contact</a></p>
			<p><a class="useful_links" href="../html/about.html">About</a></p>
			<p><a class="useful_links" href="../html/programs.html/#media-resources">Photos</a></p>
			
		</section>
		
</footer>


</body>

</html>

<!--

	
-->