<?php include 'header.php';?>

	<!-- Main information section. This contains text, tables and images. The information have been callapsed so that it would be easier to read. Each topic have been divied into pages -->
  <img style="position:absolute; width:50px;" src="../img/arrow.png" alt="sidebar" onclick="sidebar()">


  <div class="maincell" id="maincellID"> <!-- Main content for this page -->

    <div id="sidebarID" style="display:none;">
      <div class="sidebar">
        <nav>
          <ul>
            <li class="cross"><a class="cross" href="<?php echo base_url();?>SystemController4">&times;</a></li><br>
            <li style="margin-top:50px"><a href="<?php echo base_url();?>ProjectController">Project Management</a></li>
            <li><a href="<?php echo base_url();?>SystemController">System Designs</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <h1>System Designs<img src="../img/SystemDesign_white.png" alt= "System Design Icon" class="Topicicon"></h1>
			<h4>Designing Class Diagrams</h4>
			<p>The purpose of Class Diagram is to get a model with static view of the system.</p>
			<button class="section">Key feature of the Class Diagram</button>
			<div class="panel">
				<p>The key feature of the Class Diagram:</p>
				<ul class="b">
					<li>Class</li>
						<ul>
							<li>Name</li>
							<li>Attributes which describes the characteristics of the objects</li>
							<li>Operations which is used to manipulate attributes and to perform other actions</li>
						</ul>
					<li>Attributes</li>
						<ul>
							<li>Has a type which identifies the format of the attribute can take</li>
							<li>The attribute can be set to private, public or protected which controls the visibility within the classes</li>
							<li>Defaults can be set</li>
						</ul>
					<li>Operations</li>
						<ul>
							<li>Functions defined within a class that manipulate data of the objects of that class</li>
						</ul>
					</ul>
			  </div>
				<button class="section">The visibility setting</button>
				<div class="panel">
					<p>The attributes have visibility setting which help to protect the attributes and operations</p>
					<ul class="b">
						<li>Public (+) – the attributes would be seen in <b>all associated class or package</b></li>
						<li>Protected (#) – the attributes would be seen in <b>all associated subclasses</b></li>
						<li>Private (-) – the attributes would be seen in <b>only that particular class</b></li>
					</ul>
				</div>
			<button class="section">Classes relationship</button>
			<div class="panel">
				<p>Relationship between the classes</p>
				<ul class="b">
					<li><b>Association:</b> there is a link between two objects; this would occur if one sends a message to another or if one’s attribute is being used by another</li>
					<li><b>Multiplicity:</b> a range that indicates how many objects are linked (ranges are for example n…m, 0…1, 0…* etc)</li>
					<li><b>Generalisation:</b> relationship between a general thing (superclass or parent) and a more specific kind of that thing (subclass of child)</li>
				</ul>
			</div>
			<button class="section">Class Diagram Example</button>
			<div class="panel">
				<p>An example of Class diagram for the Library System</p>
				<img src="../img/ClassDiagram.png" style="width:200px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
				<!--<img src="../img/ClassDiagram.png"style="width:500px;padding-left:20px;padding-bottom:20px;">-->
			</div>
			<button class="section">Class-Responsibility-Collaborator (CRC)</button>
			<div class="panel">
				<p>To document the classes, attributes, operations and relationships Class-Responsibility-Collaborator (CRC) would be created. The CRCs are tailored for the different types.</p>
				<p>CRC for Book Class</p>
				<img src="../img/CRC-book.png" style="width:200px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
				<!--<img src="../img/CRC-book.png"style="width:500px;padding-left:20px;padding-bottom:20px;">-->
				<p><br>CRC for 'updateAvaCopies’ operation' </p>
				<img src="../img/CRC-book.update.png" style="width:200px" onclick="openModal();currentSlide(3)" class="hover-shadow cursor"><br><br>
				<!--<img src="../img/CRC-book.update.png"style="width:500px;padding-left:20px;padding-bottom:20px;">-->
			</div>
			<div id="myModal" class="modal">
				<span class="close cursor" onclick="closeModal()">&times;</span>
				<div class="modal-content">

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="../img/ClassDiagram.png" style="width:80%">
					</div>

			    <div class="mySlides">
			      <div class="numbertext"></div>
			      <img src="../img/CRC-book.png" style="width:80%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext"></div>
			      <img src="../img/CRC-book.update.png" style="width:80%">
			    </div>
				</div>
			</div>

			<!-- Recap Test Section-->
			<button class="section">Recap</button>
			<div class= "panel">

				<form id="recap">
				<fieldset>
				<h3> Answer the following questions to check if you have understood the information on this page. </h3>
				<br><h6> 1) How many types of Class relationship are there? </h6>
				<label for="1"><input type="radio" name="question1" value="0" id="1" onclick="radioQu1()"> 1</label>
				<label for="3"><input type="radio" name="question1" value="1" id="3" onclick="radioQu1()"> 3</label>
				<label for="5"><input type="radio" name="question1" value="0" id="5" onclick="radioQu1()"> 5</label>
				<label for="7"><input type="radio" name="question1" value="0" id="7" onclick="radioQu1()"> 7</label><br>

				<h6> 2) The private visibility setting for the attributes uses which character?  </h6>
				<label for="+"><input type="radio" name="question2" value="0" id="+" onclick="radioQu2()"> +</label>
				<label for="-"><input type="radio" name="question2" value="1" id="-" onclick="radioQu2()"> -</label>
				<label for="#"><input type="radio" name="question2" value="0" id="#" onclick="radioQu2()"> #</label>

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
				<a href="<?php echo base_url();?>SystemController3">&laquo;</a>
				<a href="<?php echo base_url();?>SystemController">1</a>
				<a href="<?php echo base_url();?>SystemController2">2</a>
				<a href="<?php echo base_url();?>SystemController3">3</a>
				<a class="activePagination" href="<?php echo base_url();?>SystemController4">4</a>
				<a href="<?php echo base_url();?>SystemController5">5</a>
				<a href="<?php echo base_url();?>SystemController6">6</a>
				<a href="<?php echo base_url();?>SystemController5">&raquo;</a>
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
