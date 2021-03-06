<?php include 'header.php';?>

<?php include 'sidebar.php';?>

	<!-- Main information section. This contains text, tables and images. The information have been callapsed so that it would be easier to read. Each topic have been divied into pages -->
  <div class="maincell">
    <h1>Project Management<img src="../img/ProjectManagement_white.png" alt= "Project Management Icon" class="Topicicon"></h1>
      <h4>Project Management Methods</h4>
      <button class= "section">What is a product? </button>
      <div class="panel">It is an output of a project, which can be a management product, a specialist product or made up of other products. PRINCE2 distinguishes between management products (which are part of the management or quality process of the project) and specialist products (which are part of the making up the final deliverable). </div>
      <button class="section">Product Based Planning </button>
			<div class="panel">
				<p>This planning would help to define the full scope of the project deliverables, as it considers prerequisite products, quality requirements and dependencies.There are three stages to it, which are: </p>
	      <ol>
	        <li>Creating a Product Breakdown Structure (PBS) diagram</li>
	          <ul>
	            <li>It is a hierarchy of all the products to the produced under a plan, which has a tree structure moving from a general root to detailed leaves. A root is a single box that summarises the overall project (the end product). </li>
	            <li>They can be verb-orientated (define according to action) or noun-orientated (all elements are components of each deliverable)</li>
	          </ul>
	        <li>Descripting each of the products methodically </li>
	          <ul>
	            <li>All significant products in the PBS and every leaf product must have its own product description.</li>
	            <li>It gives the project team the specification of who must construct the product, and whether to accept it.</li>
	            <li>This description helps to verify the integrity of the hierarchy in the PBS.</li>
	            <li>Product descriptions should include:</li>
	              <ul>
	                <li><b>Title:</b> a short descriptive name for the product</li>
	                <li><b>Purpose:</b> why the product is required and the overall goal</li>
	                <li><b>Composition:</b> are there any sub-products</li>
	                <li><b>Derivation:</b> where is the source of information coming from</li>
	                <li><b>Format:</b> what form would the product come in, be presented in </li>
	                <li><b>Quality / Completion criteria:</b> what is the acceptance criteria for the product.</li>
	              </ul>
	            </ul>
	          <li>Produce a product flow diagram </li>
	          <ul>
	            <li>It is a diagram that shows the dependencies between products and any iterations</li>
	            <li>Gantt chart is an example, where are all the information of the PBS should be included. For scheduling two approaches can be taken: </li>
	              <ul>
	                <li>Bottom-up: Work out how long each item will take and then sum it for the total length</li>
	                <li>Top-down: Divide the total length by the number of item you have and work from that.</li>
	              </ul>
	            </ul>
	          </ol>
	        <p>The most important part of the business case is the “promise”. These can help with testing as well. </p>
				</div>
				<button class="section">Risk Management</button>
				<div class="panel">
	        <p>Under Risk Management, there are 5 steps that the PRINCE2 describes:</p>
	          <ol>
	            <li><b>Identifying: </b> all the threats that can occur in the project; these can be general ones or specific to the project. </li>
	            <li><b>Assessing:</b> analysing the probability of the risk occurring and the impact it can have. </li>
	            <li><b>Planning: </b> having solutions as to how to avoid the risks or solve them once they occur.</li>
	            <li><b>Implementing:</b> Making notes and registering the risk that occur and altering any changes to the solution or prevention. </li>
	            <li><b>Communication:</b> informing all the related members of the risks that could or have occurred.</li>
	          </ol>
					</div>

					<!-- Recap Test Section-->
					<button class="section">Recap</button>
					<div class= "panel">

					<form id="recap">
					<fieldset>
					<h3> Answer the following questions to check if you have understood the information on this page. </h3>
					<br><h6> 1) According to PRINCE2, how many steps are there in Risk Management? </h6>
					<label for="3"><input type="radio" name="question1" value="0" id="3" onclick="radioQu1()"> 3</label>
					<label for="5"><input type="radio" name="question1" value="1" id="5" onclick="radioQu1()"> 5 </label>
					<label for="7"><input type="radio" name="question1" value="0" id="7" onclick="radioQu1()"> 7</label>
					<label for="10"><input type="radio" name="question1" value="0" id="10" onclick="radioQu1()"> 10</label><br>

					<h6> 2) Product Breakdown Structure can be written in two orientation, what are they? </h6>
					<label for="verb"><input type="radio" name="question2" value="0" id="verb" onclick="radioQu2()"> Verb-orientated only</label>
					<label for="noun"><input type="radio" name="question2" value="0" id="noun" onclick="radioQu2()"> noun-orientated only</label>
					<label for="noun_verb"><input type="radio" name="question2" value="1" id="noun_verb" onclick="radioQu2()"> noun and verb-orientated</label>
					<label for="none"><input type="radio" name="question2" value="0" id="none" onclick="radioQu2()"> none of the above</label>

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
		<a href="<?php echo base_url();?>ProjectController">&laquo;</a>
	  <a href="<?php echo base_url();?>ProjectController">1</a>
	  <a class="activePagination" href="<?php echo base_url();?>ProjectController2">2</a>
	  <a href="<?php echo base_url();?>ProjectController3">3</a>
	  <a href="<?php echo base_url();?>ProjectController4">4</a>
	  <a href="<?php echo base_url();?>ProjectController3">&raquo;</a>
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

	<!--Checking and scoring of recap test-->
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
	function refresh() {
	  location.reload();
	}
	</script>

</body>
</html>
