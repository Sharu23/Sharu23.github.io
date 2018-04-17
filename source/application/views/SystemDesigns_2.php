<?php include 'header.php';?>


	<!-- Main information section. This contains text, tables and images. The information have been callapsed so that it would be easier to read. Each topic have been divied into pages -->
  <img style="position:absolute; width:50px;" src="../img/arrow.png" alt="sidebar" onclick="sidebar()">


  <div class="maincell" id="maincellID"> <!-- Main content for this page -->

  	<div id="sidebarID" style="display:none;">
  		<div class="sidebar">
  			<nav>
  				<ul>
  					<li class="cross"><a class="cross" href="<?php echo base_url();?>SystemController2">&times;</a></li><br>
  					<li style="margin-top:50px"><a href="<?php echo base_url();?>ProjectController">Project Management</a></li>
  					<li><a href="<?php echo base_url();?>SystemController">System Designs</a></li>
  				</ul>
  			</nav>
  		</div>
  	</div>
    <h1>System Designs<img src="../img/SystemDesign_white.png" alt= "System Design Icon" class="Topicicon"></h1>
    <h4>Developing Use Case Diagrams</h4>
		<button class="section">Use Case</button>
		<div class="panel">
			<p>Use Case is a scenario (task) that conveys a software system interactions with the end user (actor) or another system by performing the functions (gaining input and output) for achieving the specific business goal in the domain context</p>
	    <p>There are 2 levels for the Use Cases:</p>
	    <ul class="b">
	      <li>Business use cases (technology independent) which provides the information of</li>
	      <ul>
	        <li><b>what</b> functions (services) are performed in a business domain context</li>
	        <li>and <b>how</b> a business service being carried out is designed with Activity Diagrams</li>
	      </ul>
	      <li>System use cases (technology related) which provides the information of</li>
	        <ul>
	          <li><b>what</b> functions (services) performed in a software system context </li>
	          <li>and <b>how </b>the functional workflow being carried out in an application is designed with Sequence Diagrams</li>
	        </ul>
	      </ul>
			</div>
			<button class="section">Software Systems Requirements</button>
			<div class="panel">
	      <p>Software Systems Requirements are key and include:</p>
	      <ul class="b">
	        <li>Functions requirements specifies the behaviour of a software system.</li>
	        <li>Non-Functional aspects generally describe the non-functional requirements terms.</li>
	      </ul>
			</div>
			<button class="section">Use Case Diagram</button>
			<div class="panel">
	       <p>Use Case Diagrams</p>
	      	<ul class="b">
	          <li>The system boundary defines the scope of the system, what the system does but not how it does it.</li>
	          <li>Use-cases describes a set of sequences of actions, which include variants that the system performs to yield an observable value to an actor</li>
	          <li>Actor represents the role that someone might be playing (not a particular individual). These are external entities that has an interest in interacting with the system</li>
	          <li>Interaction is a form of interaction between the actor and a use case.</li><br>
					<img src="../img/UseCaseDiagram.png" style="width:200px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor"><br>
        	<!--<img src= "../img/UseCaseDiagram.png" alt= "Use Case Diagram">-->
				</div>
				<button class="section">Use Case Description</button>
				<div class="panel">
	        <p>Below a Use Case Description is presented. There are explanations of what to include for each of the titles.</p><br>
					<img src="../img/UseCaseDescription.png" style="width:450px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor"><br><br>
					<!--<img src= "../img/UseCaseDescription.png" alt= "Use Case Description" style="padding-left:90px;padding-bottom:20px;">-->
				</div>
				<button class="section">Relationship notation for Use Case Diagram</button>
				<div class="panel">
	        <p>Below are the different types of relationship notation that can be used in a Use Case diagram</p>
	        <table class="tabletopic">
	          <tr>
	            <th>1. Association </th>
	          </tr>
	          <tr>
	            <td><img src="../img/association.png" alt= "Association" style="width:250px;" onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></td>
	          </tr>
	          <tr>
	            <th>2. Include: can only occur between two use cases </th>
	          </tr>
	          <tr>
	            <td><img src="../img/include.png" alt= "Association" style="width:250px;" onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></td>
	          </tr>
	          <tr>
	            <th>3. Extent: can only occur between two use cases </th>
	          </tr>
	          <tr>
	            <td><img src="../img/extend.png" alt= "Association" style="width:250px;" onclick="openModal();currentSlide(5)" class="hover-shadow cursor"></td>
	          </tr>
	          <tr>
	            <th>4. Generalisation  </th>
	          </tr>
	          <tr>
	            <td><img src="../img/generalisation.png" alt= "Association" style="width:200px;" onclick="openModal();currentSlide(6)" class="hover-shadow cursor"></td>
	          </tr>
	        </table>
				</div>


				<div id="myModal" class="modal">
					<span class="close cursor" onclick="closeModal()">&times;</span>
					<div class="modal-content">

						<div class="mySlides">
							<div class="numbertext"></div>
							<img src="../img/UseCaseDiagram.png" style="width:50%">
						</div>

						<div class="mySlides">
							<div class="numbertext"></div>
							<img src="../img/UseCaseDescription.png" style="width:70%">
						</div>

						<div class="mySlides">
							<div class="numbertext"></div>
							<img src="../img/association.png" style="width:70%">
						</div>

						<div class="mySlides">
							<div class="numbertext"></div>
							<img src="../img/include.png" style="width:70%">
						</div>

						<div class="mySlides">
							<div class="numbertext"></div>
							<img src="../img/extend.png" style="width:70%">
						</div>

						<div class="mySlides">
							<div class="numbertext"></div>
							<img src="../img/generalisation.png" style="width:50%">
						</div>

					</div>
				</div>

				<!-- Recap Test Section-->
				<button class="section">Recap</button>
				<div class= "panel">

				<form id="recap">
				<fieldset>
				<h3> Answer the following questions to check if you have understood the information on this page. </h3>
				<br><h6> 1) What does the functions requirements specify? </h6>
				<label for="what"><input type="radio" name="question1" value="0" id="what" onclick="radioQu1()">What the software system contains</label>
				<label for="behaviour"><input type="radio" name="question1" value="1" id="behaviour" onclick="radioQu1()">The behaviour of the software system</label>
				<label for="non-functional"><input type="radio" name="question1" value="0" id="non-functional" onclick="radioQu1()">The non-functional aspects of the software system</label>
				<label for="requirements"><input type="radio" name="question1" value="0" id="requirements" onclick="radioQu1()">The requirements of the system</label><br><br>

				<h6> 2) How many types of Use Case are there? And what are they called? </h6>
				<label for="3"><input type="radio" name="question2" value="0" id="3" onclick="radioQu2()"> 3: Functional, Business and System</label>
				<label for="1:B"><input type="radio" name="question2" value="0" id="1:B" onclick="radioQu2()"> 1: Business</label>
				<label for="2"><input type="radio" name="question2" value="1" id="2" onclick="radioQu2()"> 2: System and Business</label>
				<label for="1:S"><input type="radio" name="question2" value="0" id="1:S" onclick="radioQu2()"> 1: System</label>

				<br>
				<p><span id="check"></span></p>
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
		<a href="<?php echo base_url();?>SystemController">&laquo;</a>
		<a href="<?php echo base_url();?>SystemController">1</a>
		<a class="activePagination" href="<?php echo base_url();?>SystemController2">2</a>
		<a href="<?php echo base_url();?>SystemController3">3</a>
		<a href="<?php echo base_url();?>SystemController4">4</a>
		<a href="<?php echo base_url();?>SystemController5">5</a>
		<a href="<?php echo base_url();?>SystemController6">6</a>
		<a href="<?php echo base_url();?>SystemController3">&raquo;</a>
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

	<script>
	var question1 = 0;
	var question2 = 0;

	function radioQu1() {
		question1 = parseInt(document.querySelector('input[name = "question1"]:checked').value);
	}

	function radioQu2() {
		question2 = parseInt(document.querySelector('input[name = "question2"]:checked').value);
	}

	function result() {
		result = question1 + question2;
		output = "Your Score: " + result + "/2"
		document.getElementById("score").innerHTML = output;
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
	function refresh(){
		location.reload();
	}
	</script>
</body>
</html>
