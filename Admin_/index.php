<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>
		Online Library Management System
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<!-- Navbar Section -->
	<?php
	if (isset($_SESSION['login_user'])) {
		include('modals/post_login.php');
	} else {
		include('modals/pre_login.php');
	}
	?>
	<!-- Header -->
	<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
		<div class="container">
			<div class="d-sm-flex align-items-center justify-content-between">
				<div>
					<h1>Level Up your <span class="text-warning">Knowledge</span></h1>
					<p class="lead my-4">
						Nothing is pleasenter that exploring a library.
					</p>
					<a href="registration.php"><button class="btn btn-primary btn-lg">Sign-up</button></a>
				</div>
				<img class="image-fluid w-50 d-none d-sm-block" src="images/assets/header.svg" alt="" />
			</div>
		</div>
	</section>
	<!-- Cards Section -->
	<section class="p-5">
		<div class="container">
			<div class="row text-center g-4">
				<!-- Card-1 -->
				<div class="col-md">
					<div class="card bg-dark text-light">
						<div class="card-body text-center">
							<div class="h1 mb-3">
								<i class="bi bi-book"></i>
							</div>
							<h3 class="card-title mb-3">E-books</h3>
							<p class="card-text">
								Searching for a book? <br> Click here to explore
							</p>
							<a href="" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<!-- Card-2 -->
				<div class="col-md">
					<div class="card bg-light text-dark">
						<div class="card-body text-center">
							<div class="h1 mb-3">
								<i class="bi bi-people"></i>
							</div>
							<h3 class="card-title mb-3">Daily News</h3>
							<p class="card-text">
								Keep yourself updated with news across the world
							</p>
							<a href="newspapers.php" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<!-- Card-3 -->
				<div class="col-md">
					<div class="card bg-dark text-light">
						<div class="card-body text-center">
							<div class="h1 mb-3">
								<i class="bi bi-person-square"></i>
							</div>
							<h3 class="card-title mb-3">Magazines and Novels</h3>
							<p class="card-text">
								Make your time productive during leisure hours.
							</p>
							<a href="" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section -->
	<section class="p-5">
		<div class="container">
			<div class="row align-items-center-justify-content-between">
				<div class="col-md">
					<img src="images/assets/book-lover.svg" class="img-fluid" alt="" />
				</div>
				<div class="col-md p-5">
					<h2>Lorem, ipsum dolor.</h2>
					<p class="lead">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Id assumenda saepe hic inventore dolor
						vero.
					</p>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit nam porro excepturi similique ad!
						Assumenda!
					</p>
					<a href="" class="btn btn-light mt-3">
						<i class="bi bi-chevron-right"></i> Explore!</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Section -->
	<section class="p-5 bg-dark text-light">
		<div class="container">
			<div class="row align-items-center-justify-content-between">
				<div class="col-md p-5">
					<h2>Student Request for books</h2>
					<p class="lead">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Id assumenda saepe hic inventore dolor
						vero.
					</p>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit nam porro excepturi similique ad!
						Assumenda!
					</p>
					<a href="" class="btn btn-light mt-3">
						<i class="bi bi-chevron-right"></i> Explore!</a>
				</div>
				<div class="col-md">
					<img src="images/assets/calendar.svg" class="img-fluid" alt="" />
				</div>
			</div>
		</div>
	</section>

	<!-- FAQ'S -->
	<section class="p-5" id="faqQuestions">
		<div class="container">
			<h2 class="text-center mb-4">Frequently Asked Questions</h2>
			<!-- Accordion-Flush Bootstrap -->
			<div class="accordion accordion-flush" id="questions">
				<!-- Item-1 -->
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-1">
							Accordion Item #1
						</button>
					</h2>
					<div id="question-1" class="accordion-collapse collapse" data-bs-parent="#questions">
						<div class="accordion-body">
							Placeholder content for this accordion, which is intended to demonstrate the
							<code>.accordion-flush</code> class. This is the first item's accordion body.
						</div>
					</div>
				</div>

				<!-- Item-2 -->
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-2">
							Accordion Item #2
						</button>
					</h2>
					<div id="question-2" class="accordion-collapse collapse" data-bs-parent="#questions">
						<div class="accordion-body">
							Placeholder content for this accordion, which is intended to demonstrate the
							<code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine
							this being filled with some actual content.
						</div>
					</div>
				</div>

				<!-- Item-3 -->
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-3">
							Accordion Item #3
						</button>
					</h2>
					<div id="question-3" class="accordion-collapse collapse" data-bs-parent="#questions">
						<div class="accordion-body">
							Placeholder content for this accordion, which is intended to demonstrate the
							<code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more
							exciting happening here in terms of content, but just filling
							up the space to make it look, at least at first glance, a bit more representative of how
							this would look in a real-world application.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Team Section -->
	<section class="p-5 bg-primary">
		<div class="container">
			<h2 class="text-center text-white">Our Team Panel</h2>
			<br>

		</div>
		<div class="row g-4">
			<!-- Member-1 -->

			<div class="col-md-3 col-lg-2">
				<div class="card bg-light">
					<div class="card-body text-center">

						<h3 class="card-title mb-3">Manasa</h3>

						<a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
					</div>
				</div>
			</div>
			<!-- Member-2 -->
			<div class="col-md-3 col-lg-2">
				<div class="card bg-light">
					<div class="card-body text-center">

						<h3 class="card-title mb-3">Srinitha</h3>

						<a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
					</div>
				</div>
			</div>
			<!-- Member-3 -->
			<div class="col-md-3 col-lg-2">
				<div class="card bg-light">
					<div class="card-body text-center">

						<h3 class="card-title mb-3">Sikander</h3>

						<a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
					</div>
				</div>
			</div>
			<!-- Member-4 -->
			<div class="col-md-3 col-lg-2">
				<div class="card bg-light">
					<div class="card-body text-center">

						<h3 class="card-title mb-3">Yugal</h3>

						<a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
					</div>
				</div>
			</div>

			<!-- Member-5-->
			<div class="col-md-3 col-lg-2">
				<div class="card bg-light">
					<div class="card-body text-center">

						<h3 class="card-title mb-3">Umaid</h3>

						<a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
						<a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<section class="p-5">
		<div class="container">
			<div class="row g-4">
				<div class="col">
					<h2 class="text-center mb-4">Contact Details</h2>
					<ul class="list-group list-group-flush lead">
						<li class="list-group-item">
							<span class="fw-bold">Main Location:</span>
						</li>
						<li class="list-group-item">
							<span class="fw-bold">Enrollment Phone:</span> XXXXXXXXXXXX
						</li>
						<li class="list-group-item">
							<span class="fw-bold">Student Phone:</span> XXXXXXXXXXXX
						</li>
						<li class="list-group-item">
							<span class="fw-bold">Enrollment Email:</span> XXXXXXXX@XX.XX
						</li>
						<li class="list-group-item">
							<span class="fw-bold">Student Email:</span> XXXXXX@XXXX.XX
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="p-5 bg-dark text-center text-white position-relative">
		<div class="container">
			<a href=""><i class="bi bi-envelope text-popup mx-1"></i></a>
			<a href=""><i class="bi bi-telephone text-popup mx-1"></i></a>
			<a href=""><i class="bi bi-youtube text-popup mx-1"></i></a>
			<a href=""><i class="bi bi-twitter text-popup mx-1"></i></a>
			<a href=""><i class="bi bi-facebook text-popup mx-1"></i></a>
			<a href=""><i class="bi bi-linkedin text-popup mx-1"></i></a>
			<a href=""><i class="bi bi-instagram text-popup mx-1"></i></a>
			<p class="lead" style="opacity: 0.3;">Copyright &copy; E-Library 2021</p>
			<a href="#" class="position-absolute bottom-0 end-0 p-5"><i class="bi bi-arrow-up-circle h1"></i></a>
		</div>
	</footer>
	<!-- Bootstrap JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>