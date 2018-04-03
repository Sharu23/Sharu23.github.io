<?php include 'header.php';?>

  <div class="maincell">
    <h1 style="width:90%; margin-left:auto; margin-right:auto">Quiz</h1>




    <?php
        $i = 1;
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
        $array10 = array();
        $array11 = array();
      ?>


    <?php foreach($checks as $checkans) {
       array_push($array1, $checkans); } ?>

      <?php foreach($results as $res) {
        array_push($array2, $res->RowID);
        array_push($array3, $res->ModuleID);
        array_push($array4, $res->TopicID);
        array_push($array5, $res->Question);
        array_push($array6, $res->choice1);
        array_push($array7, $res->choice2);
        array_push($array8, $res->choice3);
        array_push($array9, $res->CorrectAnswer);
        array_push($array10, $res->Hint);
        array_push($array11, $res->Explanation);

      } ?>
<?php print_r($array2);?>

<?php for($x=0; $x<10; $x++) { ?>
  <p><?=$array2[$x]?>.<?=$array5[$x]?></p>

 <form method="post" action="<?php echo base_url();?>index.php/welcome/index">

<?php if ($array9[$x]!=$array1[$x]) { ?>
  <p><span style="color: red"><?=$array1[$x]?></span></p>
  <p><span style="color: green"><?=$array9[$x]?></span></p>

<?php } else { ?>

    <p><span style="color: green"><?=$array1[$x]?></span></p>

    <?php $score = $score +1; ?>

<?php } } ?>

<br><br>

<h2>Your Score: </h2>
  <h1><?=$score?>/10</h1>

  <button type="button" class="Quizbutton" value="Start Again" onclick="refresh()"></button>

</form>

<?php include 'footer.php';?>


<script>

  function refresh() {
    location.reload();
  }
</script>
