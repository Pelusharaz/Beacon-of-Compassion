
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
        style="background-image: url('img/volunteer.jpg'); height: 550px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">VOLUNTEER WITH US</h1>
              <h5 class="mb-3" style="color:rgb(238, 81, 8);">
                  Changing the world day by day
              </h4>
              <a class="links" href="index.php">Home</a> > <a class="links quick-link" href="volunteer.php">Volunteer with us</a>
            </div>
          </div>
        </div>
      </div>
      <br>
       

    <!-- payment modal-->
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
              background-color: blue;
              width:100%;
              margin-top:-40px;
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

    
     <div class="contact-us">
      <div class="contact-us-info" style="width:100%;">
        <form action=" " method="POST" style="box-shadow:none;">
          <div class="form-container">
            <div class="container">
              <h3><i class="fa fa-handshake fa-lg" width="50"></i> Volunteer Form </h3><br>
              <h5 style="color:orangered;">Apply to volunteer</h5>
              <hr>
              <label for="name"><b>Name</b><span>*</span></label>
              <input type="text" placeholder="Enter full name" name="name" required>
              <label for="gender"><b>Gender</b></label><br>
              <div class="email-phone" style="display:flex;">
                <div class="gender" style="width:50%;">
                  <select style="padding:8px 0px 8px 0px;width:98%;"name="type" required>
                    <option value="" disabled selected>Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                    <option value="rather-not-say">Rather-not-say</option>
                  </select><br>
                </div>
                <div class="address" style="margin-top:-20px;width:50%;">
                  <label for="Address *"><b>Address<span>*</span></b></label><br>
                  <input type="email" placeholder="Enter address" name="Address *" required>
                </div>
              </div>
              <div class="email-phone" style="display:flex;">
                <div class="phone" style="width:50%;">
                  <label for="Phone"><b>Phone</b><span>*</span></label><br>
                  <input type="phone" placeholder="E.g +2547 96 526 231" name="phone" required>
                </div>
                <div class="mail" style="width:50%;">
                  <label for="Email"><b>Email</b></label><br>
                  <input type="email" placeholder="Enter email" name="email" required>
                </div>
              </div><br>
              <h5 style="color:orangered;">Emergency Contact Information</h5>
              <hr>
              <label for="name"><b>Emergency Contact Name</b><span>*</span></label>
              <input type="text" placeholder="Enter full name" name="name" required>
              <div class="email-phone" style="display:flex;">
                <div class="phone" style="width:50%;">
                  <label for="Phone"><b>Emergency Contact Phone</b><span>*</span></label><br>
                  <input type="phone" placeholder="Enter phone number" name="phone" required>
                </div>
                <div class="mail" style="width:50%;">
                  <label for="Email"><b>Emergency Contact Email</b><span>*</span></label><br>
                  <input type="email" placeholder="Enter email" name="email" required>
                </div>
              </div><br>
              <h5 style="color:orangered;">Volunteer Details</h5>
              <hr>
              <label for="name"><b>Which days of the week are you available ?</b><span>*</span></label>
              <input type="text" placeholder="E.g Mon, Tue, Wed, Thur, Fri, Sat,Sun, TBD, No Preference" name="name" required>
              <label for="name"><b>What time do you prefer ?</b><span>*</span></label>
              <input type="text" placeholder="E.g Morning, Afternoon, Evening" name="name" required>

              <label for="password"><b>Describe your skills, Passion and Qualifications</b></label>
              <textarea type="text" name="message" placeholder="Enter message" required></textarea>
              <label for="refreral"><b>How did you hear about us</b></label>
              <input type="text" placeholder="We appreciate the support" name="referals"><br>
              <h5 style="color:orangered;">Volunteer Authorizations</h5>
              <hr>
              <label for="password"><b>Background Check <span>*</span></b></label><br>
              <input id="information" type="checkbox" name="checkbox" required />
              <label for="booktitle" style="font-size:15px;" >I authorize and consent to a background check conducted by this organization<span>*</span></label><br>
              <style>
                input[type=checkbox] {
                display: inline;
                margin-left: 5px -10px 0px -10px;
                width: 8%;
              }
              </style>

              <button type="submit" class="form-button" name="contactmsg" style="color:white;">Send</button>

            </div>
          </div>
        </form>
      </div>
     </div>
     <br>

    <br><br>
    <h4 class="mb-3" style="color:black;">TOGETHER WE ARE STRONGER</h4>
      
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
