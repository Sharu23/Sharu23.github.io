<?php include_once('header.php'); ?>

<?php include_once('sidebar.php'); ?>

	<!-- Main information section. This contains text, tables and images. The information have been callapsed so that it would be easier to read. Each topic have been divied into pages -->
  <div class="maincell">
    <h1>System Designs<img src="../img/SystemDesign_white.png" alt= "System Design Icon" class="Topicicon"></h1>
    <h4>Developing Activity Diagram</h4>

		<button class="section">Activity Diagram</button>
		<div class="panel">
	    <p>Activity in reality would be the business process that establishing the steps to creating the product.</p>
	    <p>Representation of a Process</p>
			<img src="../img/process.png" style="width:200px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">

			<p><br>Detailing activities in the Process</p>
			<img src="../img/detailedProcess.png" style="width:200px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">

			<p><br>Activity Diagrams are designed so that the behavioural steps involved in a process that produce and consume artefact and information can be represented.</p>
			<p>They are created for the views of ‘as-is’ and ‘to-be’ business processes</p>
		</div>
		<button class="section">Activity Diagram Notations</button>
		<div class="panel">
			<p>Notations of Activity Diagrams:</p>
			<table class="tabletopic">
				<tr>
					<th>An <b>Activity</b> node will contain a set of actions and be labelled by its name  </th>
				</tr>
				<tr>
					<td><img src= "../img/activityName.png" alt= "Activity Node Notation" style="height:60px;padding-left:20px;padding-bottom:20px;"></td>
				</tr>
				<tr>
					<th>A <b>control flow</b> shows a sequence of execution</th>
				</tr>
				<tr>
					<td><img src= "../img/ControlFlow.png" alt= "Control Flow Node Notation" style="width:100px;padding-left:20px;padding-bottom:20px;"></td>
				</tr>
				<tr>
					<th>An <b>initial-activity</b> node will show the start of the set of activities</th>
				</tr>
				<tr>
					<td><img src= "../img/initial.png" alt= "Initial Activity Node Notation" style="height:30px;padding-left:20px;padding-bottom:20px;"></td>
				</tr>
				<tr>
					<th>A <b>finish-activity</b> node will stop the specific control flow</th>
				</tr>
				<tr>
					<td><img src= "../img/finish.png" alt= "Finish Activity Node Notation" style="height:30px;padding-left:20px;padding-bottom:20px;"></td>
				</tr>
				<tr>
					<th><b>Decision</b> node will be used to ensure the activity flows through one path controlled by conditions</th>
				</tr>
				<tr>
					<td><img src= "../img/decision.png" alt= "Decision Node Notation" style="width:350px; padding-bottom:20px;"></td>
				</tr>
				<tr>
					<th>A <b>merge</b> node will be used to bring back together different decision paths</th>
				</tr>
				<tr>
					<td><img src= "../img/merge.png" alt= "Merge Node Notation" style="width:150px;padding-left:20px;padding-bottom:20px;"></td>
				</tr>
				<tr>
					<th>A <b>fork</b> node will be used to split behaviour into a set of parallel or concurrent flows of activity</th>
				</tr>
				<tr>
					<td><img src= "../img/fork.png" alt= "Fork Node Notation" style="width:80px;padding-left:20px;padding-bottom:20px;"></td>
				</tr>
				<tr>
					<th>A <b>join</b> node will be used to bring back together a set of parallel of concurrent flows of activities</th>
				</tr>
				<tr>
					<td><img src= "../img/join.png" alt= "Join Node Notation" style="width:80px;padding-left:20px;padding-bottom:20px;"></td>
				</tr>
				<tr>
					<th>A <b>swimlane</b> will be used to break up an activity diagram into rows and columns to assign the individual activity to the responsible role of a stakeholder who executes the activities.</th>
				</tr>
				<tr>
					<td><img src= "../img/swimlane.png" alt= "Swimlane Node Notation" style="width:200px;padding-left:20px;padding-bottom:20px;"></td>
				</tr>
			</table>
		</div>
		<button class="section">Other Information about Activity Diagrams</button>
		<div class="panel">
			<p>Other Elements in the Activity Diagrams which have to considered</p>
			<ul class="b">
				<li>Context which is the scope of the activities carried out</li>
				<li>Stakeholders are any users that are using the product, this can be human or non-human (other applications)</li>
				<li>Basic rules and constraints of the companies</li>
			</ul>
			<p>Activity Diagrams are useful</p>
			<ul class="b">
				<li>as they show how the use cases will achieve the goals</li>
				<li>shows who is responsible for which activity</li>
				<li>shows in great detail all the dependencies and alternatives for the activity</li>
			</ul>
			<p>However, it does not reveal the messaging between the objects and the timings for each of the activities.</p>
		</div>
		<button class="section">Other types of Model</button>
		<div class="panel">
		<p>An Example of each type of Model, <b>click on the image to enlarge it</b>.</p>
		<table class="tabletopic">
			<tr>
				<th>Activity Diagram</th>
				<th>Use Case Model</th>
				<th>Process Model</th>
				<th>Objects Mapping</th>
			</tr>
			<tr>
				<td>
					<img src="../img/activityDiagram.png" style="width:350px" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
				</td>
				<td>
					<img src="../img/UseCaseModel.png" style="width:350px" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
				</td>
				<td>
					<img src="../img/ProcessModel.png" style="width:350px" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
				</td>
				<td>
					<img src="../img/objectMapping.png" style="width:350px" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
				</td>
			</tr>
		</table>
		</div>
		<div id="myModal" class="modal">
			 <span class="close cursor" onclick="closeModal()">&times;</span>
			 <div class="modal-content">

				 <div class="mySlides">
					 <div class="numbertext"></div>
					 <img src="../img/process.png" style="width:80%">
				 </div>

				 <div class="mySlides">
					 <div class="numbertext"></div>
					 <img src="../img/detailedProcess.png" style="width:100%">
				 </div>

				 <div class="mySlides">
					 <div class="numbertext"></div>
					 <img src="../img/activityDiagram.png" style="width:100%">
				 </div>

				 <div class="mySlides">
					 <div class="numbertext"></div>
					 <img src="../img/UseCaseModel.png" style="width:100%">
				 </div>

				 <div class="mySlides">
					 <div class="numbertext"></div>
					 <img src="../img/ProcessModel.png" style="width:100%">
				 </div>

				 <div class="mySlides">
					 <div class="numbertext"></div>
					 <img src="../img/objectMapping.png" style="width:100%">
				 </div>
			 </div>
			 </div>

			 <!-- Recap Test Section-->
			 <button class="section">Recap</button>
			 <div class= "panel">

			 <form id="recap">
			 <fieldset>
			 <h3> Answer the following questions to check if you have understood the information on this page. </h3>
			 <br><h6> 1) Why are Activity Diagrams useful? Select the answer that is incorrect. </h6>
			 <label for="goals"><input type="radio" name="question1" value="0" id="goals" onclick="radioQu1()">It shows how the use cases will achieve the goals</label>
			 <label for="objects"><input type="radio" name="question1" value="1" id="objects" onclick="radioQu1()">It shows the messaging between the objects</label>
			 <label for="responsible"><input type="radio" name="question1" value="0" id="responsible" onclick="radioQu1()">It will show who is responsible for which activity</label>
			 <label for="dependencies"><input type="radio" name="question1" value="0" id="dependencies" onclick="radioQu1()">It will show, in great details, all the dependencies and alternatives for the activity</label><br><br>

			 <div class="tablet">
				 <h6> 2) What is the purpose of a control flow?  </h6>
				 <label for="sequence"><input type="radio" name="question2" value="1" id="sequence" onclick="radioQu2()"> To show the sequence of execution</label>
				 <label for="start"><input type="radio" name="question2" value="0" id="start" onclick="radioQu2()"> To show the start and end of a flow</label>
				 <label for="control"><input type="radio" name="question2" value="0" id="control" onclick="radioQu2()"> To show the controls of the project</label>
				 <label for="end"><input type="radio" name="question2" value="0" id="end" onclick="radioQu2()"> To end of the flow</label>
		 	</div>

			<div class="mobile">
				 <h6> 2) Drag and drop the corrects into the correct box.</h6>

				 	<div style="position:relative;width:100%; height:400px; background-color:#DDDDDD;margin-left:5px">
							<img src="../img/processQu.png" class="QuestionImage">

						 <div id="context" class="droppable context quBox"style="top:5%;left:3%;"></div>
						 <div id="goal" class="droppable goal quBox"style="top:5%;left:33%;"></div>
						 <div id="output" class="droppable output quBox"style="top:40%;left:72%;"></div>
						 <div id="constraint" class="droppable constraint quBox"style="top:80%;left:50%;"></div>
						 <div id="stakeholder" class="droppable stakeholder quBox"style="top:80%;left:20%;"></div>
						 <div id="input" class="droppable input quBox"style="top:40%;left:3%;"></div>
					</div>

					<div style="padding-top:50px;margin-left:10px;">
						<div name= "output_ans" id="outputID" class="draggable output item_ans" style="background-color:rgb(153, 204, 255)">Output</div>
						<div name= "stakeholders_ans" id="stakeholdersID" class="draggable stakeholder item_ans" style="background-color:rgb(255, 255, 153)">Stakeholders</div>
						<div name= "constraints_ans" id="constraintsID" class="draggable constraint item_ans" style="padding-top:5px; background-color:rgb(255, 204, 255)">Constraints,<br> Rules</div>
						<div name= "context_ans" id="contextID" class="draggable context item_ans" style="background-color:rgb(0, 0, 204); color:white;">Context</div>
						<div name= "goals_ans" id="goalsID" class="draggable goal item_ans" style="background-color:rgb(102, 255, 153)">Goals</div>
						<div name= "input_ans" id="inputID" class="draggable input item_ans" style="background-color:rgb(204, 204, 255)">Input</div>
					</div>


				 <br>
				 <p><span id="TEST"></span></p>
				 <p><span id="score"></span></p>
				 <button id="check_button" class="Quizbutton" type="button" value="Check" onclick="result()">Check</button>
				 <button class="Quizbutton" type="button" onclick="refresh()">Start Again</button>
				 </fieldset>
				 </form>
			 </div>

	</div>

	<!-- Section of the pagination -->
	<div class="pagination">
		<a href="SystemDesigns_2.html">&laquo;</a>
		<a href="SystemDesigns.html">1</a>
		<a href="SystemDesigns_2.html">2</a>
		<a class="activePagination" href="SystemDesigns_3.html">3</a>
		<a href="SystemDesigns_4.html">4</a>
		<a href="SystemDesigns_5.html">5</a>
		<a href="SystemDesigns_6.html">6</a>
		<a href="SystemDesigns_4.html">&raquo;</a>
	</div>

	<!-- Footer of the page -->
