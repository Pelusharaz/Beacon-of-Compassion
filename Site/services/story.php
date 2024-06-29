
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>BOC | Story</title>
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
    <link rel="stylesheet" href="../php/Admin/css/admin.css" />

    <!--date picker--->
    <!-- Importing jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"crossorigin="anonymous"></script>
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
        .viewbtn {
         width: 100px;
         padding: 0px;
         border: none;
         border-radius: 5px; 
         background: rgb(11, 117, 238);
         font-size: 16px;
         cursor: pointer;
         color: rgb(252, 252, 252);
        }
        .viewbtn:hover {
          background: orangered;
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
    <!-- payment modal -->
    <?php require_once '../php/includes/payment.php'; ?>
    
    <main class="mt-5">

    <div class="alertMsg" id="alertMsg">Thank you for showing interest in our stories</div>
    <br>

      <div class="grid-gallery" style="margin-top:-80px;overflow-x:hidden;">
        <div class="row">
          <div class="frame">
          <div class="mainpic">
          <?php
              require_once '../php/includes/config.php';
              $sql="SELECT * FROM stories where code = '" .$_GET["story"] . "' LIMIT 1";
              $stmt = $DBH->prepare($sql);
              $stmt->execute();
              while($row = $stmt->fetchObject()) {
           ?>
          
          <div class="">
            <div class=" ">
              <?php if($row->ext == 'mp4'){ ?>
                 <video style="width:100%; height:465px;margin-top:-65px;" controls>
                   <source src="<?php echo "../php/Admin/stories/". "{$row->productimage}";?>" style="max-width:250px;margin-left:auto;margin-right:auto;display:block;">
                 </video>
                <?php }else{?>
                    <img src="<?php echo "../php/Admin/stories/". "{$row->productimage}";?>" style="width:100%;height:400px;margin-left:auto;margin-right:auto;display:block;">
              <?php }?>
              <!-- <img src="../img/land 1.jpg" style="width:100%; height:50%;"> -->
            </div>
          </div>

          <?php }?>
          </div> 
          <div class="flexbox">
          <?php
              require_once '../php/includes/config.php';
              $sql="SELECT  * FROM stories where code = '" .$_GET["story"] . "' ORDER BY id DESC LIMIT 4";
              $stmt = $DBH->prepare($sql);
              $stmt->execute();
              while($row = $stmt->fetchObject()) {
           ?>
          
            <div class="col-lg-3 column">
            
              <?php if($row->ext == 'mp4'){ ?>
                 <video style="width:100%; height:210px;margin-top:-10px;" controls>
                   <source src="<?php echo "../php/Admin/stories/". "{$row->productimage}";?>" style="max-width:250px;margin-left:auto;margin-right:auto;display:block;">
                 </video>
                <?php }else{?>
                    <img src="<?php echo "../php/Admin/stories/". "{$row->productimage}";?>" style="width:100%;height:190px;margin-left:auto;margin-right:auto;display:block;">
              <?php }?>
              <!-- <img src="../img/land 1.jpg" style="width:100%; height:50%;"> -->
            </div>
          

          <?php }?>
          </div>
          </div>

        </div>
      </div>

      <!-- <div class="grid-gallery" style="margin-top:-80px;">
        <div class="row"> 
         <div class="column single">
            <?php// if($row->ext == 'mp4'){ ?>
                 <video style="width:100%; height:100%;margin-top:-50px;" controls>
                   <source src="<?php// echo "../php/Admin/products/". "{$row->productimage}";?>" style="max-width:250px; height:200px;margin-left:auto;margin-right:auto;display:block;">
                 </video>
                <?php// }else{?>
                    <img src="<?php //echo "../php/Admin/products/". "{$row->productimage}";?>" style="width:100%; height:101%;margin-left:auto;margin-right:auto;display:block;">
            <?php //}?>
          <img src="../img/land 1.jpg" style="width:100%; height:103%;">
         </div> -->
        
         <!-- <div class="column">
            <?php// if($row->ext == 'mp4'){ ?>
                 <video style="width:100%; height:100%;margin-top:-50px;" controls>
                   <source src="<?php// echo "../php/Admin/products/". "{$row->productimage}";?>" style="max-width:250px; height:200px;margin-left:auto;margin-right:auto;display:block;">
                 </video>
                <?php// }else{?>
                    <img src="<?php //echo "../php/Admin/products/". "{$row->productimage}";?>" style="width:100%; height:100%;margin-left:auto;margin-right:auto;display:block;">
            <?php// }?>
            <img src="../img/land 1.jpg" style="width:100%; height:50%;">
         </div>

        </div>
      </div> -->
    <?php// }?>

        <?php
            require_once '../php/includes/config.php';
            $sql="SELECT * FROM stories where code = '" .$_GET["story"] . "' LIMIT 1 ";
            $stmt = $DBH->prepare($sql);
            $stmt->execute();
            while($row = $stmt->fetchObject()) {
            
        ?>
        <div class="container news-blogs" style="padding-top:20px;margin-top:20px;">
          <div class="header" style="display:flex;">
            <div class="available"style="margin-left:10px;">
            <?php
                require_once '../php/includes/config.php';
                $sql = "SELECT * FROM events WHERE storyId = '$row->code' ";
                $stmt = $DBH->prepare($sql);
                $stmt->execute();
                if ($stmt->rowCount() == 1) {
                    while ($row1 = $stmt->fetchObject()) {
                ?>
                <button class="btn viewbtn" style="cursor: no-drop; background-color:red;text-transform:lowercase;">Done</button>
                <?php }
                    } else { ?>
                <button class="viewbtn" onclick="showMsg()">Upcoming</button>
            <?php } ?>
            </div>
            
          </div>
          <h4 style="color:blue; font-weight:bolder;margin-left:10px;"><?php echo $row->storytitle ?></h4>
          <br><br>

          <div class="row row-blog">
            
            <div class="blog">

              <div class="blog-img" style="margin:10px;">
              <?php if($row->ext == 'mp4'){ ?>
                 <video style="width:250px; height:250px;margin-top:-50px;" controls>
                   <source src="<?php echo "../php/Admin/stories/". "{$row->productimage}";?>" style="max-width:250px; height:200px;margin-left:auto;margin-right:auto;display:block;">
                 </video>
                <?php }else{?>
                    <img src="<?php echo "../php/Admin/stories/". "{$row->productimage}";?>" style="width:250px; height:250px;margin-left:auto;margin-right:auto;display:block;">
              <?php }?>
              </div>
              
              <div class="information">
                  <h6 style="font-weight: bolder;">About </h6>
                  <p><?php echo $row->storyinfo ?></p>
                  <span style="display:flex;"><h6 style="font-weight:bolder;margin-right:5px;">Category :</h6> <p><?php echo $row->category ?></p></span>
                  <button type="submit" name="submit" role="button"> <a style="color:white;" href="../stories.php">View Others</a> </button>
              </div>


              <?php }?>

              <div class="more-properties">
                  <h5 style="color:black; font-weight:bold;">MORE STORIES</h5>
                  <?php
                    require_once '../php/includes/config.php';
                    $sql="SELECT * FROM stories GROUP BY code order by RAND() LIMIT 2";
                    $stmt = $DBH->prepare($sql);
                    $stmt->execute();
                    while($row = $stmt->fetchObject()) {
            
                  ?>
                    <div class="properties"style="display:flex;">
                      <div class="property-img" style="margin:10px;">
                       <?php if($row->ext == 'mp4'){ ?>
                        <video style="width:150px; height:200px;margin-top:-50px;" controls>
                         <source src="<?php echo "../php/Admin/stories/". "{$row->productimage}";?>" style="max-width:250px; height:200px;margin-left:auto;margin-right:auto;display:block;">
                        </video>
                       <?php }else{?>
                        <img src="<?php echo "../php/Admin/stories/". "{$row->productimage}";?>" style="width:150px; height:150px;margin-left:auto;margin-right:auto;display:block;">
                       <?php }?>
                      </div>
                      <div class="property-info">
                        <h6 style="font-weight: bolder;"><?php echo $row->storytitle ?> </h6>
                        <a href="story.php?story=<?php echo $row->code ?>">see details</a>
                        
                      </div>
                    </div>
                  <?php }?>
              </div>

            </div>

          </div>

        </div>
    <!-- success message -->
    <script>
      function showMsg()
      {
      $("#alertMsg").fadeIn('slow', function () {
      $(this).delay(1000).fadeOut('slow');
      window.location = '../stories.php'
      });
    }
    </script>
    <script>
    $(window).on('load', function() {
      $("#alertMsg").fadeIn('slow');
      $("#alertMsg").delay(1000).fadeOut('slow');
    });
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

    .blog {
      display: flex;
      }
    .blog-img{
      width:20%;
    }
    .information{
      margin-left:40px;
      width:40%;
    }
    .more-properties{
      width:30%;
      margin-left:10px;
      margin-top:-130px;
      display:block;
    }
    .frame{
      display:flex;
    }

    /* grid-gallery */
    .flexbox {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap; /* IE10 */
      flex-wrap: wrap;
      padding: 0 4px;
      width:60%;
    }
    .mainpic{
      width:40%;
    }

    /* Create two equal columns that sits next to each other */
     .column {
      -ms-flex: 50%; /* IE10 */
       flex: 50%;
       max-width: 50%;
       padding: 0 4px;
    }

     .column img {
      margin-top: 8px;
      vertical-align: middle;
      width: 100%;
     }
    @media only screen and (max-width: 900px) {
      .information{
      margin-left:120px;
      width:40%;
    }
    }
    @media only screen and (max-width: 700px) {
    .single{
      margin-bottom: 20px;
      margin-top: 20px;
    }
    .frame{
      display: block;
    }
    .mainpic{
      width:100%;
    }
    .flexbox{
      width:100%;
      height:auto;
    }
    .blog {
      display: block;
     }
    .information{
      padding: 20px;
      margin-left:0px;
      width:100%;
    }
    .blog-image{
      width:100%;
    }
    .more-properties{
      width:100%;
      margin-left:10px;
      margin-top:0px;
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
