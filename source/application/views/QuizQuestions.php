<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<link href= "../css/mystyle.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/foundation.css">
    <script src="js/vendor/modernizr.js"></script>

	<meta charset= "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Today's 4 Revision</title>
	<link rel="icon" type="image/png" href="../img/Icon.png"/ sizes="32x32">
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
						<div class="tablet"> <!-- If mobile view humburger icon appearing, otherwise the menu appearing -->
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
		<div id="hamburgerDiv" style="display: none;">  <!-- If humburger icon appears these menu should appear -->
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
			<h1>Quiz<!--<img src="../img/logo.png" alt= "logo" class="icon">--></h1>
			<h5>PLAY IT PAGE Title</h5>
			<p >Sample text for all the pages</p>

		</div>

	<footer>
		<div class="container">&copy; Sharugi Balachandran<span style="float:right">More details</span></div>
	</footer>

</body>
