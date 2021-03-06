<!--
So I see you are having a look at my source code!
All written by myself, with some inspiration of course, as this is my first attempt with Bootstrap.
If you found this secret snazziness, or just want to ask some questions:
Discord		Craig#1708,
Skype:		lynx1250
-->

<!-- To Do -->
<!-- PHP SQL search bar for projects page -->
<!-- Carousel with images of project photos -->


<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Josefin+Slab" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="JS.js"></script>
		<title>Craig Stratford | Home</title>
	</head>
	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-toggleable-md navbar-expand-md navbar-light fixed-top navbar-default">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleNavbarColour()">
				<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="resources/logo.png"></a>
				<div class="collapse navbar-collapse" id="navbarToggler">
					<ul class="navbar-nav mr-auto mt-2 mt-md-0">
						<li class="nav-item">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="AboutMe.php">About Me</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="projects.php">Projects</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
			<div class="col-sm-6 col-md-4 col-lg-3 card-profile-bg">
				<div class="card my-3 card-profile">
					<img class="card-img-top" src="resources/profile.png" alt="Card image cap">
					<div class="card-block p-2">
						<h4 class="card-title">Craig Stratford</h4>
						<p class="card-text lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
			<div class="main-bg">
				<div class="pt-3" style="text-align: center; background-color: white; font-family: 'Josefin Slab', serif; font-size: 2rem">
					<h1 class="display-3">Some of my Projects</h1>
					<p>A small overview of some of my best personal projects</p>
				</div>
				<div class="card-deck m-0">
					<div class="card mt-3 mb-5">
						<img class="card-img-top" src="resources/placeholder.png" alt="Card image cap">
						<div class="card-block p-2">
							<h4 class="card-title">Project1</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
					<div class="card my-3">
						<img class="card-img-top" src="resources/placeholder.png" alt="Card image cap">
						<div class="card-block p-2">
							<h4 class="card-title">Project2</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
					<div class="card my-3">
						<img class="card-img-top" src="resources/placeholder.png" alt="Card image cap">
						<div class="card-block p-2">
							<h4 class="card-title">Project3</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
					<div class="card my-3">
						<img class="card-img-top" src="resources/placeholder.png" alt="Card image cap">
						<div class="card-block p-2">
							<h4 class="card-title">Project4</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
					<div class="card my-3">
						<img class="card-img-top" src="resources/placeholder.png" alt="Card image cap">
						<div class="card-block p-2">
							<h4 class="card-title">Project5</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>