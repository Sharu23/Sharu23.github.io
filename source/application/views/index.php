<?php include 'header.php';?>

<img style="position:absolute; width:50px;" src="../img/arrow.png" alt="sidebar" onclick="sidebar()">


<div class="maincell" id="maincellID"> <!-- Main content for this page -->

	<div id="sidebarID" style="display:none;">
		<div class="sidebar">
			<nav>
				<ul>
					<li class="cross"><a class="cross" href="<?php echo base_url();?>Welcome">&times;</a></li>
					<li><a href="<?php echo base_url();?>ProjectController">Project Management</a></li>
					<li><a href="<?php echo base_url();?>SystemController">System Designs</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<h1>Introduction</h1>
	<div style="width:97%; margin-left:auto; margin-right:auto">
		<p>Welcome to Today’s 4 Revision website, through this website you can read upon some of the Computer Science modules and complete a quiz to test your knowledge on the specific modules/ topics.</p>
		<h5>How is the information structured?</h5>
		<p>The easiest way to finding the information would be to go to the Modules page; on this page you would see the different modules which are broken down in to Topics. Pick a topic, which you can revise from.</p>
		<h5>The Quiz</h5>
		<p>The Quiz is designed to help you to check if you have understood and learned the content, ready for your exam. On the quiz, you can use the default settings or personalise it to your needs. Read the information on the quiz page before you start, so that you understand what is asked of you to do.</p>
	</div>
</div>

<?php include 'footer.php';?>
