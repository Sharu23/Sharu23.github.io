<?php include 'header.php';?>

<!--This is where the main content has been written, there are buttons that will take the user to the question page and settings page -->
<div class="maincell">
	<h1>Quiz Time</h1>
	<div style="width:97%; margin-left:auto; margin-right:auto">
	<iframe src="//www.slideshare.net/slideshow/embed_code/key/McZDrojle6tgy1" width="100%" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
		<br><br><p>Let’s see how well you have learned. Read the questions carefully before answering it. You will be happy to know that this quiz does not have a timer, so take your time and answer them carefully.
		<br class="small">
		</p>
		<br><h5>The Quizzes</h5>
			<p>Project Management and System Designs Quiz</p>
			<button class="Quizbutton" type="button" value="Start Quiz" onclick="openWinStart()">Start Quiz</button>

			<br><br><p>Computer Architecture Quiz</p>
			<button class="Quizbutton" type="button" value="Start Quiz">Start Quiz</button>
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
