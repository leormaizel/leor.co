<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Leor Maizel - UX Designer</title>
		<?php include 'blocks/head.php'; ?>
	</head>
	
	<body class="index">
		<?php include_once("analyticstracking.php") ?>

		<!-- header -->
		<?php include 'blocks/nav-index.php'; ?>
		<header>
			<canvas id="canvas-basic"></canvas>
			<div class="wrap">
				<div class="tagline">
					<h1>leor maizel</h1>
					<h2>ux designer</h2>
				</div>
			</div>
		</header>
		<!-- manifesto -->
		<section class="manifesto">
			<div clas="wrap">
				<div class="quote">
					<div class="prompt">What Makes Design
						<div>"Human Centered?"</div>
					</div>
					<blockquote>
						If we allow our self-congratulatory adoration of technology to distract us from our own contact with each other, then somehow the original agenda has been lost.
						<div class="attrib">&mdash; Jaron Lanier</div>
					</blockquote>
				</div>
				<a class="link" href="manifesto">
					<span>read on</span>
				</a>
			</div>
		</section>
		<!-- featured work -->
		<section class="work" id="work">
			<div class="wrap">
				<h2 class="title">featured work</h2>
				<ul class="projects-wrap">
					<li class="project featured">
						<a href="uno">
							<div class="project-title">BookingSuite: Uno</div>
							<p>An all-in-one hotel management solution that gives hotels all the tools needed to manage their business.</p>
						</a>
					</li>
					<li class="project featured">
						<a href="webdirect">
							<div class="project-title">BookingSuite: WebDirect+</div>
							<p>A website Content Management System specifically tailred to the needs of hotels.</p>
						</a>
					</li>
					<li class="project">
						<a href="bookingsuite-website">
							<div class="project-title">BookingSuite: Website Redesign</div>
							<p>A revamp of BookingSuite’s global corporate website</p>
						</a>
					</li>
					<li class="project">
						<a href="keyword-search">
							<div class="project-title">PitchBook: Keyword Search</div>
							<p>Improving the search resuts page of the PitchBook platform</p>
						</a>
					</li>
					<li class="project">
						<a href="news-analysis">
							<div class="project-title">PitchBook News & Analysis</div>
							<p>A content hub for all of PitchBook’s editorial content</p>
						</a>
					</li>
					<li class="project">
						<a href="pb-feature-design">
							<div class="project-title">PitchBook Feature Design</div>
							<p>A collection of features and data visualization tools for the Pitchbook platform.</p>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- about -->
		<section class="about" id="about">
			<div class="wrap">
				<h2 class="title">about</h2>
				<img src="assets/img/leor.png" alt="Photo of Leor" />
				<div class="copy">
					<p>There are many different usages of the terms “Product Designer” and “UX Designer” throughout the industry; I'm an interdisciplinarian. A generalist. I enjoy being involved in all stages of the user-centered design process and product lifecycle. My experience ranges from the the early, conceptual phase in helping define product requirements, sketching, wireframing and prototyping; to validation through user testing; to front-end implementation and frequent iteration.</p>
					<p>I prize most highly the opportunity to learn voraciously from other skilled designers, and hone my abilities across the spectrum of product design disciplines.</p>
					<p>Thanks for visiting and drop me a line: <span class="contact">leormaizel</span> at <span class="contact">gmail</span> dot <span class="contact">com</span></p>
				</div>
			</div>
		</section>
		<!-- footer -->
		<?php include 'blocks/footer-index.php'; ?>
		<?php include 'blocks/index-scripts.php'; ?>
	</body>
</html>