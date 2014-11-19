<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Second-hand shop of cheap and brand new children clothes">
		<meta name="keywords" content="sell baby kid children clothes stuff buy cheap second-hand pregnancy clothes">
		<meta name="author" content="Yevgeniya Kobrina">
       
        <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/contact.css" type="text/css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    	<!--[if lt IE 9]>
     	 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     	 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	
	</head>


	<body>
		<div id="main-container" class="container-fluid">
			<div id ="main-header container-fluid">
				<div class="ribbon-wrapper"><div class="ribbon-development">Under development</div></div>
				<header>
					<img id="logo" class="center-block" src="images/girl.jpg" class="img-responsive" alt="A Little Shop logo">
					<div id="header-text" class="shadow text-center">
						<h1>A Little Shop</h1>
						<h4>Tons of beautiful children clothes for afordable price!</h4>
					</div>
				</header>
			</div>

			<div id="content" class="container">
				<div class="row">
					<div id="reasons" class="col-md-7">
						<ul class="points list-unstyled">
							<li>
								<img src="images/dino.png" alt="Point 1">
								<h4>Save money</h4>
								<p>Why to buy expensive clothes when your baby is growing so fast? Grab good quality stuff here or even brand new.</p>
							</li>
							<li>
								<img src="images/dino.png" alt="Point 2">
								<h4>Be environmental friendly</h4>
								<p>Save an incalculable amount of unwanted clothing from dumps and landfills.</p>
							</li>
							<li>
								<img src="images/dino.png" alt="Point 3">
								<h4>Enjoy shopping online</h4>
								<p>Each item listed has several high-quality photos and a complete description.</p>
							</li>
							<li>
								<img src="images/dino.png" alt="Point 4">
								<h4>Make a bargain</h4>
								<p>Offer your price, get a discount on multiple buys, agree on the payment and delivery methods.</p>
							</li>
						</ul>
						<footer class="content-footer">
							<h3>More About LittleShop</h3>
							<p>What you can find here: baby and children clothes, toys, essensials, woman clothes, shoes, accessories... Or just ask us how to shop online with benefit!</p>
						</footer>
					</div>
					<div id="contact" class="col-md-5">
						<header class="content-header">
							<h3>Ask for a help or make a deal!</h3>
						</header>
						<div class="alert" role="alert"></div>
						<form id="contact-form" class="form-horizontal" role="form" method="post" action="sendEmail.php">
							<div class="form-group">
								<label for="name" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input type="text" name="name" id="name" class="form-control" placeholder="How should we call you?" autocomplete="on" value="<?php echo $_POST['name']; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-3 control-label">Email*</label>
								<div class="col-sm-9">
									<input type="email" name="email" id="email" class="form-control" placeholder="yourmail@mail.com" autocomplete="on" required value="<?php echo $_POST['email']; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="topic" class="col-sm-3 control-label">Topic</label>
								<div class="col-sm-9">
									<select name="topic" class="form-control">
										<option value="HowTo">How to buy</option>
										<option value="Payment" selected="selected">Payment issues</option>
										<option value="Deal">Propose a deal</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="comment" class="col-sm-3 control-label ">Comment*</label>
								<div class="col-sm-9">
									<textarea name="comment" id="comment" class="form-control" rows="5" maxlength="5000" placeholder="Write your text here" spellcheck required value="<?php echo $_POST['comment']; ?>"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-10 col-md-offset-1">
									<input type="submit" class="btn btn-success form-control" value="Get In Touch" name="submit" id="submit">
								</div>
							</div>
							<div class="content-footer container-fluid text-center">	
								<p class="help-block">We would never use your personal information for anything unspecified! </p>
							</div>
						</form>
					</div>
				</div> <!-- end of row -->
				<div id="testimonial" class="container-fluid col-md-10 col-md-offset-1">
					<div class="row">
						<div id="testimonial_img" class="col-md-2">
							<img src="images/testimonial.png" class="img-responsive center-block" alt="Customer Testimonial">
						</div>
						<div class="col-md-10">
							<blockquote>
								<p>"They are honest sellers. You always see and know WHAT you buy. Great stuff for great price. As I bought a lot, I recieved a discount for all my future purchaises."</p>
								<footer>Anna, Helsinki</footer>
							</blockquote> <br />
							<blockquote>
								<p>"I am charmed by the girls clothes! Very stylish, great quality and afordable prices. Got my parcel quickly."</p>
								<footer>Riita, Oulu</footer>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid text-center" id="main-footer">
				<footer>
					Copyright &copy; 2014
				</footer>
			</div>
		</div><!-- container -->
		<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/submitContactForm.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</body>
</html>
