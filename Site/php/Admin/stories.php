<?php session_start();
if($_SESSION['role']!=='super admin' && $_SESSION['role']!=='Customer Care' && $_SESSION['role']!=='Maintainance'){
  echo "<script>alert('Access Denied !')</script>
  <script>window.location = '../includes/logout.php'</script>";
}
?>

<?php
require_once '../includes/config.php';
$sql="SELECT * FROM admin where role='" . $_SESSION["role"] . "' GROUP BY role";
$stmt = $DBH->prepare($sql);
$stmt->execute();
$total = $stmt->rowCount();

?>

<!--Adding Stories-->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['story'])){
  
  $storytitle = $_POST['storytitle'];
  $category = $_POST['category'];
  $storyinfo = $_POST['storyinfo'];
  $code = $_POST['code'];
  $newfilename= array($_FILES['productimage']['name']);
  foreach ($newfilename as $impnewfilename) {
      $newfilename_val = implode(',', $impnewfilename);
    }
  
  // Count total files
  $countfiles = count($_FILES['productimage']['name']);

  // Loop all files
  for($i = 0; $i < $countfiles; $i++) {
  
    // File name
    $filename = $_FILES['productimage']['name'][$i];
    // Location
    $target_file = 'stories/'.$filename;
  
    // file extension
      //$file_extension=array();
      $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
      $file_extension = strtolower($file_extension);
      
      /*
      foreach ($file_extension as $ext) {
      $ext_val = implode(',', $ext);
      }*/
    // Valid image extension
    $valid_extension = array("png","jpeg","jpg","gif","mp4");
    
    if(in_array($file_extension, $valid_extension)) {

      // Upload file
      if(move_uploaded_file($_FILES['productimage']['tmp_name'][$i],$target_file)
      ) 
  
  
  /*$productimage= array($_FILES['productimage']['name']);
  foreach ($productimage as $productimag) {
    $productimage_val = implode(',', $productimag);
  }
  $ext = pathinfo($productimage_val, PATHINFO_EXTENSION);
  
  
   // image file directory
   $target = "products/".basename($productimage_val);*/
  
    try {
        //code...
        $sql = 'INSERT INTO stories(storytitle,category,storyinfo,code,productimage,ext,Date,Time ) VALUES(?,?,?,?,?,?,Now(),Now() ) ';
        $sth = $DBH->prepare($sql);
        $sth->execute(array($storytitle,$category,$storyinfo,$code,$filename,$file_extension));
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      
    }
  }
    //uploading image
    /*if (move_uploaded_file($_FILES['productimage']['tmp_name'], $target)) {
      $msg = "property uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}*/

 }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>BOC | Admin Panel</title>
    <!-- Tees Icon -->
    <link rel="icon" href="../../img/bof-logo.png" />
    <!-- Badge Icons from Font Awesome -->
    <link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"/>
    <!-- Fonts from Google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>
    <!-- Jquery multiple photos -->
    <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> </script>
    <!-- length of blogs -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel ="stylesheet" type = "text/css" href ="css/admin.css">
    <link rel="stylesheet" href="../../css/styles.css" />
    <link rel="stylesheet" href="../../css/extrastyles.css" />
  </head>
  <body>
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
          <a
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </a>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <a class="navbar-brand" href="#">
              <img src="../../img/bof-logo2-rec.png" height="60"alt="" loading="lazy" style="border-radius:50%;" />
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="admin.php">Welcome To The Admin Panel</a>
              </li>
              
            </ul>
            <ul class="navbar-nav d-flex flex-row">
            <?php
              while($row = $stmt->fetchObject()) {
            ?>
              <div class="d-flex input-group w-auto" style="margin-top:10px;">SESSION : <?php echo "{$row->username}"; ?>  </div>
            
              
              <!-- Icon dropdown -->
              <li class="nav-item me-3 me-lg-0 dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false">

                  <i class="fas fa-user"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                 
                  <li>
                    <a class="dropdown-item" href="contactmessages.php">Messages</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="registeredusers.php">Registered Users</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="volunteers.php">Volunteers</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="donations.php">Donations</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blogs.php">Blogs</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="stories.php">Stories</a>
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="../includes/logout.php">Log Out</a>
                  </li>
                  
                </ul>
              </li>
            </ul>
             
            <a href="../includes/logout.php">
              <button
                class="btn btn-outline-primary"
                type="button"
                data-mdb-ripple-color="dark">
                LOG OUT
              </button>
            </a>
            
          </div>
        </div>
      </nav>



      <!-- Background image -->
      <div
        class="p-5 text-center bg-image shadow-1-strong"
        style="background-image: url('../../img/kids.jpg'); height: 550px">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Beacon of Compassion</h1>
              <h4 class="mb-3">
                Add Stories
              </h4>
              <a class="btn btn-outline-light btn-lg" href="#!" role="button">welcome <?php echo "{$row->username}"; ?></a>
              <?php
              }
            ?>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="mt-5">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
          <div class="container-fluid">
            <a
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <strong class="text-dark mr-2">Featured Properties:</strong>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <form action=" " method="POST" style="box-shadow:none;">
                    <input type="text" name="search" value=" " style="display:none;">
                    <button class="nav-link active" type="submit" name="submit"style="background-color:white;border:none;">All</button>
                  </form>
                </li>
                <li class="nav-item">
                  <form action=" " method="POST" style="box-shadow:none;">
                    <input type="text" name="search" value="International" style="display:none;">
                    <button class="nav-link" type="submit" name="submit"style="background-color:white;border:none;">International</button>
                  </form>
                </li>
                <li class="nav-item">
                  <form action=" " method="POST" style="box-shadow:none;">
                    <input type="text" name="search" value="Local" style="display:none;">
                    <button class="nav-link" type="submit" name="submit"style="background-color:white;border:none;">Local</button>
                  </form>
                </li>
              </ul>
              <form class="d-flex input-group w-auto" action=" " method="POST" style="box-shadow:none;">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search"
                  aria-label="Search"
                  name="search"/>
                <button
                  class="btn btn-outline-primary"
                  type="submit"
                  name="submit"
                  data-mdb-ripple-color="dark">Go
                </button>
              </form>
            </div>
          </div>
        </nav>

  <!--add properties-->
    <div class="sharaz-store" style="marging-left:auto;margin-right:auto;display:block;text-align:center;">
      <h4>ADD STORIES</h4>
    </div>
    <div class="alertMsg" id="alertMsg">Story has been added successfully</div>
    <br>
  <div class="testbox">
    <form action="stories.php" method="POST" onsubmit="showMsg()" enctype="multipart/form-data">
      <fieldset>
        <legend style="border-radius: 25px;"><h4 style="margin:15px;">Add Stories</h4></legend>
        <div class="columns">
          <div class="item">
            <label for="booktitle">Story Title<span>*</span></label>
            <input id="booktitle" type="text" name="storytitle" />
          </div>
          <div class="item">
            <select name="category" style="padding-top:8px; padding-bottom:8px;margin:15px 0px 0px 8px;width:100%;">
             <option value="" disabled selected>Select Category</option>
             <option value="International" >International</option>
             <option value="Local">Local</option>
            </select>
          </div>
          <div class="item"style="width:100%;">
            <label for="information"> Story Information<span>*</span></label>
            <textarea name="storyinfo" id="" maxlength=" " cols="30" rows="10"></textarea>
          </div>
          <div class="item" style="display:none;">
            <label for="information"> Enter Unique Code<span>*</span></label>
            <input id="information" type="text" name="code" value="<?php $uniquecode= uniqid('pr'); echo $uniquecode;?>" />
          </div>
          <div class="item">
              <label for="cover">File Of the Product<span>*</span></label>
              <input onchange="readURL(this);" id="uploadedImages" type="file" name="productimage[]" multiple="multiple">
          </div>
          <div id ="up_images" class="item" style="display:flex;overflow:scroll;height:auto;">
            <label for="preview">Preview Selected Files<span>*</span></label>
          </div>
          <script>
            $("#uploadedImages").on("change", function(){
              if($("#uploadedImages")[0].files.length>5){
                alert("Please select a maximum of 5 Files and a minimum of 4 !");
              }
            });
          </script>
          <div class="item">
            <script type="text/javascript">
              var readURL = function(input) {
               $('#up_images').empty();  
                 var number = 0;
                 $.each(input.files, function(value) {
                 var reader = new FileReader();
                 reader.onload = function (e) {
                 var id = (new Date).getTime();
                number++;
               $('#up_images').prepend('<img style="margin-right:10px;" id='+id+' src='+e.target.result+' width="100px" height="100px" data-index='+number+' onclick="removePreviewImage('+id+')"/><video style="margin-right:10px;" id='+id+' src='+e.target.result+' width="100px" height="100px" data-index='+number+' onclick="removePreviewImage('+id+')" controls></video>')
              };
              reader.readAsDataURL(input.files[value]);
             }); 
             }
            </script>
          </div>
          

          <!-- <div class="item">
            <label class="input-group-prepend" for="image_name">
            <i class="fa fa-camera" data-toggle="tooltip" title="Attach a photo or video"></i> 
            </label>
            <input id="image_name" multiple="multiple" name="image_name[]" class="file" type="file" data-count="0" style="display: none;">
          </div>
          <div class="item">
            <video style="display: none;width:200px;" class="video_Preview" controls></video>
            <img style="display: none;width:200px;" class="image_Preview">
          </div> -->
          <div class="item">
            <script>
              $('#image_name').on('change', function(event) {

                if (
                !event ||
                !event.target ||
                !event.target.files ||
                 event.target.files.length === 0
              ) {
              return;
              }
              const fileUrl = window.URL.createObjectURL(event.target.files[0]);
              const imgExtensions = ['jpg', 'png'];
              const videoExtensions = ['mkv', 'mp4', 'webm'];
              const name = event.target.files[0].name;
              const lastDot = name.lastIndexOf('.');

              const ext = name.substring(lastDot + 1);
              
              if (imgExtensions.includes(ext)) {
              $(".video_Preview").hide(); // hide video preview
              $(".image_Preview").show().attr("src", fileUrl);
             } else if (videoExtensions.includes(ext)) {
              $(".image_Preview").hide(); // hide image preview
              $(".video_Preview").show().attr("src", fileUrl);
              }else{
                $(".image_Preview").show().attr("src", fileUrl);
                $(".video_Preview").show().attr("src", fileUrl);
              }
             });
            </script>
          </div>
      </fieldset>
          
      <div class="btn-block">
        <button type="submit" name="story"style="border-radius: 25px;">Submit</button>
      </div>
    </form>
    
</div>
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
          </style>
          <!-- success message -->
          <script>
           function showMsg()
           {
           $("#alertMsg").fadeIn('slow', function () {
           $(this).delay(1000).fadeOut('slow');
           });
          }
          </script>
    <br>
    <div class="sharaz-store" style="marging-left:auto;margin-right:auto;display:block;text-align:center;">
      <h4>Beacon of Compassion Foundation</h4>
    </div>
    <br><br>

       
        <!--- database products -->
        <?php
         require_once '../includes/config.php';
         if (isset($_POST['submit'])){

         $search = $_POST['search'];

         
        //code...
        $sql="SELECT * FROM stories where (category LIKE '%" . $_POST["search"] . "%') OR (storytitle LIKE '%" . $_POST["search"] . "%') OR (storyinfo LIKE '%" . $_POST["search"] . "%')OR (productimage LIKE '%" . $_POST["search"] . "%') GROUP BY code ";
        $stmt = $DBH->prepare($sql);
        $stmt->execute();
        $total = $stmt->rowCount();
        
      }
      else{
        $sql="SELECT * FROM stories GROUP BY code ";
        $stmt = $DBH->prepare($sql);
        $stmt->execute();
        $total = $stmt->rowCount();
      }
      
    ?>
        <section class="text-center mb-4" >
        <?php
          $t = 0;
          while($row = $stmt->fetchObject()) {
            $t++;
                if($t == 1)
                {
        ?>
      <div class="row" style="display:flex;">

            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card" style="height:800px;">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <?php if ($row->ext == 'mp4') { ?>
                    <video style="max-width:295px; height:300px;" autoplay muted loop>
                       <source src="<?php echo "stories/". "{$row->productimage}";?>">
                    </video>
                    <?php } else { ?>
                      <img src="<?php echo "stories/" . "{$row->productimage}"; ?>" class="img-fluid" style="max-width:295px; height:300px;" />
                    <?php } ?>
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15)"> </div>
                  </a>
                  
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo "{$row->storytitle}"; ?></h5>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <p class="show-read-more card-text">
                  <?php echo "{$row->storyinfo}"; ?>
                  </p>
                  <script>
                      $(document).ready(function() {
                        var maxLength = 200;
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
                  <div class="location-size"><h6 style="text-alig:center;">Date Posted : <?php echo "{$row->Date}"; ?></div>
                  <br><br>
                  <div class="tools" style="display:flex;margin-left:-40px;">
                      <script>
                       function editproduct() {
                          var x = document.getElementsByClassName("card-update");
                          var i=" "
                          for(var i = 0; i < x.length; i++){
                            if (x[i].style.display === "none") {
                                x[i].style.display = "block";
                                
                            }
                            else {
                           x[i].style.display = "none";
                           
                           } 
                          }
                          
                       }
                      </script>
                      
                    
                  <div class="tools" style="display:flex;margin-left:100px;">

                    <div class="delete-edit" style="margin-left:auto;margin-right:auto;display:block;">
                      <div class="edit" >
                        <a href="editstory.php?story=<?php echo "{$row->code}"; ?>"><button style="margin-top:20px;" class="btn btn-dark ">Edit Property</button></a>
                        <!-- <button style="margin-top:20px;" class="btn btn-dark " onclick=editproduct2()>EDIT PROPERTY</button> -->
                      </div>
                      <form action="deleteproducts.php" method="post" style="box-shadow:none;">
                        <input type="hidden" name="deletecode_id" value="<?php echo "{$row->code}"; ?>">
                        <button type="submit" class="btn btn-danger " name="deletestory_btn">DELETE STORY</button>
                      </form>
                        <?php
                          require_once '../includes/config.php';
                          $sql1="SELECT * FROM events WHERE storyId = '$row->code' ";
                          $stmt1 = $DBH->prepare($sql1);
                          $stmt1->execute();
                          if($stmt1->rowCount() == 1) {
                          while($row1 = $stmt1->fetchObject()) {
                         ?>
                        <a class="btn btn-danger" style="cursor: no-drop;">DONE</a>
                        <?php }}else{?>
                        <form action="deleteproducts.php" method="post" style="box-shadow:none;">
                          <input type="hidden" name="soldid" value="<?php echo "{$row->code}"; ?>">
                          <button type="submit" class="btn btn-warning" name="soldbtn">UPCOMING</button>
                        </form>
                        <?php }?>
                    </div>
                  </div>
                 </div>
                  <br>
                <div id="cardupdate" class="card-update" style="display:none;">
                  <form action="deleteproducts.php" method="POST" enctype="multipart/form-data" style=" ">
                    <fieldset>
                      <legend style="border-radius:25px;"><p style="margin:15px;">Edit the Property</p></legend>
                      <div class="columns">
                        <div class="item">
                          <label for="booktitle">Story Title<span>*</span></label>
                          <input id="booktitle" type="text" name="storytitle" value="<?php echo "{$row->storytitle}"; ?>" />
                        </div>
                        <div class="item">
                          <label for="information"> Price<span>*</span></label>
                          <input id="information" type="text" name="price" value="<?php echo "{$row->price}"; ?>" />
                        </div>
                        <div class="item">
                        <label for="information"> Category2 <span>*</span></label>
                          <select name="category" value="<?php echo "{$row->category}"; ?>" >
                          <option value="<?php echo "{$row->category}"; ?>"><?php echo "{$row->category}"; ?></option>
                           <option value="featured" >Featured</option>
                           <option value="bestselling">Best Selling</option>
                           <option value="hotdeals">Hot Deals</option>
                          </select>
                        </div>
                        <div class="item">
                          <label for="information"> Location<span>*</span></label>
                          <input id="information" type="text" name="location" value="<?php echo "{$row->location}"; ?>" />
                        </div>
                        <div class="item">
                          <label for="information"> Size<span>*</span></label>
                          <input id="information" type="text" name="size" value="<?php echo "{$row->size}"; ?>" />
                        </div>
                        <div class="item" style="display:none;">
                          <label for="additional-information"> Information about The Property<span>*</span></label>
                          <input id="information" type="text" name="id" value="<?php echo "{$row->code}"; ?>" />
                        </div>
                      </div>  
                    </fieldset>
                    <div class="item">
                      <label for="information"> Information about The Property<span>*</span></label>
                      <input id="information" type="text" name="productinfo"value="<?php echo "{$row->productinfo}"; ?>" />
                    </div>
                    
                    <div class="item">
                     <label for="cover">File Of the Product<span>*</span></label>
                     <input onchange="readURL2(this);" id="uploadedImages2" type="file" name="productimage[]" multiple="multiple">
                    </div>
                    <div id ="editimages" class="item" style="display:flex;overflow:scroll;height:auto;">
                      <label for="preview">Preview Selected Files<span>*</span></label>
                    </div>
                    <script type="text/javascript">
                      var readURL2 = function(input) {
                      $('#editimages').empty();  
                       var number = 0;
                       $.each(input.files, function(value) {
                       var reader = new FileReader();
                       reader.onload = function (e) {
                       var id = (new Date).getTime();
                       number++;
                      $('#editimages').prepend('<img style="margin-right:10px;" id='+id+' src='+e.target.result+' width="100px" height="100px" data-index='+number+' onclick="removePreviewImage('+id+')"/><video style="margin-right:10px;" id='+id+' src='+e.target.result+' width="100px" height="100px" data-index='+number+' onclick="removePreviewImage('+id+')" controls></video>')
                      };
                      reader.readAsDataURL(input.files[value]);
                      }); 
                      }
                    </script>
                    <script>
                      $("#uploadedImages2").on("change", function(){
                      if($("#uploadedImages2")[0].files.length>6){
                      alert("Please select a maximum of 6 Files and a minimum of 5 !");
                      }
                      });
                    </script>
                    <div class="btn-block">
                     <button type="submit" class="btn btn-dark " name="updateproduct"> SAVE </button>
                    </div>
                  </form>
                </div>
                

                </div>
                
                
              </div>
            </div>

          
        <?php
            }else if($t == 3){
              ?>
              <div class="col-lg-4 col-md-12 mb-4">
              <div class="card" style="height:800px;">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <?php if ($row->ext == 'mp4') { ?>
                    <video style="max-width:295px; height:300px;" autoplay muted loop>
                       <source src="<?php echo "stories/". "{$row->productimage}";?>">
                    </video>
                    <?php } else { ?>
                      <img src="<?php echo "stories/" . "{$row->productimage}"; ?>" class="img-fluid" style="max-width:295px; height:300px;" />
                    <?php } ?>
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15)"
                    > </div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo "{$row->storytitle}"; ?></h5>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  
                  <p class="show-read-more card-text">
                  <?php echo "{$row->storyinfo}"; ?>
                  </p>
                  <script>
                      $(document).ready(function() {
                        var maxLength = 200;
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
                  <div class="location-size"><h6 style="text-alig:center;">Date Posted : <?php echo "{$row->Date}"; ?></div>
                  <br><br>
                  <div class="tools" style="display:flex;margin-left:-40px;">

                    <div class="delete-edit" style="margin-left:auto;margin-right:auto;display:block;">
                       <div class="edit" >
                         <a href="editstory.php?story=<?php echo "{$row->code}"; ?>"><button style="margin-top:20px;" class="btn btn-dark ">Edit Property</button></a>
                         <!-- <button style="margin-top:20px;" class="btn btn-dark " onclick=editproduct2()>EDIT PROPERTY</button> -->
                      </div>
                      <form action="deleteproducts.php" method="post" style="box-shadow:none;">
                        <input type="hidden" name="deletecode_id" value="<?php echo "{$row->code}"; ?>">
                        <button type="submit" class="btn btn-danger " name="deletestory_btn">DELETE STORY</button>
                      </form>
                        <?php
                          require_once '../includes/config.php';
                          $sql1="SELECT * FROM events WHERE storyId = '$row->code' ";
                          $stmt1 = $DBH->prepare($sql1);
                          $stmt1->execute();
                          if($stmt1->rowCount() == 1) {
                          while($row1 = $stmt1->fetchObject()) {
                         ?>
                        <a class="btn btn-danger" style="cursor: no-drop;">DONE</a>
                        <?php }}else{?>
                        <form action="deleteproducts.php" method="post" style="box-shadow:none;">
                          <input type="hidden" name="soldid" value="<?php echo "{$row->code}"; ?>">
                          <button type="submit" class="btn btn-warning" name="soldbtn">UPCOMING</button>
                        </form>
                        <?php }?>
                    </div>
                  </div>
                  <br>
                <div id="cardupdate" class="card-update" style="display:none;">
                  <form action="deleteproducts.php" method="POST" enctype="multipart/form-data" style=" ">
                    <fieldset>
                      <legend style="border-radius:25px;"><p style="margin:15px;">Edit the Property</p></legend>
                      <div class="columns">
                        <div class="item">
                          <label for="booktitle">Property Name<span>*</span></label>
                          <input id="booktitle" type="text" name="productname" value="<?php echo "{$row->productname}"; ?>" />
                        </div>
                        <div class="item">
                          <label for="information"> Price<span>*</span></label>
                          <input id="information" type="text" name="price" value="<?php echo "{$row->price}"; ?>" />
                        </div>
                        <div class="item">
                        <label for="information"> Category <span>*</span></label>
                          <select name="category" value="<?php echo "{$row->category}"; ?>" >
                          <option value="<?php echo "{$row->category}"; ?>"><?php echo "{$row->category}"; ?></option>
                           <option value="featured" >Featured</option>
                           <option value="bestselling">Best Selling</option>
                           <option value="hotdeals">Hot Deals</option>
                          </select>
                        </div>
                        <div class="item" style="display:none;">
                          <label for="additional-information"> Information about The Property<span>*</span></label>
                          <input id="information" type="text" name="id" value="<?php echo "{$row->code}"; ?>" />
                        </div>
                      </div>  
                    </fieldset>
                    <div class="item">
                      <label for="information"> Information about The Property<span>*</span></label>
                      <input id="information" type="text" name="productinfo"value="<?php echo "{$row->productinfo}"; ?>" />
                    </div>
                    <div class="item">
                      <label for="cover">Property<span>*</span></label>
                      <input type="file" name="productimage" required>
                    </div>
                    <div class="btn-block">
                     <button type="submit" class="btn btn-dark " name="updateproduct"> SAVE </button>
                    </div>
                  </form>
                </div>
                  
                </div>
              </div>
            </div>
      </div>    
            <?php
                  $t = 0;
                }else{
                  ?>

            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card" style="height:800px;">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <?php if ($row->ext == 'mp4') { ?>
                    <video style="max-width:295px; height:300px;" autoplay muted loop>
                       <source src="<?php echo "stories/". "{$row->productimage}";?>">
                    </video>
                    <?php } else { ?>
                      <img src="<?php echo "stories/" . "{$row->productimage}"; ?>" class="img-fluid" style="max-width:295px; height:300px;" />
                    <?php } ?>
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15)"
                    > </div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo "{$row->storytitle}"; ?></h5>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <p class="show-read-more card-text">
                  <?php echo "{$row->storyinfo}"; ?>
                  </p>
                  <script>
                      $(document).ready(function() {
                        var maxLength = 200;
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
                  <div class="location-size"><h6 style="text-alig:center;">Date Posted : <?php echo "{$row->Date}"; ?></div>
                  <br><br>
                    <div class="tools" style="display:flex;margin-left:-40px;">

                     <div class="delete-edit" style="margin-left:auto;margin-right:auto;display:block;">
                        <div class="edit" >
                          <a href="editstory.php?story=<?php echo "{$row->code}"; ?>"><button style="margin-top:20px;" class="btn btn-dark ">Edit Property</button></a>
                          <!-- <button style="margin-top:20px;" class="btn btn-dark " onclick=editproduct2()>EDIT PROPERTY</button> -->
                        </div>
                        <form action="deleteproducts.php" method="post" style="box-shadow:none;">
                          <input type="hidden" name="deletecode_id" value="<?php echo "{$row->code}"; ?>">
                          <button type="submit" class="btn btn-danger " name="deletestory_btn">DELETE STORY</button>
                        </form>
                        <?php
                          require_once '../includes/config.php';
                          $sql1="SELECT * FROM events WHERE storyId = '$row->code' ";
                          $stmt1 = $DBH->prepare($sql1);
                          $stmt1->execute();
                          if($stmt1->rowCount() == 1) {
                          while($row1 = $stmt1->fetchObject()) {
                         ?>
                        <a class="btn btn-danger" style="cursor: no-drop;">DONE</a>
                        <?php }}else{?>
                        <form action="deleteproducts.php" method="post" style="box-shadow:none;">
                          <input type="hidden" name="soldid" value="<?php echo "{$row->code}"; ?>">
                          <button type="submit" class="btn btn-warning" name="soldbtn">UPCOMING</button>
                        </form>
                        <?php }?>
                      </div>
                    </div>
                </div>
                <br>
                <div id="cardupdate" class="card-update" style="display:none;">
                  <form action="deleteproducts.php" method="POST" enctype="multipart/form-data" style=" ">
                    <fieldset>
                      <legend style="border-radius:25px;"><p style="margin:15px;">Edit the Property</p></legend>
                      <div class="columns">
                        <div class="item">
                          <label for="booktitle">Property Name<span>*</span></label>
                          <input id="booktitle" type="text" name="productname" value="<?php echo "{$row->productname}"; ?>" />
                        </div>
                        <div class="item">
                          <label for="information"> Price<span>*</span></label>
                          <input id="information" type="text" name="price" value="<?php echo "{$row->price}"; ?>" />
                        </div>
                        <div class="item">
                        <label for="information"> Category <span>*</span></label>
                          <select name="category" value="<?php echo "{$row->category}"; ?>" >
                          <option value="<?php echo "{$row->category}"; ?>"><?php echo "{$row->category}"; ?></option>
                           <option value="featured" >Featured</option>
                           <option value="bestselling">Best Selling</option>
                           <option value="hotdeals">Hot Deals</option>
                          </select>
                        </div>
                        <div class="item" style="display:none;">
                          <label for="additional-information"> Information about The Property<span>*</span></label>
                          <input id="information" type="text" name="id" value="<?php echo "{$row->id}"; ?>" />
                        </div>
                      </div>  
                    </fieldset>
                    <div class="item">
                      <label for="information"> Information about The Property<span>*</span></label>
                      <input id="information" type="text" name="productinfo"value="<?php echo "{$row->productinfo}"; ?>" />
                    </div>
                    <div class="item">
                      <label for="cover">Property<span>*</span></label>
                      <input type="file" name="productimage" required>
                    </div>
                    <div class="btn-block">
                     <button type="submit" class="btn btn-dark " name="updateproduct"> SAVE </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <?php
                }
            }
            if($t < 3){
              ?>
              </div>
              <?php
            }
            ?>      
            

          </section>
          <!-- end --->
        
      </div>

      <!-- Modal for Editing Properties -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <legend class="modal-title " id="staticBackdropLabel" style="border-radius:20px;"> Edit Property</legend>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <form action="index.php" method="POST" enctype="multipart/form-data" style="box-shadow:none;">
            <div class="modal-body">
              <fieldset>
                   <?php if ($row->id =='.$_GET["property"] .') { ?>
                       <?php echo "{$row->productname}"; ?>
                    <?php } else { ?>
                      <?php echo " Failed "; ?>
                      
                    <?php } ?>
                
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
    </main>

     <!--Footer-->
     <footer class="text-center text-white" style="background-color: #f1f1f1; bottom:0; position:; width:100%;">
      <!-- Copyright -->
      <div class="text-center text-dark p-3" style="background-color: blue;">
      <p style="color:white;"> &copy; Copyright <?php $year = date("Y"); echo $year; ?>
        Beacon of Compassion Foundation || 
       <a class="text-white" target="blank" href="../../../../sharaztechs.66ghz.com">Developed by Sharaz Technologies</a>
      </p>
      </div>
    </footer>
  </body>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../../js/script1.js"></script>
  <script type="text/javascript"></script>
  
  
</html>
