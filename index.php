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
		<nav>
			<div class="nav-container nav-wrapper">
				<a href="index.php" class="home-link-left">Home</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i>
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
	<h1>Portfolios</h1>

	<section>
		<h2>John Denzer</h2>
		<p>John studies financial economics at the University of Rochester. John has an avid interest in sports and computers. He enjoys following tech news and one of his favorite companies is AMD. John is a right handed starting pitcher and was 2nd in the NCAA for least amount of walks per nine innings.</p>
		<a class="btn" href="johndenzer.php">Read more about John</a>

	</section>

	<section>
		<h2>Ali Hashim</h2>

		<p>Ali is a twenty-one year old optical engineer studying at the University of Rochester. He is passionate about manipulating light to create great products. He is also a self-taught mobile application developer and graphic designer and is looking to apply his skills to serve a design, testing, and manufacturing role.</p>

		<a class="btn" href="alihashim.php">Read more about Ali</a>

	</section>

	<section>
		<h2>Aaron Raymond</h2>

		<p>Aaron is currently a senior studying Environmental Studies at the University of Rochester. He enjoys combining his photographic skills with his computer skills to create stunning websites and user experiences. He also has experience in the IT world which has helped strengthen his communication and problem solving skills.</p>

		<a class="btn" href="alihashim.php">Read more about Aaron</a>

	</section>
	
	</div>
	
	<!-- Init JQ and collapse menu-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript"> $(".button-collapse").sideNav();</script>
</body>
</html>
