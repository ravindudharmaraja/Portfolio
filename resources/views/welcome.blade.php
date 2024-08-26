@extends('layouts.app')


<title>Home</title>

@section('content')
  <!-- app -->
  <div class="art-app">
    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>
    <!-- app wrapper -->
      <div class="art-app-wrapper">
      <!-- app container end -->
        <div class="art-app-container">
        <!-- info bar -->
        @include('components.infobar')        
        <!-- info bar end -->
          <!-- content -->
          <div class="art-content">
            <!-- curtain -->
            <div class="art-curtain"></div>
              <!-- top background -->
              <div class="art-top-bg" style="background-image: url(img/bg.jpg)">
              <!-- overlay -->
                <div class="art-top-bg-overlay"></div>
              <!-- overlay end -->
            </div>
          <!-- top background end -->

          <!-- swup container -->
          <div class="transition-fade" id="swup">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame">

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- banner -->
                    <div class="art-a art-banner" style="background-image: url(img/bg.jpg)">
                      <!-- banner back -->
                      <div class="art-banner-back"></div>
                      <!-- banner dec -->
                      <div class="art-banner-dec"></div>
                      <!-- banner overlay -->
                      <div class="art-banner-overlay">
                        <!-- main title -->
                        <div class="art-banner-title">
                          <!-- title -->
                          <h1 class="mb-15">Explore My Innovative <br>Coding Odyssey!</h1>
                          <!-- suptitle -->
                          <div class="art-lg-text art-code mb-25">
                            &lt;<i>code</i>&gt; I craft <span class="txt-rotate" data-period="2000"
                            data-rotate='[ "responsive websites", "iOS and Android apps", "unique logos", "and much more" ]'></span>&lt;/<i>code</i>&gt;
                          </div>
                          <div class="art-buttons-frame">
                            <!-- button -->
                            <a href="/portfolio" class="art-btn art-btn-md"><span>Explore now</span></a>
                          </div>
                        </div>
                        <!-- main title end -->
                        <!-- photo -->
                        <img src="img/face-2.png" class="art-banner-photo" alt="Dharmaraja">
                      </div>
                      <!-- banner overlay end -->
                    </div>
                    <!-- banner end -->

                  </div>
                  <!-- col end -->
                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-md-3 col-6">

                    <!-- couner frame -->
                    <div class="art-counter-frame">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">3</span><span class="art-counter-plus">+</span>
                      </div>
                      <!-- counter end -->
                      <!-- title -->
                      <h6>Years Experience</h6>
                    </div>
                    <!-- couner frame end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-md-3 col-6">

                    <!-- couner frame -->
                    <div class="art-counter-frame">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">21</span><span class="art-counter-plus">+</span>
                      </div>
                      <!-- counter end -->
                      <!-- title -->
                      <h6>Completed Projects</h6>
                    </div>
                    <!-- couner frame end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-md-3 col-6">

                    <!-- couner frame -->
                    <div class="art-counter-frame">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">10</span><span class="art-counter-plus">+</span>
                      </div>
                      <!-- counter end -->
                      <!-- title -->
                      <h6>Happy Customers</h6>
                    </div>
                    <!-- couner frame end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-md-3 col-6">

                    <!-- couner frame -->
                    <div class="art-counter-frame">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">2</span><span class="art-counter-plus">+</span>
                      </div>
                      <!-- counter end -->
                      <!-- title -->
                      <h6>Honors and Awards</h6>
                    </div>
                    <!-- couner frame end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>My Services</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Web Development</h5>
                        <!-- text -->
                        <div class="mb-15">
                          <p id="service-description">
                            I am a professional web developer with 2+ years of experience. I specialize in building custom, user-friendly websites that help businesses achieve their online goals. Whether you need a simple brochure site, an e-commerce platform, or a complex web application, I have the skills and expertise to bring your vision to life.
                          </p>
                          <div id="read-more-content" style="display: none;">
                            With a strong understanding of modern web technologies, such as HTML, CSS, JavaScript, and PHP, I can create websites that are fast, responsive, and accessible to all users. I also have experience working with a variety of popular content management systems, such as WordPress, Shopify, and Magento, and I can help you choose the right platform for your needs.
                            <br><br>
                            I am passionate about delivering high-quality work that meets the needs of my clients, and I am committed to providing excellent customer service and ongoing support. If you are looking for a reliable and experienced web developer, I would be happy to discuss your project with you and see how I can help.
                            <br><br>
                          </div>
                          <a href="#" id="read-more-button" class="art-link art-color-link art-w-chevron">Read more</a>
                        </div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">
                    <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Mobile App Design</h5>
                        <!-- text -->
                        <div class="mb-15">
                          <p id="mobile-app-description">
                            I am a professional mobile app designer with 1+ years of experience. I help businesses create engaging, user-friendly mobile experiences that meet the needs of their users and drive results. With a deep understanding of design principles, mobile design trends, and user experience, I create mobile apps
                          </p>
                          <div id="read-more-mobile-app-content" style="display: none;">
                            that are intuitive and aesthetically pleasing, while also delivering the functionality that users need. I use a combination of research, prototyping, and testing to validate my designs and ensure that they meet the needs of the target audience.
                            <br><br>
                            Whether you need a new app for iOS or Android, or a redesign of an existing app, I can help you create a design that is both functional and beautiful. I am proficient in a range of design tools, including Adobe XD, Sketch, and Figma, and I have experience working with a variety of industries, from startups to large corporations.
                            <br><br>
                            I am passionate about creating mobile apps that solve problems and enhance the user experience, and I am committed to delivering high-quality work that meets the needs of my clients. If you are looking for a talented mobile app designer, I would be happy to discuss your project with you and see how I can help.
                            <br><br>
                          </div>
                          <a href="#" id="read-more-mobile-app-button" class="art-link art-color-link art-w-chevron">Read more</a>
                        </div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                   <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Graphic Design</h5>
                        <!-- text -->
                        <div class="mb-15">
                          <p id="graphic-description">
                            I am a professional graphic designer with 5+ years of experience. I help businesses communicate their brand message and connect with their audience through visually impactful designs. With a strong eye for detail and a passion for creativity, I bring a unique perspective and skill set to every project I work on.
                          </p>
                          <div id="read-more-graphic-content" style="display: none;">
                            From logos and marketing materials to websites and packaging, I create designs that are both aesthetically pleasing and effective in achieving the client's goals.
                            <br><br>
                            I have experience working with a variety of industries, from startups to established companies, and I am proficient in a range of design software, including Adobe Creative Suite, Sketch, and Canva. Whether you need a one-time design project or ongoing support, I can help you create designs that set you apart and help you stand out in your industry.
                            <br><br>
                            I am committed to delivering high-quality work that meets the needs of my clients, and I am passionate about helping businesses achieve their marketing and branding goals. If you are looking for a talented graphic designer, I would be happy to discuss your project with you and see how I can help.
                            <br><br>
                          </div>
                          <a href="#" id="read-more-graphic-button" class="art-link art-color-link art-w-chevron">Read more</a>
                        </div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                   <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">UI/UX Design</h5>
                        <!-- text -->
                        <div class="mb-15">
                          <p id="uiux-description">
                            I am a professional UI/UX designer with 2+ years of experience. I help businesses create engaging, user-friendly digital experiences that meet the needs of their users and drive results. With a deep understanding of design principles and a keen eye for detail, I create intuitive and aesthetically pleasing interfaces that are easy to use 
                          </p>
                          <div id="read-more-uiux-content" style="display: none;">
                            and navigate. I use a combination of research, prototyping, and testing to validate my designs and ensure that they meet the needs of the target audience.
                            <br><br>
                            Whether you need a new website, a mobile app, or a software product, I can help you create a design that is both functional and beautiful. I am proficient in a range of design tools, including Adobe XD, Sketch, and Figma, and I have experience working with a variety of industries, from startups to large corporations.
                            <br><br>
                            I am passionate about creating designs that solve problems and enhance the user experience, and I am committed to delivering high-quality work that meets the needs of my clients. If you are looking for a talented UI/UX designer, I would be happy to discuss your project with you and see how I can help.
                            <br><br>
                          </div>
                          <a href="#" id="read-more-uiux-button" class="art-link art-color-link art-w-chevron">Read more</a>
                        </div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4 col-md-6">

                   <!-- service -->
                    <div class="art-a art-service-icon-box">
                      <!-- service content -->
                      <div class="art-service-ib-content">
                        <!-- title -->
                        <h5 class="mb-15">Advertising</h5>
                        <!-- text -->
                        <div class="mb-15">
                          <p id="advertising-description">
                            I am a professional advertiser with 2+ years of experience. I help businesses create effective advertising campaigns that reach their target audience and drive results. With a deep understanding of advertising principles and a data-driven approach, I develop advertising strategies that reach the right people
                          </p>
                          <div id="read-more-advertising-content" style="display: none;">
                            at the right time with the right message. I use a combination of market research, creative brainstorming, and testing to create campaigns that resonate with the target audience and deliver real results.
                            <br><br>
                            Whether you need a new advertising campaign for print, digital, or social media, I can help you create a strategy that meets your goals and exceeds your expectations. I have experience working with a variety of industries, from startups to large corporations, and I am proficient in a range of advertising platforms.
                            <br><br>
                            I am passionate about helping businesses succeed through effective advertising, and I am committed to delivering high-quality work that meets the needs of my clients. If you are looking for a talented advertiser, I would be happy to discuss your project with you and see how I can help.
                            <br><br>
                          </div>
                          <a href="#" id="read-more-advertising-button" class="art-link art-color-link art-w-chevron">Read more</a>
                        </div>
                      </div>
                      <!-- service content end -->
                    </div>
                    <!-- service end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              
             
              <!-- <div class="container-fluid">
                <div class="row p-0-0">
                  <div class="col-lg-12">
                    <div class="art-section-title">
                      <div class="art-title-frame">
                        <h4>Price Plans</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="art-a art-price">
                      <div class="art-price-body">
                        <h5 class="mb-30">Starter Price</h5>
                        <div class="art-price-cost">
                          <div class="art-number">FREE<sup>*</sup></div>
                        </div>
                        <ul class="art-price-list">
                          <li>Ui Design</li>
                          <li>Web Development</li>
                          <li class="art-empty-item">Logo design</li>
                          <li class="art-empty-item">SEO optimization</li>
                          <li class="art-empty-item">Laravel Full Project</li>
                        </ul>
                        <a href="/contact.html" class="art-link art-color-link art-w-chevron">Order now</a>
                        <div class="art-asterisk"><sup>*</sup>Free only when ordering paid services</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="art-a art-price art-popular-price">
                      <div class="art-price-body">
                        <h5 class="mb-30">Hourly payment</h5>
                        <div class="art-price-cost">
                          <div class="art-number"><span>LKR</span>1000<span>h</span></div>
                        </div>
                        <ul class="art-price-list">
                          <li>Ui Design</li>
                          <li>Web Development</li>
                          <li>Logo design</li>
                          <li class="art-empty-item">SEO optimization</li>
                          <li class="art-empty-item">Laravel Full Project</li>
                        </ul>
                        <a href="/contact.html" class="art-link art-color-link art-w-chevron">Order now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="art-a art-price">
                      <div class="art-price-body">
                        <h5 class="mb-30"> Full time</h5>
                        <div class="art-price-cost">
                          <div class="art-number"><span>LKR</span>50 000<span>m</span></div>
                        </div>
                        <ul class="art-price-list">
                          <li>Ui Design</li>
                          <li>Web Development</li>
                          <li>Logo design</li>
                          <li>SEO optimization</li>
                          <li>Laravel Full Project</li>
                        </ul>
                        <a href="/contact" class="art-link art-color-link art-w-chevron">Order now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              


              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Recommendations</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- slider container -->
                    <div class="swiper-container art-testimonial-slider" style="overflow: visible">
                      <!-- slider wrapper -->
                      <div class="swiper-wrapper">
                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/face-3.jpg" alt="face">
                              <!-- name -->
                              <h5>Choicest Develop</h5>
                              <div class="art-el-suptitle mb-15">Fiverr</div>
                              <!-- text -->
                              <div class="mb-15">"He is a very skillfull person. He did exactly what I said. He met my requirements and gave me the exact product. I would highly recommend him."<br></div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                                <!-- star rate -->
                                <ul class="art-star-rate">
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                </ul>
                                <!-- star rate end -->
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->
                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/face-1.jpg" alt="face">
                              <!-- name -->
                              <h5>Mr. Neranjana Wishmewan</h5>
                              <div class="art-el-suptitle mb-15">External Channel Manager</div>
                              <!-- text -->
                              <div class="mb-15">"The website design is exactly what I was hoping for. The colors and images you chose perfectly capture the essence of our brand."</div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                                <!-- star rate -->
                                <ul class="art-star-rate">
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                </ul>
                                <!-- star rate end -->
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/face-2.jpg" alt="face">
                              <!-- name -->
                              <h5>Ravindu Dhananjaya</h5>
                              <div class="art-el-suptitle mb-15">Lex Solution Founder</div>
                              <!-- text -->
                              <div class="mb-15">"The website is incredibly user-friendly and easy to navigate. I appreciate the attention to detail and the clean, organized layout."<br></div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                                <!-- star rate -->
                                <ul class="art-star-rate">
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li class="art-empty-item"><i class="fas fa-star"></i></li>
                                </ul>
                                <!-- star rate end -->
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                        <!-- slide -->
                        <div class="swiper-slide">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/face-4.jpg" alt="face">
                              <!-- name -->
                              <h5>Taylor Davis</h5>
                              <div class="art-el-suptitle mb-15">Fiverr</div>
                              <!-- text -->
                              <div class="mb-15">"He completed the job very fast. I highly recommend him. A + + + + +"<br><br></div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                                <!-- star rate -->
                                <ul class="art-star-rate">
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                </ul>
                                <!-- star rate end -->
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- slide end -->

                      </div>
                      <!-- slider wrapper end -->
                    </div>
                    <!-- slider container end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- slider navigation -->
                    <div class="art-slider-navigation">

                      <!-- left side -->
                      <div class="art-sn-left">

                        <!-- slider pagination -->
                        <div class="swiper-pagination"></div>

                      </div>
                      <!-- left side end -->

                      <!-- right side -->
                      <div class="art-sn-right">

                        <!-- slider navigation -->
                        <div class="art-slider-nav-frame">
                          <!-- prev -->
                          <div class="art-slider-nav art-testi-swiper-prev"><i class="fas fa-chevron-left"></i></div>
                          <!-- next -->
                          <div class="art-slider-nav art-testi-swiper-next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                        <!-- slider navigation -->

                      </div>
                      <!-- right side end -->

                    </div>
                    <!-- slider navigation end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-6 col-lg-2">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/1.png" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-2">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/5.png" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-2">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/4.png" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-2">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/2.png" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-2">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/6.png" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-2">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/3.png" alt="brand">
                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- footer -->

                @include('components.footer')

                <!-- footer end -->

              </div>
              <!-- container end -->

            </div>
            <!-- scroll frame end -->

          </div>
          <!-- swup container end -->

        </div>
        <!-- content end -->

        <!-- menu end -->

            @include ('components.manu')

        <!-- menu end -->

            </div>
            <!-- scroll frame end -->

          </div>
          <!-- menu bar frame -->

        </div>
        <!-- menu bar end -->

      </div>
      <!-- app container end -->

    </div>
    <!-- app wrapper end -->

    <!-- preloader -->
    @include('components.preloader')
    <!-- preloader end -->

  </div>
  <!-- app end -->
  @endsection		