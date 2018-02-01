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
			<h5>The Rules</h5>
			<p>Let’s see how well you have learned Topic 1 with 10 questions. Read the questions carefully before answering it. You will be happy to know that this quiz does not have a timer, so take your time and answer them carefully. <br class="small">
			What if I get stuck? There is a hint feature which you may want to use to help you answer the questions. <br class="small">
			What if I still got it wrong? Don’t worry, we all learn from our mistakes. After each question you get wrong, there will be an explanation to help you understand.<br class="small">
			At the corner of each the question, the topic icon is presented to help you associate with the topic; this can help to identify which topics you are good at or need revise again.
			</p>
			<form method="" action="<?php echo base_url();?>index.php/Questions/quiz_display">
				<input class="Quizbutton" type="submit" value="Start Quiz">
			</form>
			<br>
			<h5>Personalise the Test</h5>
			<p>This quiz can be personalised to your needs.<br class="small">
				You can choose to change the number of questions; which modules or topics you want to revise and which type of questions you want to answer.<br class="small">
				<form>
					<input class="Quizbutton" type="button" value="Personalise Quiz" onclick="openWinSettings()">
				</form>
			</p>
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
