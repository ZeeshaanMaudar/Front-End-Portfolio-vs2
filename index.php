<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>

  <meta name="description" content="Hi, I'm Zeeshaan Maudarbocus. I'm a front-end web developer with a background in web design. Check out my portfolio or feel free to contact me on maudarbocus.zeeshaan@gmail.com for more details">

  <meta name="keywords" content="Zeeshaan, zeeshaan, Maudarbocus, maudarbocus, Zeeshaan Maudarbocus, zeeshaan maudarbocus, front-end, developer, web developer, cape town, south africa, rondebosch, mushroomdev, dev, html5, html, css3, css, javascript, bootstrap, bootstrap studio, jQuery, frontend web developer">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta charset="utf-8">

  <link rel="shortcut icon" href="assets/images/zeeshaan-favicon.png">
  <!-- icon to be 16x16 pixels best or otherwise 30x30px -->
  <title>Zeeshaan Maudarbocus | Front-End Web Developer | Cape Town</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="assets/css/lib/mdb.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/lib/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/lib/slick.css">


  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>

<body>

  <!-- Nav Bar -->
  <div id="navigation-section">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand" href="#hero-section"><span class="icon"><img src="assets/images/zeeshaan-logo.png" alt="Zeeshaan's Logo" title="Zeeshaan's Logo"></span> Zeeshaan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link clicked" id="logo-btn" href="#hero-section">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-section">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio-section">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-section">Contact</a>
          </li>
        </ul> 
      </div>
    </nav>
  </div>

  <!-- Hero-Section -->
  <section id="hero-section">
    <div class="col-md-10 hero-area">
      <div class="text-container">
        <h1 id="Zeeshaan">Zeeshaan <br> Maudarbocus</h1>
      </div>
      <div class="row intro-hero">
        <p>I'm a front-end web developer. I design and build modern and beautiful websites.</p>
      </div>
      <div>
        <a class="btn customise-button" href="#contact-section">Hire me</a>
      </div>
    </div>
  </section>


  <!-- About Me -->
  <section id="about-section">
    <div class="col-md-10 container">
      <div class="col-lg-8 col-md-12">
        <h2 class="col-12 title" id="about-title">About</h2>
      </div>
      <div class="row aboutMe">

        <!-- left pic -->
        <div class="col-lg-4 col-md-12">
          <div class="col-12 about-image">
            <div class="border-deco"></div>
            <div class="my-img"></div>
          </div>
        </div>
        <!-- right side -->
        <div class="col-lg-8 col-md-12 about-content">
          <p>My passion for learning has led me to have a very diverse background. I have a degree with honours in Quantity Surveying, work experience in marketing and a certificate in digital marketing. However, when I was introduced to the web development world, I quickly fell in love with coding.</p>

          <p>As a self-taught developer, I started my learning journey on <span class="cool">Codecademy</span> and <span class="cool">YouTube</span> tutorials. I then enrolled for 2 courses on <span class="cool">Udemy</span> to master the newly gained skills. The first one that I completed was a <span class="cool">Web Design</span> course which gave me a good foundation of <span class="cool">Photoshop CC</span> and great design concepts for recent trends. The second one was a <span class="cool">Web Developer Bootcamp</span>, which focused on both front-end and back-end development. React is currently my next target.</p>

          <!-- Skills -->
          <div class="col-md-12 container" id="">
            <div class="col-md-10 container" id="skills-section">
              <h2 class="title" id="skills-title">Skills</h2>
              </div>
            </div>

            <div class="row skill">
              <div class="col-lg-3 col-sm-6 logo-container HTML5">
                <img class="logo html5" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-html5.png" alt="Zeeshaan does cool animation with html5 logo" title="Zeeshaan does cool animation with html5 logo">
                <h3 class="logo-title">HTML5</h3>
              </div>

              <div class="col-lg-3 col-sm-6 logo-container CSS3">
                <img class="logo css3" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-css3.png" alt="Zeeshaan does cool animation with css3 logo" title="Zeeshaan does cool animation with css3 logo">
                <h3 class="logo-title">CSS3</h3>
              </div>

              <div class="col-lg-3 col-sm-6 logo-container JAVASCRIPT">
                <img class="logo js" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-javascript.png" alt="Zeeshaan does cool animation with javascript logo" title="Zeeshaan does cool animation with javascript logo">
                <h3 class="logo-title">JavaScript</h3>
              </div>

              <div class="col-lg-3 col-sm-6 logo-container BOOTSTRAP">
                <img class="logo bootstrap" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-bootstrap.png" alt="Zeeshaan does cool animation with bootstrap logo" title="Zeeshaan does cool animation with bootstrap logo">
                <h3 class="logo-title">Bootstrap</h3>
              </div>

              <div class="col-lg-3 col-sm-6 logo-container JQUERY">
                <img class="logo jQuery" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-jQuery.png" alt="Zeeshaan does cool animation with jQuery logo" title="Zeeshaan does cool animation with jQuery logo">
                <h3 class="logo-title">jQuery</h3>
              </div>
              <div class="col-lg-3 col-sm-6 logo-container NODEJS">
                <img class="logo node" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-nodejs.jpg" alt="Zeeshaan does cool animation with node logo" title="Zeeshaan does cool animation with Node.js logo">
                <h3 class="logo-title">Node.js</h3>
              </div>

              <div class="col-lg-3 col-sm-6 logo-container EXPRESSJS">
                <img class="logo express" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-expressjs.png" alt="Zeeshaan does cool animation with express logo" title="Zeeshaan does cool animation with Express.js logo">
                <h3 class="logo-title">Express.js</h3>
              </div>

              <div class="col-lg-3 col-sm-6 logo-container MONGODB">
                <img class="logo mongodb" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-mongoDB.png" alt="Zeeshaan does cool animation with mongoDB logo" title="Zeeshaan does cool animation with MongoDB logo">
                <h3 class="logo-title">MongoDB</h3>
              </div>

              <div class="col-lg-3 col-sm-6 logo-container REACTJS">
                <img class="logo reactjs" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-reactjs.png" alt="Zeeshaan does cool animation with next.js logo" title="Zeeshaan does cool animation with next.js logo">
                <h3 class="logo-title">React.js</h3>
              </div>

              <div class="col-lg-3 col-sm-6 logo-container REDUX">
                <img class="logo redux" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-redux.png" alt="Zeeshaan does cool animation with redux logo" title="Zeeshaan does cool animation with redux logo">
                <h3 class="logo-title">Redux</h3>
              </div>

              <div class="col-lg-3 col-sm-6 logo-container SASS">
                <img class="logo sass" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-sass.png" alt="Zeeshaan does cool animation with sass logo" title="Zeeshaan does cool animation with Sass logo">
                <h3 class="logo-title">Sass</h3>
              </div>

              <div class="col-lg-3 col-sm-6 logo-container GITHUB">
                <img class="logo github" src="assets/images/Zeeshaan-maudarbocus-front-end-skill-github.png" alt="Zeeshaan does cool animation with github logo" title="Zeeshaan does cool animation with GitHub logo">
                <h3 class="logo-title">GitHub</h3>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>


  <!-- Portfolio -->
  <section id="portfolio-section" class="row col-12">

    <!-- start of trial animation -->
    <div class="col-md-10 container">
      <h2 class="title">Portfolio</h2>
      <div class="row intro-portfolio">
        <p><span class="cool">Web Development</span></p>
      </div>

      <!-- animate portfolio -->
      <div class="row col-12 img-holder">
        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con web-dev">
            <a href="https://nona.digital/" target="_blank">
              <div class="col-12 img-block">
                <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-website-nona.png" alt="Zeeshaan's thumbnail for web development project" title="Zeeshaan's thumbnail for web development project" />
              </div>
  
              <div class="col-12 text-con">
                <p class="project-title">NONA Website</p>
                <p class="inner-p">
                  React.js: Next.js, Scss.
                </p>
              </div>
              <p class="appear">Click to View More</p>
            </a>
          </div>
          <!-- End Section IMage-->

        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con web-dev">
            <a href="http://d1ellib2jn0d36.cloudfront.net/" target="_blank">
              <div class="col-12 img-block">
                <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-website-burger-builder.png" alt="Zeeshaan's thumbnail for web development project" title="Zeeshaan's thumbnail for web development project" />
              </div>
  
              <div class="col-12 text-con">
                <p class="project-title">Burger Builder App</p>
                <p class="inner-p">
                  React.js: create-react-app and Redux. Hosted on AWS - CloudFront.
                </p>
              </div>
              <p class="appear">Click to View More</p>
            </a>
        </div>
          <!-- End Section IMage-->

        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con web-dev">
            <a href="https://still-bayou-40074.herokuapp.com/" target="_blank">
              <div class="col-12 img-block">
                <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-website-yelpcamp.png" alt="Zeeshaan's thumbnail for web development project" title="Zeeshaan's thumbnail for web development project" />
              </div>
  
              <div class="col-12 text-con">
                <p class="project-title">YelpCamp App</p>
                <p class="inner-p">
                  HTML5 and CSS3, Javascript, Bootstrap, Node.js, Express.js, MongoDB.
                </p>
              </div>
              <p class="appear">Click to View More</p>
            </a>
          </div>
          <!-- End Section IMage-->

        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con web-dev">
            <a href="photo-grid/index.html" target="_blank">
              <div class="col-12 img-block">
                <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-website-photo-grid.jpg" alt="Zeeshaan's thumbnail for web development project 1" title="Zeeshaan's thumbnail for web development project 1" />
              </div>
  
              <div class="col-12 text-con">
                <p class="project-title">Photo Grid</p>
                <p class="inner-p">
                  HTML5 and CSS3.
                </p>
              </div>
              <p class="appear">Click to View More</p>
            </a>
          </div>
          <!-- End Section IMage-->

        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con web-dev">
          <a href="tesla-roadster/index.html" target="_blank">
            <div class="col-12 img-block">
              <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-website-tesla.jpg" alt="Zeeshaan's thumbnail for web development project 2" title="Zeeshaan's thumbnail for web development project 2" />
            </div>

            <div class="col-12 text-con">
              <p class="project-title">Tesla Roadster Page</p>
              <p class="inner-p">
                Replica built using Bootstrap Studio.
              </p>
            </div>
            <p class="appear">Click to View More</p>
          </a>
        </div>
        <!-- End Section IMage-->

        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con web-dev">
          <a href="todo-list/index.html" target="_blank">
            <div class="col-12 img-block">
              <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-website-todo-list.jpg" alt="Zeeshaan's thumbnail for web development project 5" title="Zeeshaan's thumbnail for web development project 5" />
            </div>

            <div class="col-12 text-con">
              <p class="project-title">To-Do List App</p>
              <p class="inner-p">
                HTML5, CSS3, Javascript and jQuery.
              </p>
            </div>
            <p class="appear">Click to View More</p>
          </a>
        </div>
        <!-- End Section IMage-->

        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con web-dev">
          <a href="color-game/index.html" target="_blank">
            <div class="col-12 img-block">
              <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-website-color-game.jpg" alt="Zeeshaan's thumbnail for web development project 6" title="Zeeshaan's thumbnail for web development project 6" />
            </div>

            <div class="col-12 text-con">
              <p class="project-title">Color Picker Game</p>
              <p class="inner-p">
                HTML5, CSS3 and vanilla Javascript.
              </p>
            </div>
            <p class="appear">Click to View More</p>
          </a>
        </div>
        <!-- End Section IMage-->

        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con web-dev">
          <a href="purrfect-match/index.html" target="_blank">
            <div class="col-12 img-block">
              <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-website-landing-page.jpg" alt="Zeeshaan's thumbnail for web development project 4" title="Zeeshaan's thumbnail for web development project 4" />
            </div>

            <div class="col-12 text-con">
              <p class="project-title">Landing Page</p>
              <p class="inner-p">
                Bootstrap library.
              </p>
            </div>
            <p class="appear">Click to View More</p>
          </a>
        </div>
        <!-- End Section IMage-->
      </div>

      <!-- Web-design section portfolio -->
      <div class="row col-12 intro-portfolio" id="web-design">
        <p><span class="cool">Web Design</span></p>
      </div>

      <!-- animate portfolio -->
      <div class="row col-12 img-holder">
        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con" id="design-img-holder">
          <a href="assets/images/photoshop/Zeeshaan-Maudarbocus-Web-Design-1.jpg" target="_blank">
            <div class="col-12 img-block">
              <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-web-design-1.jpg" alt="Zeeshaan's thumbnail for web design project 1" title="Zeeshaan's thumbnail for web design project 1" />
            </div>
            <p class="appear">Click to View More</p>
          </a>
        </div>
        <!-- End Section IMage-->

        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con" id="design-img-holder">
          <a href="assets/images/photoshop/Zeeshaan-Maudarbocus-Web-Design-2.jpg" target="_blank">
            <div class="col-12 img-block">
              <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-web-design-2.jpg" alt="Zeeshaan's thumbnail for web design project 2" title="Zeeshaan's thumbnail for web design project 2" />
            </div>
            <p class="appear">Click to View More</p>
          </a>
        </div>
        <!-- End Section IMage-->

        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con" id="design-img-holder">
          <a href="assets/images/photoshop/Zeeshaan-Maudarbocus-Web-Design-3.jpg" target="_blank">
            <div class="col-12 img-block">
              <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-web-design-3.jpg" alt="Zeeshaan's thumbnail for web design project 3" title="Zeeshaan's thumbnail for web design project 3" />
            </div>
            <p class="appear">Click to View More</p>
          </a>
        </div>
        <!-- End Section IMage-->

        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con" id="design-img-holder">
          <a href="assets/images/photoshop/Zeeshaan-Maudarbocus-Web-Design-4.jpg" target="_blank">
            <div class="col-12 img-block">
              <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-web-design-4.jpg" alt="Zeeshaan's thumbnail for web design project 4" title="Zeeshaan's thumbnail for web design project 4" />
            </div>
            <p class="appear">Click to View More</p>
          </a>
        </div>
        <!-- End Section IMage-->

        <!-- Section Image-->
        <div class="col-xs-12 col-md-6 col-lg-4 img-con" id="design-img-holder">
          <a href="assets/images/photoshop/Zeeshaan-Maudarbocus-Web-Design-5.jpg" target="_blank">
            <div class="col-12 img-block">
              <img class="an-img" src="assets/images/thumbnails/Zeeshaan-Maudarbocus-web-design-5.jpg" alt="Zeeshaan's thumbnail for web design project 5" title="Zeeshaan's thumbnail for web design project 5" />
            </div>
            <p class="appear">Click to View More</p>
          </a>
        </div>
        <!-- End Section IMage-->

      </div>
    </div>
  </section>


  <!-- Contact -->

  <section id="contact-section" class="row col-12">
    <div class="col-md-10 container">
      <div class="row contact-me">
        <div class="col-lg-4 col-md-12">
          <h2 class="title" id="contact-title">Contact</h2>
          <div class="row intro-contact">
            <p>Need a website? Want to hire me? Pop me an email or give me a call anytime.</p>

            <?php
            if(isset($_SESSION['mail_sent'])){
            echo $_SESSION['mail_sent'];
            session_destroy();
          }
          ?>
        </div>

        <p class="contact-details"><span class="icon"><img src="assets/images/call.png"></span> (+27) 063 642 8221</p>
        <p class="contact-details"><span class="icon"><img src="assets/images/email.png"></span> maudarbocus.zeeshaan@gmail.com</p>
        <p class="contact-details"><span class="icon"><img src="assets/images/location.png"></span> Rondebosch, Cape Town, South Africa</p>
      </div>
      <!-- Contact Form -->
      <div class="col-lg-8 col-md-12">
        <form id="contact" action="assets/php/mail.php" method="POST">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" name="first_name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" name="last_name">
            </div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Type message here" name="message"></textarea>
          </div>
          <button type="submit" class="btn submit-form">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-12 footer"><p>Zeeshaan Maudarbocus © 2018 mushroomdev.com 
    <br>All rights reserved</p></div>
  </div>

</section>


<script type="text/javascript" src="assets/js/lib/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="assets/js/lib/mdb.min.js"></script>

<script type="text/javascript" src="assets/js/lib/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/js/main.js"></script>

</body>

</html>