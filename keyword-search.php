<!DOCTYPE html>
<html lang="en">

  <head>
  <title>Leor Maizel - UX Designer – Portfolio: PitchBook Keyword Search</title>
  <?php include 'blocks/head.php'; ?>
  </head>
 
  <body class="non-index portfolio-proj keyword-search">
    
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
        <h1>PitchBook Keyword Search</h1>
          <article>
            <h2>Background</h2>
            <p>While the PitchBook Platform has an incredibly sophisticated advanced search feature, approximately 95% of users utilize the top search box as their primary mode of interaction. Users would commonly bypass every navigational element on the platform and go straight to search. However, queries would frequently result in a dead end, as the search algorithm accommodated only one type of query.</p>
            <p>But first, a little bit of taxonomy. Every “entity” in the PitchBook platform––a person or a company––is categorized by keyword (words generally relating to that entity in any manner), industry (one of a list of pre-set business categories), and vertical (a grouping of companies related in product or service that may span multiple industries). For instance, Snapchat may be categorized by industry as “B2C,” by vertical as “Social Media,” and by keyword as “photo sharing.” To make matters more complicated, industries and verticals are also keywords.</p>
            <p>…back to dead end queries. The search functionality would only show results based on entity, meaning that whatever the query, the user would only see entities exactly or broadly matching that query. This drastically limited engagement and discovery, for instance queries such as "Internet of things," "Social Media," and "3d priniting" would return no results, unless there was a matching entity</p>
            <p>For a platform that is supposed to help investors discover potential investments, this was a huge limitaton.</p>
            <h2>Project Goals</h2>
            <p>To provide the user with greater opportunity for finding relevant information, I designed and helped write the logic for a hybrid search functionality that exposed entity as well as keyword results to the majority of queries. A central concern was to avoid overly-complicating the search experience. A SERP that unintelligibly combines entities and keywords may very well prove a worse experience than the current, more limited search.</p>
            <p>I aimed to design an experience that would at first allow the user to browse between entities and keyword results more  broadly, and then adapt  to the user’s signals of intent, presenting a more filtered SERP.</p>
          </article>
          <aside>
            <h3>Roles</h3>
            <ul class="proj-ul">
              <li>Information Architecture</li>
              <li>User Interface Design</li>
              <li>Project Management</li>
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

