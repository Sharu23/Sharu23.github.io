<!DOCTYPE html>
<html lang="en">
<head>
	<link href= "../../css/mystyle.css" rel="stylesheet">
		<link rel="stylesheet" href="../../css/normalize.css">
		<link rel="stylesheet" href="../../css/foundation.css">
		<script src="js/vendor/modernizr.js"></script>

	<meta charset= "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Today's 4 Revision</title>
	<link rel="icon" type="image/png" href="../../img/Icon.png"/ sizes="32x32">
</head>

<body>
	<header>
		<div class= "container">
			<table class= "transparent">
				<tr>
					<th>
						<a href= "Homepage.html">
						<img src= "../../img/logo.png" alt= "logo" class="logo" align="left">
					</th>
					<th>
						<img src= "../../img/hamburger.png" alt= "hamburger" height="20" width="20" align="right" onclick="hamburgerFunction()">
					</th>
				</tr>
			</table>
		</div>
		<div id="hamburgerDiv" style="display: none;">
		<div class= "hamburger">
			<nav>
				<ul>
					<li><a href= "Homepage.html"> Homepage</a></li>
					<li><a href= "Modules.html"> Modules</a></li>
					<li><a href= "Quiz.html"> Quiz</a></li>
				</ul>
			</nav>
		</div>
		</div>
	</header>

	<div class="content">
		<div class="maincell">
			<h1>Quiz Time</h1>
			
		</div>
	</div>

	<footer>
		<div class="container">&copy Sharugi Balachandran;<span style="float:right">More details</span></div>
	</footer>

		<script>
		function openWinQuizQus() {
		    window.open("QuizQuestions.html");
		}
		</script>

		<script>
		function openWinSettings() {
				window.open("Settings.html");
		}
		</script>

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

</html>
