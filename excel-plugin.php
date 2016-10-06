<!DOCTYPE html>
<html lang="en">

  <head>
  <title>Leor Maizel - UX Designer & Front-End Developer – Portfolio: PitchBook Excel Plugin</title>
  <?php include 'blocks/head.php'; ?>
  </head>
 
  <body class="non-index portfolio-proj ep">
    
    <!-- header -->
    <?php include 'blocks/nav-non-index.php'; ?>
    <header>
      <img src="assets/img/proj-ep.png">
    </header>

    <!-- work -->

    <div class="proj_nav">
      <a href="pitchbook-mobile" class="prev"><i class="icon-angle-left"></i></a> 
      <a href="carmunk" class="next"><i class="icon-angle-right"></i></a>
    </div>

    <section class="white content">
      <div class="wrap">
        <h1 class="cartoons">PitchBook Excel Plugin</h1>
          <article>
            <h2>Background</h2>
            <p class="co-descrip">PitchBook is the most comprehensive database of Private Equity and Venture data on the market. Subscribers can slice-and-dice data on our analytics platform to research deals, company performance, fund performance and make informed investment decisions.</p>
            <p>Through competitive research and consistent feedback from users, we discovered that our web application was imposing an unnecessary constraint on our “power users”––the financial analysts at PE and VC firms who spend their entire day in Microsoft Excel and don’t want to learn another 3rd party platform. Thus the Pitch Book Plugin for Excel was born.</p>
            <h2>Project Goals</h2>
            <p>The main goal of this project was to identify the core use cases in which an analyst would want to access Pitch Book data within Excel. We further wanted to identify whether there were any functionalities unique to the Platform that we could incorporate into Excel.</p>
            <h2>Research/Outcomes</h2>
            <p>I interviewed several financial analysts, clients as well as PitchBook’s financial research team, asking questions such as:</p>
            <ul class="proj-ul">
              <li>How do you use excel to conduct financial analysis?</li>
              <li>When you download data from our or other platforms into Excel, how do you typically manipulate it?</li>
              <li>What do you like/dislike about our competitors’ Excel plugins?</li>
              <li>What are the best practices for formatting data when modeling in Excel?</li>
            </ul>
            <p>I determined that there were 3 key components that needed to be built into the plugin:</p>
            <ul class="proj-ul">
              <li>The ability to access and manipulate standard industry modeling templates, which represents the most common use case for the plugin.</li>
              <li>The ability to create custom formulae (for our “<i>power power</i> users.”)</li>
              <li>The ability to access data queries saved and performed on the PitchBook web application.</li>
            </ul>
            <p>For the widest use case, Industry templates, I based the visual design on best practices for representing which cells are user inputs, which are pulled from our database, and which  are base assumptions that underlie the entire template.</p>
            <p>Further responsibilities included:</p>
            <ul class="proj-ul">
              <li>Writing all of the Excel error, alert & confirmation notifications.</li>
              <li>Creating a user guide with installation steps, overview of plugin functionality and error troubleshooting.</li>
            </ul>
            <p>The plugin is now in beta and we are in constant communication with our test users to see how we can improve the product.</p>
          </article>
          <aside>
            <h3>Roles</h3>
            <ul class="proj-ul">
              <li>User Interface Design</li>
              <li>Visual Design</li>
              <li>User Research</li>
              <li>Technical Writing</li>
            </ul>
          </aside>
      </div>
    </section>

    <section class="blue-gray content">
      <div class="wrap">
        <div class="images">
          <figure>
            <img alt="Customized Excel plugin Ribbon" src="../assets/img/pp-proj-ep-ribbon.jpg"/>
            <figcaption>
            Customized Excel toolbar ribbon with Pitchbook-specific options.
            </figcaption>
          </figure>
          <figure>
            <img alt="Template 1" src="../assets/img/pp-proj-ep-template-1.jpg"/>
            <figcaption>
            Example of the industry-standard financial modeling templates.
            </figcaption>
          </figure>
          <figure>
            <img alt="Template 3" src="../assets/img/pp-proj-ep-template-2.jpg"/>
            <figcaption>
            Example of the industry-standard financial modeling templates.
            </figcaption>
          </figure>
          <figure>
            <img alt="Template 4" src="../assets/img/pp-proj-ep-template-3.jpg"/>
            <figcaption>
            Example of the industry-standard financial modeling templates.
            </figcaption>
          </figure>
          <figure>
            <img alt="Template 5" src="../assets/img/pp-proj-ep-template-4.jpg"/>
            <figcaption>
            Example of the industry-standard financial modeling templates.
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

