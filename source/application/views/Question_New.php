<?php include 'header.php';?>
  <div class="maincell" >
    <h1 style="width:90%; margin-left:auto; margin-right:auto">Quiz</h1>
    <?php $i = 1; $row_no_array =array(); $test=array(); ?>

    <?php foreach($questions as $row) { ?>

    <?php $ans_array = array($row ->choice1, $row->choice2, $row->choice3, $row->CorrectAnswer);
		shuffle($ans_array);?>


    <div class="roundedBorder" style="padding-left:10px">
		<p><?php echo $i ?>.<?=$row->Question?></p>

    <div style="padding-left:20px">
  		<label for="label_<?=$row->RowID?>_1"><input type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[0]?>" id="label_<?=$row->RowID?>_1"><?=$ans_array[0]?></label><br>
  		<label for="label_<?=$row->RowID?>_2"><input type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[1]?>" id="label_<?=$row->RowID?>_2"><?=$ans_array[1]?></label><br>
  		<label for="label_<?=$row->RowID?>_3"><input type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[2]?>" id="label_<?=$row->RowID?>_3"><?=$ans_array[2]?></label><br>
  		<label for="label_<?=$row->RowID?>_4"><input type="radio" name="quizid<?=$row->RowID?>" value="<?=$ans_array[3]?>" id="label_<?=$row->RowID?>_4"><?=$ans_array[3]?></label><br>
    </div>
    </div>


    <?php $i++; array_push($row_no_array,$row->RowID); ?>
  <?php } ?>

  <?php $row_id = implode(" ", $row_no_array); echo $row_id?>

<form method="POST" action="<?php echo base_url();?>QuizTest/resultdisplay"['<?=$row_id?>']>
  <input type="submit" class="Quizbutton" value="Check"></input>
</form>
  <button class="Quizbutton" type="button" onclick="refresh()">Start Again</button>
  </div>

  <p id="demo">TE</p>

<?php include 'footer.php';?>


<script>

  function refresh() {
    location.reload();
  }
</script>

<script type="text/javascript">
public function result(){

<?php echo $row_id?>;


}




</script>
