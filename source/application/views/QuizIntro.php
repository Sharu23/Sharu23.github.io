<?php include 'header.php';?>

		<!--This is where the main content has been written, there are buttons that will take the user to the question page and settings page -->
		<div class="maincell">
			<h1>Quiz Time</h1>
			<h5>The Rules</h5>
			<p>Let’s see how well you have learned Topic 1 with 10 questions. Read the questions carefully before answering it. You will be happy to know that this quiz does not have a timer, so take your time and answer them carefully. <br class="small">
			What if I get stuck? There is a hint feature which you may want to use to help you answer the questions. <br class="small">
			What if I still got it wrong? Don’t worry, we all learn from our mistakes. After each question you get wrong, there will be an explanation to help you understand.<br class="small">
			At the corner of each the question, the topic icon is presented to help you associate with the topic; this can help to identify which topics you are good at or need revise again.
			</p>
			<!--<form>
				<input class="Quizbutton" type="button" value="Start Quiz" onclick="openWinQuizQus()">
			</form>-->
			<form method="" action="?php echo QuizQuestions.php/Questions/QuizQuestions">
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

	<!-- Footer of the page -->
	<?php include 'footer.php';?>

	<!-- Script for opening the page in a new window (Question page) -->
	<script>
	function openWinQuizQus() {
	    window.open("QuizQuestions.php");
	}
	</script>

	<!-- Script for opening the page in a new window (Question page) -->
	<script>
	function openWinSettings() {
			window.open("Settings.html");
	}
	</script>

</body>
</html>
