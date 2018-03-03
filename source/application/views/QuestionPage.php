<?php include_once('header.php'); ?>

		<div class="maincell">
			<h1>Quiz Time!<!--<img src="../img/logo.png" alt= "logo" class="icon">--></h1>
			<?php
			echo form_open(base_url('QuestionsController/questions'.$next_question)); ?>

			<label><input type="radio" name="answer" value="1">Yes</label>
			<label><input type="radio" name="answer" value="0">No</label>
			<button type="submit">Submit</button>
		</div>

		<!-- Footer of the page -->
		<?php include_once('footer.php'); ?>

</body>
