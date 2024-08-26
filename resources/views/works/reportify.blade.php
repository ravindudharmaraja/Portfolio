@extends('layouts.app')

<title>portfolio</title>
<style id="smooth-scrollbar-style">
[data-scrollbar] {
  display: block;
  position: relative;
}

.scroll-content {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}

.scrollbar-track {
  position: absolute;
  opacity: 0;
  z-index: 1;
  background: rgba(222, 222, 222, .75);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -webkit-transition: opacity 0.5s 0.5s ease-out;
          transition: opacity 0.5s 0.5s ease-out;
}
.scrollbar-track.show,
.scrollbar-track:hover {
  opacity: 1;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}

.scrollbar-track-x {
  bottom: 0;
  left: 0;
  width: 100%;
  height: 8px;
}
.scrollbar-track-y {
  top: 0;
  right: 0;
  width: 8px;
  height: 100%;
}
.scrollbar-thumb {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 8px;
  background: rgba(0, 0, 0, .5);
  border-radius: 4px;
}
</style></head>

<body>

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


          <div class="transition-fade" id="swup" data-swup="0">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content" style="transform: translate3d(0px, 0px, 0px);">

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Project Reportify</h4>
                      </div>
                      <!-- title frame end -->
                      <!-- right frame -->
                      <div class="art-right-frame">
                        <div class="art-project-category">Ui Design, Graphic</div>
                      </div>
                      <!-- right frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- slider container -->
                    <div class="swiper-container art-works-slider swiper-container-horizontal" style="overflow: visible">
                      <!-- slider wrapper -->
                      <div class="swiper-wrapper" style="transform: translate3d(-1332px, 0px, 0px); transition-duration: 0ms;">
                        <!-- slide -->
                        <div class="swiper-slide" style="width: 414px; margin-right: 30px;">
                          <!-- item frame -->
                          <a data-fancybox="gallery" href="{{ asset('img/works/thumbnail/1.jpg') }}" class="art-a art-portfolio-item-frame art-horizontal">
                            <!-- img -->
                            <img src="{{ asset('img/works/thumbnail/1.jpg') }}" alt="item">
                            <!-- zoom icon -->
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                          </a>
                          <!-- item end -->
                        </div>
                        <!-- slide end -->
                        <!-- slide -->
                        <div class="swiper-slide" style="width: 414px; margin-right: 30px;">
                          <!-- item frame -->
                          <a data-fancybox="gallery" href="{{ asset('img/works/thumbnail/1.jpg') }}" class="art-a art-portfolio-item-frame art-horizontal">
                            <!-- img -->
                            <img src="{{ asset('img/works/thumbnail/1.jpg') }}" alt="item">
                            <!-- zoom icon -->
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                          </a>
                          <!-- item end -->
                        </div>
                        <!-- slide end -->
                        <!-- slide -->
                        <div class="swiper-slide swiper-slide-prev" style="width: 414px; margin-right: 30px;">
                          <!-- item frame -->
                          <a data-fancybox="gallery" href="{{ asset('img/works/thumbnail/1.jpg') }}" class="art-a art-portfolio-item-frame art-horizontal">
                            <!-- img -->
                            <img src="{{ asset('img/works/thumbnail/1.jpg') }}" alt="item">
                            <!-- zoom icon -->
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                          </a>
                          <!-- item end -->
                        </div>
                        <!-- slide end -->
                        <!-- slide -->
                        <div class="swiper-slide swiper-slide-active" style="width: 414px; margin-right: 30px;">
                          <!-- item frame -->
                          <a data-fancybox="gallery" href="{{ asset('img/works/thumbnail/1.jpg') }}" class="art-a art-portfolio-item-frame art-horizontal">
                            <!-- img -->
                            <img src="{{ asset('img/works/thumbnail/1.jpg') }}" alt="item">
                            <!-- zoom icon -->
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                          </a>
                          <!-- item end -->
                        </div>
                        <!-- slide end -->
                        <!-- slide -->
                        <div class="swiper-slide swiper-slide-next" style="width: 414px; margin-right: 30px;">
                          <!-- item frame -->
                          <a data-fancybox="gallery" href="{{ asset('img/works/thumbnail/1.jpg') }}" class="art-a art-portfolio-item-frame art-horizontal">
                            <!-- img -->
                            <img src="{{ asset('img/works/thumbnail/1.jpg') }}" alt="item">
                            <!-- zoom icon -->
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                          </a>
                          <!-- item end -->
                        </div>
                        <!-- slide end -->
                      </div>
                      <!-- slider wrapper end -->
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
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
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>

                      </div>
                      <!-- left side end -->

                      <!-- right side -->
                      <div class="art-sn-right">

                        <!-- slider navigation -->
                        <div class="art-slider-nav-frame">
                          <!-- prev -->
                          <div class="art-slider-nav art-works-swiper-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"><i class="fas fa-chevron-left"></i></div>
                          <!-- next -->
                          <div class="art-slider-nav art-works-swiper-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"><i class="fas fa-chevron-right"></i></div>
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
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Project details</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-8">

                    <div class="art-a art-card art-fluid-card">
                      <h5 class="mb-15">Description</h5>
                      <div class="mb-15">The objective of this project was to design and develop "Reportify", a sales recording application that allows users to enter their daily sales and visit data. The application provides a user-friendly interface for regular users and a high level of access for administrators to manage and analyze sales and view information. The primary goal was to streamline the sales recording process and enable data-driven decision making for businesses</div>
                      <!-- button -->
                      <!-- <div class="art-buttons-frame"><a href="https://www.behance.net/gallery/83236527/VIE" class="art-link art-color-link art-w-chevron" target="_blank">Read More</a></div> -->
                    </div>

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-4">

                    <div class="art-a art-card">
                      <!-- table -->
                      <div class="art-table p-15-15">
                        <ul>
                          <li>
                            <h6>Order Date:</h6><span>08.02.2023</span>
                          </li>
                          <li>
                            <h6>Final Date:</h6><span>12.08.2020</span>
                          </li>
                          <li>
                            <h6>Status:</h6><span>Completed</span>
                          </li>
                          <li>
                            <h6>Client:</h6><span>Sri Lanka Telecome</span>
                          </li>
                          <li>
                            <h6>Location:</h6><span><a href="https://maps.app.goo.gl/611YbspxNQ9oPiGj6" target="_blank">Rathnapura, Sri Lanka</a></span>
                          </li>
                        </ul>
                      </div>
                      <!-- table end -->
                    </div>

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
                        <h4>Client reviews</h4>
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
                              <img class="art-testimonial-face" src="{{ asset('img/testimonials/face-1.jpg') }}" alt="face">
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

                      </div>
                      <!-- slider wrapper end -->
                    </div>
                    <!-- slider container end -->

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
                    <div class="art-counter-frame" style="opacity: 1;">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter" style="opacity: 1;">10</span><span class="art-counter-plus">+</span>
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
                    <div class="art-counter-frame" style="opacity: 1;">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter" style="opacity: 1;">143</span>
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
                    <div class="art-counter-frame" style="opacity: 1;">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter" style="opacity: 1;">114</span>
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
                    <div class="art-counter-frame" style="opacity: 1;">
                      <!-- counter -->
                      <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter" style="opacity: 1;">20</span><span class="art-counter-plus">+</span>
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

                    <!-- call to action -->
                    <div class="art-a art-banner" style="background-image: {{ asset('img/bg.jpg') }}">
                      <!-- overlay -->
                      <div class="art-banner-overlay">
                        <!-- main title -->
                        <div class="art-banner-title text-center">
                          <!-- title -->
                          <h1 class="mb-15">Ready to order your project?</h1>
                          <!-- suptitle -->
                          <div class="art-lg-text art-code mb-25">Let's work together!</div>
                          <!-- button -->
                          <a href="/contact" class="art-btn art-btn-md"><span>Contact me</span></a>
                        </div>
                        <!-- main title end -->
                      </div>
                      <!-- overlay end -->
                    </div>
                    <!-- call to action end  -->

                    <!-- projects navigation -->
                    <div class="art-a art-pagination">
                      <!-- button -->
                      <a href="/portfolio-single-2.html" class="art-link art-color-link art-w-chevron art-left-link"><span>Previous project</span></a>
                      <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="/portfolio">All projects</a>
                      </div>
                      <!-- button -->
                      <a href="/portfolio-single-2.html" class="art-link art-color-link art-w-chevron"><span>Next project</span></a>
                    </div>
                    <!-- projects navigation end -->

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
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="{{ asset('img/brands/1.png') }}" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="{{ asset('img/brands/2.png') }}" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="{{ asset('img/brands/3.png') }}" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="{{ asset('img/brands/4.png') }}" alt="brand">
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


            </div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 918px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 62.8599px; transform: translate3d(0px, 0px, 0px); transform-origin: center top;"></div></div></div>
            <!-- scroll frame end -->

          </div>

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

  