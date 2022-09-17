<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matedata Extrator</title>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
	<style>
		<?php include "style.css"?>
	</style>
    <div class="body">
    	<!-- <div class="nav-bar">
    		<input type="submit" value="Sign-Out" class="signup" name="signup" onclick="Javascript:window.location.href='home.php'">
    	</div> -->
    	<div class="main">
    		<div id="section1">
    			<h1>Meta-Data<br> Extractor</h1>
    			<h3>An automated way for ML</h3>
    			<a href="#section2" target="_parent"><button id='explore'>Explore</button></a>
    			<button id='online' onclick="Javascript:window.location.href='online.php'">Try Online</button>
    			<input type="submit" value="Sign-Out" class="signup" name="signup" onclick="Javascript:window.location.href='home.php'">
    		</div>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
			<script type="text/javascript">
			VANTA.GLOBE({
			  el: "#section1",
			  mouseControls: true,
			  touchControls: true,
			  gyroControls: false,
			  minHeight: 200.00,
			  minWidth: 200.00,
			  scale: 1.00,
			  scaleMobile: 1.00
			})
			</script>
			<div id="section2">
				<div class="container">
					<div class="card">
						<div class="content">
							<h2>About</h2>
							<p>Our mission is to organise the information and make it useful.</p>
							<a href="#">Read More</a>
						</div>
					</div>
					<div class="card">
						<div class="content">
							<h2>What's MED</h2>
							<p>qwertyuiopasdfghjklzxcvb</p>
							<a href="#">Read More</a>
						</div>
					</div>
					<div class="card">
						<div class="content">
							<h2>About</h2>
							<p>qwertyuiopasdfghjklzxcvb</p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
				<script type="text/javascript">
				VANTA.NET({
				  el: "#section2",
				  mouseControls: true,
				  touchControls: true,
				  gyroControls: false,
				  minHeight: 200.00,
				  minWidth: 200.00,
				  scale: 1.00,
				  scaleMobile: 1.00
				})
				</script>
				<script type="text/javascript" src="vanilla-tilt.js"></script>
				<script>
					VanillaTilt.init(document.querySelectorAll(".card"),{
						max:25,
						speed:400
					})
				</script>
			</div>
    	</div>
    </div>
</body>
</html>