<?php
session_start();
require_once("php/includes/config.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
  switch ($_GET["action"]) {
    case "add":
      if (!empty($_POST["quantity"])) {
        $productByCode = $db_handle->runQuery("SELECT * FROM stories WHERE code='" . $_GET["code"] . "'");
        $itemArray = array($productByCode[0]["code"] => array('storytitle' => $productByCode[0]["storytitle"], 'code' => $productByCode[0]["code"], 'quantity' => $_POST["quantity"], 'price' => $productByCode[0]["price"], 'productimage' => $productByCode[0]["productimage"], 'storyinfo' => $productByCode[0]["storyinfo"]));

        if (!empty($_SESSION["cart_item"])) {
          if (in_array($productByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {
            foreach ($_SESSION["cart_item"] as $k => $v) {
              if ($productByCode[0]["code"] == $k) {
                if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                  $_SESSION["cart_item"][$k]["quantity"] = 0;
                }
                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
              }
            }
          } else {
            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
          }
        } else {
          $_SESSION["cart_item"] = $itemArray;
        }
      }
      break;
    case "remove":
      if (!empty($_SESSION["cart_item"])) {
        foreach ($_SESSION["cart_item"] as $k => $v) {
          if ($_GET["code"] == $k)
            unset($_SESSION["cart_item"][$k]);
          if (empty($_SESSION["cart_item"]))
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
  <script>window.location = 'index.php'</script>";
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
    <link rel="stylesheet" href="css/modified-styles.css" />
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
                Building a brighter future
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
                Creating a world where compassion and generosity prevail
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
                Making a real and lasting impact on the lives of those in need.
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
    <div class="introduction">
        <div class="img">
          <h6 style="font-weight:bolder;color:rgb(238, 81, 8);">WHAT WE DO</h6>
          <h4>Touching a soul one by one each day</h4>
          <!-- <img src="img/home.jpg" class="img-fluid" alt="" style="max-height:100%;">     -->
        </div>
        <div class="info">
        <p class="large-screen">
          Together, with our sponsors, volunteers, and supporters, we are committed to building a 
          brighter future and creating a world where compassion and generosity prevail
        </p>
        <p style="margin-left:40px;" class="small-screen">Together, with our sponsors, volunteers, and 
          supporters, we are 
          <span id="dots">...</span><span id="more">committed to building a brighter future and creating a 
            world where compassion and generosity prevail
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
            .alertMsg {
              display: none;
              padding: 10px 6px;
              border: 1 px solid;
              background: lightgreen;
              bottom: 300px;
              position: fixed;
              z-index: 1;
              border-radius: 20px;
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

    <div class="heading" style="margin-left:auto;margin-right:auto;display:block;text-align:center;">
      <h5 style="font-weight:bold;color:black;">STORIES OF TOUCHED LIVES</h5>
    </div>
    <div class="alertMsg" id="alertMsg">Read stories that touched lives</div>
    <br>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 container">
        <div class="container-fluid">
          <a class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <strong class="text-dark mr-2">stories of touched lives:</strong>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <form action=" " method="POST" style="box-shadow:none;background-color:transparent;">
                  <input type="text" name="search" value="" style="display:none;">
                  <button class="nav-link active" type="submit" name="submit" style="background-color:transparent;border:none;color:white;">All</button>
                </form>
              </li>
              <li class="nav-item">
                <form action=" " method="POST" style="box-shadow:none;background-color:transparent;">
                  <input type="text" name="search" value="Featured" style="display:none;">
                  <button class="nav-link" type="submit" name="submit" style="background-color:transparent;border:none;">Featured</button>
                </form>
              </li>
              <li class="nav-item">
                <form action=" " method="POST" style="box-shadow:none;background-color:transparent;">
                  <input type="text" name="search" value="Local" style="display:none;">
                  <button class="nav-link" type="submit" name="submit" style="background-color:transparent;border:none;">Local</button>
                </form>
              </li>
              <li class="nav-item">
                <form action=" " method="POST" style="box-shadow:none;background-color:transparent;">
                  <input type="text" name="search" value="International" style="display:none;">
                  <button class="nav-link" type="submit" name="submit" style="background-color:transparent;border:none;">International</button>
                </form>
              </li>
            </ul>
            <form class="d-flex input-group w-auto" action=" " method="POST" style="box-shadow:none;background-color:transparent;">
              <input type="text" class="form-control dt-properties-form" placeholder="Search for stories" aria-label="Search" name="search" />
              <button style="margin-bottom:10px;" class="btn btn-outline-primary" type="submit" name="submit" data-mdb-ripple-color="dark">Go
              </button>
            </form>
          </div>
        </div>
      </nav>

      <div class="properties container" id="impact">
      <!--- database property -->
      <section class="text-center mb-4" style="margin-left:auto;margin-right:auto;display:block; margin-top:-30px;" id="store">
        <div class="row">
          <div id="product-grid" class="product-grid">
            <?php
            if (isset($_POST['submit'])) {
              $search = $_POST['search'];
              $product_array = $db_handle->runQuery("SELECT * FROM stories where (category LIKE '%" . $_POST["search"] . "%') OR (storytitle LIKE '%" . $_POST["search"] . "%') OR (storyinfo LIKE '%" . $_POST["search"] . "%') GROUP BY code");
              if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
            ?>
                <a style="color:black;" title="see details of the story" href="services/story.php?story=<?php echo $product_array[$key]["code"]; ?>">
                  <div class="product-item card" style="width:280px;height:500px;">
                    <iframe name="votar" style="display:none;"></iframe>
                    <form method="post" target="votar" action="sharazstore.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>" onsubmit="showMsg()" style="box-shadow:none;">
                    <div class="btn-warning" style="background-color:rgb(238, 81, 8);position:absolute;padding:10px 20px;margin-left:-2px;transform: skew(-20deg);"><?php echo $product_array[$key]["category"]; ?></div>
                      <div class="product-image">
                        <?php if ($product_array[$key]['ext'] == 'mp4') { ?>
                          <video style="width:250px; height:310px;margin-top:-70px;" controls>
                            <source src="<?php echo "php/Admin/stories/" . $product_array[$key]['productimage']; ?>" style="max-width:250px; height:200px;margin-left:auto;margin-right:auto;display:block;">
                          </video>
                        <?php } else { ?>
                          <img src="<?php echo "php/Admin/stories/" . $product_array[$key]['productimage']; ?>" style="width:250px; height:250px;margin-left:auto;margin-right:auto;display:block;">
                        <?php } ?>
                      </div>
                      <div class="product-tile-footer"><br><br><br><br>
                        <div class="product-title">
                          <h5><?php echo $product_array[$key]["storytitle"]; ?></h5>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <p class="card-text show-read-more">
                            <?php echo $product_array[$key]["storyinfo"]; ?>
                          </p>
                          <script>
                            $(document).ready(function() {
                              var maxLength = 50;
                              $(".show-read-more").each(function() {
                                var myStr = $(this).text();
                                if ($.trim(myStr).length > maxLength) {
                                  var newStr = myStr.substring(0, maxLength);
                                  var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                                  $(this).empty().html(newStr);
                                  $(this).append(' <a href="javascript:void(0);" class="read-more">...</a>');
                                  $(this).append('<span class="more-text">' + removedStr + '</span>');
                                }
                              });
                              $(".read-more").click(function() {
                                $(this).siblings(".more-text").contents().unwrap();
                                $(this).remove();
                              });
                            });
                          </script>
                          <style>
                            .show-read-more .more-text {
                              display: none;
                            }
                          </style>
                        </div>

                        <?php
                        require_once 'php/includes/config.php';
                        $sql = "SELECT * FROM events WHERE storyId = '" . $product_array[$key]["code"] . "'";
                        $stmt = $DBH->prepare($sql);
                        $stmt->execute();
                        if ($stmt->rowCount() == 1) {
                          while ($row = $stmt->fetchObject()) {
                        ?>
                            <!-- <a class="btn btn-danger" style="cursor: no-drop;">Property Sold Out</a> -->
                            <a class="btn btn-danger" href="services/story.php?story=<?php echo $product_array[$key]["code"]; ?>">Done</a>
                          <?php }
                        } else { ?>
                          <!-- <button class="viewbtn" onclick="showMsg()">View Property</button> -->
                          <a class="btn viewbtn" href="services/story.php?story=<?php echo $product_array[$key]["code"]; ?>">Upcoming</a>
                        <?php } ?>

                      </div>
                    </form>
                  </div>
                 </a>

                  <!-- success message -->
                <script>
                   function showMsg() {
                   $("#alertMsg").fadeIn('slow', function() {
                   $(this).delay(1500).fadeOut('slow');
                   window.location = 'properties.php'
                  });
                 }
                </script>
                <?php
                }
              }
            } else {
              $product_array = $db_handle->runQuery("SELECT * FROM stories WHERE category = 'featured' GROUP BY code ORDER BY id ASC ");
              if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                ?>
                  <a style="color:black;" title="see details of the story" href="services/story.php?story=<?php echo $product_array[$key]["code"]; ?>">
                  <div class="product-item card" style="width:280px;height:500px;box-shadow:none;">
                    <iframe name="votar" style="display:none;"></iframe>
                    <form method="post" target="votar" action="sharazstore.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>" onsubmit="showMsg()" style="box-shadow:none;">
                      <div class="btn-warning" style="background-color:rgb(238, 81, 8);position:absolute;padding:10px 20px;margin-left:-2px;transform: skew(-20deg);"><?php echo $product_array[$key]["category"]; ?></div>
                      <div class="product-image">
                        <?php if ($product_array[$key]['ext'] == 'mp4') { ?>
                          <video style="width:250px; height:310px;margin-top:-70px;" controls>
                            <source src="<?php echo "php/Admin/stories/" . $product_array[$key]['productimage']; ?>" style="max-width:250px; height:200px;margin-left:auto;margin-right:auto;display:block;">
                          </video>
                        <?php } else { ?>
                          <img src="<?php echo "php/Admin/stories/" . $product_array[$key]['productimage']; ?>" style="width:250px; height:250px;margin-left:auto;margin-right:auto;display:block;">
                        <?php } ?>
                      </div>
                      <div class="product-tile-footer"><br><br><br><br>
                        <div class="product-title">
                          <h5><?php echo $product_array[$key]["storytitle"]; ?></h5>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          
                          <p class="card-text show-read-more">
                            <?php echo $product_array[$key]["storyinfo"]; ?>
                          </p>
                          <script>
                            $(document).ready(function() {
                              var maxLength = 50;
                              $(".show-read-more").each(function() {
                                var myStr = $(this).text();
                                if ($.trim(myStr).length > maxLength) {
                                  var newStr = myStr.substring(0, maxLength);
                                  var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                                  $(this).empty().html(newStr);
                                  $(this).append(' <a href="javascript:void(0);" class="read-more">...</a>');
                                  $(this).append('<span class="more-text">' + removedStr + '</span>');
                                }
                              });
                              $(".read-more").click(function() {
                                $(this).siblings(".more-text").contents().unwrap();
                                $(this).remove();
                              });
                            });
                          </script>
                          <style>
                            .show-read-more .more-text {
                              display: none;
                            }
                          </style>
                        </div>

                        <?php
                        require_once 'php/includes/config.php';
                        $sql = "SELECT * FROM events WHERE storyId = '" . $product_array[$key]["code"] . "'";
                        $stmt = $DBH->prepare($sql);
                        $stmt->execute();
                        if ($stmt->rowCount() == 1) {
                          while ($row = $stmt->fetchObject()) {
                        ?>
                            <!-- <a class="btn btn-danger" style="cursor: no-drop;">Property Sold Out</a> -->
                            <a class="btn btn-danger" href="services/story.php?story=<?php echo $product_array[$key]["code"]; ?>">Done</a>
                          <?php }
                        } else { ?>
                           <!-- <button class="viewbtn" onclick="showMsg()">View Property</button> -->
                           <a class="btn viewbtno" href="services/story.php?story=<?php echo $product_array[$key]["code"]; ?>">Upcoming</a> 
                        <?php } ?>


                      </div>
                    </form>
                  </div>
                  </a>

                 <!-- success message -->
                <script>
                   function showMsg() {
                   $("#alertMsg").fadeIn('slow', function() {
                   $(this).delay(3000).fadeOut('slow');
                   window.location = 'properties.php'
                  });
                 }
                </script>
            <?php
                }
              }
            }
            ?>
          </div>

       </section>
     <!-- end --->
    </div>
      

    <!-- <h5 style="text-align:center;color:black;">STORIES OF TOUCHED LIVES</h5><br><br>
    <div class="comprehensive-services container" id="impact2">

      <div class="services-img-containter"style="margin-left:20px;">
        
        <div class="row"> 
          <div class="column">
            <div class="image-container bg-image" style="background-image: url('img/top-kids.jpg'); height: 200px;">
              <div class="image-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;">
                    <h4 class="mb-2">Kids in the East</h4>
                    <p class="mb-2"> Every child's life matters
                    </p>
                    <a class="btn btn-outline-mask" href="mailto:sharaztechs@gmail.com" role="button">Learn More</a>
                  </div>
              </div>
            </div>
            <div class="image-container bg-image" style="background-image: url('img/top-kids2.jpg'); height: 200px;">
              <div class="image-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;">
                    <h4 class="mb-2">Childrens' Home</h4>
                    <p class="mb-2"> Building a life day by day
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
                    <p class="mb-2">Touching a soul day by day
                    </p>
                    <a class="btn btn-outline-mask" href="mailto:sharaztechs@gmail.com" role="button">Learn More</a>
                  </div>
              </div>
            </div>
            <div class="image-container bg-image" style="background-image: url('img/top-kids.jpg'); height: 200px;">
              <div class="image-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;">
                    <h4 class="mb-2">School Projects</h4>
                    <p class="mb-2"> Getting education to all
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
                    <p class="mb-2"> creating a world where compassion and generosity prevail 
                    </p>
                    <a class="btn btn-outline-mask" href="mailto:sharaztechs@gmail.com" role="button">Learn More</a>
                  </div>
              </div>
            </div>
            <div class="image-container bg-image" style="background-image: url('img/top-kids2.jpg'); height: 200px;">
              <div class="image-mask">
                  <div class="image-maskinfo"style="text-align: center;padding:15px; 0px 15px 0px;">
                    <h4 class="mb-2">Clean water projects</h4>
                    <p class="mb-2"> Expanding and sharing life
                    </p>
                    <a class="btn btn-outline-mask" href="mailto:sharaztechs@gmail.com" role="button">Learn More</a>
                  </div>
              </div>
            </div>
            
          </div>

          
          
        </div>
      </div>
     </div> -->
     

     <div class="company-profile">
      <div class="profile-text">
        <h4>Download a copy of our</h4st>
        <h6 >Company Profile...</h6>
      </div>

      <div class="profile-button">
        <a class="btn btn-outline-mask" target="blank" href="img/profile.pdf" role="button"><i class="fa fa-arrow-circle-right fa-lg" style="margin-right:10px;"></i>View Profile</a>
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

     <?php
                require_once 'php/includes/config.php';
                $sql="SELECT * FROM blogs ORDER BY id DESC LIMIT 1";
                $stmt = $DBH->prepare($sql);
                $stmt->execute();
                while($row = $stmt->fetchObject()) {
             ?>
            
             <div class="col-lg-6 blog">
               <div class="card" style="width:300px;height:550px;margin:0px -10px 10px -10px; background-color:transparent;box-shadow:none;color:black;padding:0px;" >
                <div class="blog-img" style="margin:10px;">
                  <?php if($row->ext == 'mp4'){ ?>
                  <video style="width:280px; height:200px;" controls>
                   <source src="<?php echo "php/Admin/blogs/". "{$row->blogimage}";?>">
                  </video>
                  <?php }else{?>
                      <img src="<?php echo "php/Admin/blogs/". "{$row->blogimage}";?>"
                      class="img-fluid" style="width:300px; height:200px;" />
                  <?php }?>
                </div>
                <div class="card-body">
                  <p style="color:black;font-size:15px;"><i class="fa fa-user-circle fa-lg" aria-hidden="true" style="width:100%;"> By <?php echo $row->postedby ?></i></p>
                  <div class="date"><h6 style="color:grey;"> <?php echo $row->dateposted ?></h6></div>
                  <div class="Blog-title"><h4 style="color:black; font-weight: bolder;"><?php echo $row->blogtitle ?></h4></div>
                  <div class="information">
                    <p id="text" class="show-read-more"><?php echo $row->bloginfo ?></p>
                      <script>
                        $(document).ready(function() {
                          var maxLength = 100;
                          $(".show-read-more").each(function() {
                            var myStr = $(this).text();
                            if ($.trim(myStr).length > maxLength) {
                              var newStr = myStr.substring(0, maxLength);
                              var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                              $(this).empty().html(newStr);
                              $(this).append(' <a href="javascript:void(0);" class="read-more">...</a>');
                              $(this).append('<span class="more-text">' + removedStr + '</span>');
                            }
                          });
                          $(".read-more").click(function() {
                            $(this).siblings(".more-text").contents().unwrap();
                            $(this).remove();
                          });
                        });
                      </script>
                      <style>
                       .show-read-more .more-text {
                        display: none;
                       }
                      </style>
                    <a type="submit" name="submit" href="services/blog.php?blog=<?php echo $row->id ?>" class="btn blogbtn"> <i class="fa fa-arrow-circle-right fa-lg" ></i> Read More</a>
                  </div>
                </div>
                  
               </div>
             </div>
  
            <?php }?>
      <!-- <div class="blog-img" style="background-image: url('img/top-kids2.jpg');background-size: contain; height: 200px;">
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
      </div> -->
     </div>
     <div class="other-blogs">

          <div class="row row-blog" style="overflow:scroll; height:900px;">
            
            <?php
                require_once 'php/includes/config.php';
                $sql="SELECT * FROM blogs ORDER BY id DESC LIMIT 4";
                $stmt = $DBH->prepare($sql);
                $stmt->execute();
                while($row = $stmt->fetchObject()) {
             ?>
            
             <div class="col-lg-6 blog">
               <div class="card" style="width:300px;height:550px;margin:0px 10px 20px 5px; background-color:#f1f1f1;color:black;padding:0px;" >
                <div class="blog-img" style="margin:10px;">
                  <?php if($row->ext == 'mp4'){ ?>
                  <video style="width:280px; height:200px;" controls>
                   <source src="<?php echo "php/Admin/blogs/". "{$row->blogimage}";?>">
                  </video>
                  <?php }else{?>
                      <img src="<?php echo "php/Admin/blogs/". "{$row->blogimage}";?>"
                      class="img-fluid" style="width:300px; height:200px;" />
                  <?php }?>
                </div>
                <div class="card-body">
                  <p style="color:black;font-size:15px;"><i class="fa fa-user-circle fa-lg" aria-hidden="true" style="width:100%;"> By <?php echo $row->postedby ?></i></p>
                  <div class="date"><h6 style="color:grey;"> <?php echo $row->dateposted ?></h6></div>
                  <div class="Blog-title"><h4 style="color:black; font-weight: bolder;"><?php echo $row->blogtitle ?></h4></div>
                  <div class="information">
                    <p id="text" class="show-read-more"><?php echo $row->bloginfo ?></p>
                      <script>
                        $(document).ready(function() {
                          var maxLength = 100;
                          $(".show-read-more").each(function() {
                            var myStr = $(this).text();
                            if ($.trim(myStr).length > maxLength) {
                              var newStr = myStr.substring(0, maxLength);
                              var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                              $(this).empty().html(newStr);
                              $(this).append(' <a href="javascript:void(0);" class="read-more">...</a>');
                              $(this).append('<span class="more-text">' + removedStr + '</span>');
                            }
                          });
                          $(".read-more").click(function() {
                            $(this).siblings(".more-text").contents().unwrap();
                            $(this).remove();
                          });
                        });
                      </script>
                      <style>
                       .show-read-more .more-text {
                        display: none;
                       }
                      </style>
                    <a type="submit" name="submit" href="services/blog.php?blog=<?php echo $row->id ?>" class="btn blogbtn"> <i class="fa fa-arrow-circle-right fa-lg" ></i> Read More</a>
                  </div>
                </div>
                  
               </div>
             </div>
  
            <?php }?>
  
          </div>
      <!-- <div class="row">
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
      </div> -->

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
