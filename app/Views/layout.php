<!doctype html>
<html lang="en">
  <head>
    <title>Riza Nursyah Portfolio ✨</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="keywords" content="html, css, javascript, jquery">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=base_url('assets/css/vendor/icomoon/style.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/vendor/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/vendor/animate.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/vendor/aos.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/vendor/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/vendor/jquery.fancybox.min.css')?>">
    

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">

  </head>
  <body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

    <nav class="unslate_co--site-mobile-menu">
      <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
          <span class="close-label">Close</span>
          <div class="close-times">
            <span class="bar1"></span>
            <span class="bar2"></span>
          </div>
        </a>
      </div>
      <div class="site-mobile-inner"></div>
    </nav>


    <div class="unslate_co--site-wrap">

      <div class="unslate_co--site-inner">

        <div class="lines-wrap">
          <div class="lines-inner">
            <div class="lines"></div>
          </div>
        </div>
        <!-- END lines -->
      
      <nav class="unslate_co--site-nav site-nav-target">
        <div class="container">   
          <div class="row align-items-center justify-content-between text-left">
            <div class="col-md-5 text-right">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li class="has-children"><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
              </ul>
            </div>
            <div class="site-logo pos-absolute">
              <a href="index.html" class="unslate_co--site-logo">Riza<span>.</span></a>
            </div>
            <div class="col-md-5 text-right text-lg-left">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li><a href="#skills-section" class="nav-link">Skills</a></li>
                <li><a href="#journal-section" class="nav-link">Experience</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!-- END nav -->

      <div class="cover-v1 jarallax" id="home-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 mx-auto text-center">
              <h1 class="heading gsap-reveal-hero">Hello</h1>
              <h2 class="subheading gsap-reveal-hero">I’m Riza Nursyah a Data Analyst and UI/UX Designer</h2>
            </div>
          </div>
        </div>

        <a href="#portfolio-section" class="mouse-wrap smoothscroll">
          <span class="mouse">
            <span class="scroll"></span>
          </span>
          <span class="mouse-label">Scroll</span>
        </a>
      </div>
      <!-- END .cover-v1 -->
      
      <div class="unslate_co--section" id="portfolio-section">
        <div class="container">
          <div class="relative"><div class="loader-portfolio-wrap"><div class="loader-portfolio"></div></div> </div>
          <div id="portfolio-single-holder"></div>

          <div class="portfolio-wrapper">

            <div class="d-flex align-items-center mb-4 gsap-reveal gsap-reveal-filter">
              <h2 class="mr-auto heading-h2"><span class="gsap-reveal">Portfolio</span></h2>
            </div>

            <div id="posts" class="row gutter-isotope-item">
              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="brazilian-ecommerce" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Brazilian E-Commerce Analysis</h3>
                        <p>Data Analysis</p>
                      </div>
                    </div>
                    <img src="<?=base_url('assets/images/brazilian-ecomerce.jpg')?>" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>
              <div class="item branding packaging illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2 ">
                <a href="global-inflation" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="3">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Global Inflation Analysis</h3>
                        <p>Data Analysis</p>
                      </div>
                    </div>
                    <img src="<?=base_url('assets/images/global-inflation.jpg')?>" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="spotify-analysis" class="portfolio-item isotope-item gsap-reveal-img ajax-load-page" data-id="4">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Most Streamed Spotify Songs 2023</h3>
                        <p>Data Analysis</p>
                      </div>
                    </div>
                    <img src="<?=base_url('assets/images/spotify.jpg')?>" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="cause-death" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="5">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Annual Cause Death Analysis</h3>
                        <p>Data Analysis</p>
                      </div>
                    </div>
                    <img src="<?=base_url('assets/images/cause-death.jpg')?>" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item illustration packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="marketing-analysis" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="5">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Marketing Analysis</h3>
                        <p>Data Analysis</p>
                      </div>
                    </div>
                    <img src="<?=base_url('assets/images/marketing-analysis.jpg')?>" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="explore-sukabumi" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="6">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Explore Sukabumi</h3>
                        <p>UI/UX Design</p>
                      </div>
                    </div>
                    <img src="<?=base_url('assets/images/explore-sukabumi.png')?>" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="apemrasasutra" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="8">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>APEMRASASUTRA</h3>
                        <p>UI/UX Design</p>
                      </div>
                    </div>
                    <img src="<?=base_url('assets/images/apemrasasutra.png')?>" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="hicolleagues" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="7">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>HiColleagues Prakerja Landing Page</h3>
                        <p>UI/UX Design</p>
                      </div>
                    </div>
                    <img src="<?=base_url('assets/images/hicolleagues-prakerja.png')?>" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="visit-campus" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="9">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Visit Campus</h3>
                        <p>UI/UX Design</p>
                      </div>
                    </div>
                    <img src="<?=base_url('assets/images/visit-campus.png')?>" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>
            </div>       
          </div>
        </div>
      </div>

        <div class="unslate_co--section" id="about-section">
          <div class="unslate_co--section" id="about-section">
            <div class="about-me container">
                    <div class="section-heading-wrap text-center mb-5">
                      <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">About Me</span></h2>
                      <span class="gsap-reveal">
                        <img src="<?=base_url('assets/images/divider.png')?>" alt="divider" width="76">
                      </span>
                    </div>
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right">
                          <figure class="dotted-bg gsap-reveal-img ">
                            <img src="<?=base_url('assets/images/riza-1.png')?>" class="img-fluid" alt="">
                          </figure>
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <div class="row">
                                <div class="col-lg-6">
                                  <?php
                                    $id = 1;
                                    foreach($biodata as $row);
                                  ?>
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?=$row['birthday']?></span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?=$row['phone_number']?></span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?=$row['city']?></span></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?=$row['age']?></span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Hobby:</strong> <span><?=$row['hobby']?></span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?=$row['email']?></span></li>
                                    </ul>
                                </div>
                            </div>
                            <p>
                            Third year Computer Science student, Faculty of Science and Technology, Muhammadiyah University of Sukabumi. Have project 
                            experience as Data Analyst at Bangkit Academy. Have interest in Data Analysis, UI/UX Design, and Web Development. Have a good 
                            social life, like to learn new things, good in time management and problem solving, fast learner, able to adapt and be resilient, stands out 
                            in creative and analytical thinking.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
      </div>

      <div class="unslate_co--section" id="skills-section">
        <div class="container">

          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Skills</span></h2>
            <span class="gsap-reveal"><img src="<?=base_url('assets/images/divider.png')?>" alt="divider" width="76"></span>
          </div>

          <div class="row gutter-v3">
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
                <div class="wrap-icon mb-3">
                  <img src="<?=base_url('assets/images/svg/001-options.svg')?>" alt="Image" width="45">
                </div>
                <h3>Data <br> Analytics</h3>
                <p>Google Colab, Python, SQL, Tableau</p>
              </div> 
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
                <div class="wrap-icon mb-3">
                  <img src="<?=base_url('assets/images/svg/002-chat.svg')?>" alt="Icon" width="45">
                </div>
                <h3>Web <br> Design</h3>
                <p>HTML, CSS, JavaScript, Figma, PHP, CodeIgniter 4</p>
              </div> 
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                <div class="wrap-icon mb-3">
                  <img src="<?=base_url('assets/images/svg/003-contact-book.svg')?>" alt="Image" class="img-fluid" width="45">
                </div>
                <h3>Machine Learning</h3>
                <p>Google Colab, Python, TensorFlow</p>
              </div> 
            </div>
          </div>
        </div>
      </div>

      <div class="unslate_co--section" id="journal-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Experiences</span></h2>
            <span class="gsap-reveal"><img src="<?=base_url('assets/images/divider.png')?>" alt="divider" width="76"></span>
          </div>

          
          <div class="row gutter-v4 align-items-stretch">
            <div class="col-sm-6 col-md-6 col-lg-8 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>Fullstack Web Developer Intern</h3>
                    <p class="post-meta">Badan Pusat Statistik Kota Sukabumi <span class="small">&bullet;</span> Apr 2024 - Jun 2024</p>
                  </div>
                </div>
                <img src="<?=base_url('assets/images/bps.jpg')?>" class="lazyload" alt="Image" />
              </a>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>Machine Learning Cohort</h3>
                    <p class="post-meta">Bangkit Academy led by Google, Tokopedia, Gojek, & Traveloka <span class="small">&bullet;</span> Aug 2023 - Jan 2024</p>
                  </div>
                </div>
                <img src="<?=base_url('assets/images/bangkit.jpg')?>" class="lazyload" alt="Image" />
              </a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>Digitalization</h3>
                    <p class="post-meta">Sukabumi Creative Hub <span class="small">&bullet;</span> Feb 2024</p>
                  </div>
                </div>
                <img src="<?=base_url('assets/images/sch-1.jpg')?>" class="lazyload" alt="Image" />
              </a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>Staff of Pengembangan Sumber Daya Mahasiswa</h3>
                    <p class="post-meta">BEM Fakultas Sains & Teknologi <span class="small">&bullet;</span> Oct 2022 - Sep 2023</p>
                  </div>
                </div>
                <img src="<?=base_url('assets/images/bem-saintek.jpg')?>" class="lazyload" alt="Image" />
              </a>

            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>Chief Executive</h3>
                    <p class="post-meta">Thirteen Festival 2022 <span class="small">&bullet;</span> Jun 2022 - Aug 2022</p>
                  </div>
                </div>
                <img src="<?=base_url('assets/images/thirteen-fest.jpg')?>" class="lazyload" alt="Image" />
              </a>
            </div>
          </div>

        </div>
      </div>
      <!-- END blog posts -->


      <div class="unslate_co--section" id="contact-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Get In Touch</span></h2>
            <span class="gsap-reveal"><img src="<?=base_url('assets/images/divider.png')?>" alt="divider" width="76"></span>
          </div>


          <div class="row justify-content-between">
            
            <div class="col-md-6">
              <form method="post" class="form-outline-style-v1" id="contactForm">
                <div class="form-group row mb-0">

                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                  </div>
                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                  </div>
                  <div class="col-lg-12 form-group gsap-reveal">
                    <label for="message">Write your message...</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row gsap-reveal">
                    <div class="col-md-12 d-flex align-items-center">
                      <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="Send Message">
                      <span class="submitting"></span>
                    </div>
                  </div>
              </form>
              <div id="form-message-warning" class="mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>

            <div class="col-md-4">
              <div class="contact-info-v1">
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Email</span>
                  <a href="#" class="contact-info-val">rizanursyah02@gmail.com</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Phone</span>
                  <a href="#" class="contact-info-val">+62 895 1660 3147</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Address</span>
                  <address class="contact-info-val">Bumi Cisaat Pratama <br> Sukabumi, Jawa Barat 43152</address>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      </div> <!-- END .unslate_co-site-inner -->

      <footer class="unslate_co--footer unslate_co--section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7">
              
              <div class="footer-site-logo"><a href="#">Riza<span>.</span></a></div>

              <ul class="footer-site-social">
                <li><a href="https://x.com/lumeezyy">Twitter</a></li>
                <li><a href="https://www.linkedin.com/in/riza-nursyah-31a6a7221/">LinkedIn</a></li>
                <li><a href="https://github.com/rizanss">Github</a></li>
                <li><a href="https://web.facebook.com/riza.nursyah.7">Facebook</a></li>
              </ul>

              <p class="site-copyright">
                
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | Designed by <a href="https://www.linkedin.com/in/riza-nursyah-31a6a7221/" target="_blank">Riza Nursyah</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              
              </p>

            </div>
          </div>
        </div>
      </footer>

    <!-- Loader -->
    <div id="unslate_co--overlayer"></div>
    <div class="site-loader-wrap">
      <div class="site-loader"></div>
    </div>

    <script src="<?=base_url('assets/js/scripts-dist.js')?>"></script>
    <script src="<?=base_url('assets/js/main.js')?>"></script>

  </body>
</html>