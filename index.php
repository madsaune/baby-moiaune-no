<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="center">
		<span><img src="heart.png"></span>
		<p id="countdown"></p>

	</div>
	

	<ul class="timeline">
		<li class="timeline-entry">
			<span class="timeline-date">24. Mars</span>
			<h2 class="timeline-title">Første ultralyd</h2>
		</li>

		<li class="timeline-entry">
			<span class="timeline-date">07. April</span>
			<h2 class="timeline-title">Andre ultralyd</h2>
		</li>

		<!--<li class="timeline-entry">
			<span class="timeline-date">24. Mars</span>
			<h2 class="timeline-title">Lorem ipsum</h2>
			<p class="timeline-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</li> -->
	</ul>


	<script src="countdown.min.js"></script>
	<script>
		function update() {
			document.getElementById("countdown").innerHTML = countdown(new Date(), new Date(2015, 11, 8), countdown.MONTHS|countdown.WEEKS|countdown.DAYS|countdown.HOURS).toHTML();
		}

		update();
		var interval = setInterval(update, 60000);
	</script>
</body>
</html>