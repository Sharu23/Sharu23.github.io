<?php include 'header.php';?>

<img style="position:absolute; width:50px;" src="../img/arrow.png" alt="sidebar" onclick="sidebar()">


<div class="maincell" id="maincellID"> <!-- Main content for this page -->

	<div id="sidebarID" style="display:none;">
		<div class="sidebar">
			<nav>
				<ul>
					<li class="cross"><a class="cross" href="<?php echo base_url();?>Welcome">&times;</a></li><br>
					<li style="margin-top:50px"><a href="<?php echo base_url();?>ProjectController">Project Management</a></li>
					<li><a href="<?php echo base_url();?>SystemController">System Designs</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<h1>Introduction</h1>
	<div style="width:97%; margin-left:auto; margin-right:auto">
<iframe src="//www.slideshare.net/slideshow/embed_code/key/9wdqlYlkOrgqSu" width="100%" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
		<br><br><p>Welcome to Today’s 4 Revision website, through this website you can read upon some of the Computer Science modules and complete a quiz to test your knowledge on the specific modules/ topics.</p>
		<h5>How is the information structured?</h5>
		<p>The easiest way to finding the information would be to go to the Modules page; on this page you would see the different modules which are broken down in to Topics. Pick a topic, which you want to revise.</p>
		<h5>The Quiz</h5>
		<p>The Quiz is designed to help you to check if you have understood what you have learned, and whether you are ready for your exam. Read the information on the quiz page before you start, so that you understand what is asked of you to do.</p><br><br>
	</div>


</div>

<?php include 'footer.php';?>
