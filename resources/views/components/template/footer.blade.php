 <footer
      class="footer-wrapper mt-10 footer-layout7"
      data-bg-src="{{ asset('images/footer/one.jpg')}}"
    >
      <div class="widget-area space-top">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-6 col-xl-3">
              <div class="widget footer-widget">
                <div class="th-widget-about">
                  <div class="about-logo">
                    <x-application-logo/>
                  </div>
                  <p class="about-text">
                    Quickly supply alternative strategic theme areas vis-a-vis
                    B2C mindshare. Objectively repurpose architectures.
                  </p>
                  <div class="th-social">
                    <a href="https://www.facebook.com/"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a href="https://www.twitter.com/"
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a href="https://www.instagram.com/"
                      ><i class="fab fa-instagram"></i
                    ></a>
                    <a href="https://www.linkedin.com/"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-auto">
              <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">QUICK LINKS</h3>
                <div class="menu-all-pages-container">
                  <ul class="menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="service.html">Projects</a></li>
                    <li><a href="project.html">Commitee</a></li>
                    <li><a href="blog.html">Blog Post</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-auto">
              {{-- <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">SERVICES</h3>
                <div class="menu-all-pages-container">
                  <ul class="menu">
                    <li><a href="service.html">Building Construction</a></li>
                    <li><a href="service.html">Projects Plannings</a></li>
                    <li><a href="service.html">Interior Developments</a></li>
                    <li><a href="project.html">Virtual design & build</a></li>
                    <li><a href="project.html">Petroleum Oil & Gas</a></li>
                  </ul>
                </div>
              </div> --}}
            </div>
            <div class="col-md-6 col-xl-auto">
              {{-- <div class="widget newsletter-widget footer-widget">
                <h3 class="widget_title">Subscribe</h3>
                <p class="footer-text">
                  Subscribe For Our Latest News & Articles.
                </p>
                <form class="newsletter-form">
                  <input
                    class="form-control"
                    type="email"
                    placeholder="Enter Email"
                    required=""
                  />
                  <button type="submit" class="th-btn style5">
                    <i class="fas fa-paper-plane ms-1"></i>
                  </button>
                </form>
                <div
                  class="bg-shape"
                  data-bg-src="assets/img/update1/bg/bg_pattern_1.png"
                ></div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-wrap">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
              <p class="copyright-text">
                Copyright <i class="fal fa-copyright"></i> {{ date('Y') }}
                <a href="{{ route('welcome') }}"">Irelief</a>.
                All Rights Reserved.
              </p>
            </div>
            <div class="col-lg-6 text-end d-none d-lg-block">
              <div class="footer-links">
                <ul>
                  <li><a href="about.html">Privacy Policy</a></li>
                  <li><a href="about.html">Terms of Use</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
