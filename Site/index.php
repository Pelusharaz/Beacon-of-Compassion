<?php
      session_start();
      require_once("php/includes/config.php");
      $db_handle = new DBController();
      if(!empty($_GET["action"])) {
      switch($_GET["action"]) {
	    case "add":
        if(!empty($_POST["quantity"])) {
          $productByCode = $db_handle->runQuery("SELECT * FROM products WHERE code='" . $_GET["code"] . "'");
          $itemArray = array($productByCode[0]["code"]=>array('productname'=>$productByCode[0]["productname"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'productimage'=>$productByCode[0]["productimage"], 'productinfo'=>$productByCode[0]["productinfo"]));
          
          if(!empty($_SESSION["cart_item"])) {
            if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
              foreach($_SESSION["cart_item"] as $k => $v) {
                  if($productByCode[0]["code"] == $k) {
                    if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                      $_SESSION["cart_item"][$k]["quantity"] = 0;
                    }
                    $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                  }
              }
            } else {
              $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
            }
          } else {
            $_SESSION["cart_item"] = $itemArray;
          }
        }
      break;
      case "remove":
        if(!empty($_SESSION["cart_item"])) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($_GET["code"] == $k)
                unset($_SESSION["cart_item"][$k]);				
              if(empty($_SESSION["cart_item"]))
                unset($_SESSION["cart_item"]);
          }
        }
      break;
      case "empty":
        unset($_SESSION["cart_item"]);
      break;
    }
  }
  ?>


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
    <link rel="stylesheet" href="css/modifiedstyles.css" />
  </head>
  <body style="overflow-x:hidden;">
    <!-- Navbar -->
    <?php require_once 'php/includes/header.php'; ?>

    <header>
      <!-- Background images -->
      <div class="slideshow-container">
     
      <div class="p-5 text-center bg-image shadow-1-strong"
        style="background-image: url('img/top-kids.jpg'); height: 550px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Beacon of Compassion Foundation</h1>
              <h5 class="mb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                | Obcaecati nulla repudiandae deserunt odit vel fuga iste 
              </h4>
              <a class="btn btn-outline-light btn-lg" href="mailto:sharaztechs@gmail.com"  role="button">Touch a Heart !</a>
            </div>
          </div>
        </div>
      </div>

      <div class="p-5 text-center bg-image shadow-1-strong"
        style="background-image: url('img/top-kids2.jpg'); height: 550px">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Help save a life today</h1>
              <h5 class="mb-3">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                 | Obcaecati nulla repudiandae deserunt odit vel fuga iste
              </h4>
              <a class="btn btn-outline-light btn-lg" href="mailto:sharaztechs@gmail.com"  role="button">Touch a Heart !</a>
            </div>
          </div>
        </div>
      </div>

      <div class="p-5 text-center bg-image shadow-1-strong"
        style="background-image: url('img/top-kids3.jpg'); height: 550px">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Touch a heart</h1>
              <h5 class="mb-3">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              </h4>
              <a class="btn btn-outline-light btn-lg" href="mailto:sharaztechs@gmail.com" role="button">Touch a Heart !</a>
            </div>
          </div>
        </div>
      </div>
      </div>
      <br>
       <div class="slide-dots" style="text-align:center"style="display:;">
          <span class="dot"style="display:;"></span> 
          <span class="dot"style="display:;"></span> 
          <span class="dot"style="display:;"></span> 
        </div>

        <!-- Modal for enquiries -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <legend class="modal-title " id="staticBackdropLabel" style="border-radius:20px;background-color:blue;"> Touch a Soul with your Generosity</legend>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <form action="index.php" method="POST" enctype="multipart/form-data" style="box-shadow:none;">
            <div class="modal-body">
              <fieldset style="margin-top:-40px;">
                <label for="booktitle" style="font-weight:bold; font-size:15px;">Select Payment Method <span>*</span></label>
                <div class="payment-methods">
                <div class="item" style="display:flex; width:33%;">
                  <input id="information" type="radio" name="checkbox" required />
                  <label for="booktitle">Online-Banking</label>
                </div>
                <div class="item" style="display:flex; width:33%;">
                  <input id="information" type="radio" name="checkbox" required />
                  <label for="booktitle">M-Pesa</label>
                </div>
                <div class="item" style="display:flex; width:33%;">
                  <input id="information" type="radio" name="checkbox" required />
                  <label for="booktitle">Master Card</label>
                </div>
                </div>
                
                <div class="item" style="display:flex;">
                  <button type="submit" name="enquiries" class="btn btn-primary btn-lg" role="button" style="margin-right:-10px;background-color:orangered; width:45%;height:34px;">Donation Amount</button>
                  <input id="information" type="text" name="checkbox" required style="width:55%;"/>
                </div>

                <br>
                <div class="item" style="display:flex;">
                  <input id="information" type="checkbox" name="checkbox" required style="width:3%; margin: -10px 10px 0px 0px;" />
                  <label for="booktitle">Make this Donation every<span></span></label>
                  <select style="padding-top:8px; padding-bottom:8px;margin:-10px 0px 0px 8px;" name="type" required>
                      <option value="" disabled selected>Select frequency</option>
                      <option value="Compliment">Day</option>
                      <option value="Complaint">Week</option>
                      <option value="Interest">Month</option>
                      <option value="Interest">Quater</option>
                      <option value="Interest">Year</option>
                  </select>
                </div>

              </fieldset>

              <fieldset>

                <label for="booktitle" style="font-weight:bold; font-size:15px;">Personal Information <span>*</span></label>
                <div class="columns">
                  <div class="item">
                    <label for="booktitle">Name<span>*</span></label>
                    <input id="booktitle" type="text" name="name" required />
                  </div>
                  <div class="item">
                    <label for="information"> Phone<span>*</span></label>
                    <input id="information" type="tel" name="phone" required />
                  </div>
                  <div class="item">
                    <label for="information"> Email<span>*</span></label>
                    <input id="information" type="email" name="email" required />
                  </div>

                </div>
                
                <div class="item" style="display:flex;">
                  <input id="information" type="checkbox" name="checkbox" required />
                  <label for="booktitle" style="font-weight:bold; font-size:15px;" >Make this an anonymous Donation<span>*</span></label>
                  <style>
                    input[type=checkbox] {
                      display: inline;
                      margin-top: 5px;
                      width: 8%;
                    }
                    input[type=radio] {
                    display: inline;
                    margin-top: 5px;
                    width: 20%;
                    }
                  </style>
                </div>
                <div class="item">
                  <label for="cover">Leave a comment<span>*</span></label>
                  <textarea type="text" name="information" required></textarea>
                </div>
                <p>
                In order to make an offline donation we ask that you please follow these instructions: <br>

                <ol>
                  <li>Make a check payable to "Beacon of compassion Foundation"</li>
                  <li>On the memo line of the check, please indicate that the donation is for "Beacon of compassion Foundation"</li>
                  <li> Please mail your check to:</li>
                </ol>
                Beacon of compassion Foundation <br>
                PO BOX 75517-00200 <br>
                Nairobi, Kenya <br>

                All contributions will be gratefully acknowledged and are tax deductible. Thank you
                </p>
                <div class="item" style="display:flex;">
                  <input id="information" type="checkbox" name="checkbox" required />
                  <label for="booktitle" style="font-weight:bold; font-size:15px;" >I agree with Terms and conditions<span>*</span></label>
                </div>
                <a href="policies.php">Terms and conditions</a>
              </fieldset>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="enquiries" class="btn btn-primary">Send</button>
            </div>
          </form>

        </div>
      </div>
    </div>

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
    <div class="introduction">
        <div class="img">
          <h6 style="font-weight:bolder;color:rgb(238, 81, 8);">WHAT WE DO</h6>
          <h4>Touching a soul one by one each day</h4>
          <!-- <img src="img/home.jpg" class="img-fluid" alt="" style="max-height:100%;">     -->
        </div>
        <div class="info">
        <p class="large-screen">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio libero facilis sequi error, iusto 
          ex porro. Distinctio eos magni alias quae sapiente tempora provident nemo! Facilis, eius! Explicabo,
          autem in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio libero facilis 
          sequi error, iusto
        </p>
        <p style="margin-left:40px;" class="small-screen">Lorem ipsum dolor sit amet consectetur adipisicing 
          elit. Optio libero facilis sequi error, iusto 
          <span id="dots">...</span><span id="more">Distinctio eos magni alias quae sapiente tempora 
            provident nemo! Facilis, eius! Explicabo, autem in! Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Optio libero facilis sequi error, iusto
          </span></p>
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

        <button onclick="myFunction()" id="myBtn" class="small-screen funcbtn" style="margin-left:40px;">Read more</button>
        </div>
    </div>
    <p style="text-align:center; margin-top:-50px;color:white;">Join us as we save a life day by day <a style="color:rgb(238, 81, 8);text-decoration:underline;" href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Be a part of the journey</a></p>
    <br>

    <h5 style="text-align:center;color:black;">STORIES OF TOUCHED LIVES</h5><br><br>
    <div class="comprehensive-services container" id="impact">

      <div class="services-img-containter"style="margin-left:20px;">
        <!-- Photo Grid -->
        <div class="row"> 
          <div class="column">
            <div class="image-container bg-image" style="background-image: url('img/top-kids.jpg'); height: 200px;">
              <div class="image-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;">
                    <h4 class="mb-2">Kids in the East</h4>
                    <p class="mb-2"> Lorem ipsum dolor sit amet,
                    </p>
                    <a class="btn btn-outline-mask" href="mailto:sharaztechs@gmail.com" role="button">Learn More</a>
                  </div>
              </div>
            </div>
            <div class="image-container bg-image" style="background-image: url('img/top-kids2.jpg'); height: 200px;">
              <div class="image-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;">
                    <h4 class="mb-2">Childrens Home</h4>
                    <p class="mb-2"> Lorem ipsum dolor sit amet,
                    </p>
                    <a class="btn btn-outline-mask" href="mailto:sharaztechs@gmail.com" role="button">Learn More</a>
                  </div>
              </div>
            </div>
            
          </div>

          <div class="column">
            <div class="image-container bg-image" style="background-image: url('img/top-kids3.jpg'); height: 200px;">
              <div class="image-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;">
                    <h4 class="mb-2">Touch a Heart</h4>
                    <p class="mb-2"> Lorem ipsum dolor sit amet,
                    </p>
                    <a class="btn btn-outline-mask" href="mailto:sharaztechs@gmail.com" role="button">Learn More</a>
                  </div>
              </div>
            </div>
            <div class="image-container bg-image" style="background-image: url('img/top-kids.jpg'); height: 200px;">
              <div class="image-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;">
                    <h4 class="mb-2">School Projects</h4>
                    <p class="mb-2"> consequuntur, reiciendis dolor amet modi unde eos libero.
                    </p>
                    <a class="btn btn-outline-mask" href="mailto:sharaztechs@gmail.com" role="button">Learn More</a>
                  </div>
              </div>
            </div>
            
          </div>

          <div class="column">
            <div class="image-container bg-image" style="background-image: url('img/top-kids3.jpg'); height: 200px;">
              <div class="image-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;">
                    <h4 class="mb-2">Volunteer projects</h4>
                    <p class="mb-2"> velit adipisci dolorum recusandae. Eveniet.
                    </p>
                    <a class="btn btn-outline-mask" href="mailto:sharaztechs@gmail.com" role="button">Learn More</a>
                  </div>
              </div>
            </div>
            <div class="image-container bg-image" style="background-image: url('img/top-kids2.jpg'); height: 200px;">
              <div class="image-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;">
                    <h4 class="mb-2">Clean water projects</h4>
                    <p class="mb-2"> Recusandae, molestias maxime! Blanditiis, totam voluptates.
                    </p>
                    <a class="btn btn-outline-mask" href="mailto:sharaztechs@gmail.com" role="button">Learn More</a>
                  </div>
              </div>
            </div>
            
          </div>

          
          
        </div>
      </div>
     </div>
     <br>

     <div class="company-profile">
      <div class="profile-text">
        <h4>Download a copy of our</h4st>
        <h6 >Company Profile...</h6>
      </div>

      <div class="profile-button">
        <a class="btn btn-outline-mask" href="mailto:sharaztechs@gmail.com" role="button"><i class="fa fa-arrow-circle-right fa-lg" style="margin-right:10px;"></i>View Profile</a>
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


     <br><br>
     <!-- Library -->
     <div class="library-header" style="text-align:center;color:black;">
      <p>LATEST NEWS</p>
      <h4 style="margin:-10px 0px 20px 0px;">Recent articles</h4>
     </div>

     <div class="blogs">
     <div class="current-blog">
      <div class="blog-img" style="background-image: url('img/top-kids2.jpg');background-size: contain; height: 200px;">
       <div class="blog-mask" id="blog-mask"></div>
      </div>
      <script>
        $('#blog-mask').hover(
       function(){ $(this).removeClass('blog-mask') },
       function(){ $(this).addClass('blog-mask') }
	     )
      </script>
      <h6 style="margin:-30px 10px 0px 20px;color:white;"><i class="fa fa-user-circle fa-lg" aria-hidden="true" style="width:100%;"> by admin</i></h6>
      <br><br>
      <div class="date"><h6>16th Jan 2024</h6></div>
      <div class="Blog-title"><h4 style="color:black;">THAILAND</h4></div>
      <div class="info"style="margin-left:0px;width:100%;">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ipsa, cumque velit delectus, unde 
          reprehenderit laudantium eum eius asperiores, a iusto dolorem. Doloribus quibusdam fuga, nulla alias 
          rem officia dolorem.
        </p>
        <a class="btn blogbtn" role="button"><i class="fa fa-arrow-circle-right fa-lg" ></i>  Read More</a>
      </div>
     </div>
     <div class="other-blogs">
      <div class="row">
        <div class="column">

          <div class="blog" style="margin:0px 10px 0px 10px;background-color:#f1f1f1;padding:30px;">
          <div class="blog-img" style="background-image: url('img/top-kids.jpg');background-size: contain; height: 200px;">
            <div class="blog-mask" id="blog-mask2"></div>
          </div>
           <script>
            $('#blog-mask2').hover(
            function(){ $(this).removeClass('blog-mask') },
            function(){ $(this).addClass('blog-mask') }
	          )
           </script>
           <h6 style="margin:-30px 10px 0px 20px;color:white;"><i class="fa fa-user-circle fa-lg" aria-hidden="true" style="width:100%;"> by admin</i></h6>
           <br><br>
           <div class="date"><h6>16th Jan 2024</h6></div>
           <div class="Blog-title"><h4 style="color:black;">Floods in Mathare</h4></div>
           <div class="info"style="margin-left:0px;width:100%;">
             <p>
            
             </p>
             <a class="btn blogbtn" role="button"><i class="fa fa-arrow-circle-right fa-lg" ></i>  Read More</a>
           </div>
          </div>

          <div class="blog" style="margin:20px 10px 0px 10px;background-color:#f1f1f1;padding:30px;">
          <div class="blog-img" style="background-image: url('img/top-kids3.jpg');background-size: contain; height: 200px;">
            <div class="blog-mask" id="blog-mask3"></div>
          </div>
           <script>
            $('#blog-mask3').hover(
            function(){ $(this).removeClass('blog-mask') },
            function(){ $(this).addClass('blog-mask') }
	          )
           </script>
           <h6 style="margin:-30px 10px 0px 20px;color:white;"><i class="fa fa-user-circle fa-lg" aria-hidden="true" style="width:100%;"> by admin</i></h6>
           <br><br>
           <div class="date"><h6>16th Jan 2024</h6></div>
           <div class="Blog-title"><h4 style="color:black;">Fire Disaster in Eastlands</h4></div>
           <div class="info"style="margin-left:0px;width:100%;">
             <p>
            
             </p>
             <a class="btn blogbtn" role="button"><i class="fa fa-arrow-circle-right fa-lg" ></i>  Read More</a>
           </div>
          </div>

        </div>
        <div class="column">

          <div class="blog" style="margin:0px 10px 0px 10px;background-color:#f1f1f1;padding:30px;">
          <div class="blog-img" style="background-image: url('img/top-kids2.jpg');background-size: contain; height: 200px;">
            <div class="blog-mask" id="blog-mask4"></div>
          </div>
           <script>
            $('#blog-mask4').hover(
            function(){ $(this).removeClass('blog-mask') },
            function(){ $(this).addClass('blog-mask') }
	          )
           </script>
           <h6 style="margin:-30px 10px 0px 20px;color:white;"><i class="fa fa-user-circle fa-lg" aria-hidden="true" style="width:100%;"> by admin</i></h6>
           <br><br>
           <div class="date"><h6>16th Jan 2024</h6></div>
           <div class="Blog-title"><h4 style="color:black;">War in Ukraine</h4></div>
           <div class="info"style="margin-left:0px;width:100%;">
             <p>
            
             </p>
             <a class="btn blogbtn" role="button"><i class="fa fa-arrow-circle-right fa-lg" ></i>  Read More</a>
           </div>
          </div>

          <div class="blog" style="margin:20px 10px 0px 10px;background-color:#f1f1f1;padding:30px;">
          <div class="blog-img" style="background-image: url('img/top-kids.jpg');background-size: contain; height: 200px;">
            <div class="blog-mask" id="blog-mask5"></div>
          </div>
           <script>
            $('#blog-mask5').hover(
            function(){ $(this).removeClass('blog-mask') },
            function(){ $(this).addClass('blog-mask') }
	          )
           </script>
           <h6 style="margin:-30px 10px 0px 20px;color:white;"><i class="fa fa-user-circle fa-lg" aria-hidden="true" style="width:100%;"> by admin</i></h6>
           <br><br>
           <div class="date"><h6>16th Jan 2024</h6></div>
           <div class="Blog-title"><h4 style="color:black;">Global Hunger</h4></div>
           <div class="info"style="margin-left:0px;width:100%;">
             <p>
            
             </p>
             <a class="btn blogbtn" role="button"><i class="fa fa-arrow-circle-right fa-lg" ></i>  Read More</a>
           </div>
          </div>
          
        </div>
      </div>

     </div>
     </div>

    <br><br>
      
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
