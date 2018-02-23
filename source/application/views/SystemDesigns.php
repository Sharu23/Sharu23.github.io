<?php include_once('header.php'); ?>

<?php include_once('sidebar.php'); ?>

	<!-- Main information section. This contains text, tables and images. The information have been callapsed so that it would be easier to read. Each topic have been divied into pages -->
  <div class="maincell">
    <h1>System Designs<img src="../img/SystemDesign_white.png" alt= "System Design Icon" class="Topicicon"></h1>
    <h4>Requirements Analysis and Systems Design</h4>
		<button class="section">Requirements and System thinking</button>
		<div class="panel">
			<p>Requirements are the key of getting the end product right. There are some challenges when it comes to building the right systems, if the objectives are not clear; communications between the team has problem or resources are limited.</p>
	    <p>System thinking is the process of understanding how things influence one another within a whole domain context establishing a view of the system in a holistic manner and examining the linkages and interactions between the components which compose the entire system. </p>
		</div>
		<button class="section">Issues with System Thinking</button>
		<div class="panel">
	    <p>However, there are some issues with the System Thinking</p>
	    <ul class="b">
	      <li><b>Holism:</b> emergent properties are not possible to detect by analysis, but should be possible to be defined by a holistic approach</li>
	      <li><b>Goal seeking:</b> systemic interaction must result in a final state to achieve some goals.</li>
	      <li><b>Inputs and Outputs:</b> in a closed system inputs are determined once and constant but in an open system additional inputs are admitted from the environment.</li>
	      <li><b>Transformation of inputs into outputs:</b> this is the process through which the goals are achieved</li>
	      <li><b>Regulations:</b> A “feedback” mechanism is necessary for a system and allow the system’s functions to evolve driven by the requirements changes.</li>
	    </ul>
		</div>
		<button class="section">Three mainstreams methodologies</button>
		<div class="panel">
	    <p>There are three mainstreams methodologies in realisation of Systems Thinking</p>
	    <ul class="b">
	      <li>Structure methodology like Waterfall</li>
	      <li>Rapid Application Development (RAD) methodology like Prototyping</li>
	      <li>Agile methodology like Scrum</li>
	    </ul>
		</div>
    <button class="section">The Software System Development Process</button>
		<div class="panel">
	    <ul class="b">
	      <li><b>Requirement: </b> what the customer would want</li>
	      <li><b>Specification:</b> what would be offered to build </li>
	      <li><b>Design:</b> How it would be built </li>
	      <li><b>Implementation:</b> a working system</li>
	      <li><b>Deployment: </b> putting it in place</li>
	      <li><b>Maintenance and Evolution:</b> helping to grow the system</li>
	    </ul>
		</div>
		<button class="section">System design</button>
		<div class="panel">
	    <p>System design is pervasive. The designing aspect happens throughout the development.</p>
	    <p>There are issues in Software Systems Design, below are some that have been identified:</p>
	    <ul class="b">
	      <li><b>Decomposition and Modularisation:</b>  break a big system into smaller and self-evolving components</li>
	      <li><b>Abstraction:</b> not focusing on details to get the high-level structure right</li>
	      <li><b>Encapsulation/information hiding:</b> the ability to embed details</li>
	      <li><b>Workflow and event handling:</b> what the activities inside a workflow and how to handle events should be considered</li>
	      <li><b>Concurrency:</b> what the main concurrent activities are and how to manage their interaction should be considered</li>
	      <li><b>Error handling and recovery:</b> action when a physical component fails (e.g. the database server), and how to handle exceptional circumstances in the real world should be considered</li>
	      <li><b>Persistence of data:</b> what data should be stored in databases and files and how complex (e.g. syntactic, semantics, and pragmatics) they are should be considered</li>
	    </ul>
		</div>
		<button class="section"> Software System Designs</button>
		<div class="panel">
	    <p>There are two types of designs within Software Systems Design</p>
	    <ul class="b">
	      <li>High-level design (architectural design)</li>
	      <li>Low-level design (physical design)</li>
	    </ul>
	    <p>Design quality and evaluation should be considered.</p>
	    <ul class="b">
	      <li>Design quality include features like performance, reliability, security, availability, modifiability, portability, reusability, testability, maintainability</li>
	      <li>Evaluation can be achieved by measuring these features</li>
	    </ul>
		</div>
		<button class="section">Object-orientation</button>
		<div class="panel">
	    <p>Object-orientation is an approach to systems development</p>
	    <ul class="b">
	      <li>A little module is known as object</li>
	      <li>The basic features of Object-Oriented Approach are</li>
	        <ul>
	          <li>Encapsulation: bundle data and processing functions of the data together</li>
	          <li>Information-hiding: a sturdy capsule is a black box – public interface and private representation</li>
	          <li>Message: message = {name of an operation and any required arguments}</li>
	        </ul>
	    </ul>
		</div>

		<!-- Recap Test Section-->
		<button class="section">Recap</button>
		<div class= "panel">

		<form id="recap">
		<fieldset>
		<h3> Answer the following questions to check if you have understood the information on this page. </h3>
		<br><h6> 1) If the objectives at the start have been identified correctly, there would be no other issues? </h6>
		<label for="yes"><input type="radio" name="question1" value="0" id="yes" onclick="radioQu1()">Yes, that is true.</label>
		<label for="no"><input type="radio" name="question1" value="1" id="no" onclick="radioQu1()">No, there still needs to be good communication.</label><br><br>

		<h6> 2) What is a little mudole known as? </h6>
		<label for="feature"><input type="radio" name="question2" value="0" id="feature" onclick="radioQu2()"> feature</label>
		<label for="branch"><input type="radio" name="question2" value="0" id="branch" onclick="radioQu2()"> branch</label>
		<label for="function"><input type="radio" name="question2" value="0" id="function" onclick="radioQu2()"> function</label>
		<label for="object"><input type="radio" name="question2" value="1" id="object" onclick="radioQu2()"> object</label>

		<br>
		<p><span id="check"></span></p>
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
		<a class="activePagination" href="SystemDesigns.html">1</a>
		<a href="SystemDesigns_2.html">2</a>
		<a href="SystemDesigns_3.html">3</a>
		<a href="SystemDesigns_4.html">4</a>
		<a href="SystemDesigns_5.html">5</a>
		<a href="SystemDesigns_6.html">6</a>
		<a href="SystemDesigns_2.html">&raquo;</a>
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
		output = "Out of 2 marks you got " + result;
		document.getElementById("score").innerHTML = output;
	}
	</script>

	<script>
	function refresh(){
		location.reload();
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

</body>
</html>
