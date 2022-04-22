<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Home </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
</head>

<body>



	<!-- Starbackground -->
	<div id='stars'></div>
	<div id='stars2'></div>
	<div id='stars3'></div>

	<!-- parallax text/java -->
	<div id="parallax">
		<div class="layer" data-depth="0.6">

			<!-- text -->
			<div class="some-space">
				<h1>Welcome</h1>
			</div>

		</div>
		<div class="layer" data-depth="0.4">
			<div id="particles-js"></div>
		</div>

		<!-- Button -->
		<div class="layer" data-depth="0.3">
			<div class="some-more-space1"><a href="<?php echo site_url('dashboard');?>">Continue to dashboard</a></div>
		</div>
	</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://matthew.wagerfield.com/parallax/deploy/jquery.parallax.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/particles.js"></script>
</body>

</html>
