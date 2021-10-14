<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
  		<meta name="author" content="Joydeep Dev Nath">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="images/favicon.ico">
	
		<title>About Us | Project Meteor</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
		
		<?php 
		
			if(!isset($_SESSION["username"])) {
				include("common/headerLoggedOut.php");
			}
			else {
				include("common/headerLoggedIn.php");
			}
		
		?>
		
		<div class="spacer">a</div>
		
		<div class="col-sm-12 aboutUsWrapper">
			
			<div class="headingOne">
				
				About Us
				
			</div>
			
			<div class="para">
				
			Nurtured from the seed of a single great idea - to empower the traveller - IndiaTourism is a pioneer in India’s online travel industry. Founded in the year 2020 by Ashritha and Sharanya, MakeMyTrip came to life to empower the Indian traveller with instant bookings and comprehensive choices. The company initiated its journey serving the US-India travel market offering a range of best-value products and services powered by technology and round-the-clock customer support.
After consolidating its position in the market as a brand recognised for its reliability and transparency,IndiaTourism launched its India operations in 2005. With more and more Indians initiating to transact online with IRCTC and new opportunities with the advent of low cost carriers, IndiaTourism offered travellers the convenience of booking travel online with a few clicks.
IndiaTourism’s rise has been led by the vision and the spirit of each one of its employees, for whom no idea was too big and no problem too difficult. With untiring determination,  has proactively diversified its product offering, adding a variety of online and offline products and services and steadily establishing itself as India’s leading online travel company.
			</div>
			
		</div> <!-- paymentWrapper -->
	
	<div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
			
		<?php include("common/footer.php"); ?>
				
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>