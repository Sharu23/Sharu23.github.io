<?php include 'header.php';?>

<?php include 'sidebar.php';?>

	<!-- Main information section. This contains text, tables and images. The information have been callapsed so that it would be easier to read. Each topic have been divied into pages -->
  <div class="maincell">
		<h1>Project Management<img src="../img/ProjectManagement_white.png" alt= "Project Management Icon" class="Topicicon"></h1>
		<h4>Agile Project Management</h4>
    <p>Agile is a philosophy of project management, which is mostly targeted for software development.</p>
    <button class="section">12 principles of Agile</button>
		<div class="panel">
      <ol>
        <li>Our highest priority is to satisfy the customer through early and continuous delivery of valuable software </li>
        <li>Welcome changing requirements, even late in development. Agile processes harness change for the customers competitive advantage</li>
        <li>Deliver working software frequently, from a couple of weeks to a couple of months, with a preference to the shorter timescale</li>
        <li>Business people and developers must work together daily throughout the project</li>
        <li>Build projects around motivated individuals. Give them the environment and support they need, and trust them to get the job done</li>
        <li>The most efficient and effective method of conveying information to and within a development team is face-to-face conversation</li>
        <li>Working software is the primary measure of progress</li>
        <li>Agile processes promote sustainable development. The sponsors, developers, and users should be able to maintain a constant pace indefinitely</li>
        <li>Continuous attention to technical excellence and good design enhances agility</li>
        <li>Simplicity, the art of maximizing the amount of work not done, is essential</li>
        <li>The best architectures, requirements, and designs emerge from self-organising teams</li>
        <li>At regular intervals, the team reflects on how to become more effective, then tunes and adjusts its behaviour accordingly</li>
      </ol>
		</div>
      <button class= "section">The Three Pillars of Scrum</button>
			<div class="panel">
        <ol class="b">
          <li><b>Transparency:</b> At the start of the product, it should be clear who the key stakeholders and team members are; so that any work, decision or work can be allocated correctly.</li>
          <li><b>Inspection:</b> The process should always be inspected and monitored as it may need to be tailored to your project, this includes checking if the project is on time and that all the tasks are getting completed</li>
          <li><b>Adaptation:</b> After the inspection, the process has to be adapted for the success of the project. If any delays are identified, adapting the plan and resources according it.</li>
        </ol>
			</div>
			<button class="section">Important Scrum Artifacts</button>
			<div class="panel">
      <p> There are some important Scrum Artifacts that have to be created for each Scrum. </p>
        <ol>
          <li><b>Product Backlog:</b> An ordered list of items that needs to be in the product; this can be altered during the project by the Product Owner. </li>
          <li><b>Sprint Backlog:</b> Items selected from the Product Backlog to be completed in this sprint; this is essential all the work that needs to be completed to achieve the sprint goal</li>
          <li><b>Product Increment:</b> The sum of all product backlog items completed during a sprint and the value of the increments of all previous sprints. At the end of each sprint the increment must be ‘done’.</li>
        </ol>
			</div>
			<button class="section">Scrum Events</button>
			<div class="panel">
			<p>Scrum Events that is required for each sprint</p>
	      <ol>
	        <li><b>Sprint Planning:</b> deciding what to do and how long it would take for the sprint, sprint goal should also be set.</li>
	        <li><b>Daily Scrum:</b> Everyone in the team MUST attend it; discussing what had been completed and what would be completed. Any road blocks should be raised and solving should be considered outside the meeting.</li>
	        <li><b>Sprint Review:</b> After the sprint has finished, having a meeting to discuss how the sprint is important; this can help with planning the next sprint.</li>
	      </ol>
			</div>
			<button class="section">Key Members</button>
			<div class="panel">
      <p>Key Members are required in a Scrum Team for the project to run smoothly, they are:</p>
        <ul class="b">
          <li>Product Owner: they would have the control of the product backlog and they are the go to person if for any changes. </li>
          <li>Development Team: The team that would create the product, they need to be empowered, self-organised and cross functional. </li>
          <li>Scrum Master: Makes sure that the development team and product owners are aligned; completed their tasks on time and follow up with any issues raised in the daily stand-up.</li>
        </ul>
      <p>Scrum is ideal with a smaller team. Scrum would mostly work with team of 3-9 people and two management positions, however this can be scaled up when there is a larger team or project involved. The only different would be that the project would be split into smaller project. Each project would be considered as an individual project and the scrum master would have to communicate with each other to see the progress of the overall project, there would be a project manager involved who would manage the scrum masters.</p>
		</div>

		<!-- Recap Test Section-->
		<button class="section">Recap</button>
		<div class= "panel">

		<form id="recap">
		<fieldset>
		<h3> Answer the following questions to check if you have understood the information on this page. </h3>
		<br><h6> 1) As part of the Agile principles, reflection is considered. This is statement true or false?</h6>
		<label for="true"><input type="radio" name="question1" value="1" id="true" onclick="radioQu1()"> True</label>
		<label for="false"><input type="radio" name="question1" value="0" id="false" onclick="radioQu1()"> False</label><br>

		<!--Question only viewable on mobile -->
		<div class="tablet">
			<h6> 2) What is the role of a Scrum Master? </h6>
			<label for="aligned"><input type="radio" name="question2" value="1" id="aligned" onclick="radioQu2()"> Making sure that the development team and product owners are aligned</label>
			<label for="implementing"><input type="radio" name="question2" value="0" id="implementing" onclick="radioQu2()"> Implementing the product</label>
			<label for="backlog"><input type="radio" name="question2" value="0" id="backlog" onclick="radioQu2()"> Creating the backlog and maintaining it</label>
			<label for="approving"><input type="radio" name="question2" value="0" id="approving" onclick="radioQu2()"> Approving any changes in the product</label>
	</div>

		<!--Dragable table for the recap section - not displayed on mobile phones -->
		<div class="mobile">
			<h6> 2) Drag and drop the items into the correct columns. </h6>

			<div id="container">
				 <div id="pillar" class="droppable pillar titles">Three Pillars of Scrum</div>
				 <div id="artifacts" class="droppable artifacts titles">Scrum Artifacts</div>
				 <div id="events" class="droppable events titles">Scrum Events</div>
			</div>

			<div name="transparency" id="transparencyID" class="draggable pillar items">Transparency</div>
			<div name="review" id="reviewID" class="draggable events items">Sprint Review</div>
			<div name="increment" id="incrementID" class="draggable artifacts items">Product Increment</div>
			<div name="productBacklog" id="productBacklogID" class="draggable artifacts items">Product Backlog</div>
			<div name="adaptation" id="adaptationID" class="draggable pillar items">Adaptation</div>
			<div name="inspection" id="inspectionID" class="draggable pillar items">Inspection</div>
			<div name="planning" id="planningID" class="draggable events items">Sprint Planning</div>
			<div name="scrum" id="scrumID" class="draggable events items">Daily Scrum</div>
			<div name="sprint" id="sprintID" class="draggable artifacts items">Sprint Backlog</div>
		</div>


		<br><br>

		<p><span id="score"></span></p>
		<button id="check_button" class="Quizbutton" type="button" value="Check" onclick="result()">Check</button>
		<button class="Quizbutton" type="button" onclick="refresh()">Start Again</button>
		</fieldset>
		</form>

  	</div>
	</div>

	<!-- Section of the pagination -->
	<div class="pagination">
		<a href="<?php echo base_url();?>ProjectController3">&laquo;</a>
		<a href="<?php echo base_url();?>ProjectController">1</a>
		<a href="<?php echo base_url();?>ProjectController2">2</a>
		<a href="<?php echo base_url();?>ProjectController3">3</a>
		<a class="activePagination" href="<?php echo base_url();?>ProjectController4">4</a>
		<a class="disabled">&raquo;</a>
	</div>

	<!-- Footer of the page -->
  <?php include 'footer.php';?>

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
	var dragging; //stores the id of the element that is being dragged

	function radioQu1() {
		question1 = parseInt(document.querySelector('input[name = "question1"]:checked').value);
	}

	function radioQu2() {
		question2 = parseInt(document.querySelector('input[name = "question2"]:checked').value);
	}

	function result() {

		document.getElementById("reviewID").style.cursor = "context-menu";
		document.getElementById("productBacklogID").style.cursor = "context-menu";
		document.getElementById("incrementID").style.cursor = "context-menu";
		document.getElementById("adaptationID").style.cursor = "context-menu";
		document.getElementById("inspectionID").style.cursor = "context-menu";
		document.getElementById("planningID").style.cursor = "context-menu";
		document.getElementById("scrumID").style.cursor = "context-menu";
		document.getElementById("sprintID").style.cursor = "context-menu";
		document.getElementById("transparencyID").style.cursor = "context-menu";


		if(document.getElementById("transparencyID").getAttribute("name") === 'pillar')
		{
			question3++;
		}
		if(document.getElementById("reviewID").getAttribute("name") === 'events')
		{
			question3++;
		}
		if(document.getElementById("incrementID").getAttribute("name") === 'artifacts')
		{
			question3++;
		}
		if(document.getElementById("productBacklogID").getAttribute("name") === 'artifacts')
		{
			question3++;
		}
		if(document.getElementById("adaptationID").getAttribute("name") === 'pillar')
		{
			question3++;
		}
		if(document.getElementById("inspectionID").getAttribute("name") === 'pillar')
		{
			question3++;
		}
		if(document.getElementById("planningID").getAttribute("name") === 'events')
		{
			question3++;
		}
		if(document.getElementById("scrumID").getAttribute("name") === 'events')
		{
			question3++;
		}
		if(document.getElementById("sprintID").getAttribute("name") === 'artifacts')
		{
			question3++;
		}


		result = question1 + question2 + question3;
		output = "Out of 10 marks you got " + result;
		document.getElementById("score").innerHTML = output;

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
			$("#pillar").droppable({//begin droppable event
			 drop: function(event,ui) {//begin drop function

			 switch(dragging){//begin switch case
				 	case "transparencyID":
				 		$("#transparencyID").attr("name", "pillar");

						break;

					case "reviewID":
						$("#reviewID").attr("name", "pillar");

						break;

					case "incrementID":
						 $("#incrementID").attr("name", "pillar");

						 break;

					case "productBacklogID":
					 	$("#productBacklogID").attr("name", "pillar");

						break;

					case "adaptationID":
						$("#adaptationID").attr("name", "pillar");

						break;

					case "inspectionID":
						$("#inspectionID").attr("name", "pillar");

						break;

					case "planningID":
						 $("#planningID").attr("name", "pillar");

						 break;

					case "scrumID":
						$("#scrumID").attr("name", "pillar");

						break;

					case "sprintID":
						$("#sprintID").attr("name", "pillar");

						break;

				}





				}//end drop function
				});//end droppable event




			$("#artifacts").droppable({//begin droppable event
			 drop: function(event,ui) {//begin drop function

				 switch(dragging){//begin switch case
  				 	case "transparencyID":
  				 		$("#transparencyID").attr("name", "artifacts");

  						break;

  					case "reviewID":
  						$("#reviewID").attr("name", "artifacts");

  						break;

  					case "incrementID":
  						 $("#incrementID").attr("name", "artifacts");

  						 break;

  					case "productBacklogID":
  					 	$("#productBacklogID").attr("name", "artifacts");

  						break;

  					case "adaptationID":
  						$("#adaptationID").attr("name", "artifacts");

  						break;

  					case "inspectionID":
  						$("#inspectionID").attr("name", "artifacts");

  						break;

  					case "planningID":
  						 $("#planningID").attr("name", "artifacts");

  						 break;

  					case "scrumID":
  						$("#scrumID").attr("name", "artifacts");

  						break;

  					case "sprintID":
  						$("#sprintID").attr("name", "artifacts");

  						break;

  				}


				}//end drop function
				});//end droppable event



			 $("#events").droppable({//begin droppable event
			 drop: function(event,ui) {//begin drop function

				 switch(dragging){//begin switch case
  				 	case "transparencyID":
  				 		$("#transparencyID").attr("name", "events");

  						break;

  					case "reviewID":
  						$("#reviewID").attr("name", "events");

  						break;

  					case "incrementID":
  						 $("#incrementID").attr("name", "events");

  						 break;

  					case "productBacklogID":
  					 	$("#productBacklogID").attr("name", "events");

  						break;

  					case "adaptationID":
  						$("#adaptationID").attr("name", "events");

  						break;

  					case "inspectionID":
  						$("#inspectionID").attr("name", "events");

  						break;

  					case "planningID":
  						 $("#planningID").attr("name", "events");

  						 break;

  					case "scrumID":
  						$("#scrumID").attr("name", "events");

  						break;

  					case "sprintID":
  						$("#sprintID").attr("name", "events");

  						break;

  				}

				}//end drop function
				});//end droppable event


	</script>

	<script>
	function refresh() {
		location.reload();
	}
	</script>
</body>
</html>
