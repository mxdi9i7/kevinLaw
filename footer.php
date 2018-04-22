      <!-- Footer -->
      <footer>
        <div class="g-color-gray-dark-v3 g-py-60">
          <div class="container">
            <div class="logoContainer">
              <div class="imgContainer">
                  <img src="./assets/logo/Logo-04.png" alt="">
              </div>
              
              <ul class="list-inline mb-0">
                <li class="list-inline-item g-mr-10">
                  <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-default g-color-white g-theme-bg-gray-dark-v1 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="#!"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="list-inline-item g-mr-10">
                  <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-default g-color-white g-theme-bg-gray-dark-v1 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="#!"><i class="fa fa-wechat"></i></a>
                </li>
                <li class="list-inline-item g-mr-10">
                  <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-default g-color-white g-theme-bg-gray-dark-v1 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="#!"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-default g-color-white g-theme-bg-gray-dark-v1 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="#!"><i class="fa fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
            
          </div>
        </div>
      </footer>
      <!-- End Footer -->

      <a class="js-go-to rounded-0 u-go-to-v1" href="#!"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>
    
    <!-- JS Global Compulsory -->
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/jquery/jquery.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/popper.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/appear.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/slick-carousel/slick/slick.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/gmaps/gmaps.min.js"></script>

    <!-- JS Revolution Slider -->
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script src='https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/revolution-slider/revolution-addons/slicey/js/revolution.addon.slicey.min.js'></script>

    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

    <!-- JS Unify -->
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/hs.core.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/components/hs.header.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/helpers/hs.hamburgers.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/components/hs.scroll-nav.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/components/hs.carousel.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/components/gmap/hs.map.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      // initialization of google map
      function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
      }

      // initialization of revolution slider
      var tpj = jQuery,
        promoSlider;

      tpj(document).on('ready', function () {
        if (tpj('#promoSlider').revolution == undefined) {
          revslider_showDoubleJqueryError('#promoSlider');
        } else {
          promoSlider = tpj('#promoSlider').show().revolution({
            sliderType: 'hero',
            jsFileLocation: 'https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/revolution/js/',
            sliderLayout: 'fullwidth',
            dottedOverlay: 'none',
            delay: 9000,
            navigation: {},
            responsiveLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [600, 500, 400, 300],
            lazyType: 'none',
            parallax: {
              type: 'mouse',
              origo: 'slidercenter',
              speed: 2000,
              levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50]
            },
            shadow: 0,
            spinner: 'off',
            autoHeight: 'off',
            disableProgressBar: 'on',
            hideThumbsOnMobile: 'off',
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: 'off',
              disableFocusListener: false
            }
          });
        }
      });

      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700
        });
      });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async></script>
    <script src="assets/js/index.js"></script>
  </body>
</html>