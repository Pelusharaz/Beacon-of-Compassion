<!-- contact messages -->
<?php
require_once 'php/includes/config.php';
if (isset($_POST['contactmsg'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $referals = $_POST['referals'];
  try {
    //code...
    $sql = 'INSERT INTO contact(name,email,message,referals,Date,Time ) VALUES(?,?,?,?,Now(),Now() )';
    $sth = $DBH->prepare($sql);
    $sth->execute(array($name, $email, $message, $referals));
    $_SESSION['success'] = "message sent successfully.";
  } catch (PDOException $e) {
    //throw $th;
    echo $e->getMessage();
  }
  echo "<script>alert('Message sent successfully. We value Your Feedback')</script>
  <script>window.location = 'aboutus.php'</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Beacon of Compassion | About</title>
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
    <link rel="stylesheet" href="css/new-styles.css" />
  </head>
  <body style="overflow-x:hidden;">
    <!-- Navbar -->
    <?php require_once 'php/includes/header.php'; ?>

    <header>
      <!-- Background images -->
      <div class="slideshow-container">
     
      <div class="p-5 text-center bg-image shadow-1-strong"
        style="background-image: url('img/what-we-do.jpg'); height: 550px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">WHAT WE DO</h1>
              <h5 class="mb-3" style="color:rgb(238, 81, 8);">
                  Touching a soul one by one each day
              </h4>
              <a class="links" href="index.php">Home</a> > <a class="links quick-link" href="aboutus.php">What We Do</a>
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

     <div class="what-we-do container">
      <h5 class="what-we-do-header">WHAT WE ENTAIL</h5>
      <br>
      <p class="what-we-do-info">The Beacon of compassion  is a newly established charitable organization 
         founded in Kenya with a noble mission to make a positive impact on society. The inspiration to create
         this foundation stemmed from the unwavering support and generosity of our esteemed sponsors, with Karola 
         serving as our esteemed patron and Sr. Barbra as our dedicated guardian.
         Fueled by a shared sense of compassion and dedication to making a difference, the Beacon of Compassion 
         aims to uphold the values and principles exemplified by our sponsors. Their commitment to philanthropy 
         and social responsibility serves as a guiding light for our foundation as we embark on our journey to create 
         meaningful change in the community.With our recent registration in Kenya, we are now poised to fully realize 
         our mission and vision. The foundation is driven by a deep sense of purpose to address critical social issues 
         and contribute towards the betterment of society. Through strategic initiatives and collaborative efforts, we 
         are determined to bring about sustainable solutions and foster a culture of empathy and kindness.
         As we step into this new chapter, the Beacon of Compassion is dedicated to upholding transparency, integrity, and 
         accountability in all our endeavors. With Karola's patronage and Sr. Barbra's guidance, we are confident in our 
         ability to make a real and lasting impact on the lives of those in need.
         Together, with our sponsors, volunteers, and supporters, we are committed to building a brighter future and 
         creating a world where compassion and generosity prevail

      </p>
      <br>
      <button type="submit" class="donate-button" style="color:white;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">DONATE NOW TO SUPPORT OUR WORK</button>
     </div>
     <br><br>
     <!-- where we support -->
     <div class="support container">
      <div class="row">
        <!-- Photo Grid -->
        <div class="column">
            <div class="image-container bg-image" style="background-image: url('img/kids.jpg'); height: 200px;">
              <div class="support-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;"><br><br>
                    <h4 class="mb-2">BASIC NECESSITIES</h4>
                  </div>
              </div>
            </div>
            <div class="image-container bg-image" style="background-image: url('img/learning.jpg'); height: 200px;">
              <div class="support-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;"><br><br>
                    <h4 class="mb-2">ACADEMIA</h4>
                  </div>
              </div>
            </div>
            
          </div>

          <div class="column">
            <div class="image-container bg-image" style="background-image: url('img/kid-security.jpg'); height: 200px;">
              <div class="support-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;"><br><br>
                    <h4 class="mb-2">SECURITY</h4>
                  </div>
              </div>
            </div>
            <div class="image-container bg-image" style="background-image: url('img/refugee camp.webp'); height: 200px;">
              <div class="support-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;"><br><br>
                    <h4 class="mb-2">EMERGENCIES</h4>
                  </div>
              </div>
            </div>
            
          </div>

          <div class="column">
            <div class="image-container bg-image" style="background-image: url('img/climate-crisis.jpg'); height: 200px;">
              <div class="support-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;"><br><br>
                    <h4 class="mb-2">CLIMATE CRISIS</h4>
                  </div>
              </div>
            </div>
            <div class="image-container bg-image" style="background-image: url('img/hunger-crisis.webp'); height: 200px;">
              <div class="support-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;"><br><br>
                    <h4 class="mb-2">HUNGER CRISIS</h4>
                  </div>
              </div>
            </div>
          </div>

      </div>
          
     </div>
    
     <div class="contact-us">
      <div class="customer-care-img bg-image" style="background-image: url('img/top-kids3.jpg');">
        <!-- <img src="img/top-kids3.jpg" alt="customer-care" style="height:450px;"> -->
      </div>
      <div class="contact-us-info">
        <form action=" " method="POST" style="box-shadow:none;">
          <div class="form-container">
            <div class="container">
              <h3> Want to hear More from us ?<img src="img/icons/services.png" alt="" align="left" width="30"></h3>
              <hr><br>
              <label for="name"><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="name" required>
              <label for="Email"><b>Email</b></label>
              <input type="email" placeholder="Enter email" name="email" required>
              <label for="password"><b>Your Message</b></label>
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

     <div class="p-5 text-center bg-image shadow-1-strong"
        style="background-image: url('img/kid2.jpg'); height: 550px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">A CHILD-RIGHTS APPROACH</h1>
              <p class="mb-3" style="color:white">
                Since Save the Children was founded 100 years ago, we have been committed to ensuring all children's rights 
                are recognised. We promote change from the ground up by engaging children, their families and their communities.
                Together with children, we work with governments and international organisations to ensure children's rights are on the political agenda. We hold leaders to account for the commitments they have made, ensuring systems are in place to protect and provide for all children.
              </p>
           
            </div>
          </div>
        </div>
      </div>

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
