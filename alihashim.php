<!doctype html>
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
	<title>Ali Hashim's Portfolio</title>

</head>

<body>

		<!-- navigation done by John -->
		
		<nav>
			<div class="nav-container nav-wrapper">
				<a href="index.php" class="home-link-left">Home</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i>>
				<ul class="right hide-on-med-and-down">
					<li><a href="johndenzer.php">John Denzer</a></li>
					<li><a href="alihashim.php">Ali Hashim</a></li>
					<li><a href="aaronraymond.php">Aaron Raymond</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="johndenzer.php">John Denzer</a></li>
					<li><a href="alihashim.php">Ali Hashim</a></li>
					<li><a href="aaronraymond.php">Aaron Raymond</a></li>
				</ul>
			</div>
		</nav>

	<div class="container">

	<header>
		<h1>Ali Hashim</h1>
	</header>
	

	<!-- About Me Section -->
	<section>
		<h2>About Me</h2>
		<p>
			I’m a twenty-one year old optical engineer studying at the University of Rochester. I am passionate about manipulating light to create great products! I am also a self-taught mobile application developer and graphic designer and am looking to apply my skills to serve a design, testing, and manufacturing role.
		</p>
	</section>

	<!-- The main section is composed of my experiences -->
	<main>
		<h2>Experience</h2>

		<section>
			<h3>Cymer, An ASML Company Optical Engineering Intern</h3>
			<p>
				Developed and conducted experiments in a cleanroom environment to characterize and determine if polarization components are capable of scaling into production for EUV lithography systems.
			</p>
		</section>

		<section>
			<h3>University of Rochester Optics Lab Teaching Assistant</h3>
			<p>Helped teach, grade, and direct students how to learn the basic laboratory techniques of geometrical optics, physical optics, and how to write lab reports.
			</p>
		</section>

		<section>
			<h3>Laboratory for Laser Energetics Research Intern</h3>
			<p>Designed and developed an image analysis program in MATLAB with openCV for an x-ray spectrometer implemented in LLE lasers to characterize the high-energy-density plasmas created in fusion experiments.
			</p>
		</section>

		<section>
			<h3>University of Rochester Medical Center Research Assistant</h3>
			<p>Conducted biological lab techniques to determine the environmental stressors for age-related macular disorders. </p>
		</section>
	

		<section>
			<h3>Computer Skills</h3>
			<ul>
				<li>Adobe Experience Design</li>
				<li>Adobe Illustrator</li>
				<li>Adobe Photoshop</li>
				<li>HTML & CSS</li>
				<li>Java</li>
				<li>JavaScript</li>
				<li>Matlab</li>
				<li>Microsoft Office</li>
				<li>Python</li>
				<li>Swift</li>
			</ul>
		</section>

		<section>
			<h3>Optics Skills</h3>
			<ul>
				<li>Alignment & Mounting Optics</li>
				<li>Code V</li>
				<li>Laser Engineering</li>
				<li>Lithography</li>
				<li>Liquid Crystal Design</li>
				<li>Optoelectronics</li>
				<li>Zemax</li>
			</ul>
		</section>

	</main>

	<!-- Copyright footer -->
	<footer>
		<div>© Ali Hashim 2017</div>
	</footer>
	
	</div>

	<!-- Init JQ -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript"> $(".button-collapse").sideNav();</script>
</body>
</html>
