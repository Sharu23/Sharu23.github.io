<!-- Footer of the page -->
<footer>
  <div class="container">&copy; Sharugi Balachandran<span style="float:right;"><a style="color:white;text-decoration:underline;" href= "<?php echo base_url();?>MoreDetailsController">More details</a></span></div>
</footer>

<!--Script for the humburger menu, when the menu should appear and disappear-->
<script>
function hamburgerFunction() {
    var x = document.getElementById("hamburgerDiv");

		if(x.style.display === "none") {
			x.style.display = "block";
		}
		else {
			x.style.display = "none";
		}
}
</script>

<script>
function sidebar()
{
	var s = document.getElementById("sidebarID");

	if(s.style.display === "none"){
		s.style.display = "block";
	}
	else {
		{
			s.style.display = "none";
		}
	}
}
</script>


</body>
</html>
