
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Beacon of compassion | News and Blogs</title>
    <!-- Tees Icon -->
    <link rel="icon" href="../img/bof-logo.png"/>
    <!-- Badge Icons from Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />
    <!-- Fonts from Google-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/cart.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/extrastyles.css" />
    <link rel="stylesheet" href="../css/modified-styles.css" />

    <!--date picker--->
    <!-- Importing jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
    <!-- length of blogs -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
    </script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"integrity=
        "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous">
    </script>
    <!-- Importing datepicker cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <style>
  .order {
  height:15%;
  text-align:center;
  opacity: 1;
  background: green;
  color:#fff;
  border-radius:25px;
  -webkit-animation: bounce .3s infinite alternate;
  -moz-animation: bounce .3s infinite alternate;
  animation: bounce .3s infinite alternate;
 }
      

  @-webkit-keyframes bounce {
    to { -webkit-transform: scale(1.2); }
  }
  @-moz-keyframes bounce {
  to { -moz-transform: scale(1.2); }
  }
  @keyframes bounce {
  to { transform: scale(1.2); }
  }
  </style>
  </head>
  <body>
    <header>
      <!-- Navbar -->
      <?php require_once '../php/includes/header3.php'; ?>
      
      <!-- Background images -->
      <div class="slideshow-container">
     
      <div class="p-5 text-center bg-image shadow-1-strong"
        style="background-image: url('../img/blogs5.jpg'); height: 550px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Blogs Center</h1>
              <h5 class="mb-3" style="color:rgb(238, 81, 8);">
                  Changing the world day by day
              </h4>
              <a class="links" style="color:white;" href="index.php">Home</a> > <a class="links quick-link" style="color:grey;" href="volunteer.php">Volunteer with us</a>
            </div>
          </div>
        </div>
      </div>

    </div>
      <br>

      <!-- payment modal -->
      <?php require_once '../php/includes/payment.php'; ?>

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
          background: blue;
          color:#fff;
          border-radius:25px;
          padding:10px;
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

    <br><br>
    <div class="sharaz-store" style="marging-left:auto;margin-right:auto;display:block;text-align:center;">
      <h3 style="font-family: 'Courier New', Courier, monospace;">Get up to date with Beacon of compassion News</h3>
    </div>

    <main class="mt-5">

    <div class="alertMsg" id="alertMsg">Thank you for showing interest in our properties</div>
    <br>

      <div class="news-blogs" style="background-color:rgba(0, 0, 0, 0.2);padding-top:20px;overflow-x:hidden;">
          <div class="header"style="margin:auto;display:block;text-align:center;">
            <h4 style="color:blue; font-weight:bolder;">News and Blogs</h4>
          </div>

        <div class="row row-blog" style="overflow:scroll; height:900px;">
            
          <?php
              require_once '../php/includes/config.php';
              $sql="SELECT * FROM blogs ORDER BY id DESC";
              $stmt = $DBH->prepare($sql);
              $stmt->execute();
              while($row = $stmt->fetchObject()) {
           ?>
          
           <div class="col-lg-3 blog">
             <div class="card" style="width:300px;height:500px;margin:10px;0px; margin-left:auto;margin-right:auto;display:block;color:black;" >
              <div class="blog-img" style="margin:10px;">
                <h5 class="card-title" style="font-weight: bolder;"><?php echo $row->blogtitle ?></h5>
                <?php if($row->ext == 'mp4'){ ?>
                <video style="width:200px; height:200px;" controls>
                 <source src="<?php echo "../php/Admin/blogs/". "{$row->blogimage}";?>">
                </video>
                <?php }else{?>
                    <img src="<?php echo "../php/Admin/blogs/". "{$row->blogimage}";?>"
                    class="img-fluid" style="width:200px; height:200px;" />
                <?php }?>
              </div>
              <div class="card-body">
                <h6 style="font-weight: bolder;">Posted By: <?php echo $row->postedby ?></h6>
                <p>Date: <?php echo $row->dateposted ?></p>
              
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
                  <a type="submit" name="submit" href="blog.php?blog=<?php echo $row->id ?>" class="btn blogbtn">Read More</a>
                </div>
              </div>
                
             </div>
           </div>

          <?php }?>

        </div>

      </div>
        
    <!-- success message -->
    <script>
      function showMsg()
      {
      $("#alertMsg").fadeIn('slow', function () {
      $(this).delay(1000).fadeOut('slow');
      window.location = '../properties.php'
      });
    }
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
      .row{
        display:block;
      }
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
                  
  <!-- end --->
  
    </main>
  <!--Footer-->
  <div class="footer">
    <?php require_once '../php/includes/footer.php'; ?>
  </div>
    
  </body>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/script1.js"></script>
  <script type="text/javascript"></script>

  <!-- success message -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>
