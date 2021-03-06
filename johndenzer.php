	<?php 
		$title = "John";
		include "inc/title.inc"; 
	?>

	<?php include "inc/navigation.inc";?>

	<div class="container"><!-- Container -->
	
		<div class="wrapper">
		
			<div class="one">
				<header class="row">
					<h1 class="center-align">John Denzer</h1>
				</header>
			</div>
			
			<div class="two">
				<img src="images/john_baseball.jpg" alt="John Denzer" class="portrait">
			</div>
			
			<div class="three card-panel blue-grey lighten-2 z-depth-0">
				<section>
					<h2 class="portfolio">About Me</h2>
					<p>I am a junior studying Financial Economics at the University of Rochester.  I am a huge fan of European soccer and I very much enjoy playing in my spare time.  I am hoping to break into the investment banking sector after graduation.</p>
				</section>
			</div>
					
			<div class="four card-panel blue-grey lighten-2 z-depth-0">
				<h2 class="portfolio">Experience</h2>
				
				<section>
					<h3 class="portfolio">Investment Banking - Exit Partners, LLC</h3>
					
					<p>I worked as a summer analsyt focusing on typical day to day work of an investment banker.  I edited CIMs, created pitchbooks, and worked on financial modeling for the firm's clients. </p>
				</section>
			
				<section>
					<h3 class="portfolio">Computer Building - Jack's PCs</h3>
				
					<p>I started a small business focused on building in home desktops for clients.  I was involved in the planning, building and installing portions of the sales. </p>
				</section>
				
				<section>
					<h3 class="portfolio">Philanthropy - Young Men's Service Leauge</h3>
				
					<p>I worked as the President of a Dallas based philanthropy focused on helping special needs children and working with them in a school like environment.</p>
				 </section>
			</div>
			
			<div class="five card-panel blue-grey lighten-2 z-depth-0">
			
				<section>
				<h2 class="portfolio">Extracurriculars</h2> 

				<p>I have played baseball now for 15 years or so and it was my lifelong dream to play college baseball and luckily I was given that opportunity when I came to the University of Rochester.  I am a right handed starting pitcher and I actually set a school record this last season for least amount of walks per nine innings pitched.  I also was 2nd in the NCAA for the same stat this last season. I love baseball and I hope the last two seasons of my career do not go too quickly.  I am very interested in sports and in computers.  I follow European soccer very closely and I am an avid computer builder.  I am a huge Tottenham Hotspur fan and follow the news religiously regarding what is going on with them currently.  I enjoy following tech news as well and one of my favorite companies is AMD and I love following how their stock moves so quickly in the market due to their contributions to the semiconductor space. </p>
				</section>
				
			</div>
		
		</div><!-- Wrapper -->

		<?php 
			$person = "© John Denzer 2017";
			include "inc/footer.inc";
			
		?>
	
	</div> <!-- container -->

	
	<?php include "inc/jq.inc";?>
	
	</body>
</html>