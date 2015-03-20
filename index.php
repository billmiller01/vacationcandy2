<!doctype html>
<html>
	<head><link rel = "stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#footer').css('color','blue');
		$('.brad').hover(function(){
			$(this).fadeTo('slow','0.5');
		});
		$('#footer').click(function(){
			$('#footer').fadeTo('slow','0.5');
		});
	});
		</script>
</head>

	<div>
		<a id="pic" href="https://vacationcandy.com/"><img src="https://vacationcandy.com/logo.png"/></a>
		<h1 id="main"><em>Stats</em></h1>

	</div>

	<div id="chad">
		<h3 class="brad">
			Section One
		</h3>
		<div>
			<p class="content">
				Content
			</p>
		</div>
			<h3 class="brad">Section Two</h3>
		<div>
			<p class="content">
				Content
			</p>
		</div>
			<h3 class="brad">Section Three</h3>
		<div>
			<p class="content">
				Content
			</p>
		</div>
	</div>
	<p id="footer">check out the content in this footer</p>


</html>
