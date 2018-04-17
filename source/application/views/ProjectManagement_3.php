<?php include 'header.php';?>

	<!-- Main information section. This contains text, tables and images. The information have been callapsed so that it would be easier to read. Each topic have been divied into pages -->
  <img style="position:absolute; width:50px;" src="../img/arrow.png" alt="sidebar" onclick="sidebar()">


  <div class="maincell" id="maincellID"> <!-- Main content for this page -->

  	<div id="sidebarID" style="display:none;">
  		<div class="sidebar">
  			<nav>
  				<ul>
  					<li class="cross"><a class="cross" href="<?php echo base_url();?>ProjectController3">&times;</a></li><br>
  					<li style="margin-top:50px"><a href="<?php echo base_url();?>ProjectController">Project Management</a></li>
  					<li><a href="<?php echo base_url();?>SystemController">System Designs</a></li>
  				</ul>
  			</nav>
  		</div>
  	</div>
    <h1>Project Management<img src="../img/ProjectManagement_white.png" alt= "Project Management Icon" class="Topicicon"></h1>
      <h4>Introducing PRINCE2 </h4>
      <p>PRINCE2 is a project management paradigm that encompasses the management of all stages and parts of a project, which has 7 principles, 7 themes and 7 processes.</p>
      <button class="section">7 Principles</button>
			<div class= "panel">
				<ol>
	        <li><b>Continued business justification:</b>	Is the project worth doing and has all the justifications being approved by all the stakeholders? </li>
	        <li><b>Learn from experience:</b> There are three key ways you can learn</li>
	          <ul>
	            <li>At the start from similar projects, or team experience</li>
	            <li>At the review stage, from how the project is going, any changes that need to be made to the future stages</li>
	            <li>At the end, from all the knowledge that had been learned and how future projects can be improved</li>
	          </ul>
	        <li><b>Defined roles and responsible:</b> It is always important that everyone knows what their role is and that the correct people have been given the right to make decisions </li>
	        <li><b>Managed by stages:</b> So that the work can be easy to plan and reflected upon </li>
	        <li><b>Managed by exception:</b> Management decisions should be delegated downwards as far as possible by use of tolerances on six different objectives: Time, Cost, Quality, Scope, Risk, </li>
	        <li><b>Focus on products:</b> Project should have a definition or purpose which has been clearly stated; this should be thought throughout the project</li>
	        <li><b>Tailor to suit the project environment:</b> There need to be a balance between ‘robotic’ (just following paperwork with no regard for its application to the project) and ‘heroic’ (charging in with no plan and just doing work with no regard for how it fits in the overall project) work </li>
	      </ol>
			</div>
      <button class="section">7 Themes</button>
			<div class="panel">
	      <ol>
	        <li><b>Business Case:</b> The simplest form of business case contains an output. outcome and benefit </li>
	        <li><b>Organisation:</b> Stakeholders are key (Business, User and Suppliers)</li>
	        <li><b>Quality:</b> These include documentations like Quality Planning and Quality Control</li>
	        <li><b>Plans:</b> These include not just the writing a plan but also assigning resources and scheduling </li>
	        <li><b>Risk:</b> You be prepared for any risk that may occur, probability Impact Grid can be used and including any rick management strategy to either avoid, prevent or limit the risk’s impact </li>
	        <li><b>Change:</b> This is about either controlling the change from happening or planning if there is a change</li>
	        <li><b>Progress:</b> Monitoring if the progress is on track, detecting any risks, identifying any changes and maintaining the business case.</li>
	      </ol>
			</div>
    <button class="section">7 Processes</button>
		<div class="panel">
			<ol>
	      <li><b>Starting up a project:</b> Having the scope and business case defines </li>
	      <li><b>Initiating a project:</b> All the plans created (including product and quality plans) and updating the Business Case if required </li>
	      <li><b>Directing a project:</b> Creating your team, authorizing work and making decisions on any issues </li>
	      <li><b>Controlling a stage:</b> Monitoring progress, ensuring accuracy of the records and raising any risk that may occur </li>
	      <li><b>Managing product delivery:</b> Follow plan, manage creation of products and complete quality control</li>
	      <li><b>Managing stage boundaries:</b> Follow and update quality, progress and change plans and update every one of the progress</li>
	      <li><b>Closing a project:</b> Verify user acceptance, quality control and complete the handover</li>
	    </ol>
		</div>

		<!-- Recap Test Section-->
		<button class="section">Recap</button>
		<div class= "panel">

		<form id="recap">
		<fieldset>
		<h3> Answer the following questions to check if you have understood the information on this page. </h3>
		<br><h6> 1) Under which category would Risk come under? </h6>
		<label for="principles"><input type="radio" name="question1" value="0" id="principles" onclick="radioQu1()"> Principles</label>
		<label for="themes"><input type="radio" name="question1" value="1" id="themes" onclick="radioQu1()"> Themes</label>
		<label for="processes"><input type="radio" name="question1" value="0" id="processes" onclick="radioQu1()"> Processes</label><br>

		<h6> 2) Defining roles and responsibles, come under which category? </h6>
		<label for="principles1"><input type="radio" name="question2" value="1" id="principles1" onclick="radioQu2()"> Principles</label>
		<label for="themes1"><input type="radio" name="question2" value="0" id="themes1" onclick="radioQu2()"> Themes</label>
		<label for="processes1"><input type="radio" name="question2" value="0" id="processes1" onclick="radioQu2()"> Processes</label>

		<br>
		<p><span id="score"></span></p>
    <table style="border:0px;">
      <tr style="border:0px;padding-bottom:0px"><td style="border:0px;padding-bottom:0px"><button onclick="result()" type="button" class="Quizbutton" value="Check" style="float:right;">Check</button></td></tr>
      <tr style="border:0px;"><td style="border:0px;"><button type="button" onclick="refresh()" style="float:right;cursor:pointer;text-decoration:underline;color:#C0C0C0;padding-right:10px;">Start Again</button></td></tr>
    </table>
		</fieldset>
		</form>
		</div>

  </div>

	<!-- Section of the pagination -->
	<div class="pagination">
		<a href="<?php echo base_url();?>ProjectController2">&laquo;</a>
		<a href="<?php echo base_url();?>ProjectController">1</a>
		<a href="<?php echo base_url();?>ProjectController2">2</a>
		<a class="activePagination" href="<?php echo base_url();?>ProjectController3">3</a>
		<a href="<?php echo base_url();?>ProjectController4">4</a>
		<a href="<?php echo base_url();?>ProjectController4">&raquo;</a>
	</div>

	<!-- Footer of the page -->
	 <?php include 'footer.php';?>

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

	function radioQu1() {
		question1 = parseInt(document.querySelector('input[name = "question1"]:checked').value);
	}

	function radioQu2() {
		question2 = parseInt(document.querySelector('input[name = "question2"]:checked').value);
	}

	function result(button) {
		result = question1 + question2;
		output = "Your Score: " + result + "/2"
		document.getElementById("score").innerHTML = output;
	}
	</script>

	<script>
	function refresh() {
		location.reload();
	}
	</script>

</body>
</html>
