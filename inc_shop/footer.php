
<footer style="background: url(images/sp_foot_back.png) no-repeat; background-size: cover;">
    <div class="foot_info">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-12">
                  <h2>BE THE FIRST TO KNOW ABOUT NEW PRODUCTS AND OFFERS</h2>
                  <form>
                    <input type="email" name="" placeholder="Your Email Address">
                    <input type="submit" name="" value="">
                  </form>
                  <div class="sp_add_info_area">
                    <ul class="sp_add_info">
                      <li><a href="#"><i class="fas fa-envelope"></i>info@muaythaidevelopmentleague.com</a></li>
                      <li><a href="#"><i class="fas fa-map-marker-alt"></i>10481 Grant Line Rd, STE 110. Elk Grove, California USA 95624</a></li>
                    </ul>
                    <ul class="sp_foot_social">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 sp_foot_menu_area">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <ul class="sp_foot_menu">
                          <li><a href="#">SHOP BY</a></li>
                          <li><a href="#">Athlete</a></li>
                          <li><a href="#">Apparel</a></li>
                          <li><a href="#">Collection</a></li>
                          <li><a href="#">HELP</a></li>
                          <li><a href="#">FAQs</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <ul class="sp_foot_menu">
                          <li><a href="#">Distributors</a></li>
                          <li><a href="#">Affiliates</a></li>
                          <li><a href="#">Size Guide</a></li>
                          <li><a href="#">Returns Policy</a></li>
                          <li><a href="#">Privacy Policy</a></li>
                          <li><a href="#">Terms of Use</a></li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot_bottom">
        <div class="container">
          <div class="foot_bot_con">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <h5>Copyright ©  2021 All rights reserved.</h5>
              </div>
              <div class="col-lg-6 col-md-6">
                <a href="#"><img src="images/sp_foot_pay_pic.png"></a>
              </div>
            </div>
          </div>
        </div>
    </div>
</footer>

<a id="scroll_top_button"><i class="fas fa-chevron-up"></i></a>

<!--  <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>     -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://gijsroge.github.io/owl-carousel2-thumbs/assets/OwlCarousel2Thumbs.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	$('#navigation nav').slimNav_sk78();
  $('#nav-icon0').click(function(){
      $(this).toggleClass('open');
  });
    var owl = $('.top_pick_slider');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items:4,
        itemsMobile:[568,2],
        itemsTablet:[768,3],
        itemsTablet:[1024,3],
        center: false,
        nav: true,
        thumbs: false,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-long-arrow-alt-left"></i></span>','<span class="next"><i class="fas fa-long-arrow-alt-right"></i></span>'],
        responsive: {
            0: {
              items: 1
            },

            600: {
              items: 3
            },

            1024: {
              items: 4
            },

            1366: {
              items: 4
            }
          }
    });
    var owl = $('.thumb-list-car');
    owl.owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items:4,  
    nav:true,  
    dots:false,
    loop:true,
    autoplay:true,
    smartSpeed:1500,
    autoplayTimeout:3000,
    thumbs: false,
    thumbImage: false,
    autoplayHoverPause:true,
    navText : ["<i class='fa fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    responsive:{
          0:{
              items:3,
              nav:true,
              dots:false,  
          },
          568:{
              items:3,
               nav:true,
               dots:false,  
          },
          700:{
              items:4,
               nav:true,
               dots:false,  
          },
          768:{
              items:4,
               nav:true,
               dots:false,  
          },
          1000:{
             items:3,
               nav:true,
               dots:false,  
          },
          
          1280:{
             items:4,
              nav:true,
               dots:false,  
          }
      }
    
    });
});
</script>

<script type="text/javascript">
//Add drop down menu arrow indicators for categories with subcategories
$("li.cat-parent").children("a").after("<span class='dropDownMenu'></span>");

