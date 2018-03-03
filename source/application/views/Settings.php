<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<link href= "../css/mystyle.css" rel="stylesheet"> <!--My stylesheet -->
    <link rel="stylesheet" href="../css/normalize.css">  <!--Foundation style sheet -->
    <link rel="stylesheet" href="../css/foundation.css">
    <script src="js/vendor/modernizr.js"></script>

	<meta charset= "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Today's 4 Revision</title>
	<link rel="icon" type="image/png" href="../img/Icon.png"/ sizes="32x32">  <!--Simplified logo for the title section -->
</head>

<body>
	<!--Main menu -->
	<header>
		<div class= "container">
			<table class= "transparent"> <!-- To positions the logo and menu in the same row -->
				<tr>
					<th>
						<a href= "index.html"> <!-- Logo linking to the homepage -->
						<img src= "../img/logo.png" alt= "logo" class="logo" align="left">
					</th>
					<th>
						<div class="tablet">  <!-- If mobile view humburger icon appearing, otherwise the menu appearing -->
						<img src= "../img/hamburger.png" alt= "hamburger" height="20" width="20" align="right" onclick="hamburgerFunction()">
						</div>
						<nav class="mobile">
							<ul>
								<li><a href= "index.html"> Homepage</a></li>
								<li><a href= "Modules.html"> Modules</a></li>
								<li><a href= "Quiz.html"> Quiz</a></li>
							</ul>
						</nav>
					</th>
				</tr>
			</table>
		</div>
		<div id="hamburgerDiv" style="display: none;"> <!-- If humburger icon appears these menu should appear -->
		<div class= "hamburger">
			<nav>
				<ul>
					<li><a href= "index.html"> Homepage</a></li>
					<li><a href= "Modules.html"> Modules</a></li>
					<li><a href= "Quiz.html"> Quiz</a></li>
				</ul>
			</nav>
		</div>
		</div>
		</header>

		<div class="maincell">
			<h1>Introduction Settings <img src="../img/logo.png" alt= "logo" class="icon"></h1>
			<h5>Title</h5>
			<p >Sample text for all the pages</p>
		</div>

	<!-- Footer of the page -->
	<footer>
		<div class="container">&copy Sharugi Balachandran;<span style="float:right">More details</span></div>
	</footer>

	<!--Script for the humburger menu, when the menu should appear and disappear-->
	<script>
	function hamburgerFunction() {
	    var x = document.getElementById("hamburgerDiv");

			if(x.style.display === "none") {
				x.style.display = "block";
			}
			else {
				x.style.display = "none";
			}
	}
	</script>

</body>
