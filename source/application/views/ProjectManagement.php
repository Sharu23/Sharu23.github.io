<?php include 'header.php';?>

<?php include 'sidebar.php';?>

	<!-- Main information section. This contains text, tables and images. The information have been callapsed so that it would be easier to read. Each topic have been divied into pages -->
  <div class="maincell">
    <h1>Project Management<img src="../img/ProjectManagement_white.png" alt= "Project Management Icon" class="Topicicon"></h1>
    <h4>Background information</h4>
    <button class= "section">What is a project?</button>
    <div class= "panel">A project is infinite with a defined start and finish, it has specific objectives and are made up of multiple different processes that are used to achieve. There are always people involved, who will benefit from the projects outcome.</div>
    <button class= "section">What is project management?</button>
    <div class="panel"><p>It is the processes involved in formally defining the language, methods and resources that will be used in completing your project, in a way that ensures there can be no confusion as to what needs to be done and how at any point in the lifetime of the project.</p>
    <p>Project can fail which can be if it went over the time limit, over budget or has not been completed. These can occur if the project has not been managed or lots of unexpected factors have effected it. </p></div>
		<button class="section">Common Principles</button>
		<div class= "panel">
			<p>There are some common principles that have to be looked into when thinking about a project. They are:</p>
	    <ul class="b">
	      <li><b>Work Division:</b> Thinking about all the deliveries that need to be completed along with the final product, this can be for the client or the company you are working for, like quality documentations, or testing documentations.</li>
	      <br><li><b>Communication Management:</b> Before starting a project always mention how you are going to communicate with each other, especially if it is a newly formed team. It is always advised to have more than one form of communication, so that when the first form fails, you have a back-up. Also mention how often you want to meet-up to give an update. Simple things like acronyms and technical languages should be defined at the start, and throughout the project. </li>
	      <br><li><b>Time Management:</b> The duration of the individual task and the whole project has to be considered at the start of the project. This should include the plan, reviews and reflections. Gantt chart can be used to present the time line. </li>
	      <br><li><b>Risk Management: </b>All project would have risks, even if it has been planned well. If you plan the risk that can occur during the project, you can either avoid them or be prepared when the risk has occurred. These risks can be identified from previous projects that are similar to this project; or common risks that have a high change of occurring on every project. When identifying the risk, take a note of what the probability is of it occurring and what the impact of it would be.</li>
	     	<br><li><b>Change Management: </b> A plan is only created for guidance, a project will always need to adapt to the new changes. You will always have to consider how this change can affect timing of the project.</li>
	      <br><li><b>Organisation Management:</b>You will have to identify stakeholders (anyone who has an interest in the outcome of the project). The stakeholders can be divided into 3 sections: Business, Supplier and User.The project team, which includes everyone from IT to Business. Within the project team individual roles must be identify so that is it clear of what everyone is doing.</li>
	      <br><li><b>Project Environment:</b>It is what the conditions surround the project, which can be thought as 2 questions:
	      <ul>
	      <li>It is clear <b>what</b> the project is expected to deliver</li>
	      <li>Is it clear <b>how</b> the project will achieve delivery</li>
				</ul>
					<!-- This table will not appear in the mobile view -->
	      <br><p class= "mobile">An example:</p>
				<table class="mobile">
					<tr style="border-style:none" >
						<td style="border-style:none"></td>
						<td style="border-style:none"></td>
						<td colspan="2" style="text-align:center;">How</td>
					</tr>
					<tr style="border-top-style:none;border-left-width: 0px;">
						<td style="border-style:none" style="border-left-style:none"></td>
						<td style="border-style:none"></td>
						<td style="text-align:center;" style="width:50%">Clear</td>
						<td style="text-align:center;" style="width:50">Unclear</td>
					</tr>
					<tr>
						<td rowspan="2">What</td>
						<td>Unclear</td>
						<td style="width:50%">Movie: Goals are not set but know how to make it</td>
						<td style="width:50%">Lost in the Fog:When you do not know what and how to do something</td>
					</tr>
					<tr>
						<td>Clear</td>
						<td style="width:50%">Painting by Numbers:There is no (or little) uncertainty, a clear plan can be created and executed and these types of project are the once that have been delivered many times</td>
						<td style="width:50%">Quests:The goal is clear but research is required to understand how to do it</td>
					</tr>
				</table>

	        <li><b>The Iron triangle:</b>
	          <ul>
	            <li>The objectives are completed as specified and are accepted as fit for purpose </li>
	            <li>The project is completed on time </li>
	            <li>The project is within the agreed budget</li><br>
	          </ul>
	          <img src="../img/irontriangle.png" alt= "The Iron Triangle" style="width:250px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
	        </li>
	      </ul>
        <br><br>

        <table style="border:0px";>
          <tr style="border:0px">
            <td style="border:0px"><p style="font-size:20px; color:#E14658;">This video summaries the information. Use this video to recap the information.</p></td>
            <td style="border:0px"><video width="100%" controls><source src="../img/Common Principle_website.mp4" type="video/mp4"></video></td>
          </tr>
        </table>



				<div id="myModal" class="modal">
					<span class="close cursor" onclick="closeModal()">&times;</span>
					<div class="modal-content">

						<div class="mySlides">
							<div class="numbertext"></div>
							<img src="../img/irontriangle.png" style="width:50%">
						</div>
					</div>
				</div>
  	</div>

		<!-- Recap Test Section-->
		<button class="section">Recap</button>
		<div class= "panel">

			<form id="recap">
			<fieldset>
			<h3> Answer the following questions to check if you have understood the information on this page. </h3>
			<br><h6> 1) Is time management part of the Common Principles? </h6>
			<label for="yes"><input type="radio" name="question1" value="1" id="yes" onclick="radio()"> Yes</label>
			<label for="no"><input type="radio" name="question1" value="0" id="no" onclick="radio()"> No </label><br>

			<h6> 2) When does a project fail? </h6>
			<label for="on_time"><input type="checkbox" name="question2" value="wrong" style="padding-left=10px" id="on_time" onclick="checkbox()"> When finished on time</label>
			<label for="over_bugdet"><input type="checkbox" name="question2" value="right" id="over_bugdet" onclick="checkbox()"> When over the budget</label>
			<label for="over_time_limit"><input type="checkbox" name="question2" value="right" id="over_time_limit" onclick="checkbox()"> When over the time limit</label>
			<label for="well_planned"><input type="checkbox" name="question2" value="wrong" id="well_planned" onclick="checkbox()"> When it has been well planned</label><br>
			<p><span id="score"></span></p>
			<button class="Quizbutton" type="button" value="Check" onclick="result()">Check</button>
			<button class="Quizbutton" type="button" onclick="refresh()">Start Again</button>
			</fieldset>
				</form>
		</div>
	</div>

	<!-- Section of the pagination -->
	<div class="pagination">
		<a class= "disabled">&laquo;</a>
		<a class="activePagination" href="<?php echo base_url();?>ProjectController">1</a>
	  <a href="<?php echo base_url();?>ProjectController2">2</a>
	  <a href="<?php echo base_url();?>ProjectController3">3</a>
	  <a href="<?php echo base_url();?>ProjectController4">4</a>
	  <a href="<?php echo base_url();?>ProjectController2">&raquo;</a>
	</div>

	<!-- Footer of the page -->
  <?php include 'footer.php';?>

	<!-- Script for open and closing image maodel-->
	<script>
	function openModal() {
		document.getElementById('myModal').style.display = "block";
	}

	function closeModal() {
		document.getElementById('myModal').style.display = "none";
	}

	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		var captionText = document.getElementById("caption");
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active";
		captionText.innerHTML = dots[slideIndex-1].alt;
	}
	</script>

	<!--Script for the collapsation of the sections, when it should be closed and opened-->
	<script>
		var sec = document.getElementsByClassName("section");
		var i;

		for (i = 0; i < sec.length; i++) {
		    sec[i].addEventListener("click", function() {
		        this.classList.toggle("activeSection");
		        var panel = this.nextElementSibling;
		        if (panel.style.display === "block") {
		            panel.style.display = "none";
		        } else {
		            panel.style.display = "block";
		        }
		    });
		}
	</script>

	<script>
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
		      if(checkboxChecked === 2)
		      {
		        question2 = 1;
		      }
		    }
		  }

		}

		function result() {
		  result = question1 + question2;
		  output = "Out of 2 marks you got " + result;
		  document.getElementById("score").innerHTML = output;
		}
		</script>

		<script>
		function refresh(){
		  location.reload();
		}
	</script>

</body>
</html>
