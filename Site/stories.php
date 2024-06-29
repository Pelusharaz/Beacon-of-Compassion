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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>BOC | Stories</title>
    <!-- Tees Icon -->
    <link rel="icon" href="img/Golden chance logo.png"/>
    <!-- Badge Icons from Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"/>

    <!-- length of properties -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Fonts from Google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>
    <!-- Styles -->
    <link href="css/cart.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/extrastyles.css" />
    <link rel="stylesheet" href="php/Admin/css/admin.css" />
    <link rel="stylesheet" href="css/modified-styles.css" />
  </head>
  <body>
    <header>
      <!-- Navbar -->
      <?php require_once 'php/includes/header.php'; ?>
      
      <style>
        #video-background{
          width:100vw;
          height:100vh;
          object-fit:cover;
          left:0;
          right:0;
          top:0;
          bottom:0;
          z-index: -1;
        }

        
      </style>
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
        .dot {
          height: 15px;
          width: 15px;
          bottom: 0px;
          background-color: aqua;
          border-radius: 50%;
          margin-top: -280px!important;
          display: inline-block;
          transition: background-color 0.6s ease;
          }

        .active {
           background-color: white;
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
        /*viewcbtn*/
        .viewbtn{
          height:15%;
          text-align:center;
          opacity: 1;
          background: rgb(241, 50, 194);
          color:#fff;
          border-radius:25px;
          padding:15px;
          width:100%;
        }
        .viewbtn:hover{
          background:red;
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

        </script>


    </header>

    <main class="mt-5">

    <div class="golden chance properties" style="margin-left:auto;margin-right:auto;display:block;text-align:center;">
      <h4 style="color:blue; font-weight:bolder;" >STORIES OF TOUCHED LIVES</h4>
    </div>
    <div class="alertMsg" id="alertMsg">Thank you for showing interest in our stories</div>
    <!-- <div class="alertMsg" id="alertMsg2">Thank you for Contacting us an agent will be with you Shortly</div> -->
    <br>
    </div>

      <div class=" ">
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

        <!--- database property -->
        
        <section class="text-center mb-4" style="margin-top:-90px;margin-left:auto;margin-right:auto;display:block;overflow-x:hidden;" id="store" >
        <div class="row" >
        <div id="product-grid">
        <?php
            if (isset($_POST['submit'])) {
              $search = $_POST['search'];
              $product_array = $db_handle->runQuery("SELECT * FROM stories where (category LIKE '%" . $_POST["search"] . "%') OR (storytitle LIKE '%" . $_POST["search"] . "%') OR (storyinfo LIKE '%" . $_POST["search"] . "%')GROUP BY code");
              if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
            ?>
                <a style="color:black;" title="see details of property" href="services/story.php?story=<?php echo $product_array[$key]["code"]; ?>">
                  <div class="product-item card" style="width:270px;height:450px;">
                    <iframe name="votar" style="display:none;"></iframe>
                    <form method="post" target="votar" action="sharazstore.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>" onsubmit="showMsg()" style="box-shadow:none;">
                    <div class="btn-warning" style="position:absolute;padding:10px 20px;margin-left:-2px;transform: skew(-20deg);"><?php echo $product_array[$key]["category"]; ?></div>
                      <div class="product-image">
                        <?php if ($product_array[$key]['ext'] == 'mp4') { ?>
                          <video style="width:300px; height:310px;margin-top:-70px;" controls>
                            <source src="<?php echo "php/Admin/stories/" . $product_array[$key]['productimage']; ?>" style="max-width:250px; height:200px;margin-left:auto;margin-right:auto;display:block;">
                          </video>
                        <?php } else { ?>
                          <img src="<?php echo "php/Admin/stories/" . $product_array[$key]['productimage']; ?>" style="width:300px; height:250px;margin-left:auto;margin-right:auto;display:block;">
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
                              var maxLength = 60;
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
                      <?php
                        require_once 'php/includes/config.php';
                        $sql = "SELECT * FROM events WHERE storyId = '" . $product_array[$key]["code"] . "'";
                        $stmt = $DBH->prepare($sql);
                        $stmt->execute();
                        if ($stmt->rowCount() == 1) {
                          while ($row = $stmt->fetchObject()) {
                        ?>
                            <a class="btn btn-danger" style="cursor: no-drop;">Done</a>
                          <?php }
                        } else { ?>
                          <a class="viewbtn" >Upcoming</a>
                      <?php } ?>
            
                  </div> 
    
                 </div>
                 </form>
		            </div>
              </a>
        <?php
        }
      }
    }else{
      $product_array = $db_handle->runQuery("SELECT * FROM stories GROUP BY code ORDER BY id ASC ");
      if (!empty($product_array)) {
        foreach ($product_array as $key => $value) {
        ?>
          <a style="color:black;" title="see details of property" href="services/story.php?story=<?php echo $product_array[$key]["code"]; ?>">
          <div class="product-item card" style="width:270px;height:450px;box-shadow:none;">
            <iframe name="votar" style="display:none;"></iframe>
            <form method="post" target="votar" action="sharazstore.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>" onsubmit="showMsg()" style="box-shadow:none;">
              <div class="btn-warning" style="position:absolute;padding:10px 20px;margin-left:-2px;transform: skew(-20deg);"><?php echo $product_array[$key]["category"]; ?></div>
              <div class="product-image">
                <?php if ($product_array[$key]['ext'] == 'mp4') { ?>
                  <video style="width:300px; height:310px;margin-top:-70px;" controls>
                    <source src="<?php echo "php/Admin/stories/" . $product_array[$key]['productimage']; ?>" style="max-width:250px; height:200px;margin-left:auto;margin-right:auto;display:block;">
                  </video>
                <?php } else { ?>
                  <img src="<?php echo "php/Admin/stories/" . $product_array[$key]['productimage']; ?>" style="width:300px; height:250px;margin-left:auto;margin-right:auto;display:block;">
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
                      var maxLength = 60;
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
          <?php
            require_once 'php/includes/config.php';
            $sql="SELECT * FROM events WHERE storyId = '".$product_array[$key]["code"]."'";
            $stmt = $DBH->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount() == 1) {
            while($row = $stmt->fetchObject()) {
            ?>
        <a class="btn btn-danger" style="cursor: no-drop;">Done</a>
        <?php }}else{?>
          <a class="viewbtn" style="cursor: pointer;"> Upcoming </a>
       <?php }?>
      </div> 
			
			</div>
			</form>
    </div>
    </a>
    <?php
        }
      }
    }
    ?>
    </div>


    <!-- success message -->
    <script>
      function showMsg()
      {
      $("#alertMsg").fadeIn('slow', function () {
      $(this).delay(1000).fadeOut('slow');
      window.location = 'properties.php'
      });
    }

    // function showMsg2()
    //   {
    //   $("#alertMsg2").fadeIn('slow', function () {
    //   $(this).delay(2000).fadeOut('slow');
    //   });
    // }
    </script>

   <style>
    .alertMsg
    {
     display: none;
     padding: 10px 6px;
     border: 1 px solid;
     background:lightgreen;
     bottom: 300px;
     position: fixed;
     z-index: 1;
     border-radius:20px;
    }
    
    .about-us{
      display:flex;
      justify-content: center;
      margin:10px 10px;
      background-color: rgba(0, 0, 0, 0.2);
      padding-top:20px;
      
    }
    .who-we-are{
      width:30%;
    }
    .core-values{
      width:30%;
    }
    .contacts{
      width:30%;
    }
    .links{
      color:black;
    }
    .reach-us li{
      list-style-type:none;
    }
    .values li{
      list-style:none;
    }
    .values li:before{
      content:"\2714\0020";
    }
    .small-screen-logo{
      display:none;
    }
    .dt-properties-form{
       margin-left:-50px;
      }
    @media only screen and (max-width: 700px) {
    .dt-properties-form{
       margin-left:0px;
      }
    .about-us{
      display:block;
    }
    .who-we-are{
      width:100%;
      margin-left:10px;
    }
    .core-values{
      width:100%;
    }
    .contacts{
      width:100%;
    }
    .small-screen-logo{
      display:block;
      margin:-15px;
    }
    .large-screen-logo{
      display:none;
    }
    }
   </style>
                  
  </section>
  <!-- end --->
  </div>

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
