<!--
So I see you are having a look at my source code!
All written by myself, with some inspiration of course, as this is my first attempt with Bootstrap.
If you found this secret snazziness, or just want to ask some questions:
						Discord		Craig#1708,
						Skype:		lynx1250
-->
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
		<title>Craig Stratford | Projects</title>
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
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About Me</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Projects <span class="sr-only">(current)</span></a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
			<div style="padding-top: 7rem;"></div>
			<div id="projectCarousel" class="carousel slide w-75 m-auto" style="border: 1rem solid #CCCCCC;" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#projectCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#projectCarousel" data-slide-to="1"></li>
					<li data-target="#projectCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100 img-fluid" src="resources/171Conv.png" alt="Slide 1">
					<div class="carousel-caption d-none d-md-block">
						<h5>Project1</h5>
						<p>Lorum Ipson blah blah blah</p>
					</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="resources/Slide2.svg" alt="Slide 2">
					<div class="carousel-caption d-none d-md-block">
						<h5>Project2</h5>
						<p>Lorum Ipson blah blah blah</p>
					</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="resources/Slide3.svg" alt="Slide 3">
					<div class="carousel-caption d-none d-md-block">
						<h5>Project3</h5>
						<p>Lorum Ipson blah blah blah</p>
					</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>