<!--Sidebar for Module and Topic pages, make sure all the topic pages have the same navigation as this page -->
  <div class="sidebar">
    <a href="#" class= "nav-toggle-btn"></a>
    <ul>
      <li>Project Management and System Designs</li>
      <ul>
        <li><a href="ProjectManagement.html">Project Management</a></li>
        <li><a href="SystemDesigns.html">System Designs</a></li>
      </ul>
    </ul>
  </div>

  <!-- Script for the sidebar, when the side-nav has to be activated -->
  <script type="text/javascript">

      (function() {

          var bodyEl = $('body'),
              navToggleBtn = bodyEl.find('.nav-toggle-btn');

          navToggleBtn.on('click', function(e) {
              bodyEl.toggleClass('active-nav');
              e.preventDefault();

          });
      })();
  </script>
