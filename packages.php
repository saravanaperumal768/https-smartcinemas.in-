<?php
$package=1;
 include('header.php');
?>
<link rel="stylesheet" href="assets/stylesheets/package.css?v.1">
<link rel="stylesheet" href="assets/stylesheets/price.css?v.1.2">
<div id="main" class="row m-0 w-100">
            <div class="col-12 px-0 full-bg">
        <!--video section -->
       <!-- section begin -->
       <section id="section-intro" class="full-height jarallax relative owl-slide-wrapper text-light no-top no-bottom">
        <img src="assets/images/slider/slider1.jpg" class="jarallax-img" alt="">
        <div class="overlay-bg t50">

          <div class="center-y relative">
            <div class="container">
              <div class="row">
                <div class="col-md-7  ">
                  <div class="spacer-double d-block d-sm-none d-md-block"></div>
                  <p data-text="SMART Home Cinema" class="slider_p top_form">SMART Home Cinema</p>
                  <h1 class="big b ">Designing the Ultimate Bespoke Home Cinema Experience</h1>
                  <div class="spacer-single"></div>
                  <div class="text-center ">
                    <a href="#section-contact" class="btn-custom ">Get In Touch</a>
                  </div>
                </div>
                <div class="col-md-5 top_form ">
                  <form class="displaydesk" action="enquiry_mail.php" method="POST" onsubmit="return validateForm()">
                    <ul>
                      <li>
                        <!-- <span class="required-star">*</span> -->
                        <label for="name"><span>Name </span></label>
                        <input type="text" id="name" name="name" required="">
                      </li>
                      <li>
                        <label for="mail"><span>Email </span></label>
                        <input type="email" id="email" name="email" required="">
                      </li>
                      <li>
                        <label for="mail"><span>Mobile </span></label>
                        <input type="text" id="mobileNumber" name="mobileNumber" required="">
                      </li>
                      <li>
                        <label for="mail"><span>Location </span></label>
                        <input type="text" id="location" name="location" required="">
                      </li>
                      <li>
                        <label for="mail"><span>Select Package </span></label>
                        <select name="package" id="package">
                          <option value="Starter 0.75Lakhs to 1.5 Lakhs">Starter 0.75 Lakhs to 1.5 Lakhs</option>
                          <option value="Classic 1.5Lakhs to 5 Lakhs">Classic 1.5 Lakhs to 5 Lakhs</option>
                          <option value="Premium 5Lakhs to 15 Lakhs">Premium 5 Lakhs to 15 Lakhs</option>
                          <option value="Ultimate Above 15 Lakhs">Ultimate Above 15 Lakhs</option>

                        </select>
                      </li>
                      <li>
                        <input type="submit">
                      </li>
                    </ul>
                  </form>
                  <p id="result"></p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a href="#section-services" class="scroll-to">
          <span class="mouse">
            <span class="scroll"></span>
          </span>
        </a>
      </section>
      <!-- section close -->
       <section class="displaymob expertise">
        <div class="container">
          <div class="row">
            <div class="col-md-8 top_form ">
              <form class="" action="enquiry_mail.php" method="POST">
                <ul>
                  <li>
                    <!-- <span class="required-star">*</span> -->
                    <label for="name"><span>Name </span></label>
                    <input type="text" id="name" name="name" required="">
                  </li>
                  <li>
                    <label for="mail"><span>Email </span></label>
                    <input type="email" id="mail" name="email" required="">
                  </li>
                  <li>
                    <label for="mail"><span>Mobile </span></label>
                    <input type="text" id="mobileNumber" name="mobileNumber" required="">
                  </li>
                  <li>
                    <label for="mail"><span>Location </span></label>
                    <input type="text" id="mail" name="location" required="">
                  </li>
                  <li>
                    <label for="mail"><span>Select Package </span></label>
                    <select name="package" id="package">
                      <option value="Starter 0.75Lakhs to 1.5 Lakhs">Starter 0.75 Lakhs to 1.5 Lakhs</option>
                      <option value="Classic 1.5Lakhs to 5 Lakhs">Classic 1.5 Lakhs to 5 Lakhs</option>
                      <option value="Premium 5Lakhs to 15 Lakhs">Premium 5 Lakhs to 15 Lakhs</option>
                      <option value="Ultimate Above 15 Lakhs">Ultimate Above 15 Lakhs</option>

                    </select>
                  </li>
                  <li>
                    <input type="submit">
                  </li>
                </ul>
              </form>
            </div>
          </div>

        </div>
      </section>
        <!--readmore-->
  

          <!-- ------------  Pricing  ------- -->
      <section id="section-services" class="bg_price">
        <div id="plans"></div>
        <div class="card_container">
          <div class="row">
            <h3 class="titles" id="titles"> </h3>
          </div>
          <div class="grid">
            <div class="card">
              <h2 class="card_title">Starter</h2>
              <!-- <span class="small">/per month</span> -->
              <p class="pricing">0.75L to 1.5L</p>
              <!-- <p>Bronze Service Package is included</p> -->
              <hr>
              <ul class="features">
                <li><span>Audio </span>
                  <span class="starter"> 5 Channel </span> <br>
                  Dolby Digital <br>
                  Dolby Digital EX <br>
                  Dolby Digial Surround EX <br>
                  DTS Digital Surround
                </li>

                <li><span>Video </span>

                  3D Movie <br>
                  Wide Screen <br>
                  HD Resolutions <br>
                  Instalock / Motorized Screen</li>
                <!-- <a class="read-more-show hide" href="#" id="1">Read More</a> 
                                <span class="read-more-content"> -->
                <li><span>Acoustic </span> <br>

                  Optional</li>
                <!-- <a class="read-more-hide hide" href="#" more-id="1">Read Less</a></span> -->

                <!-- <li>Customized playlist</li> -->
              </ul>
              <a href="#" class="cta_btn">Buy Now</a>
            </div>
            <!-- --------2------------------- -->

            <div class="card">
              <h2 class="card_title">Classic</h2>
              <!-- <span class="small">/per month</span> -->
              <p class="pricing">1.5L to 5L</p>
              <!-- <p>Bronze Service Package is included</p> -->
              <hr>
              <ul class="features">
                <li><span class="">Audio </span>

                  <span class="starter"> 7 Channel <br> <b> Starter + </b> </span> <br>
                  Dolby Digital Plus <br>
                  Dolby True HD <br>
                  Dolby Atmos <br>
                  DTS - HD <br>
                  DTS X <br>
                  DTS Neo <br>
                  DTS Virtual X
                </li>

                <li><span>Video </span>

                  Full HD Resolution<br>
                  Inbuilt Android TV <br>
                  Chromecast Buit in <br>
                  Fixed Frame Screen</li>
                <a class="read-more-show hide" href="#" id="1">Read More</a>
                <span class="read-more-content">
                  <li><span>Acoustic </span>

                    Basic onwall Acoustic Solution match to interior</li>
                  <!-- <a class="read-more-hide hide" href="#" more-id="4">Read Less</a></span> -->
                  <!-- <li>Customized playlist</li> -->
              </ul>
              <a href="#" class="cta_btn">Buy Now</a>
            </div>
            <!-- ----------------------------------------- -->
            <div class="card">
              <h3 class="card_title">Recommended</h3>
              <h2 class="card_title">Premium</h2>
              <p class="pricing">5L to 15L</p>

              <hr>
              <ul class="features">
                <li><span>Audio </span>
                  <span class="starter"> 9 Channel <br> <b> Classic + </b> </span> <br>
                  Dolby Atmos <br>
                  DTS HD Master <br>
                  DTS Neural X <br>
                  DTS Neo X <br>
                  IMAX Enchanced Turo Calibration
                </li>

                <li><span>Video </span>

                  4K Pro UHD Resolution <br>
                  Dolby Vision <br>
                  Dynamic HDR <br>
                  HDR10 / HDR10+ <br>
                  8K Fixed Frame Screen</li>
                <a class="read-more-show hide" href="#" id="1">Read More</a>
                <span class="read-more-content">
                  <li><span>Acoustic </span>

                    Full Concealed Acoustical Interior in 4 walls, Ceiling & Flooring with Custom Design
                    Platform</li>
                  <li><span>Furniture </span>

                    Comfortable Sofa Sliders Non Motorized Recliners</li>
                  <!-- <a class="read-more-hide hide" href="#" more-id="4">Read Less</a></span> -->
              </ul>
              <a href="#" class="cta_btn">Buy Now</a>
            </div>
            <div class="card">
              <h2 class="card_title">Ultimate</h2>
              <p class="pricing">Above 15L</p>
              <!-- <p>20% Dis on additional Membership Purchase</p> -->
              <hr>
              <ul class="features">
                <li><span>Audio </span>
                  <span class="starter"> 11 Channel <br> <b> Premium + </b> </span> <br>

                  Dolby Atmos Music <br>
                  DTS X Pro <br>
                  DTS Virtual X <br>
                  IMAX <br>
                  Auro 3D <br>
                  360 Reality Audio
                </li>

                <li><span>Video </span>

                  Laser 4K UHD Resolution <br>
                  Dolby Vision <br>
                  Dynamic HDR <br>
                  HDR10 / HDR10+ / HLG <br>
                  4K/60P 4:4:4 <br>
                  HDCP 2.2 <br>
                  Acoutic Curved Frame Screen</li>
                <a class="read-more-show hide" href="#" id="1">Read More</a>
                <span class="read-more-content">
                  <li><span>Acoustic </span>

                    Ultra High end Full Concealed Acoustical Interior in 4 walls, Ceiling & Flooring with Custom Design
                    Platform Acoustic Door</li>
                  <li><span>Furniture </span>

                    Motorized Recliners <br> Lounger</li>
                  <!-- <a class="read-more-hide hide" href="#" more-id="5">Read Less</a></span> -->
              </ul>
              <a href="#" class="cta_btn">Buy Now</a>
            </div>
          </div>
        </div>
        <!-- <a href="https://youtu.be/RLReK22LWTo" target="_blank" class="link">Watch on youtube <i class="fab fa-youtube"></i></a> -->
      </section>
      <section id="section-services " class="expertise">
        <div class="container">
          <div class="row sequence">
            <!-- ------------------------------ -->
            <div class="col-md-4 col-sm-6 feature-box mb40 sq-item wow sq-item wow ">
              <div class="products">
                <img src="assets/images/product/productimg2.png">
                <p>Cinema Room Design</p>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 feature-box mb40 sq-item wow sq-item wow ">
              <div class="products">

                <img src="assets/images/product/productimg3.png">
                <p>Smart Home Automation</p>
              </div>
            </div>
            <!-- ------------------------------ -->
            <div class="col-md-4 col-sm-6 feature-box mb40 sq-item wow sq-item wow ">
              <div class="products">
                <img src="assets/images/product/productimg1.png">
                <p>Home Cinema Seating</p>
              </div>
            </div>
            <!-- -------------------------- -->

            <!-- <div class="col-md-3 col-sm-6 feature-box mb40 sq-item wow sq-item wow ">
                                <div class="products">
                                    <img src="images/product/productimg4.png">
                                    <p>Smart Cinema Lighting</p>
                                </div>
                             </div> -->
            <!-- ------------------------------ -->
          </div>
        </div>
      </section>
      <!-- --------------------------------------- -->
      <!-- section service begin -->

      <section class="side-bg  text-light"  data-bgcolor="#212121" class="">
        <!-- <div id="aboutus"></div> -->
        <div class="row">
        <div class=" col-md-6 display_mob " style="min-height:100%;">
          <iframe src="https://www.youtube.com/embed/QJx9XucnZR4?playlist=QJx9XucnZR4&loop=1&autoplay=1&mute=1"
            style="min-width: 100%; " class="jarallax-img" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        
                    <div class=" col-md-6 display_desk ">
                    

                    <div class="background-image ">
                        <!-- jarallax -->
                        <iframe id="video" style="min-width: 100%;min-height: 320px; "
                        src="https://www.youtube.com/embed/QJx9XucnZR4?playlist=QJx9XucnZR4&loop=1&autoplay=1&mute=1"
                        class="jarallax-img" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    


                    </div>
                    

                    </div>

        
          
            <div class="col-md-5">
              <div class=" inner-padding">
              <h2 class="mb20" style="color:#fff ;font-weight: 600;">Home Cinema / Home Theatre Solutions</h2>
                <p style="text-align: justify;color: #fff;">Every room has issues that need to be dealt with at the
                  design stage and the best rooms are always those that have had the best application of intelligent
                  compromises applied. We have followed all known standards and codes of practice in the creation of
                  this design and as such have guaranteed a certain amount of predictability in the systems performance.
                  There are several key points to keep in mind regarding a room`s suitability while designing a high
                  performance Home Cinema like Room Shape, Room Size, Room Surrface, System Orientation, Window, Ambient
                  Noise and Construction.
                </p>



                <div class="spacer-half"></div>
                <a href="#section-contact" class="btn-custom scroll-to">Contact Us</a>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        
      </section>
      <!-- section service close -->
           <!-- section close -->
           <section style="padding: 8px 0px;" class="expertise">
        <div class="container">
          <div class="row text-center six">
            <div class="col-md-12 col-12 ">
              <!-- <h3>Our Expertise</h3> -->
              <img src="assets/images/title/title4.jpg">
            </div>
          </div>

        </div>
      </section>
      <section id="section-services" class="expertise">
        <div id="expertise"></div>
        <div class="container">
          <!-- feature-box mb40 sq-item wow sq-item wow -->
          <div class="row sequence">
            <div class="col-md-3 col-sm-3 ">
              <img src="assets/images/title/haa1.jpg">
            </div>
            <!-- -------2---------------- -->
            <div class="col-md-3 col-sm-3 ">
              <img src="assets/images/title/haa2.jpg">
            </div>
            <!-- ----------------3--------------- -->
            <div class="col-md-3 col-sm-3 ">
              <img src="assets/images/title/haa3.jpg">
            </div>
            <!-- ----------------------4---------------------- -->
            <div class="col-md-3 col-sm-3 ">
              <img src="assets/images/title/haa4.jpg">
            </div>

          </div>
        </div>
      </section>
        <section class="expertise">
        <div class="row text-center seven">
            <!-- <div class="col-md-12 col-12">
                            <h3>Our Gallery</h3>
                         </div> -->
            <div class="col-md-12 col-12 " style="padding-bottom:10px;">
              <!-- <h3>Our Expertise</h3> -->
              <img src="assets/images/title/title2.jpg">
            </div>
          </div>
        <div class="gallery-container">
        <div class="gallery-item" data-index="1">
              <img src="assets/images/gallery/gall1.jpg" alt="Gallery">
            </div>
            <div class="gallery-item" data-index="2">
              <img src="assets/images/gallery/gall2.jpg" alt="Gallery">
            </div>
            <div class="gallery-item" data-index="3">
              <img src="assets/images/gallery/gall3.jpg" alt="Gallery">
            </div>
            <div class="gallery-item" data-index="4">
              <img src="assets/images/gallery/gall4.jpg" alt="Gallery">
            </div>
            <div class="gallery-item" data-index="5">
              <img src="assets/images/gallery/gall5.jpg" alt="Gallery">
            </div>

            <div class="gallery-item" data-index="6">
              <img src="assets/images/gallery/image1.jpg" alt="Gallery">
            </div>

            <div class="gallery-item" data-index="7">
              <img src="assets/images/gallery/image3.jpg" alt="Gallery">
            </div>
            <div class="gallery-item" data-index="8">
              <img src="assets/images/gallery/gallery1.jpg" alt="Gallery">
            </div>
            <!-- <div class="gallery-item" data-index="5">
                                <img src="images/gallery/gallery3.jpg" alt="Gallery">
                            </div> -->
            <div class="gallery-item" data-index="9">
              <img src="assets/images/gallery/image6.jpg" alt="Gallery">
            </div>

            <div class="gallery-item" data-index="10">
              <img src="assets/images/gallery/gall6.jpg" alt="Gallery">
            </div>
            <div class="gallery-item" data-index="11">
              <img src="assets/images/gallery/gall7.jpg" alt="Gallery">
            </div>
            <div class="gallery-item" data-index="12">
              <img src="assets/images/gallery/gall8.jpg" alt="Gallery">
            </div>


</div>
        </section>

        <!-- --------------------------------- -->
     


         <!-- ---------------------------------- testimonial -->
    
      <!-- ---------------------------------------------- -->
      <!-- ------------------------------------------- -->
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>


<script>
$(document).ready(function() {
        $('.testimonial-slider').slick({
            autoplay: false,
            autoplaySpeed: 1000,
            speed: 600,
            draggable: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            responsive: [
                {
                  breakpoint: 991,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                  }
                },
                {
                    breakpoint: 575,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                    }
                }
            ]
        });
    }); 
</script>

<?php
 include('footer.php');
?>

<script type="text/javascript" src="assets/scripts/owl.carousel1.js"></script>
    <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/easing.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/jquery.countTo.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/enquire.min.js"></script>
  <script src="js/jquery.plugin.js"></script>
  <script src="js/jquery.easeScroll.js"></script>
  <script src="js/jarallax.js"></script>
  <script src="js/designesia.js"></script>
  <script src="js/validation.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
  <script>
    const greeting = ['Choose your pricing plan'];
    let currentGreetingIndex = 0;
    let currentCharacterIndex = 0;
    let isDeleting = false;
    let isPaused = false;
    let pauseEnd = 0;

    function typeWriterEffect() {
      const greetingElement = document.getElementById('titles');

      if (isPaused && Date.now() > pauseEnd) {
        isPaused = false;
        if (isDeleting) {
          currentGreetingIndex = (currentGreetingIndex + 1) % greeting.length;
          isDeleting = false;
        } else {
          isDeleting = true;
        }
      }

      if (!isPaused && !isDeleting && currentCharacterIndex === greeting[currentGreetingIndex].length) {
        isPaused = true;
        pauseEnd = Date.now() + 800;
        return setTimeout(typeWriterEffect, 50);
      }

      if (!isPaused && isDeleting && currentCharacterIndex === 0) {
        isPaused = true;
        pauseEnd = Date.now() + 200;
        return setTimeout(typeWriterEffect, 50);
      }

      const timeout = isDeleting ? 100 : 200;
      greetingElement.innerText = greeting[currentGreetingIndex].substring(0, currentCharacterIndex);
      currentCharacterIndex = isDeleting ? currentCharacterIndex - 1 : currentCharacterIndex + 1;
      setTimeout(typeWriterEffect, timeout);
    }

    typeWriterEffect();
  </script>
  

  <script>
    $(document).ready(function () {
      $('.testimonial-slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 600,
        draggable: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 575,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      });
    }); 
  </script>
 <script>
    $('.read-more-content').addClass('hide')
    $('.read-more-show, .read-more-hide').removeClass('hide')

    // Set up the toggle effect:
    $('.read-more-show').on('click', function (e) {
      $(this).next('.read-more-content').removeClass('hide');
      $(this).addClass('hide');
      e.preventDefault();
    });

    $('.read-more-hide').on('click', function (e) {
      $(this).parent('.read-more-content').addClass('hide');
      var moreid = $(this).attr("more-id");
      $('.read-more-show#' + moreid).show('hide');
      e.preventDefault();
    });
  </script>
 


  <script>
    function validateForm() {
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const mobileNumber = document.getElementById("mobileNumber").value;

      // Regular expression for a valid email address
      const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

      // Regular expression for a valid mobile number (you can adjust this based on your specific format)
      const mobileNumberPattern = /^\d{10}$/;

      if (!email.match(emailPattern)) {
        alert("Invalid email address. Please enter a valid email.");
        return false;
      }

      if (!mobileNumber.match(mobileNumberPattern)) {
        alert("Invalid mobile number. Please enter a valid 10-digit mobile number.");
        return false;
      }

      // If both email and mobile number are valid, the form will be submitted
      return true;
    }


  </script>
  <script>
// Gallery image hover
const galleryItem = document.getElementsByClassName("gallery-item");
const lightBoxContainer = document.createElement("div");
const lightBoxContent = document.createElement("div");
const lightBoxImg = document.createElement("img");
const lightBoxPrev = document.createElement("div");
const lightBoxNext = document.createElement("div");

lightBoxContainer.classList.add("lightbox");
lightBoxContent.classList.add("lightbox-content");
lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

lightBoxContainer.appendChild(lightBoxContent);
lightBoxContent.appendChild(lightBoxImg);
lightBoxContent.appendChild(lightBoxPrev);
lightBoxContent.appendChild(lightBoxNext);

document.body.appendChild(lightBoxContainer);

let index = 1;

function showLightBox(n) {
    if (n > galleryItem.length) {
        index = 1;
    } else if (n < 1) {
        index = galleryItem.length;
    }
    let imageLocation = galleryItem[index-1].children[0].getAttribute("src");
    lightBoxImg.setAttribute("src", imageLocation);
}

function currentImage() {
    lightBoxContainer.style.display = "block";

    let imageIndex = parseInt(this.getAttribute("data-index"));
    showLightBox(index = imageIndex);
}
for (let i = 0; i < galleryItem.length; i++) {
    galleryItem[i].addEventListener("click", currentImage);
}

function slideImage(n) {
    showLightBox(index += n);
}
function prevImage() {
    slideImage(-1);
}
function nextImage() {
    slideImage(1);
}
lightBoxPrev.addEventListener("click", prevImage);
lightBoxNext.addEventListener("click", nextImage);

function closeLightBox() {
    if (this === event.target) {
        lightBoxContainer.style.display = "none";
    }
}
lightBoxContainer.addEventListener("click", closeLightBox);
</script>