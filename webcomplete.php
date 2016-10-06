<!DOCTYPE html>
<html lang="en">

  <head>
  <title>Leor Maizel - UX Designer – Portfolio: BookingSuite WebComplete</title>
  <?php include 'blocks/head.php'; ?>
  </head>
 
  <body class="non-index portfolio-proj webcomplete">
    
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
        <h1>BookingSuite WebComplete</h1>
          <article>
            <h2>Background</h2>
            <p>During the winter of 2015, BookingSuite built WebDirect––a turnkey content management system for hotels. Leveraging data and assets from Booking.com’s e-commerce website, hoteliers could have a fully functioning website, complete with pre-populated photography, and a  series of pre-built, canonical pages (Home, Rooms, Facilities, Photos, Reservations). All for free. Within months, BookingSuite’s install base grew from under 10,000 to over 100,000.</p>
            <p>This product was geared toward the “long tail” market segment, but for more sophisticated hotels, with more complex digital marketing needs, BookingSuite sought to build a more premium product offering––WebComplete.</p>
            <h2>Project Goals</h2>
            <p>The main goal was to take the existing product, built for automation and scale, and supplement it with more premium features allowing for greater customization and expression of a hotel's unique character. Some of these features included a WYSIWYG page builder, a site navigation and IA editor, new canonical pages such as Dining and Attractions, etc.</p>
            <h2>Page Builder</h2>
            <p>Clients with more sophisticated content requirements need to be able to create their own customized pages, whether for a promotion, an article about the history of the hotel, etc. The goal was to design a full-featured WYSIWYG editor, but as I found in my user tests, even the best of such products––Squarespace, Wix, and Weebly––are often described as “finicky” and "hard to use." I needed to find the right balance between robust functionality and UI limitations.</p>
            <h2>Page Manager</h2>
            <p>Like any CMS, the user needs to be able to manage the navigational structure and IA of their site. Some considerations/requirements included:</p>
            <ul>
            <li>Adding, deleting, or duplicating a page</li>
            <li>Moving a page from the header to the footer, and vice versa</li>
            <li>Whether to treat system generated pages differently than user-generated pages</li>
            </ul>
            <p>I opted to test an interaction pattern that is highly popular amongst comparable CMS solutions: a model that is both a list of site pages, as well as menu builder.</p>
            <h2>Dining Page</h2>
            <p>The most common page users’ would create manually were showcases of their hotel’s dining options. Furthermore, our customers often had already  listed their dining facility on Booking.com. In an effort to make the process of launching a website more streamlined, we added “Dining” to the list of canonical pages. This project was especially challenging because some hotels provided very little and some much more data about their dining options. Some hotels have one restaurant, some have up to five. I aimed to design a modular system that could accommodate the minimalist as well as fully robust use cases.</p>
            <h2>User Research</h2>
            <p>Throughout this process I cared out a series of remote user tests. Using clickable InVision prototypes and GoToMeeting, I observed and recorded users interacting with these features. Using UserTesting.com, I conducted a statistically-significant first-click analysis of how users expect to interact with the Page Manager feature. These tests provided invaluable feedback and validation for our MVP.</p>
          </article>
          <aside>
            <h3>Roles</h3>
            <ul class="proj-ul">
              <li>Information Architecture</li>
              <li>Content Strategy</li>
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

