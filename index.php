<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AMS-Website</title>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="bootstrap/bootstrap-icons-1.9.1/bootstrap-icons.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- header sectionn-->
  <header class="bg-transparent">
    <!-- navbar -->
    <nav class="navbar navbar-expand-md">
      <div class="container-fluid navmodel">
        <a href="#home" class="navbar-brand">
          <img src="img/logo.png" width="80" height="60" alt="logo" />
        </a>

        <!-- toggle button for mobile view -->
        <button class="navbar-toggler p-1 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
          aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation"
          style="border-radius: 5px; border: none; outline: none">
          <span class="navbar-toggler-icon"></span>
          <!-- <h3 class="bi bi-list fs-1 p-0"></h3> -->
        </button>

        <!-- Navbar links -->

        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
          <ul class="navbar-nav">
            <li class="nav-item textHover">
              <a class="nav-link" href="#home" >HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services" >SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio" >PORTFOLIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" >ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact" >CONTACT US</a>
            </li>
            <li class="nav-item d-none d-md-block">
              <a class="nav-link  roboto-bold" href="login.php" style="font-weight: 500"><span class="bi bi-people-fill"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- main section -->
  <main>
    <div class="container-fluid">
      <!-- Home Section -->
      <div class="row" id="home">
        <div class="col-12 video p-0 pb-6">
          <video autoplay loop muted src="final video.mp4" width="110%" height="80%" class="introvideo"></video>
          <button class="getStart">GET STARTED NOW</button>
        </div>
      </div>
    </div>
    
      <!-- Our Services section -->
      <div class="row" id="services">
        <div class="col-sm-12 col-md-8 col-lg-4">
          <div class="card main-service-card bg-dark1 mx-5 pb-4">
            <div class="card-body text-start pl-5">
              <h3 class=" text-center service-title text-white palatino-bold custome-title">
                OUR SERVICES
              </h3>
              <p  class="text-white text-start d-lg-block roboto-slab-light custom-paragraph">
                At AMS Soft Solution, we offer a range of design services to
                help businesses and organizations improve their online and
                offline presence. Our team of experienced designers and
                project managers work closely with each other to understand
                their unique needs and deliver a custom solution that meets
                their goals and exceeds their expectations
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 multiple-cards">
          <div class="row forlaptab">
            <div class="col-8 col-sm-8 col-lg-4">
              <div class="card custom-card graphic-card text-center bg-gray shadow-sm border-0">
                <div class="text-center mt-4">
                  <img src="img/services/graphic-design.png" alt="graphic-logo" class="card-img-top graphic-logo" />
                </div>

                <div class="card-body">
                  <div class="servicecardcontent">
                    <h5 class="card-title type-service-name text-grey mb-4 poppins-bold">
                      GRAPHIC DESIGN
                    </h5>
                    <p class="card-text card-desc text-start px-2 roboto-normal">
                      Good design is essential for creating a strong visual
                      identity and communicating your message effectively. Our
                      graphic design services cover a range of mediums, from
                      print to digital, and are tailored to meet the specific
                      needs of each client.
                      <br><br>
                      Our graphic design services include: br
                      Logo and branding design
                      Print collateral design (brochures, business cards, flyers, etc.)
                      Digital collateral design (social media graphics, email newsletters, etc.)
                      Packaging design
                      Illustration and infographic design
                    </p>
                  </div>
                  <p class="read-more mt-2 text-end text-primary">Read more</p>
                </div>
              </div>
            </div>
            <div class="col-8 col-sm-8 col-lg-4">
              <div class="card custom-card webapp-card text-center bg-gray shadow-sm border-0">
                <div class="text-center mt-4">
                  <img src="img/services/app-development.png" alt="webapp-logo" class="card-img-top webapp-logo" />
                </div>

                <div class="card-body">
                  <div class="servicecardcontent">
                    <h5 class="card-title mx-2 type-service-name text-gray poppins-bold">
                      WEBSITE & MOBILE APP DEVELOPMENT
                    </h5>
                    <p class="card-text card-desc text-start px-2 roboto-normal">
                      Our expert team builds custom websites and mobile apps
                      tailored to your business needs using the latest
                      technologies, ensuring fast, secure, and user-friendly
                      solutions. We also offer ongoing maintenance and support
                      to ensure your website and mobile app are always
                      up-to-date and optimized for the best user experience. <br> <br>
                      Our website & mobile app development Services Include:
                      <br>
                      Custom Website Development
                      E-Commerce Development
                      CMS Development
                      WordPress Development
                      iOS and Android App Development
                      UI/UX Design
                      Website and Mobile App Maintenance and Support
                      Website and Mobile App Optimization
                    </p>
                  </div>
                  <p class="read-more mt-2 text-end text-primary">Read more</p>
                </div>
              </div>
            </div>
            <div class="col-8 col-sm-8 col-lg-4">
              <div class="card custom-card branding-card text-center bg-gray shadow-sm border-0">
                <div class="text-center mt-4">
                  <img src="img/services/creative.png" alt="branding-logo" class="card-img-top branding-logo" />
                </div>

                <div class="card-body">
                  <div class="servicecardcontent">
                    <h5 class="card-title type-service-name  text-gray mb-4 poppins-bold">
                    BRANDING
                  </h5>
                  <p class="card-text card-desc text-start px-2 roboto-normal">
                    Your brand is your identity and sets you apart from your
                    competitors. We help businesses and organizations create a
                    strong brand  and
                    effectively communicates their values and personality.
                    <br><br>
                    Our branding services include: <br>
                    Brand strategy development
                    Logo design and visual identity development
                    Brand guidelines development
                    Brand messaging and tone of voice
                  </p>
                  </div>
                  
                  <p class="read-more mt-2 text-end text-primary">Read more</p>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-2 forlaptab">
            <div class="col-8 col-sm-8 col-lg-4">
              <div class="card custom-card uiux-card text-center bg-gray shadow-sm border-0">
                <div class="text-center mt-4">
                  <img src="img/services/ux-design.png" alt="uiux-logo" class="card-img-top uiux-logo" />
                </div>

                <div class="card-body">
                  <div class="servicecardcontent">
