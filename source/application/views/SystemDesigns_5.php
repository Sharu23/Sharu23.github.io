<?php include 'header.php';?>

	<!-- Main information section. This contains text, tables and images. The information have been callapsed so that it would be easier to read. Each topic have been divied into pages -->
  <img style="position:absolute; width:50px;" src="../img/arrow.png" alt="sidebar" onclick="sidebar()">


  <div class="maincell" id="maincellID"> <!-- Main content for this page -->

    <div id="sidebarID" style="display:none;">
      <div class="sidebar">
        <nav>
          <ul>
            <li class="cross"><a class="cross" href="<?php echo base_url();?>SystemController5">&times;</a></li>
            <li><a href="<?php echo base_url();?>ProjectController">Project Management</a></li>
            <li><a href="<?php echo base_url();?>SystemController">System Designs</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <h1>System Designs<img src="../img/SystemDesign_white.png" alt= "System Design Icon" class="Topicicon"></h1>
		<h4>Mapping High-Level Behaviour of Objects onto Functional Workflow</h4>
			<button class="section">Behavioural Modelling </button>
			<div class="panel">
				<ul class="b">
					<li>Functional workflow models</li>
					<ul>
						<li>describe the dynamic view of a software system</li>
						<li>there are two types: Sequence and Collaboration</li>
					</ul>
					<li>For the Functional workflow input from use case model, activity model and class model would be required</li>
				</ul>
			</div>
			<button class="section">Sequence Diagrams</button>
			<div class="panel">
			<p>Concepts for Sequence Diagrams</p>

        <!--Table that is for mobile -->
				<table class="borderTable tablet" >
					<tr>
						<th>Name</th>
						<th>Description</th>
						<th>Icon</th>
					</tr>
					<tr>
						<th>Actor</th>
						<th>a person or system that derives benefits from and is external to the system. It invokes a sequence for sending and/or receiving messages</th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
							<!--<img
							src="../img/actor.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>Object</th>
						<th>participates sending and receiving messages</th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
							<!--<img src="../img/object.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>Lifeline</th>
						<th>denotes the life of an object during a sequence of interactions</th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
							<!--<img src="../img/lifeline.png"style="height:100px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>Execution Occurrence </th>
						<th>denotes when an object is actively sending or receiving messages</th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
							<!--<img src="../img/executionOccurrence.png"style="height:100px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th rowspan="3">Message</th>
						<th>An operation in the class where an object belongs to or a function call </th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
							<!--<img src="../img/directmessage.png"style="height:100px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>A self-delegated operation call </th>
						<th>
								<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
							<!--<img src="../img/self-delegated.png"style="height:100px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>A return with value</th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
							<!--<img src="../img/returnMessage.png"style="height:100px;padding-left:20px;padding-bottom:20px;"></th>-->
					</tr>
					<tr>
						<th>Object destruction</th>
						<th>“X” denotes a termination of the participation of message passing</th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
							<!--<img src="../img/object-destruction.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>Frame</th>
						<th>“Scope” for sequencing the interactions and focuses on one use case</th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
						 <!--<img src="../img/frame.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
				</table>

        <!--Table that is for tablet -->
        <table class="borderTable mobile" >
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Icon</th>
          </tr>
          <tr>
            <th>Actor</th>
            <th>a person or system that derives benefits from and is external to the system. It invokes a sequence for sending and/or receiving messages</th>
            <th>
              <img src="../img/actor.png" style="width:200px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
              <!--<img
              src="../img/actor.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
            </th>
          </tr>
          <tr>
            <th>Object</th>
            <th>participates sending and receiving messages</th>
            <th>
              <img src="../img/object.png" style="width:200px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
              <!--<img src="../img/object.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
            </th>
          </tr>
          <tr>
            <th>Lifeline</th>
            <th>denotes the life of an object during a sequence of interactions</th>
            <th>
              <img src="../img/lifeline.png" style="width:200px" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
              <!--<img src="../img/lifeline.png"style="height:100px;padding-left:20px;padding-bottom:20px;">-->
            </th>
          </tr>
          <tr>
            <th>Execution Occurrence </th>
            <th>denotes when an object is actively sending or receiving messages</th>
            <th>
              <img src="../img/executionOccurrence.png" style="width:200px" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
              <!--<img src="../img/executionOccurrence.png"style="height:100px;padding-left:20px;padding-bottom:20px;">-->
            </th>
          </tr>
          <tr>
            <th rowspan="3">Message</th>
            <th>An operation in the class where an object belongs to or a function call </th>
            <th>
              <img src="../img/directmessage.png" style="width:200px" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
              <!--<img src="../img/directmessage.png"style="height:100px;padding-left:20px;padding-bottom:20px;">-->
            </th>
          </tr>
          <tr>
            <th>A self-delegated operation call </th>
            <th>
                <img src="../img/self-delegated.png" style="width:200px" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
              <!--<img src="../img/self-delegated.png"style="height:100px;padding-left:20px;padding-bottom:20px;">-->
            </th>
          </tr>
          <tr>
            <th>A return with value</th>
            <th>
              <img src="../img/returnMessage.png" style="width:200px" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
              <!--<img src="../img/returnMessage.png"style="height:100px;padding-left:20px;padding-bottom:20px;"></th>-->
          </tr>
          <tr>
            <th>Object destruction</th>
            <th>“X” denotes a termination of the participation of message passing</th>
            <th>
              <img src="../img/object-destruction.png" style="width:200px" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
              <!--<img src="../img/object-destruction.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
            </th>
          </tr>
          <tr>
            <th>Frame</th>
            <th>“Scope” for sequencing the interactions and focuses on one use case</th>
            <th>
              <img src="../img/frame.png" style="width:200px" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
             <!--<img src="../img/frame.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
            </th>
          </tr>
        </table>
			</div>


			<div id="myModal" class="modal">
				<span class="close cursor" onclick="closeModal()">&times;</span>
				<div class="modal-content">

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="../img/actor.png" style="width:30%">
					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="../img/object.png" style="width:30%">
					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="../img/lifeline.png" style="width:30%">
					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="../img/executionOccurrence.png" style="width:30%">
					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="../img/directmessage.png" style="width:30%">
					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="../img/self-delegated.png" style="width:30%">
					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="../img/returnMessage.png" style="width:30%">
					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="../img/object-destruction.png" style="width:30%">
					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="../img/frame.png" style="width:30%">
					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="../img/SequenceDiagram.png" style="width:30%">
					</div>

				</div>
			</div>

				<!-- Recap Test Section-->
				<button class="section">Recap</button>
				<div class= "panel">

					<form id="recap">
					<fieldset>
					<h3> Answer the following questions to check if you have understood the information on this page. </h3>
					<br><h6> 1) Which of the following images represents an object in a Sequence Diagram? </h6>
					<label for="return"><input type="radio" name="question1" value="0" id="return" onclick="radio()"><img src="../img/returnMessage.png" style="height:50px"></label><br>
					<label for="frame"><input type="radio" name="question1" value="0" id="frame" onclick="radio()"><img src="../img/frame.png" style="height:50px"> </label><br>
					<label for="actor"><input type="radio" name="question1" value="0" id="actor" onclick="radio()"><img src="../img/actor.png" style="height:50px"> </label><br>
					<label for="object"><input type="radio" name="question1" value="1" id="object" onclick="radio()"><img src="../img/object.png" style="height:40px"> </label><br><br>

					<h6> 2) Which of the following are types of the functional workflow model? </h6>
					<label for="Sequence"><input type="checkbox" name="question2" value="right" style="padding-left=10px" id="Sequence" onclick="checkbox()"> Sequence </label>
					<label for="Use_case"><input type="checkbox" name="question2" value="wrong" id="Use_case" onclick="checkbox()"> Use case</label>
					<label for="Activity_diagram"><input type="checkbox" name="question2" value="wrong" id="Activity_diagram" onclick="checkbox()"> Activity diagram</label>
					<label for="Collaboration"><input type="checkbox" name="question2" value="right" id="Collaboration" onclick="checkbox()"> Collaboration</label><br>

					<p><span id="score"></span></p>
					<button class="Quizbutton" type="button" value="Check" onclick="result()">Check</button>
					<button class="Quizbutton" type="button" onclick="refresh()">Start Again</button>
					</fieldset>
						</form>
				</div>

			</div>

			<!-- Section of the pagination -->
			<div class="pagination">
				<a href="<?php echo base_url();?>SystemController4">&laquo;</a>
				<a href="<?php echo base_url();?>SystemController">1</a>
				<a href="<?php echo base_url();?>SystemController2">2</a>
				<a href="<?php echo base_url();?>SystemController3">3</a>
				<a href="<?php echo base_url();?>SystemController4">4</a>
				<a class="activePagination" href="<?php echo base_url();?>SystemController5">5</a>
				<a href="<?php echo base_url();?>SystemController6">6</a>
				<a href="<?php echo base_url();?>SystemController6">&raquo;</a>
			</div>

	<!-- Footer of the page -->
  <?php include 'footer.php';?>
  </div>

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
