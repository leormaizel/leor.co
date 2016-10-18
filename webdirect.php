<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Leor Maizel - UX Designer – Portfolio: BookingSuite WebDirect+</title>
		<?php include 'blocks/head.php'; ?>
		<link rel="stylesheet" type="text/css" href="../css/fluidbox.min.css" />
	</head>
	
	<body class="portfolio-project uno">
		<?php include_once("analyticstracking.php") ?>
		
		<!-- header -->
		<?php include 'blocks/nav.php'; ?>
		<header>
			<canvas id="canvas-basic"></canvas>
			<div class="wrap">
				<div class="tagline">
					<h1>BookingSuite: WebDirect+</h1>
				</div>
			</div>
		</header>
		<!-- work -->
		<section class="background">
			<div class="wrap">
				<h2 class="item-title">Background</h2>
				<p>During the winter of 2015, BookingSuite built WebDirect––a turnkey content management system for hotels. Leveraging data and assets from Booking.com’s e-commerce website, hoteliers could have a fully functioning website, complete with pre-populated photography, and a  series of pre-built, canonical pages (Home, Rooms, Facilities, Photos, Reservations). All for free. Within months, BookingSuite’s install base grew from under 10,000 to over 100,000.</p>
				<p>This product was geared toward the “long tail” market segment, but for more sophisticated hotels, with more complex digital marketing needs, BookingSuite sought to build a more premium product offering, WebDirect+.</p>
				<p>The main goal was to take the existing product, built for automation and scale, and supplement it with more premium features allowing for greater customization and expression of a hotel's unique character. Some of these features included a WYSIWYG page builder, a site navigation and IA editor, new canonical pages such as Dining and Attractions, etc.</p>
			</div>
		</section>

		<section>
			<div class="wrap">
				<h2 class="item-title">Page Builder</h2>
				<p>lients with more sophisticated content requirements need to be able to create their own customized pages, whether for a promotion, an article about the history of the hotel, etc. The goal was to design a full-featured WYSIWYG editor, but as I found in my user tests, even the best of such products––Squarespace, Wix, and Weebly––are often described as “finicky” and "hard to use." I needed to find the right balance between robust functionality and UI limitations.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-artclbldr-sketch1.jpg">
						<img src="assets/img/thumbs/webfam-artclbldr-sketch1.jpg">
					</a>
					<p>A discarded idea for drag-n-drop content controls</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-artclbldr-sketch2.jpg">
						<img src="assets/img/thumbs/webfam-artclbldr-sketch2.jpg">
					</a>
					<p>Several ideas for how the user adds content blocks to the page, in this case one or multiple images</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-artclbldr-sketch3.jpg">
						<img src="assets/img/thumbs/webfam-artclbldr-sketch3.jpg">
					</a>
					<p>Variation of the UI for adding content blocks</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-artclbldr-sketch4.jpg">
						<img src="assets/img/thumbs/webfam-artclbldr-sketch4.jpg">
					</a>
					<p>Variation of the UI for adding content blocks</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-artclbldr-flow.jpg">
						<img src="assets/img/thumbs/webfam-artclbldr-flow.jpg">
					</a>
					<p>User flow: how the user enters a title, text, image and custom formatting within a pre-defined page template</p>
				</div>
			</div>
		</section>

		<section>
			<div class="wrap">
				<h2 class="item-title">Page Manager</h2>
				<p>Like any CMS, the user needs to be able to manage the navigational structure and IA of their site. Some considerations/requirements included:</p>
				<ul>
					<li>Adding, deleting, or duplicating a page</li>
					<li>Moving a page from the header to the footer, and vice versa</li>
					<li>Whether to treat system generated pages differently than user-generated pages</li>
				</ul>
				<p>I opted to test an interaction pattern that is highly popular amongst comparable CMS solutions: a model that is both a list of site pages, as well as menu builder.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-pgmgr-flow.jpg">
						<img src="assets/img/thumbs/webfam-pgmgr-flow.jpg">
					</a>
					<p>User flow: showing how a user manages the IA and page structure of their site</p>
				</div>
			</div>
		</section>

		<section>
			<div class="wrap">
				<h2 class="item-title">Dining Page</h2>
				<p>The most common page users’ would create manually were showcases of their hotel’s dining options. Furthermore, our customers often had already  listed their dining facility on Booking.com. In an effort to make the process of launching a website more streamlined, we added “Dining” to the list of canonical pages. This project was especially challenging because some hotels provided very little and some much more data about their dining options. Some hotels have one restaurant, some have up to five. I aimed to design a modular system that could accommodate the minimalist as well as fully robust use cases.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-fe-sketch1.jpg">
						<img src="assets/img/thumbs/webfam-dining-fe-sketch1.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-fe-sketch2.jpg">
						<img src="assets/img/thumbs/webfam-dining-fe-sketch2.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-fe-sketch3.jpg">
						<img src="assets/img/thumbs/webfam-dining-fe-sketch3.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-fe-sketch4.jpg">
						<img src="assets/img/thumbs/webfam-dining-fe-sketch4.jpg">
					</a>
				</div>
				<p>Several initial sketches for the dining page, acommodating both very little and very much content.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-cms-sketch1.jpg">
						<img src="assets/img/thumbs/webfam-dining-cms-sketch1.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-cms-sketch2.jpg">
						<img src="assets/img/thumbs/webfam-dining-cms-sketch2.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-cms-sketch3.jpg">
						<img src="assets/img/thumbs/webfam-dining-cms-sketch3.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-cms-sketch4.jpg">
						<img src="assets/img/thumbs/webfam-dining-cms-sketch4.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-cms-sketch5.jpg">
						<img src="assets/img/thumbs/webfam-dining-cms-sketch5.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-cms-sketch6.jpg">
						<img src="assets/img/thumbs/webfam-dining-cms-sketch6.jpg">
					</a>
				</div>
				<p>Several sketches for the CMS portion of the dining page, where the user enters all the content for their page.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-fe-mock2.jpg">
						<img src="assets/img/thumbs/webfam-dining-fe-mock2.jpg">
					</a>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-dining-fe-mock1.jpg">
						<img src="assets/img/thumbs/webfam-dining-fe-mock1.jpg">
					</a>
				</div>
				<p>Mockups showing evolution of the page, with very little as well as fully filled data.</p>
			</div>
		</section>

		<section>
			<div class="wrap">
				<h2 class="item-title">User Research</h2>
				<p>Throughout this process I cared out a series of remote user tests. Using clickable InVision prototypes and GoToMeeting, I observed and recorded users interacting with these features. Using UserTesting.com, I conducted a statistically-significant first-click analysis of how users expect to interact with the Page Manager feature. These tests provided invaluable feedback and validation for our MVP.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/webfam-pgmgr-research.jpg">
						<img src="assets/img/thumbs/webfam-pgmgr-research.jpg">
					</a>
					<p>First click analysis results: through which UI controls does the user expect to be able to assign, reorder, and create new pages</p>
				</div>
			</div>
		</section>

		<!-- previous/next project -->

		<div class="project-nav">
		    <div class="direction previous">
		        <a href="/uno" rel="prev" title="Previous Project: Pitchbook Feature Design">
		          <div>
		            <span class="item-title">Previous Project</span>
		            <h3>BookingSuite: Uno</h3>
		          </div>
		        </a>
		    </div>

		    <div class="direction next">
		        <a href="/bookingsuite-website" rel="next" title="Next Project: BookingSuite: Web Family">
		          <div>
		            <span class="item-title next-item">Next Project</span>
		            <h3>BookingSuite: Website Redesign</h3>
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