<!DOCTYPE HTML>
<html>
	<footer>
		<p>
			<h4>LAB 06 - MOVIES ARRAY</h4>
		</p>
	</footer>
  <script>
  var footerResize = function() {
    $('#footer').css('position', $("body").height() + $("#footer").innerHeight() > $(window).height() ? "inherit" : "fixed");
  };
  $(window).resize(footerResize).ready(footerResize);
</script>
</html>
