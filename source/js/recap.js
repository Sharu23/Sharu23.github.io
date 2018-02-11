var question1 = 0;
var question2 = 0;

function radio(){
  question1 = parseInt(document.querySelector('input[name = "question1"]:checked').value);
}

function checkbox(){
  var checkboxes = document.getElementsByName("question2");
  var checkboxChecked = 0;

  question2 = 0;

  for (var i = 0; i < checkboxes.length; i++){
    if(checkboxes[i].checked && (checkboxes[i].value === "wrong"))
    {
      question2 = 0; break;
    }
    if(checkboxes[i].checked && (checkboxes[i].value === "right"))
    {
      checkboxChecked += 1;
      if(checkboxChecked.length === 2)
      {
        question2 = 1;
      }
    }
  }

}

function result() {
  result = question1 + question2;
  output = "Your score is " + result;
  document.getElementById("score").innerHTML = output;
}
</script>

<script>
function refresh(){
  location.reload();
}
