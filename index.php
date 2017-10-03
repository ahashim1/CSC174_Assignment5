<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Importing fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Importing materialize css (minimized) -->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen"/>
	<!-- Importing override file -->
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>
	<!-- Setting viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8">
	<title>Portfolios</title>

</head>

<body>
		
		<!-- navigation done by John -->
		<nav class="z-depth-0 blue-grey lighten-2">
			<div class="nav-container nav-wrapper">
				<a href="index.php" class="home-link-left">Home</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i>>
				<ul class="right hide-on-med-and-down">
					<li><a href="johndenzer.php" class="buton-disabled">John Denzer</a></li>
					<li><a href="alihashim.php" class="buton-disabled">Ali Hashim</a></li>
					<li><a href="aaronraymond.php" class="buton-disabled">Aaron Raymond</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="johndenzer.php" class="buton-disabled">John Denzer</a></li>
					<li><a href="alihashim.php" class="buton-disabled">Ali Hashim</a></li>
					<li><a href="aaronraymond.php" class="buton-disabled">Aaron Raymond</a></li>
				</ul>
			</div>
		</nav>

	<div class="container">

	<div class="row"><!-- row 1 -->
		<div class="card-panel blue-grey lighten-2 z-depth-0 col m12 l8 push-l4">
			<h2>John Denzer</h2>
			<p>John studies financial economics at the University of Rochester. John has an avid interest in sports and computers. He enjoys following tech news and one of his favorite companies is AMD. John is a right handed starting pitcher and was 2nd in the NCAA for least amount of walks per nine innings.</p>

			<div class="center-align">
				<a class="btn light-blue lighten-2 z-depth-0" href="johndenzer.php">Read more about John</a>
			</div>
		</div>
		<div class="col l4 pull-l8 center-align">
			<img src="images/baseball.png" alt="Baseball player hitting a ball">
		</div>
	</div><!-- row 1 -->

	<div class="row"><!-- row 2 -->
		<div class="card-panel blue-grey lighten-2 z-depth-0 col m12 l8 ">
			<h2>Ali Hashim</h2>

			<p>Ali is a twenty-one year old optical engineer studying at the University of Rochester. He is passionate about manipulating light to create great products. He is also a self-taught mobile application developer and graphic designer and is looking to apply his skills to serve a design, testing, and manufacturing role.</p>

			<div class="center-align">
				<a class="btn light-blue lighten-2 z-depth-0" href="alihashim.php">Read more about Ali</a>
			</div>
		</div>
		<div class="col l4 center-align">
			<img src="images/laptop_icon.png" alt="Laptop icon" height="200" width="200">
		</div>
	</div><!-- row 2 -->

	<div class="row"><!-- row 3 -->
		<div class="card-panel blue-grey lighten-2 z-depth-0 col m12 l8 push-l4">
			<h2>Aaron Raymond</h2>

			<p>Aaron is currently a senior studying Environmental Studies at the University of Rochester. He enjoys combining his photographic skills with his computer skills to create stunning websites and user experiences. He also has experience in the IT world which has helped strengthen his communication and problem solving skills.</p>

			<div class="center-align">
			<a class="btn light-blue lighten-2 z-depth-0" href="aaronraymond.php">Read more about Aaron</a>
			</div>
		</div>
		<div class="col l4 pull-l8 center-align">
			<img src="images/camera.png" alt="Camera Icon" height="200" width="200">
		</div>
	</div><!-- row 3 -->
	
	</div><!-- container -->
	
	<!-- Init JQ and collapse menu-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript"> $(".button-collapse").sideNav();</script>
</body>
</html>
