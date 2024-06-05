<!-- delete products -->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deleteproduct_btn'])){

    $id = $_POST['deletecode_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM products WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('product has been deleted successfully')</script>
		   <script>window.location = 'admin.php'</script>"; 
    }
    
 ?>
<!-- Update products -->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['updateproduct'])){

  $id = $_POST['id'];
  $productname = $_POST['productname'];
  $price = $_POST['price'];
  $productinfo = $_POST['productinfo'];
  $category = $_POST['category'];
  $productimage = $_FILES['productimage']['name'];

  // image file directory
  $target = "products/".basename($productimage);
  
  

    try {
        //code...
        $sql = "UPDATE products SET productname='$productname',price='$price',productinfo='$productinfo',category='$category',productimage='$productimage'  where id= '". $_POST["id"] ."' ";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      
      echo "<script>alert('Product edited Successfully')</script>
		  <script>window.location = 'admin.php'</script>";

    //uploading image
    if (move_uploaded_file($_FILES['productimage']['tmp_name'], $target)){
      header("location:admin.php");
      $msg = "profile uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

    }  
 ?>

 <!---Edit gallery-->
 <!---Delete pictures-->
 <?php
 require_once '../includes/config.php';
 if (isset($_POST['deletepic_btn'])){

    $id = $_POST['deletepic_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM studio WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('picture has been deleted successfully')</script>
		   <script>window.location = 'updatestudio.php'</script>"; 
    }
    
 ?>

 <!---update gallery--->
 <?php
 require_once '../includes/config.php';
 if (isset($_POST['updategallery'])){

  $id = $_POST['id'];
  $category = $_POST['category'];
  $image = $_FILES['image']['name'];

  // image file directory
  $target = "studio/".basename($image);
  
  

    try {
        //code...
        $sql = "UPDATE studio SET category='$category',image='$image'  where id= '". $_POST["id"] ."' ";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      
      echo "<script>alert('Gallery edited Successfully')</script>
		  <script>window.location = 'updatestudio.php'</script>";

    //uploading image
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      header("location:updatestudio.php");
      $msg = "Picture uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

    }  
 ?>

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

 <!---Delete bookings-->
 <!-- studio bookings -->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deletestudiobooking_btn'])){

    $id = $_POST['deletestudiobooking_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM studiobookings WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Booking has been deleted successfully')</script>
		   <script>window.location = 'bookings.php'</script>"; 
    }
    
 ?>

 <!-- doc & blogging bookings -->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deletedocstudiobooking_btn'])){

    $id = $_POST['deletedocstudiobooking_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM docandbloggingbookings WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Booking has been deleted successfully')</script>
		   <script>window.location = 'bookings.php'</script>"; 
    }
    
 ?>

 <!-- delete orders -->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deleteorder_btn'])){

    $id = $_POST['deleteorder_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM orders WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Order has been deleted successfully')</script>
		   <script>window.location = 'orders.php'</script>"; 
    }
    
 ?>

 <!-- Update products -->
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
 
   