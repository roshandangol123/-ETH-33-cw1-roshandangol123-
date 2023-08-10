<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ezy Rentals</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<style>
		.contact {
			background-color: #f7f7f7;
			padding: 50px;
		}

		.contact .wrapper {
			max-width: 800px;
			margin: 0 auto;
		}

		.contact h2 {
			font-size: 32px;
			color: #333;
			margin-bottom: 20px;
		}

		.contact p {
			font-size: 18px;
			color: #666;
			line-height: 1.6;
			margin-bottom: 15px;
		}

		.contact ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		.contact li {
			margin-bottom: 10px;
		}

		.contact li strong {
			font-weight: bold;
		}
	</style>
</head>
<body>
	<section class="">
		<?php
			include 'header.php';
			?>
	</section><!--  end hero section  -->

	<section class="contact">
		<div class="wrapper">
			<h2>Contact Ezy Rentals</h2>
			<p>For any inquiries or questions, please feel free to contact us:</p>
			<ul>
				<li><strong>Email:</strong> info@ezyrentals.com</li>
				<li><strong>Phone:</strong> +1 123 456 7890</li>
				<li><strong>Address:</strong> 123 Street, City, Country</li>
			</ul>
			<p>We'll be happy to assist you!</p>
		</div>
	</section>

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
				
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<?php include_once "includes/footer.php"; ?>
			</ul>
		</div>
	</footer>
</body>
</html>
