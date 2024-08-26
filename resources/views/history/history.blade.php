@extends('layouts.app')

<title>History</title>

  <!-- app -->
  <div class="art-app">

    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

      <!-- app container end -->
      <div class="art-app-container">
        <!-- info-bar -->
        @include('components.infobar')
        <!-- infobar end -->

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
          <div class="transition-fade" id="swup" data-swup="0">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-lg-6">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Education</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- timeline -->
                    <div class="art-timeline art-gallery">
                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Sri Lanka International Buddhist Acadamy</h5>
                              <div class="art-el-suptitle mb-15">Graduate</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Jan 2020 - May 2023</span>
                            </div>
                          </div>

                          <p>I am a BSc IT graduate from SIBA Campus, with a passion for technology and a strong foundation in information technology. During my time at SIBA Campus, I gained a solid understanding of programming languages, database management, web development, and other IT-related concepts. I also had the opportunity to work on various group projects and assignments, which improved my communication, collaboration, and problem-solving skills. Through my education and hands-on experience, I have developed a keen eye for detail and a strong ability to analyze complex problems, which I bring to my work as a web developer and mobile application developer</p>
                          <a data-fancybox="diplome" href="files/certificate.jpg" class="art-link art-color-link art-w-chevron">Degree</a>
                        </div>
                      </div>

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <!-- <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Arter design school</h5>
                              <div class="art-el-suptitle mb-15">Student</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">jan 2018 - may 2020</span>
                            </div>
                          </div>
                          <div>Consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</div>
                        </div> -->
                      </div>

                      <!-- <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Web developer courses</h5>
                              <div class="art-el-suptitle mb-15">Student</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">jan 2020 - present</span>
                            </div>
                          </div>
                          <p>As a lifelong learner, I am committed to staying up-to-date with the latest technologies and industry best practices. I have completed several online courses to further develop my skills in web development, mobile application development, and other IT-related fields. Some of the courses I have completed include [list of courses], which have provided me with valuable insights and practical knowledge that I have been able to apply to my work. Through these courses, I have learned new programming languages, frameworks, and design patterns, and I have also improved my problem-solving and critical thinking skills. I am always looking for new learning opportunities and ways to expand my knowledge and expertise</p>
                          <a data-fancybox="diplome" href="files/certificate.jpg" class="art-link art-color-link art-w-chevron">Licence</a>
                        </div>

                      </div> -->
                      <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Certificate</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>
                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Full-Stack Web Developer</h5>
                              <div class="art-el-suptitle mb-15">LinkedIn</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Jan 2023 - Jan 2023</span>
                            </div>
                          </div>
                          <p>Web Development, Full-Stack Development, Back-End Development, Software Development, Front-End Development</p>
                          <a data-fancybox="diplome" href="files/certificate.jpg" class="art-link art-color-link art-w-chevron">Certificate</a>
                        </div>
                      </div>

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>
                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Learning REST APIs</h5>
                              <div class="art-el-suptitle mb-15">LinkedIn</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Feb 2023 - Feb 2023</span>
                            </div>
                          </div>
                          <p>Understanding REST Principles, HTTP Protocol, API Endpoints, Authentication and Authorization, Data Formats, Testing APIs</p>
                          <a data-fancybox="diplome" href="files/certificate3.png", class="art-link art-color-link art-w-chevron">Certificate</a>
                        </div>
                      </div>

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>
                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Learning ECMAScript 6+ (ES6+)</h5>
                              <div class="art-el-suptitle mb-15">LinkedIn</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Feb 2023 - Feb 2023</span>
                            </div>
                          </div>
                          <p>Default Parameters, Classes and Inheritance, Modules, Async/Await, Iterators and Generators, Map and Set Collections, ES6+ Modules, Tooling and Package Management</p>
                          <a data-fancybox="diplome" href="files/certificate3.png", class="art-link art-color-link art-w-chevron">Certificate</a>
                        </div>
                      </div>

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>
                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Git Essential Training</h5>
                              <div class="art-el-suptitle mb-15">LinkedIn</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Jan 2022 - May 2023</span>
                            </div>
                          </div>
                          <p>Git Fundamentals, Version Control, Branching and Merging, Troubleshooting</p>
                          <a data-fancybox="diplome" href="files/certificate2.png" class="art-link art-color-link art-w-chevron">Certificate</a>
                          <a data-fancybox="diplome" href="files/certificate7.png" ></a>
                          <a data-fancybox="diplome" href="files/certificate8.png" ></a>
                          <a data-fancybox="diplome" href="files/certificate9.png" ></a>
                        </div>
                      </div>
                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>
                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Other Certificate</h5>
                              <div class="art-el-suptitle mb-15">Cousera, Udemy, HackerRsnk, LinkedIn, Sololearn</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Jan 2022 - Aug 2023</span>
                            </div>
                          </div>
                          <p>Cybersecurity foundations, Colud Computing, DevOps, SQL, React.js, Search Techniques, Game Development, Angular + NestJS, WordPress</p>
                          <a data-fancybox="diplome" href="files/certificate1.png" class="art-link art-color-link art-w-chevron">Certificate</a>
                          <a data-fancybox="diplome" href="files/certificate2.png" ></a>
                          <a data-fancybox="diplome" href="files/certificate6.png" ></a>
                          <a data-fancybox="diplome" href="files/certificate7.png" ></a>
                          <a data-fancybox="diplome" href="files/certificate8.png" ></a>
                          <a data-fancybox="diplome" href="files/certificate8.png" ></a>
                          <a data-fancybox="diplome" href="files/certificate9.png" ></a>
                          <a data-fancybox="diplome" href="files/certificate10.png" ></a>
                          <a data-fancybox="diplome" href="files/certificate11.jpg" ></a>
                          <a data-fancybox="diplome" href="files/certificate12.jpg" ></a>
                          <a data-fancybox="diplome" href="files/certificate13.jpg" ></a>
                          <a data-fancybox="diplome" href="files/certificate14.jpg" ></a>
                          <a data-fancybox="diplome" href="files/certificate15.jpg" ></a>
                          <a data-fancybox="diplome" href="files/certificate16.jpg" ></a>
                        </div>
                      </div>

                      

                    </div>
                    <!-- timeline end -->

                  </div>
                  <div class="col-lg-6">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Work History</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- timeline -->
                    <div class="art-timeline">

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>


                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Sri Lanka Telecome</h5>
                              <div class="art-el-suptitle mb-15">Software Engineer</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Jan 2023 - Aug 2023</span>
                            </div>
                          </div>
                          <p>As a mobile application developer at Sri Lanka Telecom, I was responsible for designing and developing mobile applications for the company. I worked closely with product owners, business analysts, and designers to ensure that the applications were user-friendly, efficient, and effective. My role involved coding, testing, and debugging mobile applications for both Android and iOS platforms, as well as ensuring that the applications met the company's quality standards and complied with industry standards and best practices. I also provided technical support to users as needed and maintained and updated existing mobile applications.</p>
                          <a data-fancybox="recommendation" href="#art-recomendation-popup-1" class="art-link art-color-link art-w-chevron">Recommendation</a>

                        <!-- popup -->
                        <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-1">

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
                              <div class="mb-15">The App development is exactly what I was hoping for. The colors and images you chose perfectly capture the essence of our brand.</div>
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
                        <!-- popup end -->

                      </div>

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>


                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Lex Solution</h5>
                              <div class="art-el-suptitle mb-15">Assosiate Software Engineer</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Aug 2022 - Present</span>
                            </div>
                          </div>
                          <p>At Lex Solution, web developers are responsible for designing and developing custom websites and web applications that meet client requirements. They collaborate with designers and project managers to ensure that all web projects are delivered on time and to client specifications. Using modern web technologies such as HTML, CSS, JavaScript, and PHP, they implement and maintain web applications and websites, troubleshooting and fixing issues as needed. Web developers also ensure that all websites and web applications are responsive, mobile-friendly, and accessible to all users. They work with content management systems to create and manage websites and web applications and stay up-to-date with the latest industry trends and best practices.</p>
                          <a data-fancybox="recommendation" href="#art-recomendation-popup-2" class="art-link art-color-link art-w-chevron">Recommendation</a>
                        </div>

                        <!-- popup -->
                        <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-2">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/face-2.jpg" alt="face">
                              <!-- name -->
                              <h5>Mr. Ravindu Dhananjaya</h5>
                              <div class="art-el-suptitle mb-15">Lex Solution Founder</div>
                              <!-- text -->
                              <div class="mb-15">At Lex Solution, web developers are responsible for designing and developing custom websites and web applications that meet client requirements. They collaborate with designers and project managers to ensure that all web projects are delivered on time and to client specifications. Using modern web technologies such as HTML, CSS, JavaScript, and PHP, they implement and maintain web applications and websites, troubleshooting and fixing issues as needed. Web developers also ensure that all websites and web applications are responsive, mobile-friendly, and accessible to all users. They work with content management systems to create and manage websites and web applications and stay up-to-date with the latest industry trends and best practices.</div>
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
                        <!-- popup end -->

                      </div>

                      

                      </div>

                    </div>
                    <!-- timeline end -->

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


            </div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 547px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 221.171px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
            <!-- scroll frame end -->

          </div>
          <!-- swup container end -->

        </div>
        <!-- content end -->

        <!-- menu bar -->
        @include('components.manu')
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

