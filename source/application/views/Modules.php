<?php include 'header.php';?>

  <!-- Main information section, rounded bordered style -->
  <img style="position:absolute; width:50px;" src="../img/arrow.png" alt="sidebar" onclick="sidebar()">


  <div class="maincell" id="maincellID"> <!-- Main content for this page -->

  	<div id="sidebarID" style="display:none;">
  		<div class="sidebar">
  			<nav>
  				<ul>
  					<li class="cross"><a class="cross" href="<?php echo base_url();?>ModulesController">&times;</a></li><br>
  					<li><a href="<?php echo base_url();?>ProjectController">Project Management</a></li>
  					<li><a href="<?php echo base_url();?>SystemController">System Designs</a></li>
  				</ul>
  			</nav>
  		</div>
  	</div>

    <h1>Modules</h1>
    <div class="roundedBorder">
      <h4 style="padding-bottom:10px">Project Management and System Designs</h4>
      <table class="moduleTable">
        <tr>
          <th style="width:50%"><a href= "<?php echo base_url();?>ProjectController">
            <img src= "../img/ProjectManagement.png" alt= "Project Management Icon" class="icon"></th></a>
            <th style="width:50%"><a href= "<?php echo base_url();?>SystemController">
							<img src= "../img/SystemDesign.png" alt= "System Design Icon" class="icon"></th></a>
        </tr>
        <tr>
          <th style="width:50%"><a href= "<?php echo base_url();?>ProjectController">
						Project Management</th></a>
          <th style="width:50%"><a href= "<?php echo base_url();?>SystemController">
						System Designs</th></a>
        </tr>
      </table>
    </div>
    <div class="roundedBorder">
      <h4 style="padding-bottom:10px">Computer Applications</h4>
      <table>
        <tr>
          <th style="width:50%"><img src= "../img/DigitalLogicIcon.png" alt= "Digital Logic Icon" class="icon"></th>
          <th style="width:50%"><img src= "../img/InternetCommunicationIcon.png" alt= "Internet Communication Icon" class="icon"></th>
        </tr>
        <tr>
          <th style="width:50%">Digital Logic</th>
          <th style="width:50%">Internet Communication</th>
        </tr>
      </table>
    </div>
    <div class="roundedBorder">
      <h4 style="padding-bottom:10px">Databases</h4>
      <table>
        <tr>
          <th><img src= "../img/Databases.png" alt= "Basic Databases Icon" class="icon"></th>
          <th></th>
        </tr>
        <tr>
          <th style="width:50%">Basic Databases</th>
          <th style="width:50%"></th>
        </tr>
      </table>
    </div>
  </div>

<?php include 'footer.php';?>
