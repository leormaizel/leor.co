<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Leor Maizel - UX Designer – Portfolio: BookingSuite Uno</title>
		<?php include 'blocks/head.php'; ?>
		<link rel="stylesheet" type="text/css" href="../css/fluidbox.min.css" />
	</head>
	
	<body class="portfolio-project uno">
		<?php include_once("blocks/analyticstracking.php") ?>
		
		<!-- header -->
		<?php include 'blocks/nav.php'; ?>
		<header>
			<canvas id="canvas-basic"></canvas>
			<div class="wrap">
				<div class="tagline">
					<h1>BookingSuite: Uno</h1>
				</div>
			</div>
		</header>
		<!-- work -->
		<section class="background">
			<div class="wrap">
				<h2 class="item-title">Background</h2>
				<p>Codenamed “Project Uno,” this was the most complex, ambitious, and fascinating project I’ve ever had the pleasure of working on. Its aim was nothing less than the introduction a completely novel product in the hospitality software marketplace. To understand Uno, it’s important to know that the average hotel may manage up to 14 different vendor relationships. These most commonly include:</p>
				<ul>
					<li>Online travel agencies like Expedia and Booking.com</li>
					<li>Property Management software, for running the day-to-day operations of the hotel</li>
					<li>Channel Management software, for managing all the sites where a hotel publishes its rates</li>
					<li>Revenue Optimization software, for understanding how competitors price their rooms</li>
					<li>Billing and invoicing software</li>
					<li>And more...</li>
				</ul>
				<p>Uno aimed to bring all of these disparate elements into one package. It was a massive technical undertaking, and it relied on a fearsome number of dependencies, but no one else owned this space, and if successful, it could disrupt the industry completely.</p>
			</div>
		</section>

		<section>
			<div class="wrap">
				<h2 class="item-title">Feature Design</h2>
				<p>My role in this project was to be a wearer of many different hats; when I started, a fair portion of the core navigational structure and feature set had been designed and spec’d, but many other features needed to be designed for web and the native iOS app.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-invoicing.jpg">
						<img src="assets/img/thumbs/uno-invoicing.jpg">
					</a>
					<p>Invoicing wireframes and user flow</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-channel-setup.jpg">
						<img src="assets/img/thumbs/uno-channel-setup.jpg">
					</a>
					<p>Channel setup wireframes and user flow: how the property organizes and distributes its rates on sites like Booking.com, Priceline, etc.</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-grid.jpg">
						<img src="assets/img/thumbs/uno-grid.jpg">
					</a>
					<p>Reservation grid mockup: how the property assigns guests to rooms</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-rez-detail-mobile.jpg">
						<img src="assets/img/thumbs/uno-rez-detail-mobile.jpg">
					</a>
					<p>Native iOS app mockup of a guest's reservation details</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-rez-list.jpg">
						<img src="assets/img/thumbs/uno-rez-list.jpg">
					</a>
					<p>Mockup of a property's full list of reservations</p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-rez-list-mobile.jpg">
						<img src="assets/img/thumbs/uno-rez-list-mobile.jpg">
					</a>
					<p>Native iOS mockup of the reservations list</p>
				</div>
			</div>
		</section>

		<section>
			<div class="wrap">
				<h2 class="item-title">IA Testing</h2>
				<p>Before investing too many resources in development, we wanted to validate our proposed IA structure. I helped carry out a series of statistically-significant reverse card-sort tests (AKA tree tests) with over 10,000 hotel partners in Italy, Spain, the UK, and the US. The goal of the test was scoped narrowly: to find the optimal IA for one portion on the application, but fascinatingly, the results had implications for the whole IA structure. We had nested pages too many levels deep for users to comfortably navigate.</p>
			</div>
			<div class="gallery no-flexbox">
				<div class="figure">
					<iframe src="https://docs.google.com/presentation/d/1H1NeY60QPUzvCdXPpebLZyRHJZITZqN8sho5rH-WrOs/embed?start=false&loop=false&delayms=3000" frameborder="0" width="328" height="214" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
					<p>An in-depth analysis of the IA tree test</p>
				</div>
			</div>
		</section>

		<section>
			<div class="wrap">
				<h2 class="item-title">Usability Testing</h2>
				<p>I also carried out a series of end-to-end, moderated usability sessions, in which I guided users through a list of scenarios and gathered feedback on feature improvements. The goals of these sessions were to gather general product feedback (would the user likely adopt this product?), measure task completion, and detect general usability issues.</p>
			</div>
			<div class="gallery no-flexbox">
				<div class="figure">
					<script src="//fast.wistia.com/embed/medias/5eidemfq44.jsonp" async></script><script src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:62.5% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_5eidemfq44 popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;</span></div></div>
					<p>A video of the eye-tracking usability session</p>
				</div>
			</div>
		</section>

		<section>
			<div class="wrap">
				<h2 class="item-title">A Dramatic Pivot</h2>
				<p>As Uno was in pilot phase with 8 hotels, the project took a dramatic turn. Booking.com already has a portal (the Extranet), where over 1 million hotel partners manage their room rates and availability. From the perspective of scale, it simply didn’t make sense to start from square one with customer acquisition, whereas, if we integrated our product with the existing Extranet, we would have an enormous and instantly addressable market. But our tech stack could not play nicely with Booking’s. We had to rebuild completely.</p>
				<p>Nor could our designs simply be ported into this new environment; the extranet utilizes different design patterns, has a different IA, and most importantly, Booking.com practices a radically different design philosophy to which I needed to adapt. Whereas we designed with the end-to-end experience in mind, prototyping and gathering qualitative user feedback on a wide array of feature sets, Booking.com favors small scale A/B testing, in which the most minute change must be defended with statistical significance. I needed to redesign all of the features of Uno in a phased approach; I’d design for the least amount of change, A/B test, and then proceed to the next phase.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-old-today.jpg">
						<img src="assets/img/thumbs/uno-old-today.jpg">
					</a>
					<p>A screen of the Booking.com extranet. With a vastly different IA, redesigning Uno would be a huge challenge. </p>
				</div>
			</div>
		</section>

		<section>
			<div class="wrap">		
				<h2 class="item-title">Dashboard Case Study</h2>
				<p>The existing dashboard was extremely information dense; it showed guest arrivals and departures, recent booking.com reviews, new bookings, messages sent from the guest, etc. Right off the bat, the usability data we gathered for this page looked abysmal.</p>
				<ul>
					<li>Users were extremely confused with the organization of content, as all items were combined in one messy jumble</li>
					<li>Users were not reliably able to find any specific piece of information, such as “when is this guest arriving?"</li>
					<li>Virtually nothing on the page was actionable; users could not take action on items without having to navigate elsewhere</li>
				</ul>
				<p>Taking this feedback into account, I designed a version of the dashboard which organized the data by category, and provided immediate next steps for each item. For some items, like arrivals and departures, chronology was of paramount importance; the hotelier needed to know which guests were arriving/departing first. For other items, like new guest reviews, chronology was trivial&mdash;it mattered less when the event occurred than simply notifying the hotelier that it occurred. For these reasons, I designed an approach that organized items by content type and tested it against the original design.</p>
			</div>
			<div class="gallery">
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-extra-wire-1.jpg">
						<img src="assets/img/thumbs/uno-extra-wire-1.jpg">
					</a>
					<p></p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-extra-wire-2.jpg">
						<img src="assets/img/thumbs/uno-extra-wire-2.jpg">
					</a>
					<p></p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-extra-wire-3.jpg">
						<img src="assets/img/thumbs/uno-extra-wire-3.jpg">
					</a>
					<p></p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-extra-wire-4.jpg">
						<img src="assets/img/thumbs/uno-extra-wire-4.jpg">
					</a>
					<p></p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-extra-wire-5.jpg">
						<img src="assets/img/thumbs/uno-extra-wire-5.jpg">
					</a>
					<p></p>
				</div>
				<div class="figure">
					<a class="fluidbox" href="assets/img/uno-extra-wire-6.jpg">
						<img src="assets/img/thumbs/uno-extra-wire-6.jpg">
					</a>
					<p></p>
				</div>
			</div>
			<div class="wrap">
				<p>The results of the test were immensely positive. My design increased next-step actions, such as users responding to guest messages by 325%. It also decreased inbound support requests, saving more than 700 customer support hours per quarter. This design is now live for over 100,000 users, and over the next quarter will be released to all 1 million+ Booking.com partners.</p>
			</div>
		</section>

		<section>
			<div class="wrap">
				<h2 class="item-title">Conclusion</h2>
				<p>The rebirth of the Uno product is set to reach pilot phase in November. It was an emotionally challenging experience to have to scrap and rebuild something in which I and the team had become so invested. However, the opportunity to design at such large scale, and with such a rigorous, scientific A/B test approach was enlightening. Designers from the Booking home office have reached out to learn about our product design philosophy and qualitative feedback-gathering methods. I’d like to think I’ve made a dent in their universe.</p>
			</div>
		</section>

		<!-- previous/next project -->

		<div class="project-nav">
		    <div class="direction previous">
		        <a href="/pitchbook-feature-design" rel="prev" title="Previous Project: Pitchbook Feature Design">
		          <div>
		            <span class="item-title">Previous Project</span>
		            <h3>Pitchbook Feature Design</h3>
		          </div>
		        </a>
		    </div>

		    <div class="direction next">
		        <a href="/webdirect" rel="next" title="Next Project: BookingSuite WebDirect+">
		          <div>
		            <span class="item-title next-item">Next Project</span>
		            <h3>BookingSuite WebDirect+</h3>
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
							['#024876', '#8497A8'],
							['#BFBDB0', '#29688F'],
							['#F1E5D4', '#013E6E'],
							['#01507C', '#687D90']
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