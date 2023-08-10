
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
        .hello {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        
        .hello img {
            width: 100%;
        }
        
        .hello img:nth-child(2) {
            width: 66.667%;
        }
        
    </style>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

	</section><!--  end hero section  -->
    <section class="hello">
        <img src="divo04.webp" >
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