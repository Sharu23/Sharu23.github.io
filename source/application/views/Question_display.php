<?php
  $test = "SELECT * FROM $tbl_name ORDER BY ID LIMIT 1 WHERE id='$page'";
  $result = mysqli_query($db,$test);
?>

<h5>Question <?=$row['RowID']?>:</h5>
<p><?=$row['Question']?></p>

<label for="label_<?=$row['RowID']?>_1"><input type="radio" name="quizid<?=$row['RowID']?>" value="<?=$ans_array[0]?>" id="label_<?=$row['RowID']?>_1"><?=$ans_array[0]?></label><br>
<label for="label_<?=$row['RowID']?>_2"><input type="radio" name="quizid<?=$row['RowID']?>" value="<?=$ans_array[1]?>" id="label_<?=$row['RowID']?>_2"><?=$ans_array[1]?></label><br>
<label for="label_<?=$row['RowID']?>_3"><input type="radio" name="quizid<?=$row['RowID']?>" value="<?=$ans_array[2]?>" id="label_<?=$row['RowID']?>_3"><?=$ans_array[2]?></label><br>
<label for="label_<?=$row['RowID']?>_4"><input type="radio" name="quizid<?=$row['RowID']?>" value="<?=$ans_array[3]?>" id="label_<?=$row['RowID']?>_4"><?=$ans_array[3]?></label><br>
