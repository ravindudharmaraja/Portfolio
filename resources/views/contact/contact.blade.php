@extends('layouts.app')


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
          <div class="transition-fade" id="swup" data-swup="0">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">

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
                        <h4>Contact information</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->
                  <!-- col -->
                  <div class="col-lg-4">
                    <!-- contact card -->
                    <div class="art-a art-card">
                      <div class="art-table p-15-15">
                        <ul>
                          <li>
                            <h6>Country:</h6><span>Sri Lanka</span>
                          </li>
                          <li>
                            <h6>City:</h6><span>Balangoda</span>
                          </li>

                          <li>
                            <h6>Streat:</h6><span>Medabedda, Kalthota</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- contact card end -->
                  </div>
                  <!-- col end -->
                  <!-- col -->
                  <div class="col-lg-5">
                    <!-- contact card -->
                    <div class="art-a art-card">
                      <div class="art-table p-15-15">
                        <ul>
                          <li>
                            <h6>Email:</h6><span>ravindudharmaraja00@gmail.com</span>
                          </li>
                          <li>
                            <h6>Telephone:</h6><span>+94 78 737 9991</span>
                          </li>
                          <li>
                            <h6>Skype:</h6><span>live:.cid.10ee41ac49cc6fd4</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- contact card end -->
                  </div>
                  <!-- col end -->
                  <!-- contact card end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Get in touch</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- contact form frame -->
                    <div class="art-a art-card">

                      <!-- contact form -->
                      <form id="form" class="art-contact-form">
                        <!-- form field -->
                        <div class="art-form-field">
                          <!-- name input -->
                          <input id="name" name="name" class="art-input" type="text" placeholder="Name" required="">
                          <!-- label -->
                          <label for="name"><i class="fas fa-user"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- form field -->
                        <div class="art-form-field">
                          <!-- email input -->
                          <input id="email" name="email" class="art-input" type="email" placeholder="Email" required="">
                          <!-- label -->
                          <label for="email"><i class="fas fa-at"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- form field -->
                        <div class="art-form-field">
                          <!-- message textarea -->
                          <textarea id="message" name="text" class="art-input" placeholder="Message" required=""></textarea>
                          <!-- label -->
                          <label for="message"><i class="far fa-envelope"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- button -->
                        <div class="art-submit-frame">
                          <button class="art-btn art-btn-md art-submit" type="submit"><span>Send message</span></button>
                          <!-- success -->
                          <div class="art-success">Success <i class="fas fa-check"></i></div>
                        </div>
                      </form>
                      <!-- contact form end -->

                    </div>
                    <!-- contact form frame end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              

              <!-- footer -->
              @include('components.footer')
              <!-- footer end -->

            </div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 547px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 346.219px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
            <!-- scroll frame end -->

          </div>
          <!-- swup container end -->

        </div>
        <!-- content end -->
        <div class="art-current-page"><a href="">History</a></div>

        <!-- menu bar -->
        @include('components.manu')
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

  