<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<link rel="stylesheet" href="../_static/css/mystyle.css" type="text/css" />
	<!--<link href= "../_styles/mystyle.css" rel="stylesheet"> --><!-- MY styling sheet -->
    <link href="http://localhost/source/user_guide/_static/css/foundation.css" rel="stylesheet"> <!-- foundations styling sheet -->

	<meta charset= "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Today's 4 Revision</title>
	<link rel="icon" type="image/png" href="http://localhost/source/user_guide/_images/Icon.png"/ sizes="32x32"> <!--Simplified logo for the title section -->
</head>

	<body>
		<header>
			<div class= "container">
				<table class= "transparent"> <!-- To positions the logo and menu in the same row -->
					<tr>
	          <th>
							<a href= "http://localhost/source/index.php/Welcome"> <!-- Logo linking to the homepage -->
							<img src= "http://localhost/source/user_guide/_images/logo.png" alt= "logo" class="logo" align="left">
						</th>
	          <th>
							<div class="tablet"> <!-- If mobile view humburger icon appearing, otherwise the menu appearing -->
							<img src= "http://localhost/source/user_guide/_images/hamburger.png" alt= "hamburger" height="20" width="20" align="right" onclick="hamburgerFunction()">
							</div>
							<nav class="mobile">
								<ul>
									<li><a href= "http://localhost/source/application/index.php/Welcome"> Homepage</a></li>
									<li><a href= "http://localhost/source/index.php/ModulesController"> Modules</a></li>
									<li><a href= "http://localhost/source/index.php/QuizController"> Quiz</a></li>
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
						<li><a href= "http://localhost/source/index.php/Welcome"> Homepage</a></li>
						<li><a href= "http://localhost/source/index.php/ModulesController"> Modules</a></li>
						<li><a href= "http://localhost/source/index.php/QuizController"> Quiz</a></li>
					</ul>
				</nav>
			</div>
			</div>
			</header>
