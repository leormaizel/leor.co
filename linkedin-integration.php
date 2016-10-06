<!DOCTYPE html>
<html lang="en">

  <head>
  <title>Leor Maizel - UX Designer & Front-End Developer – Portfolio: PitchBook LinkedIn Integration</title>
  <?php include 'blocks/head.php'; ?>
  </head>
 
  <body class="non-index portfolio-proj li">
    
    <!-- header -->
    <?php include 'blocks/nav-non-index.php'; ?>
    <header>
      <img src="assets/img/proj-li.png">
    </header>

    <!-- work -->

    <div class="proj_nav">
      <a href="news-analysis" class="prev"><i class="icon-angle-left"></i></a> 
      <a href="pitchbook-mobile" class="next"><i class="icon-angle-right"></i></a>
    </div>

    <section class="white content">
      <div class="wrap">
        <h1 class="cartoons">PitchBook LinkedIn Integration</h1>
          <article>
            <h2>Background</h2>
            <p class="co-descrip">PitchBook is the most comprehensive database of Private Equity and Venture data on the market. Subscribers can slice-and-dice data on our analytics platform to research deals, company performance, fund performance and make informed investment decisions.</p>
            <p>PitchBook has massive amounts of data on every investor, board member and executive of publicly-held or PE/VC-backed companies. We found that users often flipped between our platform and LinkedIn to learn about a person’s professional history and to discover networking opportunities.</p>
            <h2>Project Goals</h2>
            <p>The main goal was to make the user’s workflow simpler by integrating the LinkedIn API into our platform and allowing her to browse our and LinkedIn’s data side-by-side. Furthermore, by showing the wealth of data in our platform (which is often much more comprehensive than a LinkedIn profile) we hoped to establish PitchBook as a serious competitor in the business networking space.</p>
            <h2>Research/Outcomes</h2>
            <p>This was an extremely technical project because it involved delving deeply into the ill-documented caverns of LinkedIn’s API. The key questions and challenges of this project were:</p>
            <ul class="proj-ul">
              <li>How should we display our vs. LinkedIn’s company data side-by-side?</li>
              <li>How should we display our vs. LinkedIn’s individual executive data side-by-side?</li>
              <li>How many API calls per user per day are we allowed?</li>
              <li>What do we do if we reach that limit?</li>
              <li>Do plugins count as an API call? If so, what proportion of the allotted amount?</li>
              <li>What data can we show if the user is authenticated vs. unauthenticated?</li>
            </ul>
            <p>Below you'll see a portion of my work on this project:</p>
          </article>
          <aside>
            <h3>Roles</h3>
            <ul class="proj-ul">
              <li>User Interface Design</li>
              <li>Information Architecture</li>
              <li>Visual Design</li>
            </ul>
          </aside>
      </div>
    </section>

    <section class="blue-gray content">
      <div class="wrap">
        <div class="images">
          <!-- <figure>
            <img alt="pp-proj-li-entity-1" src="../assets/img/pp-proj-li-entity-1.jpg"/>
            <figcaption>
            An initial sketch of the LinkedIn integration on our company and person profiles.
            </figcaption> -->
          </figure>
          <figure>
            <img alt="pp-proj-li-entity-1" src="../assets/img/pp-proj-li-entity-1.jpg"/>
            <figcaption>
            A variation of the LinkedIn-integrated company profile. Note that there are 3 distinct data sources on this page: LinkedIn's API, a LinkedIn plugin, and PitchBook data.
            </figcaption>
          </figure>
          <figure>
            <img alt="pp-proj-li-entity-2" src="../assets/img/pp-proj-li-entity-2.jpg"/>
            <figcaption>
            Another variation of the LinkedIn-integrated company profile.
            </figcaption>
          </figure>
          <figure>
            <img alt="pp-proj-li-entity-1" src="../assets/img/pp-proj-li-person-1.jpg"/>
            <figcaption>
            A variation of the LinkedIn-integrated person profile. Note that there are 3 distinct data sources on this page: LinkedIn's API, a LinkedIn plugin, and PitchBook data.
            </figcaption>
          </figure>
          <figure>
            <img alt="pp-proj-li-entity-2" src="../assets/img/pp-proj-li-person-2.jpg"/>
            <figcaption>
            A variation of the LinkedIn-integrated person profile.
            </figcaption>
          </figure>
          <figure>
            <img alt="pp-proj-li-api" src="../assets/img/pp-proj-li-api.jpg"/>
            <figcaption>
            The view users see when they've reached their API call limit. A little sense of humor never hurt.
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

