<?php include 'header.php';?>

  <div class="maincell" >
    <h1 style="margin-bottom:15px;">Quiz</h1>

    <form method="post" action="<?php echo base_url();?>resultpageController">

    <?php foreach($questions as $row) { ?>

    <?php $ans_array = array($row ->choice1, $row->choice2, $row->choice3, $row->CorrectAnswer);
		shuffle($ans_array);?>


    <div class="roundedBorder" style="padding-left:10px; margin-bottom:30px;">
		<p style="font-size:20px"><b><?php echo $row->RowID ?>. <?=$row->Question?></b></p>

    <div style="padding-left:20px">
  		<label for="label_<?=$row->RowID?>_1"><p style="font-size:18px"><input style="margin-right:10px" type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[0]?>" id="label_<?=$row->RowID?>_1"><?=$ans_array[0]?></label></p>
  		<label for="label_<?=$row->RowID?>_2"><p style="font-size:18px"><input style="margin-right:10px" type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[1]?>" id="label_<?=$row->RowID?>_2"><?=$ans_array[1]?></label></p>
  		<label for="label_<?=$row->RowID?>_3"><p style="font-size:18px"><input style="margin-right:10px" type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[2]?>" id="label_<?=$row->RowID?>_3"><?=$ans_array[2]?></label></p>
  		<label for="label_<?=$row->RowID?>_4"><p style="font-size:18px"><input style="margin-right:10px" type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[3]?>" id="label_<?=$row->RowID?>_4"><?=$ans_array[3]?></label></p>
    </div>
    </div>
    <?php  } ?>


  <input type="submit" class="Quizbutton" value="Check"></input>
</form>

  <button class="Quizbutton" type="button" onclick="refresh()">Start Again</button>
  </div>

<?php include 'footer.php';?>


<script>

  function refresh() {
    location.reload();
  }
</script>
