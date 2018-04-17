<?php include 'header.php';?>

  <div class="maincell">
    <h1 style="margin-bottom:15px;">Quiz</h1>

    <?php
        $score = 0;
        $array1 = array();
        $array2 = array();
        $array3 = array();
        $array4 = array();
        $array5 = array();
        $array6 = array();
        $array7 = array();
        $array8 = array();
        $array9 = array();
      ?>

      <?php foreach($checks as $checkans) {
         array_push($array1, $checkans); } ?>

        <?php foreach($results as $res) {
          array_push($array2, $res->RowID);
          array_push($array3, $res->Question);
          array_push($array4, $res->choice1);
          array_push($array5, $res->choice2);
          array_push($array6, $res->choice3);
          array_push($array7, $res->CorrectAnswer);
          array_push($array8, $res->Hint);
          array_push($array9, $res->Explanation);

        } ?>

  <?php for($x=0; $x<10; $x++) { ?>

   <form method="post" action="<?php echo base_url();?>QuizTest">

    <div class="roundedBorder" style="padding-left:10px; margin-bottom:30px;">
    <p style="font-size:18px"><b><?=$array2[$x]?>.<?=$array3[$x]?></b></p>

  <?php if ($array7[$x]!= $array1[$x]) { ?>
    <p style="padding-bottom:0px; margin-bottom:0px;">Your Answer: <span style="color: red; font-size:16px;"><?=$array1[$x]?></span></p>
    <p>Correct Answer: <span style="color: green; font-size:16px;"><?=$array7[$x]?></span></p>
    <div style="border:1px solid black; margin-bottom:15px;margin-right:15px;padding-top:10px; padding-right:10px;">
    <p><span style="font-size:16px;"><i>Hint: <?=$array8[$x]?></i></span></p>
    <p><span style="font-size:16px;"><b>Explanation: <?=$array9[$x]?></b></span></p>
  </div>

  <?php } else { ?>

      <p>Correct Answer: <span style="color: green; font-size:16px;"><?=$array7[$x]?></span></p>
      <div style="border:1px solid black; margin-bottom:15px;margin-right:15px; padding-top:10px; padding-right:10px;">
      <p><span style="font-size:16px;"><b>Explanation: <?=$array9[$x]?></b></span></p>
      </div>
      <?php $score = $score +1; ?>

  <?php } ?>
  </div>

  <?php } ?>

  <br><br>

  <div style="text-align:center; border: 2px solid #E14658; width:40%; margin-left:auto; margin-right:auto;"> <h2 style="font-size: 30px;padding-top:20px;">Your Score: </h3>
    <p><span style="font-size:25px"><?=$score?>/10</span></p> </div>

  <table style="border:1px solid #FAFAFA;margin-bottom:0px; margin-top:10px;">
    <tr style="border:1px solid #FAFAFA;">
      <td style="border:1px solid #FAFAFA;width:60%;"></td>
      <td style="border:1px solid #FAFAFA;"><a href="<?php echo base_url();?>QuizTest" style="float:right;cursor:pointer;text-decoration:underline;color:#C0C0C0;padding-right:10px;">Start Again</a></td>
    </tr>
  </table>

</form>
  </div>



<?php include 'footer.php';?>

<script>
function refresh(){
  location.reload();
}
</script>
