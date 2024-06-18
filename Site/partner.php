
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Beacon of Compassion | Home</title>
    <!-- Tees Icon -->
    <link rel="icon" href="img/bof-logo.png"/>
    <!-- Badge Icons from Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"/>

    <!-- Fonts from Google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>

    <!-- services scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/cart.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/extrastyles.css" />
    <link rel="stylesheet" href="css/modified-styles.css" />
  </head>
  <body style="overflow-x:hidden;">
    <!-- Navbar -->
    <?php require_once 'php/includes/header.php'; ?>

    <header>
      <!-- Background images -->
      <div class="slideshow-container">
     
      <div class="p-5 text-center bg-image shadow-1-strong"
        style="background-image: url('img/partner.webp'); height: 550px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">PARTNER WITH US</h1>
              <h5 class="mb-3" style="color:rgb(238, 81, 8);">
                  Touching a soul one by one each day
              </h4>
              <a class="links" href="index.php">Home</a> > <a class="links quick-link" href="partner.php">Partner</a>
            </div>
          </div>
        </div>
      </div>
      <br>
      
    <!-- payment modal -->
    <?php require_once 'php/includes/payment.php'; ?>

        <style>
        /* The dots/bullets/indicators */
        .slide-dots{
          margin-top:-60px;
          z-index: 2;
          position: relative;
        }
        .dot {
          height: 15px;
          width: 15px;
          bottom: 0px;
          background-color: white;
          border-radius: 50%;
          margin-top: -280px!important;
          display: inline-block;
          transition: background-color 0.6s ease;
          }
        .active {
           background-color: rgb(238, 81, 8);
        }
        /*funcbtn*/
        .funcbtn{
          height:15%;
          text-align:center;
          opacity: 1;
          background: blue;
          color:#fff;
          border-radius:25px;
          padding:10px;
        }
        </style>
        
        <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("p-5 text-center bg-image shadow-1-strong");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 5000); // Change image every 5 seconds
        }

        //read more
        function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline";
          }
        }

        function studio() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("studio-more");
        var btnText = document.getElementById("studiobtn");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline";
          }
        }
        </script>
    </header>

    <main class="mt-5">
          <style>
            #more {display: none;}
            #studio-more {display: none;}
            .small-screen{
              display:none;
            }
            .introduction{
              display:flex;
              padding:100px;
              background-color: #f1f1f1;
              width:100%;
              margin-top:-70px;
              color:white;
            }
            .info{
              width:50%;
              margin-left:40px;
            }
            .img{
              width:50%;
            }
            @media only screen and (max-width: 800px) {
              .small-screen{
                display:none;
              }
              .large-screen{
                display:block;
              }
              .introduction{
                display:block;
                padding:60px;
              }
              .info{
              width:100%;
              margin-left:0px;
              }
              .img{
               width:100%;
              }
            }
          </style>

       <div class="introduction">
        <div class="img">
          <h6 style="font-weight:bolder;color:rgb(238, 81, 8);">PARTNER WITH US IN THE LONG LIFE CHANGING JOURNEY</h6>
          <h5 style="color:black;">Touching a soul one by one each day</h5>
          <!-- <img src="img/home.jpg" class="img-fluid" alt="" style="max-height:100%;">     -->
        </div>
        <div class="info" style="color:black;">
        <p class="large-screen">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio libero facilis sequi error, iusto 
          ex porro. Distinctio eos magni alias quae sapiente tempora provident nemo! Facilis, eius! Explicabo,
          autem in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio libero facilis 
          sequi error, iusto
        </p>
        </div>
      </div> 
      <br>

      <div class="our-team" style="text-align: center;">
        <h4 style="font-weight:bolder;color:black;">OUR ABLE TEAM</h4>
        <p class="what-we-do-info">Meet our able diverse team
      </div>

      <div class="container">
      <div class="row">
        <div class="column">

          <div class="blog" style="margin:10px 10px 0px 10px;padding:30px;text-align:center;center;border-radius:20px;background-color:blue;color:white;">
          <div class="profile"style="border-radius:50%;width: 165px; height: 165px;background-color:white;margin-left:auto;margin-right:auto;display:block;"><img src="img/top-kids2.jpg" alt="profile" style="border-radius:50%;width: 150px; height: 150px;"></div>
           <br>
           <div class="Blog-title"><h4>DIRECTOR</h4></div>
           <div class="info"style="margin-left:0px;width:100%;">
             <p>
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure exercitationem non officiis nihil tenetur.
               Magnam alias ea, eos ipsa beatae doloremque! Rerum animi unde aliquam qui aliquid ullam dicta consequatur!
             </p>
             <a class="btn blogbtn" role="button" href="tel: 0719411322"><i class="fa fa-phone fa-flip-horizontal fa-lg" ></i> Call Now</a>
           </div>
             <!-- Facebook -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.facebook.com/profile.php?id=100064267020188" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-facebook-f"></i></a>
             <!-- Twitter -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://twitter.com/GoldenchanceLtd" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-twitter"></i></a>
             <!-- Instagram -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.instagram.com/goldenchancerealestatelimited/" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-instagram"></i></a>
             <!-- whatsapp -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://wa.me/+254796526231" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-whatsapp"></i></a>
          </div>

          <div class="blog" style="margin:20px 10px 0px 10px;padding:30px;text-align:center;center;border-radius:20px;background-color:blue;color:white;">
          <div class="profile"style="border-radius:50%;width: 165px; height: 165px;background-color:white;margin-left:auto;margin-right:auto;display:block;"><img src="img/top-kids2.jpg" alt="profile" style="border-radius:50%;width: 150px; height: 150px;"></div>
           <br>
           <div class="Blog-title"><h4>MARKETING MANAGER</h4></div>
           <div class="info"style="margin-left:0px;width:100%;">
             <p>
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure exercitationem non officiis nihil tenetur.
               Magnam alias ea, eos ipsa beatae doloremque! Rerum animi unde aliquam qui aliquid ullam dicta consequatur!
             </p>
             <a class="btn blogbtn" role="button" href="tel: 0719411322"><i class="fa fa-phone fa-flip-horizontal fa-lg" ></i> Call Now</a>
           </div>
             <!-- Facebook -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.facebook.com/profile.php?id=100064267020188" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-facebook-f"></i></a>
             <!-- Twitter -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://twitter.com/GoldenchanceLtd" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-twitter"></i></a>
             <!-- Instagram -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.instagram.com/goldenchancerealestatelimited/" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-instagram"></i></a>
             <!-- whatsapp -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://wa.me/+254796526231" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-whatsapp"></i></a>
          </div>

        </div>
        <div class="column">

          <div class="blog" style="margin:10px 10px 0px 10px;padding:30px;text-align:center;center;border-radius:20px;background-color:blue;color:white;">
          <div class="profile"style="border-radius:50%;width: 165px; height: 165px;background-color:white;margin-left:auto;margin-right:auto;display:block;"><img src="img/top-kids2.jpg" alt="profile" style="border-radius:50%;width: 150px; height: 150px;"></div>
           <br>
           <div class="Blog-title"><h4>CHEIF FINANCE OFFICER</h4></div>
           <div class="info"style="margin-left:0px;width:100%;">
             <p>
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure exercitationem non officiis nihil tenetur.
               Magnam alias ea, eos ipsa beatae doloremque! Rerum animi unde aliquam qui aliquid ullam dicta consequatur!
             </p>
             <a class="btn blogbtn" role="button" href="tel: 0719411322"><i class="fa fa-phone fa-flip-horizontal fa-lg" ></i> Call Now</a>
           </div>
             <!-- Facebook -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.facebook.com/profile.php?id=100064267020188" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-facebook-f"></i></a>
             <!-- Twitter -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://twitter.com/GoldenchanceLtd" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-twitter"></i></a>
             <!-- Instagram -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.instagram.com/goldenchancerealestatelimited/" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-instagram"></i></a>
             <!-- whatsapp -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://wa.me/+254796526231" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-whatsapp"></i></a>
          </div>

          <div class="blog" style="margin:20px 10px 0px 10px;padding:30px;text-align:center;center;border-radius:20px;background-color:blue;color:white;">
          <div class="profile"style="border-radius:50%;width: 165px; height: 165px;background-color:white;margin-left:auto;margin-right:auto;display:block;"><img src="img/top-kids2.jpg" alt="profile" style="border-radius:50%;width: 150px; height: 150px;"></div>
           <br>
           <div class="Blog-title"><h4>PRODUCTS MANAGER</h4></div>
           <div class="info"style="margin-left:0px;width:100%;">
             <p>
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure exercitationem non officiis nihil tenetur.
               Magnam alias ea, eos ipsa beatae doloremque! Rerum animi unde aliquam qui aliquid ullam dicta consequatur!
             </p>
             <a class="btn blogbtn" role="button" href="tel: 0719411322"><i class="fa fa-phone fa-flip-horizontal fa-lg" ></i> Call Now</a>
           </div>
             <!-- Facebook -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.facebook.com/profile.php?id=100064267020188" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-facebook-f"></i></a>
             <!-- Twitter -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://twitter.com/GoldenchanceLtd" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-twitter"></i></a>
             <!-- Instagram -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.instagram.com/goldenchancerealestatelimited/" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-instagram"></i></a>
             <!-- whatsapp -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://wa.me/+254796526231" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-whatsapp"></i></a>
          </div>

        </div>

        <div class="column">

          <div class="blog" style="margin:10px 10px 0px 10px;padding:30px;text-align:center;center;border-radius:20px;background-color:blue;color:white;">
          <div class="profile"style="border-radius:50%;width: 165px; height: 165px;background-color:white;margin-left:auto;margin-right:auto;display:block;"><img src="img/top-kids2.jpg" alt="profile" style="border-radius:50%;width: 150px; height: 150px;"></div>
           <br>
           <div class="Blog-title"><h4>HUMAN RESOURCE</h4></div>
           <div class="info"style="margin-left:0px;width:100%;">
             <p>
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure exercitationem non officiis nihil tenetur.
               Magnam alias ea, eos ipsa beatae doloremque! Rerum animi unde aliquam qui aliquid ullam dicta consequatur!
             </p>
             <a class="btn blogbtn" role="button" href="tel: 0719411322"><i class="fa fa-phone fa-flip-horizontal fa-lg" ></i> Call Now</a>
           </div>
             <!-- Facebook -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.facebook.com/profile.php?id=100064267020188" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-facebook-f"></i></a>
             <!-- Twitter -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://twitter.com/GoldenchanceLtd" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-twitter"></i></a>
             <!-- Instagram -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.instagram.com/goldenchancerealestatelimited/" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-instagram"></i></a>
             <!-- whatsapp -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://wa.me/+254796526231" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-whatsapp"></i></a>
          </div>

          <div class="blog" style="margin:20px 10px 0px 10px;padding:30px;text-align:center;center;border-radius:20px;background-color:blue;color:white;">
          <div class="profile"style="border-radius:50%;width: 165px; height: 165px;background-color:white;margin-left:auto;margin-right:auto;display:block;"><img src="img/top-kids2.jpg" alt="profile" style="border-radius:50%;width: 150px; height: 150px;"></div>
           <br>
           <div class="Blog-title"><h4>MEMBER</h4></div>
           <div class="info"style="margin-left:0px;width:100%;">
             <p>
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure exercitationem non officiis nihil tenetur.
               Magnam alias ea, eos ipsa beatae doloremque! Rerum animi unde aliquam qui aliquid ullam dicta consequatur!
             </p>
             <a class="btn blogbtn" role="button" href="tel: 0719411322"><i class="fa fa-phone fa-flip-horizontal fa-lg" ></i> Call Now</a>
           </div>
             <!-- Facebook -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.facebook.com/profile.php?id=100064267020188" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-facebook-f"></i></a>
             <!-- Twitter -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://twitter.com/GoldenchanceLtd" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-twitter"></i></a>
             <!-- Instagram -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.instagram.com/goldenchancerealestatelimited/" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-instagram"></i></a>
             <!-- whatsapp -->
             <a class="btn btn-link btn-floating btn-lg m-1" href="https://wa.me/+254796526231" target="_blank" role="button" data-mdb-ripple-color="dark" style="color:white;"><i class="fab fa-whatsapp"></i></a>
          </div>

        </div>
        
      </div>
      </div>

     <br><br>
      <div class="our-team" style="text-align: center;">
        <h4 style="font-weight:bold;color:black;">OUR TRUSTED PARTNERS</h4>
      </div><br>
      <div class="partners-logos container">
        <div class="partner-profile"><img class="partner-logo" src="img/top-kids2.jpg" alt="profile"></div>
        <div class="partner-profile"><img class="partner-logo" src="img/top-kids2.jpg" alt="profile"></div>
        <div class="partner-profile"><img class="partner-logo" src="img/top-kids2.jpg" alt="profile"></div>
        <div class="partner-profile"><img class="partner-logo" src="img/top-kids2.jpg" alt="profile"></div>
      </div>
      
    
     <div class="contact-us">
      <div class="customer-care-img bg-image" style="background-image: url('img/partners.jpg');">
        <!-- <img src="img/top-kids3.jpg" alt="customer-care" style="height:450px;"> -->
      </div>
      <div class="contact-us-info">
        <form action=" " method="POST" style="box-shadow:none;">
          <div class="form-container">
            <div class="container">
              <h3><i class="fa fa-handshake fa-lg" width="30"></i> Become a Partner </h3>
              <hr><br>
              <label for="name"><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="name" required>
              <label for="Email"><b>Email</b></label>
              <input type="email" placeholder="Enter email" name="email" required>
              <label for="password"><b>How can you contribute</b></label>
              <textarea type="text" name="message" placeholder="Enter message" required></textarea>
              <label for="refreral"><b>How did you hear about us</b></label>
              <input type="text" placeholder="We appreciate the support" name="referals">

              <button type="submit" class="form-button" name="contactmsg" style="color:white;">Send</button>

            </div>
          </div>
        </form>
      </div>
     </div>
     <br>
      
    </main>

    <!--Footer-->
    <div class="footer">
      <?php require_once 'php/includes/footer.php'; ?>
    </div>
  </body>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/script1.js"></script>
  <script type="text/javascript"></script>
  
  <!-- success message -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>