//Set current category to be expanded on page load if top level category is active
$("li.current-cat").children(".dropDownMenu").addClass("active");
$("li.current-cat").children(".children").addClass("active");

//Set current category to be expanded on page load if subcategory is active
$("li.current-cat").parent("ul.children").addClass("active");
$("ul.children.active").siblings(".dropDownMenu").addClass("active");

//When click on down arrow, reveal submenu
$(".dropDownMenu").click(function() {
  $( this ).toggleClass("active");
  $( this ).next().toggleClass("active");
});
</script>

<script type="text/javascript">
    var btn = $('#scroll_top_button');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });
</script>

<script>
$('#clickme').click(function() {
    var $slider = $('.mydiv');
    $slider.animate({
    left: parseInt($slider.css('left'),10) == -$slider.outerWidth() ?
    0 : -$slider.outerWidth()
    });
});
</script>

<script type="text/javascript">
$(function() {

  // Initiate Slider
  $('#slider-range').slider({
    range: true,
    min: 10000,
    max: 110000,
    step: 100,
    values: [45000, 75000]
  });

  // Move the range wrapper into the generated divs
  $('.ui-slider-range').append($('.range-wrapper'));

  // Apply initial values to the range container
  $('.range').html('<span class="range-value"><sup>$</sup>' + $('#slider-range').slider("values", 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '</span><span class="range-divider"></span><span class="range-value"><sup>$</sup>' + $("#slider-range").slider("values", 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '</span>');

  // Show the gears on press of the handles
  $('.ui-slider-handle, .ui-slider-range').on('mousedown', function() {
    $('.gear-large').addClass('active');
  });

  // Hide the gears when the mouse is released
  // Done on document just incase the user hovers off of the handle
  $(document).on('mouseup', function() {
    if ($('.gear-large').hasClass('active')) {
      $('.gear-large').removeClass('active');
    }
  });

  // Rotate the gears
  var gearOneAngle = 0,
    gearTwoAngle = 0,
    rangeWidth = $('.ui-slider-range').css('width');

  $('.gear-one').css('transform', 'rotate(' + gearOneAngle + 'deg)');
  $('.gear-two').css('transform', 'rotate(' + gearTwoAngle + 'deg)');

  $('#slider-range').slider({
    slide: function(event, ui) {

      // Update the range container values upon sliding

      $('.range').html('<span class="range-value"><sup>$</sup>' + ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '</span><span class="range-divider"></span><span class="range-value"><sup>$</sup>' + ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '</span>');

      // Get old value
      var previousVal = parseInt($(this).data('value'));

      // Save new value
      $(this).data({
        'value': parseInt(ui.value)
      });

      // Figure out which handle is being used
      if (ui.values[0] == ui.value) {

        // Left handle
        if (previousVal > parseInt(ui.value)) {
          // value decreased
          gearOneAngle -= 7;
          $('.gear-one').css('transform', 'rotate(' + gearOneAngle + 'deg)');
        } else {
          // value increased
          gearOneAngle += 7;
          $('.gear-one').css('transform', 'rotate(' + gearOneAngle + 'deg)');
        }

      } else {

        // Right handle
        if (previousVal > parseInt(ui.value)) {
          // value decreased
          gearOneAngle -= 7;
          $('.gear-two').css('transform', 'rotate(' + gearOneAngle + 'deg)');
        } else {
          // value increased
          gearOneAngle += 7;
          $('.gear-two').css('transform', 'rotate(' + gearOneAngle + 'deg)');
        }

      }

      if (ui.values[1] === 110000) {
        if (!$('.range-alert').hasClass('active')) {
          $('.range-alert').addClass('active');
        }
      } else {
        if ($('.range-alert').hasClass('active')) {
          $('.range-alert').removeClass('active');
        }
      }
    }
  });

  // Prevent the range container from moving the slider
  $('.range, .range-alert').on('mousedown', function(event) {
    event.stopPropagation();
  });

});
</script>

</body>
</html>
