<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Leor Maizel - UX Designer – Portfolio: PitchBook Keyword Search</title>
		<?php include 'blocks/head.php'; ?>
		<link rel="stylesheet" type="text/css" href="../css/fluidbox.min.css" />
	</head>
	
	<body class="portfolio-project keyword-search">
		<?php include_once("analyticstracking.php") ?>
		
		<!-- header -->
		<?php include 'blocks/nav.php'; ?>
		<header>
			<canvas id="canvas-basic"></canvas>
			<div class="wrap">
				<div class="tagline">
					<h1>PitchBook: Keyword Search</h1>
				</div>
			</div>
		</header>
		<!-- work -->
		<section class="background">
			<div class="wrap">
				<h2 class="item-title">Background</h2>
				<p>While the PitchBook Platform has an incredibly sophisticated advanced search feature, approximately 95% of users utilize the top search box as their primary mode of interaction. Users would commonly bypass every navigational element on the platform and go straight to search. However, queries would frequently result in a dead end, as the search algorithm accommodated only one type of query.</p>
			</div>
		</section>
		<section>
			<div class="wrap">
				<p>But first, a little bit of taxonomy. Every “entity” in the PitchBook platform––a person or a company––is categorized by keyword (words generally relating to that entity in any manner), industry (one of a list of pre-set business categories), and vertical (a grouping of companies related in product or service that may span multiple industries). For instance, Snapchat may be categorized by industry as “B2C,” by vertical as “Social Media,” and by keyword as “photo sharing.” To make matters more complicated, industries and verticals are also keywords.</p>
				<p>…back to dead end queries. The search functionality would only show results based on entity, meaning that whatever the query, the user would only see entities exactly or broadly matching that query. This drastically limited engagement and discovery, for instance queries such as "Internet of things," "Social Media," and "3d priniting" would return no results, unless there was a matching entity</p>
				<p>For a platform that is supposed to help investors discover potential investments, this was a huge limitaton.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/key-original.jpg">
						<img src="assets/img/thumbs/key-original.jpg">
					</a>
					<p>Overly constrained search resulted in frequent dead end queries</p>
				</div>
			</div>
		</section>
		<section>
			<div class="wrap">
				<h2 class="item-title">Solutions</h2>
				<p>To provide the user with greater opportunity for finding relevant information, I designed and helped write the logic for a hybrid search functionality that exposed entity as well as keyword results to the majority of queries. A central concern was to avoid overly-complicating the search experience. A SERP that unintelligibly combines entities and keywords may very well prove a worse experience than the current, more limited search.</p>
				<p>I aimed to design an experience that would at first allow the user to browse between entities and keyword results more  broadly, and then adapt to the user’s signals of intent, presenting a more filtered SERP.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/key-sketch1.jpg">
						<img src="assets/img/thumbs/key-sketch1.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/key-sketch2.jpg">
						<img src="assets/img/thumbs/key-sketch2.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/key-sketch3.jpg">
						<img src="assets/img/thumbs/key-sketch3.jpg">
					</a>
				</div>
				<p>Working through the search logic with some whiteboarding.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/key-mock1.jpg">
						<img src="assets/img/thumbs/key-mock1.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/key-mock2.jpg">
						<img src="assets/img/thumbs/key-mock2.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/key-mock3.jpg">
						<img src="assets/img/thumbs/key-mock3.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/key-mock4.jpg">
						<img src="assets/img/thumbs/key-mock4.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/key-mock5.jpg">
						<img src="assets/img/thumbs/key-mock5.jpg">
					</a>
				</div>
				<p>Mockups describing the algorithmic logic and interaction patterns.</p>
			</div>
		</section>

		<!-- previous/next project -->
		<div class="project-nav">
			<div class="direction previous">
				<a href="/bookingsuite-website" rel="prev" title="Previous Project: BookingSuite Website Redesign">
					<div>
						<span class="item-title">Previous Project</span>
						<h3>BookingSuite Website Redesign</h3>
					</div>
				</a>
			</div>
			<div class="direction next">
				<a href="/bookingsuite-website" rel="next" title="Next Project: PitchBook News & Analysis">
					<div>
						<span class="item-title next-item">Next Project</span>
						<h3>PitchBook News & Analysis</h3>
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