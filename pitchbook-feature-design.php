<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Leor Maizel - UX Designer – Portfolio: PitchBook Feature Design</title>
		<?php include 'blocks/head.php'; ?>
		<link rel="stylesheet" type="text/css" href="../css/fluidbox.min.css" />
	</head>
	
	<body class="portfolio-project pb-feature">
		<?php include_once("analyticstracking.php") ?>
		
		<!-- header -->
		<?php include 'blocks/nav.php'; ?>
		<header>
			<canvas id="canvas-basic"></canvas>
			<div class="wrap">
				<div class="tagline">
					<h1>PitchBook Feature Design</h1>
				</div>
			</div>
		</header>
		<!-- work -->
		<section class="background">
			<div class="wrap">
				<h2 class="item-title">Background</h2>
				<p>PitchBook is the most comprehensive database of Private Equity and Venture data on the market. Subscribers can slice-and-dice data on our analytics platform to research deals, company performance, fund performance and make informed investment decisions.</p>
			</div>
		</section>
		<section>
			<div class="wrap">
				<h2 class="item-title">Company Timeline</h2>
				<p>Blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/pb-timeline-0.jpg">
						<img src="assets/img/thumbs/pb-timeline-0.jpg">
					</a>
					<p>Customized Excel toolbar ribbon with Pitchbook-specific options</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/pb-timeline-1.jpg">
						<img src="assets/img/thumbs/pb-timeline-1.jpg">
					</a>
					<p>Example of the industry standard financial modeling templates</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/pb-timeline-2.jpg">
						<img src="assets/img/thumbs/pb-timeline-2.jpg">
					</a>
					<p>Example of the industry standard financial modeling templates</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/pb-timeline-3.jpg">
						<img src="assets/img/thumbs/pb-timeline-3.jpg">
					</a>
					<p>Example of the industry-standard financial modeling templates</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/pb-timeline-4.jpg">
						<img src="assets/img/thumbs/pb-timeline-4.jpg">
					</a>
					<p>Example of the industry-standard financial modeling templates</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/pb-timeline-5.jpg">
						<img src="assets/img/thumbs/pb-timeline-5.jpg">
					</a>
					<p>Example of the industry-standard financial modeling templates</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/pb-timeline-6.jpg">
						<img src="assets/img/thumbs/pb-timeline-6.jpg">
					</a>
					<p>Example of the industry-standard financial modeling templates</p>
				</div>
			</div>
		</section>

		<section>
			<div class="wrap">
				<h2 class="item-title">Excel Plugin</h2>
				<p>Through competitive research and consistent feedback from users, we discovered that our web application was imposing an unnecessary constraint on our “power users”&#8212;the financial analysts at PE and VC firms who spend their entire day in Microsoft Excel and don’t want to learn another 3rd party platform. Thus the Pitch Book Plugin for Excel was born.</p>
				<p>The main goal of this project was to identify the core use cases in which an analyst would want to access Pitch Book data within Excel. We further wanted to identify whether there were any functionalities unique to the Platform that we could incorporate into Excel.</p>
				<p>I interviewed several financial analysts, clients as well as PitchBook’s financial research team, asking questions such as:</p>
				<ul>
					<li>How do you use excel to conduct financial analysis?</li>
					<li>When you download data from our or other platforms into Excel, how do you typically manipulate it?</li>
					<li>What do you like/dislike about our competitors’ Excel plugins?</li>
					<li>What are the best practices for formatting data when modeling in Excel?</li>
				</ul>
				<p>I determined that there were 3 key components that needed to be built into the plugin: the ability to access and manipulate standard industry modeling templates, which represents the most common use case for the plugin, the ability to create custom formulas (for our “super power" users.), and the ability to access data queries saved and performed on the PitchBook web application.</li>
				</ul>
				<p>For the widest use case&#8212;industry templates&#8212;I based the visual design on best practices for representing which cells are user inputs, which are pulled from our database, and which  are base assumptions that underlie the entire template.</p>
				<p>Further responsibilities included writing all of the Excel error, alert & confirmation notifications, as well as creating a user guide with installation steps, overview of plugin functionality and error troubleshooting.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/pb-excel-1.jpg">
						<img src="assets/img/thumbs/pb-excel-1.jpg">
					</a>
					<p>Customized Excel toolbar ribbon with Pitchbook-specific options</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/pb-excel-2.jpg">
						<img src="assets/img/thumbs/pb-excel-2.jpg">
					</a>
					<p>Example of the industry standard financial modeling templates</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/pb-excel-3.jpg">
						<img src="assets/img/thumbs/pb-excel-3.jpg">
					</a>
					<p>Example of the industry standard financial modeling templates</p>
				</div>
			</div>
		</section>

		<!-- previous/next project -->
		<div class="project-nav">
			<div class="direction previous">
				<a href="/news-analysis" rel="prev" title="Previous Project: PitchBook News & Analysis">
					<div>
						<span class="item-title">Previous Project</span>
						<h3>PitchBook News & Analysis</h3>
					</div>
				</a>
			</div>
			<div class="direction next">
				<a href="/uno" rel="next" title="Next Project: BookingSuite Uno">
					<div>
						<span class="item-title next-item">Next Project</span>
						<h3>BookingSuite Uno</h3>
					</div>
				</a>
			</div>
		</div>
		
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
			['#2BABB1', '#35CDAC'],
			['#35CDAC', '#2BABB1'],
			['#35CD88', '#2B98B1'],
			['#3592CD', '#2BB174']
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