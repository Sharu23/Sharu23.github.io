<?php include 'header.php';?>

<?php include 'sidebar.php';?>

  <!-- Main information section, rounded bordered style -->
  <div class="maincell">
    <h1>Modules</h1>
    <div class="roundedBorder">
      <h4>Project Management and System Designs</h4>
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
      <h4>Computer Applications</h4>
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
      <h4>Databases</h4>
      <table>
        <tr>
          <th><img src= "../img/Databases.png" alt= "Basic Databases Icon" class="icon"></th>
        </tr>
        <tr>
          <th>Basic Databases</th>
        </tr>
      </table>
    </div>
  </div>

<?php include 'footer.php';?>

</body>
</html>
