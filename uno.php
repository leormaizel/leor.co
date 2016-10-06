<!DOCTYPE html>
<html lang="en">

  <head>
  <title>Leor Maizel - UX Designer – Portfolio: BookingSuite Uno</title>
  <?php include 'blocks/head.php'; ?>
  </head>
 
  <body class="non-index portfolio-proj uno">
    
    <!-- header -->
    <?php include 'blocks/nav-non-index.php'; ?>
    <header>
      <img src="assets/img/proj-na.png">
    </header>

    <!-- work -->

    <div class="proj_nav">
      <a href="" class="next"><i class="icon-angle-right"></i></a>
    </div>

    <section class="white content">
      <div class="wrap">
        <h1>BookingSuite: Project Uno</h1>
          <article>
            <h2>Background</h2>
            <p>Codenamed “Project Uno,” this was the most complex, ambitious, and fascinating project I’ve ever had the pleasure of working on. It’s aim was nothing less than the introduction a completely novel product in the hospitality software marketplace. To understand Uno, it’s important to know that the average hotel may manage up to 14 different vendor relationships. These most commonly include:</p>
            <ul>
              <li>Online travel agencies like Expedia and Booking.com</li>
              <li>Property Management software, for running the day-to-day operations of the hotel</li>
              <li>Channel Management software, for managing all the sites where a hotel publishes its rates</li>
              <li>Revenue Optimization software, for understanding how competitors price their rooms</li>
              <li>Billing and Invoicing software</li>
            </ul>
            <p>Uno aimed to bring all of these disparate elements into one package. It was a massive technical undertaking, and it relied on a fearsome number of dependencies, but no one else owned this space, and if successful, it could completely disrupt the industry.</p>
            
            <h2>Feature Design</h2>
            <p>My role in this project was to be a wearer of many different hats; when I started, a fair portion of the core navigational structure and feature set had been designed and spec’d, but many other features needed to be designed for web and the native iOS app.</p>
            
            <h2>Information Architecture Testing</h2>
            <p>Before investing too many resources in development, we wanted to validate our proposed IA structure, and so I helped carry out a series of statistically-significant reverse card-sort tests (aka tree tests) with over 10,000 hotel partners in Italy, Spain, the UK, and the US. The goal of the test was scoped narrowly to find the optimal IA for one portion on the application, but fascinatingly, the results had implications for the whole IA structure: we had simply nested pages too many levels deep for users to comfortably navigate.</p>
            
            <h2>Usability Testing</h2>
            <p>I also carried out a series of end-to-end, moderated usability sessions, in which I guided users through a list of scenarios and gathered feedback on feature improvements.</p>
            
            <h2>A Dramatic Pivot</h2>
            <p>As Uno was in pilot phase with 8 hotels, the project took a dramatic turn. Booking.com already has a portal, called the Extranet, where over 1 million hotel partners manage their room rates and availability. From the perspective of scale, it simply didn’t make sense to start from square one with customer acquisition, whereas, if we integrated our product with the existing Extranet, we would have an enormous and instantly addressable market. But our tech stack could not play nicely with Booking’s. We had to rebuild completely.</p>
            <p>Nor could our designs simply be ported into this new environment; the extranet utilizes different design patterns, has a different IA, and most importantly, Booking.com practices a radically different design philosophy to which I needed to adapt. Whereas we designed with the end-to-end experience in mind, prototyping and gathering qualitative user feedback on a wide array of feature sets, Booking.com favors small scale A/B testing, in which the most minute change must be defensible with statistical significance. I needed to redesign all of the features of Uno in a phased approach; I’d design for the least amount of change, A/B test, and then proceed to the next phase.</p>

            <h2>Dashboard Case Study</h2>
            <p>A notable example of this approach is the Dashboard page shown below. The existing dashboard was extremely information dense; it showed guest arrivals and departures, recent booking.com reviews, new bookings, messages sent from the guest, etc. Right off the bat, the usability data we gathered for this page looked abysmal.</p>
            <ul>
              <li>Users were extremely confused with the organization of content, as all items were combined in one messy jumble</li>
              <li>Users were not reliably able to find any specific piece of information, such as “when is this guest arriving?"</li>
              <li>Virtually nothing on the page was actionable; users could not take action on items without having to navigate elsewhere</li>
            </ul>
            <p>Taking this feedback into account, I designed a version of the dashboard which organized the data by category, and provided immediate next steps for each item. For some items, like arrivals and departures, chronology was of paramount importance; the hotelier needed to know which guests were arriving/departing first. For other items, like new guest reviews, chronology was trivial––it mattered less when the event occurred than simply notifying the hotelier that it occurred. For these reasons, I designed a “bucketed” approach and tested it against the original design.</p>
            <p>The results of the test were immensely positive. My design increased next-step actions, such as users responding to guest messages by 325%. It also decreased inbound support requests, saving XXX hours per week. This design is now live for over 100,000 users, and over the next year will be released to all 1 million + Booking.com partners.</p>
            
            <h2>Conclusion</h2>
            <p>The rebirth of the Uno product is set to reach pilot phase in November. It was a serious emotional blow to have to scrap and rebuild something which I and the team had become so invested in. However, the opportunity to design at such large scale, and with such a rigorous, scientific A/B test approach was enlightening. Designers from the Booking home office have also been reaching out to learn about our product design philosophy and qualitative feedback-gathering methods. I’d like to think I’ve made a dent in their universe.</p>
          </article>
          <aside>
            <h3>Roles</h3>
            <ul class="proj-ul">
              <li>Information Architecture</li>
              <li>User Interface Design</li>
              <li>User Reasearch</li>
            </ul>
          </aside>
      </div>
    </section>

    <section class="blue-gray content">
      <div class="wrap">
        <div class="images">
          <figure>
            <img alt="pp-proj-pbweb-wireframe-1" src="../assets/img/pp-proj-pbweb-wireframe-1.jpg"/>
            <figcaption>
            An initial wireframe of the News & Analysis editorial hub containing all of our content: daily newsbriefs/headlines on the left, all content in the middle, and trending or promoted content on the right.
            </figcaption>
          </figure>
          <figure>
            <img alt="pp-proj-pbweb-wireframe-2" src="../assets/img/pp-proj-pbweb-wireframe-2.jpg"/>
            <figcaption>
            An initial wireframe of an individual article in News & Analysis. Note the attempts to keep the user engaged in the sidebar and CTAs leading to the platform on the bottom.
            </figcaption>
          </figure>
          <figure>
            <img alt="pp-proj-pbweb-arch" src="../assets/img/pp-proj-pbweb-arch.jpg"/>
            <figcaption>
            Architecture for the News & Analysis hub.
            </figcaption>
          </figure>
          <figure>
            <img alt="pp-proj-pbweb-1" src="../assets/img/pp-proj-pbweb-1.jpg"/>
            <figcaption>
            Design spec of the News & Analysis hub.
            </figcaption>
          </figure>
          <figure>
            <img alt="pp-proj-pbweb-3.jpg" src="../assets/img/pp-proj-pbweb-2.jpg"/>
            <figcaption>
            Design spec of an individual article page.
            </figcaption>
          </figure>
          <figure>
            <img alt="pp-proj-pbweb-4.jpg" src="../assets/img/pp-proj-pbweb-3.jpg"/>
            <figcaption>
            Design spec of the Reports Center within News & Analysis: a page that aggregates and organizes all of our industry reports.
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- stripe -->
    <div class="bottom-stripe"></div>

    <!-- footer -->
    <?php include 'blocks/footer.php'; ?>
  </body>
</html>

