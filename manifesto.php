<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Leor Maizel - UX Designer – Portfolio: Manifesto</title>
		<?php include 'blocks/head.php'; ?>
		<link rel="stylesheet" type="text/css" href="../css/fluidbox.min.css" />
	</head>
	
	<body class="portfolio-project manifesto-pg">
		<?php include_once("blocks/analyticstracking.php") ?>
		
		<!-- header -->
		<?php include 'blocks/nav.php'; ?>
		<header>
			<canvas id="canvas-basic"></canvas>
			<div class="wrap">
			</div>
		</header>
		<!-- work -->
		<section>
			<div class="wrap">
				<h3>There’s no denying that things have changed.</h3>
				<p>People have more access to technology than ever before. Devices with computing power unfathomable even 7 years ago years ago now fit in our pocket. In our homes, our workplaces, and on our bodies, the internet, mobile applications, biometric technologies, voice control devices, and virtual/mixed/augmented realities are the substratum upon which we carry out our daily lives, conduct business and socialize with other human beings.</p>
				<p>As a result, core attitudes, assumptions, and routines that inextricably governed our lives are now irrevocably changed&#8212;the way we share information about ourselves is different. The way we expect to meet people is different. The way we expect to consume and retain information is different.</p>
				<p>This unprecedentedly rapid disruption has given way to a renaissance in the ways we interact with digital objects; the triumph of user centered design is in the dissemination of the idea that digital products and experiences should not only be of high performance and technical craftsmanship, but also something beyond the utilitarian&#8212;a little bit magical.</p>
				<p>But the pursuit of user centered design faces a dilemma.</p>
				<p>As designers, our role is to create digital products that add positive value in people’s lives. But what price have we paid?</p>
				<p>The more we create digital products that seek to enhance real physical experiences, the greater the risk that we begin to devalue the simple, core and real experiences that define what it is to be human.</p>
				<p>What are we, as a modern, technologically advanced society, sacrificing?</p>
				<div class="videos">
					<div class="video-container">
						<iframe width="560" height="315" src="//www.youtube.com/embed/1mYCIKTX0ug?list=UUKB83fAKU3YoXXuGDH5B1YA" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="video-container">
						<iframe width="560" height="315" src="//www.youtube.com/embed/OINa46HeWg8?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<p>We as designers have a responsibility. If we feel that that something real, vulnerable and inherently human is weakening, we can not excuse ourselves as passive agents. We design these products. We must address their consequences.</p>
				<p>Let us as an industry seek to design tools that help users carry out their daily tasks so they can get back to the business of human interaction. Let us always keep a watchful eye on whether our products encourage or discourage real social connections.</p>
				<p>And let us continually strive to find a happy medium.</p>
			</section>
			
			<!-- footer -->
			<?php include 'blocks/footer.php'; ?>
			<script>
			//Gradient genrator for header section
			var granimInstance = new Granim({
			element: '#canvas-basic',
			name: 'basic-gradient',
			direction: 'left-right',
			opacity: [1, 1],
			isPausedWhenNotInView: true,
			states : {
			"default-state": {
				gradients: [
				['#3E393D', '#594F57'],
				['#736D65', '#DCA84A'],
				['#544956', '#D8C08E'],
				['#DCA84A', '#3F3441']
				]
			}
			}
			});
			//Fluidbox initialize
			$(function () {
				$('.fluidbox').fluidbox();
			})
			</script>
		</body>
	</html>