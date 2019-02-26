<!DOCTYPE HTML>
<html lang="en">

<head>

	<!-- meta tags -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- custom CSS stylesheet -->
	<link rel="stylesheet" href="styles/style.css" type="text/css" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<!-- Bootstrap Files: jQuery, Popper.js, and Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<!-- jQuery Form, Additional Methods, Validate -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Your JavaScript Form Validator -->
	<script src="js/form-validate.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- Javascript -->
	<script src="js/script.js" crossorigin="anonymous"></script>

	<title>William Isengard Fullstack Web Developer</title>

</head>

<!-- TODO Add sizing, margins, and padding for all breakpoints- xs, sm, md, lg , and xl -->

<body>

	<div class="container-fluid" id="main">

		<!--Dynamic NavBar -->

		<div class="container-fluid">
			<nav class="navbar fixed-top navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="#">William Isengard</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#whoAmISection">Who Am I?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#whatDoIDoSection">What Do I Do?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#canIHelpYouSection">Can I Help You?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#howCanIBeReachedSection">How Can I Be Reached?</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<!-- Header -->

		<div class="container-fluid">
			<div class="row-fluid" id="splatter">
				<div class="col-md-2 col-sm-3 col-xs-2 mx-auto mt-5 pt-5">
					<img id="headshot" class="img-fluid rounded-circle d-block" src="images/headshot.jpg" alt="William Isengard Headshot">
					<br>
					<br>
					<img id="nametag" class="img-fluid rounded d-block" src="images/nametag.png" alt="William Isengard Fullstack Web Developr">
					<br>
					<br>
				</div>
			</div>
		</div>

		<!--Who Am I? Section -->

		<section id="whoAmISection">
			<div class="row pt-5 pt-md-4 pt-sm-2 text-white" id="whoAmIRow">
				<div class="col-lg-6 col-md-8 col-sm-10 col-xs-11 mx-auto p-4 p-md-3 p-sm-2">
					<h1>Who Am I?</h1>
					<p>Howdy! My name is William Isengard and I am a fullstack web developer. <br><br>In my previous life I received a Bachelor's of Arts degree and 2/3 of an MBA and held positions ranging from tech consultant, account manager, energy consultant,
						business development manager, and CEO before making the leap to pursue a life-long goal of being a coder. <br><br>I attended Deep Dive Coding's Fullstack Web Development Bootcamp and built a foundation for my new career. I am passionate about
						coding and excited to help your business grow through an innovative and effective web presense.</p>

					<!-- Work History Images -->

					<div class="container mx-auto d-block px-5 px-md-3 px-sm-1">
						<div class="row">

							<div id="jwsmartsolutions" class="col-2 col-md p-2">
								<img id="jwSmartSolutionsImg" class="img-fluid rounded-circle d-block shadow" src="images/jwSmartSolutions.png" alt="JW Smart Solutions">
							</div>

							<div id="nmsolargroup" class="col-2 col-md p-2">
								<img id="nmSolarGroupImg" class="img-fluid rounded-circle d-block shadow" src="images/nmSolarGroup.jpg" alt="NM Solar Group">
							</div>

							<div id="solarcity" class="col-2 col-md p-2">
								<img id="solarCityImg" class="img-fluid rounded-circle d-block shadow" src="images/solarCity.png" alt="SolarCity">
							</div>

							<div id="hpinc" class="col-2 col-md p-2">
								<img id="hpIncImg" class="img-fluid rounded-circle d-block shadow" src="images/hpInc.png" alt="HP Inc">
							</div>

							<div id="unm" class="col-2 col-md p-2">
								<img id="unmImg" class="img-fluid rounded-circle d-block shadow" src="images/unm.jpg" alt="UNM">
							</div>

							<div id="uofp" class="col-2 col-md p-2">
								<img id="uofpImg" class="img-fluid rounded-circle d-block shadow" src="images/uofp.jpg" alt="University of Phoenix">
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- What Do I Do? Section -->

		<section id="whatDoIDoSection">
			<div class="row py-5 text-muted">
				<div class="col-lg-6 col-md-8 col-sm-10 col-xs-11 mx-auto p-4 p-md-3 p-sm-2">
					<h1>What Do I Do?</h1>
					<div class="info">
						<p>My focus is programming modern, in-demand software, websites, and apps. I am experienced in the LAMP stack, PHP, HTML, CSS, JavaScript, Git, Object Oriented Programming, etc.</p>
						<p>I specialize in leveraging my "soft skills" in marketing, business management, finance, project management, sales, and customer service to enhance my technical expertise to produce deliverables that wow a client.</p>

						<!--Image Carousel -->

						<div class="row pb-5 text-center">
							<div class="col-md-6 col-sm-5 col-xs-4 mx-auto p-4 p-md-3 p-sm-2 p-xs-1 border-1">

								<!--Carousel Wrapper-->

								<div id="carousel" class="carousel slide carousel-fade" data-ride="ride">

									<!--Slides-->

									<div class="carousel-inner" role="listbox">
										<div class="carousel-item active">
											<img class="d-block w-100" src="images/php.png" alt="PHP">
										</div>

										<div class="carousel-item">
											<img class="d-block w-100" src="images/javascript.png" alt="JavaScript">
										</div>

										<div class="carousel-item">
											<img class="d-block w-100" src="images/html.png" alt="HTML">
										</div>

										<div class="carousel-item">
											<img class="d-block w-100" src="images/css.png" alt="CSS">
										</div>

										<div class="carousel-item">
											<img class="d-block w-100" src="images/bootstrap.png" alt="Bootstrap">
										</div>

										<div class="carousel-item">
											<img class="d-block w-100" src="images/angular.png" alt="Angular">
										</div>

									</div>

									<!--Controls-->

									<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Can I Help You? Section -->

		<section id="canIHelpYouSection">
			<div class="row py-5 text-white" id="canIHelpYouRow">
				<div class="col-lg-6 col-md-8 col-sm-10 col-xs-11 mx-auto p-4 p-md-3 p-sm-2">
					<h1>Can I Help You?</h1>
					<div class="info">
						<p>I am excited for opportunities to help grow a business and continue to expand my developer skillset.</p>
						<p>Please don't hesitate to reach out to me and we can discuss ways I can help.</p>

						<!-- Contact Form -->

						<form id="contact-form" action="php/mailer.php" method="post">
							<div class="form-group">
								<label for="contactName">Name <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"></span>
										<i class="iName" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="contactName" name="contactName" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="contactEmail">Email <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"></span>
										<i class="iEmail" aria-hidden="true"></i>
									</div>
									<input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="contactMessage">Message <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"></span>
										<i class="iMessage" aria-hidden="true"></i>
									</div>
									<textarea class="form-control" rows="5" id="contactMessage" name="contactMessage" placeholder="Your message (2000 characters max)"></textarea>
								</div>
							</div>

							<!-- reCAPTCHA -->

							<div class="g-recaptcha" data-sitekey="6LfhEpQUAAAAABiy2eAnq8x-csMb9UcH6SA202yH"></div>

							<button class="btn btn-primary" type="submit"><i class="sendButton"></i>Submit</button>
							<button class="btn btn-warning" type="reset"><i class="resetButton"></i>Reset</button>
						</form>

						<!--empty area for form error/success output-->

						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<!-- How Can I Be Reached? Section -->
		<!-- TODO Add phone number and email functions and remove white backgrounds from images -->

		<section id="howCanIBeReachedSection">
			<div class="row py-5 py-md-3 py-sm-0 text-muted">
				<div class="col-lg-6 col-md-8 col-sm-10 col-xs-11 mx-auto p-4 p-md-3 p-sm-2 p-xs-1">
					<h1 id="howCanIBeReached">How Can I Be Reached?</h1>
					<div class="info">
						<p>I can be reached via the channels below. Give me a ring and I will get back to you right away. Thanks!</p>
						<div class="row">
							<div class="col-md-2 col-sm-3 col-xs-2 mx-auto py-md-2 py-sm-3">
									<a href="">
										<img class="img-fluid d-block" src="images/email.png" alt="Email Contact" />
									</a>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-2 mx-auto py-md-2 py-sm-3">
									<a href="">
										<img class="img-fluid d-block" src="images/phone.png" alt="Phone Contact" />
									</a>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-2 mx-auto py-md-2 py-sm-3">
									<a href="https://www.linkedin.com/in/william-isengard/" target=”_blank”>
										<img class="img-fluid d-block" src="images/linkedIn.png" alt="LinkedIn Page" />
									</a>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-2 mx-auto py-md-2 py-sm-3">
									<a href="https://github.com/WilliamIsengard/" target=”_blank”>
										<img class="img-fluid d-block" src="images/github.png" alt="Github Repository" />
									</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--Page Footer -->

		<div class="row py-5 py-md-3 py-sm-1 text-white text-center" id="footerRow">
			<div class="col">
				<footer>William Isengard- Full Stack Web Developer</footer>
			</div>
		</div>

	</div>
</body>

</html>
