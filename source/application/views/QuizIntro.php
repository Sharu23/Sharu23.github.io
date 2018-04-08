<?php include 'header.php';?>

<!--This is where the main content has been written, there are buttons that will take the user to the question page and settings page -->
<div class="maincell">
	<h1>Quiz Time</h1>
	<div style="width:97%; margin-left:auto; margin-right:auto">
		<h5>The Rules</h5>
		<p>Let’s see how well you have learned Topic 1 with 10 questions. Read the questions carefully before answering it. You will be happy to know that this quiz does not have a timer, so take your time and answer them carefully. <br class="small">
		What if I get stuck? There is a hint feature which you may want to use to help you answer the questions. <br class="small">
		What if I still got it wrong? Don’t worry, we all learn from our mistakes. After each question you get wrong, there will be an explanation to help you understand.<br class="small">
		At the corner of each the question, the topic icon is presented to help you associate with the topic; this can help to identify which topics you are good at or need revise again.
		</p>

		<form>
			<input class="Quizbutton" type="button" value="Start Quiz" onclick="openWinStart()">
		</form>

	</div>
</div>

<!-- Footer of the page -->
<?php include 'footer.php';?>


<!-- Script for opening the page in a new window (Question page) -->
<script>
function openWinSettings() {
		window.open("Settings.html");
}
</script>

<script>
function openWinStart() {
		window.open("<?php echo base_url();?>QuizTest");
}
</script>

</body>
</html>