<?php include_once('footer.php'); ?>
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

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("demo");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";

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
	var question3 = 0;

	function radioQu1() {
		question1 = parseInt(document.querySelector('input[name = "question1"]:checked').value);
	}

	function radioQu2() {
		question2 = parseInt(document.querySelector('input[name = "question2"]:checked').value);
	}

	function result() {

		document.getElementById("outputID").style.cursor = "context-menu";
		document.getElementById("stakeholdersID").style.cursor = "context-menu";
		document.getElementById("constraintsID").style.cursor = "context-menu";
		document.getElementById("contextID").style.cursor = "context-menu";
		document.getElementById("goalsID").style.cursor = "context-menu";
		document.getElementById("inputID").style.cursor = "context-menu";

		if(document.getElementById("outputID").getAttribute("name") === 'output')
		{
			question3++;
				$('#quBox div').removeClass('quBox').addClass('correctquBox');
		}
		if(document.getElementById("stakeholdersID").getAttribute("name") === 'stakeholder')
		{
			question3++;
		}
		if(document.getElementById("constraintsID").getAttribute("name") === 'constraint')
		{
			question3++;
		}
		if(document.getElementById("contextID").getAttribute("name") === 'context')
		{
			question3++;
		}
		if(document.getElementById("goalsID").getAttribute("name") === 'goal')
		{
			question3++;
		}
		if(document.getElementById("inputID").getAttribute("name") === 'input')
		{
			question3++;
		}

		result = question1 + question2 + question3;
		output = "Out of 7 marks you got " + result;
		document.getElementById("score").innerHTML = output;
	}
	</script>

	<script>
	function refresh(){
		location.reload();
	}
	</script>

	<script>
	//added to make .draggable class draggable
	$(".draggable").draggable();

						 /*on dragstart event*/
						 $(".draggable").on("dragstart",function(){

								//get the id of the element being dragged
								dragging = $(this).attr("id");


						});//end on dragstart event



								//draggable on stop event
								$( ".draggable").draggable({

							stop: function(event,ui) {//begin stop function
								document.getElementById("check_button").addEventListener("click",function(){
									$( ".draggable").unbind();

								});

	}//end stop function
	});//end dragable stop event


	 $("#context").droppable({//begin droppable event
	 drop: function(event,ui) {//begin drop function



			 switch(dragging){//begin switch case

					 case "contextID":
					 	$("#contextID").attr("name", "context");

							 break;

			 }//end switch case

		}//end drop function
		});//end droppable event


	$("#goal").droppable({//begin droppable event
	 drop: function(event,ui) {//begin drop function



			 switch(dragging){//begin switch case

					 case "goalsID":

							 $("#goalsID").attr("name", "goal");

							 break;
			 }//end switch case



		}//end drop function
		});//end droppable event



	 $("#output").droppable({//begin droppable event
	 drop: function(event,ui) {//begin drop function



			 switch(dragging){//begin switch case

					 case "outputID":

							 $("#outputID").attr("name", "output");

							 break;

			 }//end switch case



		}//end drop function
		});//end droppable event

		$("#constraint").droppable({//begin droppable event
		drop: function(event,ui) {//begin drop function



				switch(dragging){//begin switch case

						case "constraintsID":

								$("#constraintsID").attr("name", "constraint");

								break;

				}//end switch case



		 }//end drop function
		 });//end droppable event

		 $("#stakeholder").droppable({//begin droppable event
		 drop: function(event,ui) {//begin drop function



				 switch(dragging){//begin switch case

						 case "stakeholdersID":

								 $("#stakeholdersID").attr("name", "stakeholder");

								 break;

				 }//end switch case



			}//end drop function
			});//end droppable event

			$("#input").droppable({//begin droppable event
			drop: function(event,ui) {//begin drop function



					switch(dragging){//begin switch case

							case "inputID":

									 $("#inputID").attr("name", "input");

									break;

					}//end switch case



			 }//end drop function
			 });//end droppable event

	</script>

</body>
</html>
