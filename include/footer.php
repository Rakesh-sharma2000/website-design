<!-- footer start -->
<footer class="sectionpadding">
  <div class="outeroffooter">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="footerlogo">
            <a href="index.php"><img src="assets/img/whitelogo.png"></a>
          </div>
          <p class="pt-3">At Rakesh Sharma, we pride ourselves on our commitment to delivering exceptional results and exceeding our clients' expectations. With our proven track record of success, you can trust us to take your business to new heights.</p>
          <ul class="socialmedia">
            <li>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
          <div class="footerlist">
            <h3>Explore</h3>
            <ul>
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="about-us.php">About Us</a>
              </li>
              <li>
                <a href="contact-us.php">Contact Us</a>
              </li>
             
            </ul>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
          <div class="footerlist">
            <h3>Services</h3>
            <ul>
              <li>
                <a href="website-design.php">Website Design</a>
              </li>
              <li>
                <a href="website-development.php">Website Development</a>
              </li>
              <li>
                <a href="mobile-app-development.php">Mobile Application</a>
              </li>
              <li>
                <a href="email-marketing.php">Email Marketing</a>
              </li>
              <li>
                <a href="ppc-company-delhi.php">Google Ads</a>
              </li>
              <li>
                <a href="social-media-marketing.php">SMM</a>
              </li>
             
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="footerlist contactinfo">
              <h3>Address</h3>
              <ul class="pl02">
                <li class="pl0">
                  <h4>Head Branch</h4>
                  <ul>
                    <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Paharganj New Delhi</a></li>
                    <li><a href="tel:+91-9540559250"><i class="fa fa-phone" aria-hidden="true"></i> +91-9540559250</a></li>
                  </ul>
                </li>
                
               
                <li>
                  <a href="mailto:rsdeveloper2000@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> rsdeveloper2000@gmail.com</a>
                </li>
                 
               
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer end -->
<!-- copyright start -->

<!-- copyright end -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 <!-- =====================================owl slider======================= -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- =====================================owl slider======================= -->



<!-- counter down -->
<script type="text/javascript">
  function visible(partial) {
    var $t = partial,
        $w = jQuery(window),
        viewTop = $w.scrollTop(),
        viewBottom = viewTop + $w.height(),
        _top = $t.offset().top,
        _bottom = _top + $t.height(),
        compareTop = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;

    return ((compareBottom <= viewBottom) && (compareTop >= viewTop) && $t.is(':visible'));

}

$(window).scroll(function(){

  if(visible($('.count-digit')))
    {
      if($('.count-digit').hasClass('counter-loaded')) return;
      $('.count-digit').addClass('counter-loaded');
      
$('.count-digit').each(function () {
  var $this = $(this);
  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
    duration: 5000,
    easing: 'swing',
    step: function () {
      $this.text(Math.ceil(this.Counter));
    }
  });
});
    }
})
</script>

<!-- ===============================our partner====================== -->
  <script type="text/javascript">
    jQuery("#carousel").owlCarousel({
      autoplay: true,
      rewind: true, /* use rewind if you don't want loop */
      margin: 20,
       /*
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      */
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 2000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 2
        },

        600: {
          items: 3
        },

        1024: {
          items: 4
        },

        1366: {
          items: 5
        }
      }
    });
  </script>
  <!-- ===============================our partner====================== -->
  <!-- ===============================reivew====================== -->
  <script type="text/javascript">
    jQuery("#carouseltwo").owlCarousel({
      autoplay: true,
      rewind: true, /* use rewind if you don't want loop */
      margin: 20,
       /*
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      */
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 2000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 2
        },

        1024: {
          items: 2
        },

        1366: {
          items: 2
        }
      }
    });
  </script>
  <!-- ===============================reivew====================== -->

  <!-- ======================word limit======================== -->
  <script type="text/javascript">
    $(".text-box p").text(function(index, currentText) {
      var maxLength = $(this).parent().attr('data-maxlength');
      if(currentText.length >= maxLength) {
        return currentText.substr(0, maxLength) + "...";
      } else {
        return currentText
      } 
    });
  </script>
  <!-- ======================word limit======================== -->

  <script> 
    $(document).ready(function(){
      $("#drop").click(function(){
        $("#dropshow").slideToggle("slow");
      });

      $("#dropf").click(function(){
        $("#dropshowf").slideToggle("slow");
      });

      $("#droptwo").click(function(){
        $("#dropshowtwo").slideToggle("slow");
      });

      $("#navbar-toggle").click(function(){
        $(".nav-list").slideToggle("slow");
      });
    });
  </script>




  <script type="text/javascript">
    jQuery("#carouseltwoo").owlCarousel({
      autoplay: true,
      rewind: true, /* use rewind if you don't want loop */
      margin: 20,
       /*
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      */
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 2000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 3
        },

        1366: {
          items: 4
        }
      }
    });
  </script>







</body>
</html>
