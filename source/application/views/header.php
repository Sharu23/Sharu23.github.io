<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<link href= "../css/mystyle.css" rel="stylesheet"> <!-- MY styling sheet -->
    <link rel="stylesheet" href="../css/foundation.css"> <!-- foundations styling sheet -->

	<meta charset= "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Today's 4 Revision</title>
	<link rel="icon" type="image/png" href="../img/Icon.png"/ sizes="32x32"> <!--Simplified logo for the title section -->
</head>

	<body>
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
									<li><a href= "<?php echo base_url();?>Welcome"> Homepage</a></li>
									<li><a href= "<?php echo base_url();?>ModulesController"> Modules</a></li>
									<li><a href= "<?php echo base_url();?>QuizIntroController"> Quiz</a></li>
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
						<li><a href= "<?php echo base_url();?>Welcome"> Homepage</a></li>
						<li><a href= "<?php echo base_url();?>ModulesController"> Modules</a></li>
						<li><a href= "<?php echo base_url();?>QuizIntroController"> Quiz</a></li>
					</ul>
				</nav>
			</div>
			</div>
			</header>
