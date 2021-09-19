
<footer style="background: url(images/foot_ban.png) no-repeat; background-size: cover;">
    <div class="foot_info">
        <div class="container">   
            <div class="row">
                <div class="col-md-4">
                    <div class="foot_logo_con">
                        <img src="images/logo.png">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sellus quis posuere nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam vulputate </p>
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2>Address</h2>
                    <ul class="add_con">
                        <li>10481 Grant Line Rd, STE 110. Elk Grove, California USA 95624</li>
                        <li><a href="#">304-206-9362</a></li>
                        <li><a href="#">info@muaythaidevelopmentleague.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2>MDL NEWS</h2>
                    <ul class="foot_news">
                        <li>
                            <div>
                                <img src="images/f_news_pic.png">
                            </div>
                            <div>
                                <p>Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu</p>
                                <h6>November 7, 2018</h6>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="images/f_news_pic.png">
                            </div>
                            <div>
                                <p>Integer maximus accumsan nunc, sit amet tempor lectus facilisis eu</p>
                                <h6>November 7, 2018</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="foot_bottom">
        <h5>© 2021 MDL In All Things, LLC. All rights reserved.</h5>
    </div>
</footer>

<a id="scroll_top_button"><i class="fas fa-chevron-up"></i></a>

<!--  <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>     -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>
<script type="text/javascript" src="https://gijsroge.github.io/owl-carousel2-thumbs/assets/OwlCarousel2Thumbs.min.js"></script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	$('#navigation nav').slimNav_sk78();
	var owl = $('.main-slider');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items: 1,
        center: true,
        nav: true,
        thumbs: false,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],

    });	
    var owl = $('.testi_slider');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items: 1,
        center: true,
        nav: true,
        thumbs: false,
        thumbImage: true,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
    });
    var owl = $('.product_rolling');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items:3,
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
              items: 2
            },

            1024: {
              items: 3
            },

            1366: {
              items: 3
            }
          }
    });
});
</script>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
 
}
 // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>

<script>
function openCity2(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent2");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks2");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
 
}
 // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen2").click();
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
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<script type="text/javascript">
$('#example2').calendar({
  type: 'date'
});
</script>



</body>
</html>
