<?php include 'header.php';?>

	<!-- Main information section. This contains text, tables and images. The information have been callapsed so that it would be easier to read. Each topic have been divied into pages -->
  <img style="position:absolute; width:50px;" src="../img/arrow.png" alt="sidebar" onclick="sidebar()">


  <div class="maincell" id="maincellID"> <!-- Main content for this page -->

  	<div id="sidebarID" style="display:none;">
  		<div class="sidebar">
  			<nav>
  				<ul>
  					<li class="cross"><a class="cross" href="<?php echo base_url();?>SystemController6">&times;</a></li><br>
  					<li style="margin-top:50px"><a href="<?php echo base_url();?>ProjectController">Project Management</a></li>
  					<li><a href="<?php echo base_url();?>SystemController">System Designs</a></li>
  				</ul>
  			</nav>
  		</div>
  	</div>
    <h1>System Designs<img src="../img/SystemDesign_white.png" alt= "System Design Icon" class="Topicicon"></h1>
		<h4>Constructing Software Systems Architecture</h4>
		<button class="section">Software Component</button>
		<div class="panel">
			<p>Software Component (modular and cohesive) are executable units of code, designs, specification and tests. They can only be accessed through a published interface and be deployed in several nodes in the hardware architecture.</p>
			<p>A software component architecture consists of components, ports and connections. Ports and connections form the interfaces between the components.</p>
		</div>
		<button class="section">Basic Concept of Component Diagrams</button>
		<div class="panel">

      <!--table that will appear on mobile -->
			<table class="borderTable tablet">
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Icon</th>
				</tr>
				<tr>
					<th>Component</th>
					<th>A physical and replaceable building block of software systems</th>
					<th>
						<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
						<!--<img src="../img/component.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
					</th>
				</tr>
				<tr>
					<th>Interface</th>
					<th colspan="2">describes a group of operations used or created by components</th>
				</tr>
				<tr>
						<th style="padding-left:20px;">Provided interface</th>
						<th>the component provides as a service to other components</th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
							<!--<img src="../img/provided.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th style="padding-left:20px;">Required interface</th>
						<th>The component conforms to when requesting the services from other components</th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
							<!--<img src="../img/required.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>Port</th>
						<th>
							An explicit window into an encapsulated component
								<ul>
									<li>accepting the specific functions of external components </li>
									<li>representing a group of messages or calls</li>
									<li>a port is a property of a component that has an interface as its type</li>
								</ul>
						</th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
							<!--<img src="../img/port.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>Part</th>
						<th>
							A unit of the implementation of the component
								<ul>
									<li>nested within the parent component</li>
									<li>each part has its distinct functions  </li>
								</ul>
						</th>
						<th>
							<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
							<!--<img src="../img/part.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>Connector</th>
						<th colspan="2">A communication relationship between different parts within the component</th>
					</tr>
					<tr>
							<th style="padding-left:20px;">Delegation connector</th>
							<th>
								<ul>
									<li>to wire internal ports to external ports of the overall component</li>
									<li>arrow from an internal port pointing to an external port</li>
								</ul>
								</th>
							<th>
								<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
								<!--<img src="../img/delegation.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
							</th>
						</tr>
						<tr>
							<th style="padding-left:20px;">Direct connector</th>
							<th>The connection is tightly coupled</th>
							<th>
								<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
								<!--<img src="../img/direct.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
							</th>
						</tr>
						<tr>
							<th style="padding-left:20px;">Connector by interface</th>
							<th>both ports have compatible interface</th>
							<th>
								<img src="../img/tableIcon.png" style="width:200px" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
								<!--<img src="../img/interface.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
							</th>
						</tr>
			</table>

      <!--table that will appear on tablet -->
      <table class="borderTable mobile">
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Icon</th>
				</tr>
				<tr>
					<th>Component</th>
					<th>A physical and replaceable building block of software systems</th>
					<th>
						<img src="../img/component.png" style="width:200px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
						<!--<img src="../img/component.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
					</th>
				</tr>
				<tr>
					<th>Interface</th>
					<th colspan="2">describes a group of operations used or created by components</th>
				</tr>
				<tr>
						<th style="padding-left:20px;">Provided interface</th>
						<th>the component provides as a service to other components</th>
						<th>
							<img src="../img/provided.png" style="width:200px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
							<!--<img src="../img/provided.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th style="padding-left:20px;">Required interface</th>
						<th>The component conforms to when requesting the services from other components</th>
						<th>
							<img src="../img/required.png" style="width:200px" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
							<!--<img src="../img/required.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>Port</th>
						<th>
							An explicit window into an encapsulated component
								<ul>
									<li>accepting the specific functions of external components </li>
									<li>representing a group of messages or calls</li>
									<li>a port is a property of a component that has an interface as its type</li>
								</ul>
						</th>
						<th>
							<img src="../img/port.png" style="width:200px" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
							<!--<img src="../img/port.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>Part</th>
						<th>
							A unit of the implementation of the component
								<ul>
									<li>nested within the parent component</li>
									<li>each part has its distinct functions  </li>
								</ul>
						</th>
						<th>
							<img src="../img/part.png" style="width:200px" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
							<!--<img src="../img/part.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
						</th>
					</tr>
					<tr>
						<th>Connector</th>
						<th colspan="2">A communication relationship between different parts within the component</th>
					</tr>
					<tr>
							<th style="padding-left:20px;">Delegation connector</th>
							<th>
								<ul>
									<li>to wire internal ports to external ports of the overall component</li>
									<li>arrow from an internal port pointing to an external port</li>
								</ul>
								</th>
							<th>
								<img src="../img/delegation.png" style="width:200px" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
								<!--<img src="../img/delegation.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
							</th>
						</tr>
						<tr>
							<th style="padding-left:20px;">Direct connector</th>
							<th>The connection is tightly coupled</th>
							<th>
								<img src="../img/direct.png" style="width:200px" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
								<!--<img src="../img/direct.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
							</th>
						</tr>
						<tr>
							<th style="padding-left:20px;">Connector by interface</th>
							<th>both ports have compatible interface</th>
							<th>
								<img src="../img/interface.png" style="width:200px" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
								<!--<img src="../img/interface.png"style="width:250px;padding-left:20px;padding-bottom:20px;">-->
							</th>
						</tr>
			</table>



		</div>
		<button class="section">Compiler components example</button>
		<div class="panel">
			<p>An example of Compiler components can be seen below </p>
			<img src="../img/compiler.png" style="width:450px" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
			<!--<img src="../img/compiler.png"style="width:500px;padding-left:20px;padding-bottom:20px;">-->
		</div>
		<button class="section">'OrderFulfillment' components example</button>
		<div class="panel">
			<p>Another example, where it shows the 'OrderFulfillment' components. Here you can see the use of the different types of connectors </p>
			<img src="../img/orderFulfillment.png" style="width:450px" onclick="openModal();currentSlide(10)" class="hover-shadow cursor"> <br><br>
			<!--<img src="../img/orderFulfillment.png"style="width:500px;padding-left:20px;padding-bottom:20px;">-->
		</div>


	<div id="myModal" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">

			<div class="mySlides">
				<img src="../img/component.png" style="width:30%">
			</div>

			<div class="mySlides">
				<img src="../img/provided.png" style="width:30%">
			</div>

			<div class="mySlides">
				<img src="../img/required.png" style="width:30%">
			</div>

			<div class="mySlides">
				<img src="../img/port.png" style="width:30%">
			</div>

			<div class="mySlides">
				<img src="../img/part.png" style="width:30%">
			</div>

			<div class="mySlides">
				<img src="../img/delegation.png" style="width:30%">
			</div>

			<div class="mySlides">
				<img src="../img/direct.png" style="width:30%">
			</div>

			<div class="mySlides">
				<img src="../img/interface.png" style="width:30%">
			</div>

			<div class="mySlides">
				<img src="../img/compiler.png" style="width:80%">
			</div>

			<div class="mySlides">
				<img src="../img/orderFulfillment.png" style="width:80%">
			</div>
		</div>
	</div>

		<!-- Recap Test Section-->
		<button class="section">Recap</button>
		<div class= "panel">

			<form id="recap">
			<fieldset>
			<h3> Answer the following questions to check if you have understood the information on this page. </h3>
			<br><h6> 1) Which of the following image represents a 'part' of an Component Diagram? </h6>
			<label for="component"><input type="radio" name="question1" value="0" id="component" onclick="radio()"><img src="../img/component.png" style="height:100px"></label><br>
			<label for="port"><input type="radio" name="question1" value="0" id="port" onclick="radio()"><img src="../img/port.png" style="height:150px"> </label><br>
			<label for="part"><input type="radio" name="question1" value="1" id="part" onclick="radio()"><img src="../img/part.png" style="height:100px"> </label><br>
			<label for="required"><input type="radio" name="question1" value="0" id="required" onclick="radio()"><img src="../img/required.png" style="height:100px"> </label><br><br>

			<h6> 2) What does a software component architecture consist of? </h6>
			<label for="Components"><input type="checkbox" name="question2" value="right" style="padding-left=10px" id="Components" onclick="checkbox()"> Components</label>
			<label for="Ports"><input type="checkbox" name="question2" value="right" id="Ports" onclick="checkbox()"> Ports</label>
			<label for="Connections"><input type="checkbox" name="question2" value="right" id="Connections" onclick="checkbox()"> Connections</label>
			<label for="Nodes"><input type="checkbox" name="question2" value="wrong" id="Nodes" onclick="checkbox()"> Nodes</label><br>

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
		<a href="<?php echo base_url();?>SystemController5">&laquo;</a>
		<a href="<?php echo base_url();?>SystemController">1</a>
		<a href="<?php echo base_url();?>SystemController2">2</a>
		<a href="<?php echo base_url();?>SystemController3">3</a>
		<a href="<?php echo base_url();?>SystemController4">4</a>
		<a href="<?php echo base_url();?>SystemController5">5</a>
		<a class="activePagination" href="<?php echo base_url();?>SystemController6">6</a>
		<a class="disabled">&raquo;</a>
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
					if(checkboxChecked === 3)
					{
						question2 = 1;
					}
				}
			}

		}

		function result() {
			result = question1 + question2;
			output = "Your Score: " + result + "/2"
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