<h5 class="card-title type-service-name  text-gray poppins-bold">
                    UI/UX DESIGN
                  </h5>
                  <p class="card-text card-desc text-start px-2 roboto-normal">
                    User experience is a critical component of any successful
                    digital product. We work with businesses and organizations
                    to create intuitive and user-friendly interfaces that
                    engage users and enhance their overall experience.
                    <br><br>
                    Our UI/UX design services include: <br>
                    User research and analysis
                    Information architecture and wireframing
                    UI design and prototyping
                    Usability testing and optimization
                  </p>
                  </div>
                  
                      <p class="read-more mt-2 text-end text-primary">Read more</p>
                  
                </div>
              </div>
            </div>
            <div class="col-8 col-sm-8 col-lg-4">
              <div class="card custom-card edit-card text-center bg-gray shadow-sm border-0">
                <div class="text-center mt-4">
                  <img src="img/services/edit-image.png" alt="edit-logo" class="card-img-top edit-logo" />
                </div>

                <div class="card-body">
                 <div class="servicecardcontent">
                    <h5 class="card-title type-service-name  text-gray poppins-bold">
                    PHOTO EDITING
                  </h5>
                  <p class="card-text card-desc text-start px-2 roboto-normal">
                    we offer a range of photo editing services to help
                    individuals and businesses enhance their images and
                    achieve their desired look. Our experienced team of photo
                    editors use the latest software and techniques to
                    transform your images into works of art. <br>
                    <br>
                    Our Photo Editing Services Include: <br>
                    Color correction and enhancement
                    Retouching (blemish removal, skin smoothing, etc.)
                    Background removal and replacement
                    Image resizing and cropping
                    Photo restoration and repair
                    Image manipulation and compositing
                    Whether you need photos for your website, social media, or print materials, we can help you create
                    stunning
                    visuals that capture your audience's attention.
                  </p>
                 </div>
            
                    <p class="read-more mt-2 text-end text-primary">Read more</p>

            
                </div>
              </div>
            </div>
            <div class="col-8 col-sm-8 col-lg-4">
              <div class="card custom-card gis-card text-center bg-gray shadow-sm border-0">
                <div class="text-center mt-4">
                  <img src="img/services/signs.png" alt="gis-logo" class="card-img-top gis-logo" />
                </div>

                <div class="card-body">
                  <div class="servicecardcontent">
                    <h5 class="card-title type-service-name text-gray poppins-bold">
                    GIS MAPPING
                  </h5>
                  <p class="card-text card-desc text-start px-2 roboto-normal">
                    we specialize in Geographic Information System (GIS)
                    mapping services that help businesses and organizations
                    make informed decisions based on spatial data. Our GIS
                    experts have experience working with a wide range of
                    industries, including government, utilities, real estate,
                    and more.
                    <br><br>
                    Our GIS Mapping Services Include:
                    <br>
                    GIS data analysis and modeling
                    Cartography and map production
                    Spatial database design and development
                    Geocoding and address matching
                    GIS consulting and training
                    Web and mobile GIS application development
                    With our GIS mapping services, you can gain valuable insights into your data and visualize it in a
                    way that is easy to understand and act upon.
                  </p>
                  </div>
                  
                    <p class="read-more mt-2 text-end text-primary">Read more</p>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Portfolio section -->
      <div class="row bg-gray" id="portfolio">
        <nav class="item">
          <ul>
            <li><a class="#">All</a></li>
            <li><a class="#">Logo</a></li>
            <li><a class="#">Business Card</a></li>
            <li><a class="#">Brochure</a></li>
            <li><a class="#">Poster</a></li>
            <li><a class="#">Product Design</a></li>
            <li><a class="#">T-Shirt Design</a></li>
            <li><a class="#">UI/UX Design</a></li>
          </ul>
        </nav>
        <div class="images textHover">
          <div class="imgbox1">
            <img src="img/portfolio/01.jpg" class=" img-1" alt="img-1" />

            <img src="img/portfolio/02.jpg" class=" img-2" alt="img-1" />

            <div class="portfolio-box">
              <h3>Our Portfolio</h3>
              <p>
                At AMS Soft Solution, we are proud of the work we have done for 
                our clients over the years. Our portfolio showcases a range of 
                projects, from website design and branding to graphic design.we 
                present our journey through the creativity of innovation and aesthetics
              </p>
            </div>

          </div>
          <div class="imgbox2">
            <img src="img/portfolio/03.jpg" class=" img-3" alt="img-1" />

            <img src="img/portfolio/04.jpg" class=" img-4" alt="img-1" />

            <img src="img/portfolio/05.jpg" class=" img-5" alt="img-1" />

            <img src="img/portfolio/06.jpg" class=" img-6" alt="img-1" />

            <img src="img/portfolio/07.jpg" class=" img-7" alt="img-1" />
          </div>
        </div>
        <div class="showMore">
          <button class="showmorebtn">SHOW MORE</button>
        </div>
      </div>

      <!-- Expert services -->
      <div class="row" id="expertServices">
        <div class="designandlink">
          <div class="designService">
            <div class="designBox">
              <img src="img/thrid page/01.png" alt="design vector" />
              <div class="content">
                <h5>DESIGN SERVICE</h5>
                <h3>
                  Creative and professional graphic design company that
                  specializes in crafting unique digital designs to make your
                  business stand out
                </h3>
              </div>
            </div>
            <div class="addBtnBox">
              <a class="addBtn"><img src="img/thrid page/a.png" alt="" /></a>
            </div>
          </div>
          <div class="linkService">
            <div class="linkBox">
              <img src="img/thrid page/02.png" alt="link vector" />
              <div class="content">
                <h5>Link Building</h5>
                <h3>
                  We'll earn white hat backlinks and send qualified traffic to
                  your business through guest posting
                </h3>
              </div>
            </div>
            <div class="addBtnBox">
              <a class="addBtn"><img src="img/thrid page/b.png" alt="" /></a>
            </div>
          </div>
        </div>
        <div class="expertServiceBox">
          <div class="expertBox">
            <h5>We Are A Design Services</h5>
            <h3>
              Experts Services To <br />
              Change Business
            </h3>
          </div>
        </div>
        <div class="webandmarketing">
          <div class="webservice">
            <div class="webBox">
              <img src="img/thrid page/03.png" alt="web vector" />
              <div class="content">
                <h5>Web Design & Development</h5>
                <h3>
                  We make websites that don't just look great, 
                  but are also optimized for UX, conversions, and search engine visibility.
                </h3>
              </div>
            </div>
            <div class="addBtnBox">
              <a class="addBtn"><img src="img/thrid page/c.png" alt="" /></a>
            </div>
          </div>
          <div class="marketingservice">
            <div class="marketBox">
              <img src="img/thrid page/04.png" alt="marketing vector" />
              <div class="content">
                <h5>Done-For-You Marketing</h5>
                <h3>
                  Outsource all your marketing needs to a dedicated marketing
                  team handpicked just for your business
                </h3>
              </div>
            </div>
            <div class="addBtnBox">
              <a class="addBtn"><img src="img/thrid page/d.png" alt="plus button" /></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Completed Projects -->
      <div class="row bg-gray" id="completedProjectStatus">
        <div class="fullServices shadow-sm">
          <h4>Graphic Designing Services & Software Development</h4>
          <h3>Company Design Full Services</h3>
        </div>
        <div class="projectStatus">
          <div class="clientBox">
            <h1>1K</h1>
            <span>Clients</span>
          </div>
          <span class="bar"></span>
          <div class="teamBox">
            <h1>30+</h1>
            <span>Team Members</span>
          </div>
          <span class="bar"></span>
          <div class="workBox">
            <h1>5K</h1>
            <span>Active Work</span>
          </div>
        </div>
      </div>

      <!-- About Us Section -->
      <div class="row bg-white" id="about">
        <div class="about-carousel">
          <div class="left-arrow">
           
          </div>
          <div class="aboutsection">
            <div class="aboutBox">
              <img src="img/am.jpeg" width="230" height="150" alt="logo" /> <!-- Increase the width and height values -->
              <h3>About Us</h3>
              <p>
                At AMS Soft Solution, we are passionate about helping businesses & organizations
                 achieve their goals through exceptional design services. We believe that good design 
                 has the power to transform the way people think & feel, we work tirelessly to 
                 create designs that are not only beautiful but also effective.
              </p>
            </div>

            <div class="vision-mission">
              <div class="visionBox">
                <h3>VISION</h3>
                <div class="vision-content">
                  <p>
                    Our vision is to be a leading provider of innovative
                    design services that inspire and empower our clients to
                    achieve their goals. We strive to be recognized for our
                    exceptional creativity, quality work, and commitment to
                    customer satisfaction. We believe in the power of design
                    to transform the way people think and feel, and we are
                    dedicated to using that power to help our clients succeed.
                    Our goal is to be the go-to design services provider for
                    businesses and organizations across a wide range of
                    industries.
                  </p>
                  <img src="img/about/vision.png" alt="vision image" />
                </div>
              </div>
              <div class="missionBox">
                <h3>MISSION</h3>
                <div class="mission-content">
                  <p>
                    Our mission is to provide our clients with high-quality
                    design services that help them achieve their objectives.
                    We believe in taking a collaborative approach to each
                    project, working closely with our clients to understand
                    their unique needs and creating custom solutions that meet
                    and exceed their expectations.
                  </p>
                  <img src="img/about/mission.png" alt="mission image" />
                </div>
              </div>
            </div>
          </div>
          <div class="right-arrow">
          
          </div>
        </div>
        <div class="carousel-btn-icons">
          <a ><img src="img/CONTACT US/02.png" class="left-arrow-img" /></a>
          <a ><img src="img/CONTACT US/02.png" class="right-arrow-img" /></a>
        </div>
      </div>

      <!-- Contact Us Section -->
      <div class="row" id="contact">
        <div class="contactusheader">
          <img src="img/CONTACT US/01.png" alt="msg img" />
          <h3>Contact Us</h3>
        </div>
        <div class="contactmain">
          <div class="column1">
            <div class="address">
              <h3>OUR ADDRESS</h3>
              <p>
                Muncipal Colony, Veerappanchatram,<br />
                Erode, Tamil Nadu, India
              </p>
            </div>
            <div class="call">
              <h3>CALL US</h3>
              <p class="numbers"></p>
              +91 88389 87243<br />
              +91 97516 52190
              </p>
            </div>
            <div class="email">
              <h3>EMAIL US</h3>
              <a href="#">
                <span>info@amssoftsolution.com</span>
              </a>
            </div>
          </div>
          <div class="column2">
            <div class="contactdesc">
              <p>
                We'd love to hear from you! Whether you're interested in
                learning more about our services or have a project in mind,
                our team is here to help. You can contact us using the
                information below, or fill out the form to send us a message.
              </p>
            </div>
         
            <div class="contact-form">
            <form action="https://formsubmit.co/info@amssoftsolution.com" method="POST" />
                <div class="input1">
                  <div class="namebox">
                    <label for="name"> Name : </label>
                    <br>
                    <input type="text" name="name" id="name" />
                  </div>
                  <div class="subjectbox">
                    <label for="subject"> Subject : </label><br>
                    <input type="text" name="subject" id="subject" />
                  </div>
                </div>
                <div class="input2">
                  <label for="message"> Your Message : </label><br>
                  <textarea name="message" id="message" cols="30"></textarea>
                </div>
                <div class="sendmsgbtn">
                <a href="javascript:void(0);" onclick="document.forms[0].submit();" class="btn btn-primary">Send Message</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="arrow">
        <a href="#" ><img src="img/CONTACT US/03.png" alt=""></a>
      </div>
    </div>
  </main>

  <!-- footer section -->
  <footer id="footer">
  <a href="https://wa.me/8838987243"><img src="img/CONTACT US/b.png" alt=""></a>
    <a href="https://www.instagram.com/amssoftsolution/"><img src="img/CONTACT US/c.png" alt=""></a>
    <a href="https://www.facebook.com/profile.php?id=100087549707441&mibextid=ZbWKwL"><img src="img/CONTACT US/A.png" alt=""></a>
    <a  class="addBtn"><img src="img/CONTACT US/d.png" alt=""></a>
  </footer>

  <!-- Script here -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</body>

</html>