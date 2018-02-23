<?php include_once('header.php'); ?>

		<div class="maincell">
			<h1>Quiz Time!<!--<img src="../img/logo.png" alt= "logo" class="icon">--></h1>
			<?php foreach($questions as $row) { ?>

			<?php $ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->CorrectAnswer);
			shuffle($ans_array);?>

			<div class="roundedBorder">
				<div class="black">
					<h5>Question <?=$row->RowID?>:</h5>
					<p><?=$row->Question?></p>
				</div>
				<label for="label_<?=$row->RowID?>_1"><input type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[0]?>" id="label_<?=$row->RowID?>_1"><?=$ans_array[0]?></label><br>
				<label for="label_<?=$row->RowID?>_2"><input type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[1]?>" id="label_<?=$row->RowID?>_2"><?=$ans_array[1]?></label><br>
				<label for="label_<?=$row->RowID?>_3"><input type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[2]?>" id="label_<?=$row->RowID?>_3"><?=$ans_array[2]?></label><br>
				<label for="label_<?=$row->RowID?>_4"><input type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[3]?>" id="label_<?=$row->RowID?>_4"><?=$ans_array[3]?></label><br>

				<button class="Quizbutton" value="Submit">Submit</button>
			</div>
			<?php }?>


		</div>

		<!-- Footer of the page -->
		<?php include_once('footer.php'); ?>

</body>
