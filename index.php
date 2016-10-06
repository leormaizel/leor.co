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
			<div class="wrap tagline">
				<h1>leor maizel</h1>
				<h2>ux designer</h2>
			</div>
		</header>
		<!-- manifesto -->
		<div class="manifesto">
			<div class="wrap">
				<div class="quote">
					<div class="prompt">What Makes Design
						<div>"Human Centered?"</div>
					</div>
					<blockquote>
						If we allow our self-congratulatory adoration of technology to distract us from our own contact with each other, then somehow the original agenda has been lost.
						<div class="attrib">&mdash; Jaron Lanier</div>
					</blockquote>
				</div>
				<div class="container">
					<a class="link" href="manifesto">
						<span>read on</span>
					</a>
				</div>
			</div>
		</div>
		<!-- featured work -->
		<section class="content">
			<div class="wrap">
				<h2 class="title" id="work">featured work</h2>
				<ul class="projects-wrap">
					<li class="project featured">
						<a href="uno">
							<div class="title">BookingSuite Uno</div>
							<p>An all-in-one hotel software solution.</p>
						</a>
					</li>
					<li class="project featured">
						<a href="webcomplete">
							<div class="title">BookingSuite WebComplete</div>
							<p>A website Content Management System for hotels</p>
						</a>
					</li>
					<li class="project">
						<a href="bookingsuite-website">
							<div class="title">BookingSuite Website</div>
							<p>A revamp of BookingSuite’s global corporate website</p>
						</a>
					</li>
					<li class="project">
						<a href="keyword-search">
							<div class="title">PitchBook Keyword Search</div>
							<p>Improving the search resuts page of the PitchBook platform</p>
						</a>
					</li>
					<li class="project">
						<a href="news-analysis">
							<div class="title">PitchBook News & Analysis</div>
							<p>A content hub for all of PitchBook’s editorial content</p>
						</a>
					</li>
					<li class="project">
						<a href="linkedin-integration">
							<div class="title">PitchBook LinkedIn Integration</div>
							<p>A collection of features and data visualization tools for the Pitchbook platform.</p>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- about -->
		<section class="title">
			<h2 class="about" id="about">about</h2>
		</section>
		<section class="white content about">
			<div class="wrap">
				<aside>
					<div class="img-wrap">
						<img src="assets/img/leor.png" alt="Photo of Leor" />
					</div>
					<div class="btn-wrap">
						<div class="btn"><a href="resume.pdf" target="_blank">resume (pdf)</a></div>
						<div class="btn"><a href="http://99problems.quora.com/" target="_blank">blog</a></div>
						<div class="btn"><a href="cartoons">cartoons</a></div>
					</div>
				</aside>
				<div class="copy">
					<p>What can be said about Leor Maizel that hasn’t already been chronicled in poetry and song? At the age of 10 saved the King of Scotland from a charging bull. At the age of 15, Leor bested a steam-powered locomotive in a steel-driving race. By 25, Leor produced such seminal works as the “Happy Birthday” song, Post-it Notes and “Crafting with Cat Hair” ($8.44 on Amazon). Alas, at age 27 a mosquito bite in the Ganges River robbed Leor of his mental prowess; He has since become a UX Designer.</p>
					<p>No really...I just like when things make sense.</p>
					<p>In college I majored in Philosophy which taught me to judge every argument by asking "does the conclusion follow from the premises?" – a criterion that applies as critically to User Experience Design. What is the user's mental model when engaging with a digital product? Does the interface accommodate this mental model? Does it have logical information architecture and consistent design patterns? Matching a user's premises with the array of conclusions a product offers is one of the key challenges of User Experience Design.</p>
				</p>
			</div>
		</div>
	</section>
	<!-- footer -->
	<?php include 'blocks/footer.php'; ?>
	<?php include 'blocks/index-scripts.php'; ?>
</body>
</html>