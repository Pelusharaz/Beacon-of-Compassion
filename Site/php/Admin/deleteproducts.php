
<!---Delete contact messages-->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deletemessage_btn'])){

    $id = $_POST['deletemessage_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM contact WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Message has been deleted successfully')</script>
		   <script>window.location = 'contactmessages.php'</script>"; 
    }
    
 ?>

 <!---Delete partner-->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deletepartner_btn'])){

    $id = $_POST['deletepartner_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM partners WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Partner has been deleted successfully')</script>
		   <script>window.location = 'contactmessages.php'</script>"; 
    }
    
 ?>

 <!---Delete volunteer-->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deletevolunteer_btn'])){

    $id = $_POST['deletevolunteer_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM volunteer WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Volunteer record has been deleted successfully')</script>
		   <script>window.location = 'volunteers.php'</script>"; 
    }
    
 ?>

<!---Delete donation-->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deletedonation_btn'])){

    $id = $_POST['deletedonation_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM donations WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Donation record has been deleted successfully')</script>
		   <script>window.location = 'donations.php'</script>"; 
    }
    
 ?>

<!---Delete registered user-->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deleteuser_btn'])){

    $id = $_POST['deleteuser_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM users WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('User account has been deleted successfully')</script>
		   <script>window.location = 'registeredusers.php'</script>"; 
    }
    
 ?>

<!---Delete employee-->
 <?php
 require_once '../includes/config.php';
 if (isset($_POST['deleteemployee_btn'])){

    $id = $_POST['deleteemployee_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM admin WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Employee account has been deleted successfully')</script>
		   <script>window.location = 'registeredusers.php'</script>"; 
    }
    
 ?>
 <!-- Update roles -->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['assign_role'])){

  $id = $_POST['id'];
  $role = $_POST['role'];

    try {
        //code...
        $sql = "UPDATE admin SET role='$role' where id= '". $_POST["id"] ."' ";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      
      echo "<script>alert('Role assigned Successfully')</script>
		  <script>window.location = 'registeredusers.php'</script>";

    }  
 ?>

<!-- blogs section -->
<!-- Update blogs -->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['updateblog'])){

  $id = $_POST['id'];
  $blogtitle = $_POST['blogtitle'];
  $postedby = $_POST['postedby'];
  $dateposted = $_POST['dateposted'];
  $bloginfo = $_POST['bloginfo'];
  $blogimage = $_FILES['blogimage']['name'];
  $ext = pathinfo($blogimage, PATHINFO_EXTENSION);

  // image file directory
  $target = "blogs/".basename($blogimage);
  
  

    try {
        //code...
        $sql = "UPDATE blogs SET blogtitle='$blogtitle', postedby='$postedby', dateposted = '$dateposted',bloginfo='$bloginfo', blogimage='$blogimage',ext='$ext'  where id= '". $_POST["id"] ."' ";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      
      echo "<script>alert('Blog edited Successfully')</script>
		  <script>window.location = 'blogs.php'</script>";

    //uploading image
    if (move_uploaded_file($_FILES['blogimage']['tmp_name'], $target)){
      header("location:blogs.php");
      $msg = "Blog image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

    }  
 ?>
 <!-- delete blog -->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deleteblog_btn'])){

    $id = $_POST['deleteblog_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM blogs WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Blog has been deleted successfully')</script>
		   <script>window.location = 'blogs.php'</script>"; 
    }
    
 ?>

 <!-- events -->
 <?php
 require_once '../includes/config.php';
 if (isset($_POST['soldbtn'])){
    $id = $_POST['soldid'];
    try {
        //code...
        $sql1 = "SELECT * FROM events WHERE storyId = '$id' ";
        $sth1 = $DBH->prepare($sql1);
        $sth1->execute(array());

        if($sth1->rowCount() == 1) {
          echo "<script>alert('Error! Story already Marked as done')</script>
          <script>window.location = 'stories.php'</script>"; 
        }else{
          $sql = "INSERT INTO events(storyId) VALUES(?)";
          $sth = $DBH->prepare($sql);
          $sth->execute(array($id));
        }

        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      
      echo "<script>alert('Story Marked as done successfully')</script>
		  <script>window.location = 'stories.php'</script>"; 

    }  
 ?>

 <!-- delete stories-->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deletestory_btn'])){

    $id = $_POST['deletecode_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM stories WHERE code='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Story has been deleted successfully')</script>
		   <script>window.location = 'stories.php'</script>"; 
    }
    
 ?>

 <!-- delete story images -->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deleteimg_btn'])){

    $id = $_POST['deleteimg_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM stories WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
       
    }
    
 ?>


<!-- Update stories-->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['updatestory'])){

  $storytitle = $_POST['storytitle'];
  $storyinfo = $_POST['storyinfo'];
  $category = $_POST['category'];
  $code = $_POST['code'];
  
    try {
        //code...
        $sql = "UPDATE stories SET storytitle='$storytitle',storyinfo='$storyinfo',category='$category' where code= '". $_POST["code"] ."' ";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      
      echo "<script>alert('Story edited Successfully')</script>
		  <script>window.location = 'editstory.php'</script>";
     
    // uploading image
    // if (move_uploaded_file($_FILES['productimage']['tmp_name'], $target)){
    //   header("location:admin.php");
    //   $msg = "profile uploaded successfully";
  	// }else{
  	// 	$msg = "Failed to upload image";
  	// }

    }  
 ?>