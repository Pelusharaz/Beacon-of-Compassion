<?php
 require_once '../includes/config.php';
 if (isset($_POST['submit'])){

  $username = $_POST['username'];
  $email = $_POST['email'];
  $security = $_POST['security'];
  $answer = $_POST['answer'];
  $password = $_POST['password'];
  $repeatpassword = $_POST['repeatpassword'];
  $securityhash = password_hash($security, PASSWORD_DEFAULT);
  $passwordhash = password_hash($password, PASSWORD_DEFAULT);
  $repeatpasswordhash = password_hash($repeatpassword, PASSWORD_DEFAULT);
  
  if($_POST['password']==$_POST['repeatpassword']){

    try {
        //code...
        $sql = 'INSERT INTO users(username,email,question,answer,password,repeatpassword,Date,Time ) VALUES(?,?,?,?,?,?,Now(),Now() )';
        $sth = $DBH->prepare($sql);
        $sth->execute(array($username,$email,$securityhash,$answer,$passwordhash,$repeatpasswordhash));
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo("<script>alert('Thank you for Joining Beacon of foundation family !.')</script>
             <script>window.location = 'login.php'</script>");
  }
  
  else{
       echo("<script>alert('Sorry Passwords Dont Match.Kindly check and Try Again!')</script>
             <script>window.location = 'signup.php'</script>
       
       ");
       
    }
  
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="shortcut icon" type="image" href="../../img/bof-logo.png" sizes="96x96" style="border-radius: 50%;"/>
    <link rel="stylesheet" href="../../css/modified-styles.css" />
    <!-- Styles -->
    <link rel ="stylesheet" type = "text/css" href ="../Admin/css/admin.css">
    <link rel="stylesheet" href="../../css/styles.css" />
    <link rel="stylesheet" href="../../css/extrastyles.css" />
    <!-- Badge Icons from Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"/>

    <!-- Fonts from Google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Beacon of compassion User | Sign Up</title>
</head>
<body style="background-image: url('../../img/loginbg2.jpg');">
    <!-- Navbar -->
    <?php require_once '../includes/header2.php'; ?>
    <style>
        .security{
           display:flex;
        }
        .small-screen-logo {
          display: none;
        }
        @media only screen and (max-width:700px) {
            .picture{
                display:none;
            }
            form{
                height:100%;
            }
            .security{
                display:block;
            }
            .small-screen-logo {
                display: block;
                margin: -15px 0px -8px -15px;
              }

              .large-screen-logo {
                display: none;
              }
        }
    </style>
    
        <div class="wrapper" style="display:flex; justify-content: center; ">
        <div class="picture" style="margin:40px -180px 0px 0px; width:40%;">
            <img src="../../img/kids.jpg" alt="" height="570px" width="460px">
        </div>
        <div class="form-information" style="margin-top:40px;">
        <form action="signup.php" method="POST">
        <div class="form-container">
            <div class="container">
                <h3 style="font-weight:bold;"><img src="images/profile.png" alt="" width="35"> Join The Welfare Community </h3>
                <hr><br>
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <label for="Email"><b>email</b></label>
                <input type="email" placeholder="Enter email" name="email" required>

                <div class="item security">
                   <select style="padding-top:8px; padding-bottom:8px;margin-right:10px;" name="security" required>
                      <option value="" disabled selected>Security Question <span>*</span></option>
                      <option value="mothersname" >What's Your Mother's Maiden Name ?</option>
                      <option value="townbirth" >What is your Town of Birth ?</option>
                      <option value="favcolor" >What is your favourite color ?</option>
                   </select>
                   <div class="answer">
                     <input type="text" placeholder="Enter answer" name="answer" required>
                   </div>
                </div>

                <label for="password"><b>Password</b></label>
                <div class="password">
                    <input type="password" placeholder="Enter password" name="password" id="id_password" required>
                    <i class="far fa-eye" id="togglePassword" style="margin:15px; margin-left:-60px;cursor: pointer;"></i>
                </div>
                <label for="Email"><b>RepeatPassword</b></label>
                <div class="Repeatpassword" style="display:flex;">
                   <input type="password" placeholder="Enter password" name="repeatpassword" id="id_password2" required>
                   <i class="far fa-eye" id="togglePassword2" style="margin:15px; margin-left:-60px;cursor: pointer;"></i>
                </div>
                <hr>
                
                <button type="submit" name="submit" class="registerbtn"style="margin:auto; display:block;">Sign up</button>
                <br><a href="login.php"style="text-decoration:none;color:white;background:blue;padding: 14px 48px;">Log in</a>
                <button style="float:right; background:blue;margin-top:-10px;padding: 10px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a  style="text-decoration:none;color:white;">Forgot Password</a></button>
                <br><br>
              </div>
        </div>
    </form>

        </div>
    </div>

<!-- forgot password modal -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <legend class="modal-title btn-primary" id="staticBackdropLabel" style="border-radius:20px;"><h3 style="margin:5px 10px;;">Safe and Secure</h5></legend>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
    <form action="forgotpassword.php" method="POST" enctype="multipart/form-data" style="box-shadow:none;">
      <div class="modal-body">
      <fieldset>
        
        <div class="columns">
          <div class="item">
            <label for="email"> Registered Email<span>*</span></label>
            <input id="information" type="email" name="email" required/>
          </div>
          <div class="item">
            <label for="answer"> Answer<span>*</span></label>
            <input id="information" type="text" name="answer" required/>
          </div>
          <div class="item">
            <label for="question"> Security Question<span>*</span></label>
            <select style="padding-top:8px; padding-bottom:8px;" name="security">
              <option value="" disabled selected>Question</option>
              <option value="mothersname" >What's Your Mother's <br> Maiden Name ?</option>
              <option value="townbirth" >What is your Town of Birth ?</option>
              <option value="favcolor" >What is your favourite color ?</option>
            </select>
          </div>
        </div>
          <div class="item" style="display:flex;">
            <input id="information" type="checkbox" name="checkbox" required/>
            <label for="booktitle">I agree with Terms and conditions<span>*</span></label>
            <style>
              input[type=checkbox]{ 
              display: inline;
              margin-top:5px;
              width:8%;
            }
            </style>
         </div>
         <a href="policies.php">Terms and conditions</a>  
      </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn btn-primary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="securitycheck" class="btn btn-primary">Send</button>
      </div>
    </form>

  </div>
  </div>
</div>
<!-- end modal -->
   
    
    <!---TogglePassword-->
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');
 
       togglePassword.addEventListener('click', function (e) {
           // toggle the type attribute
           const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
           password.setAttribute('type', type);
           // toggle the eye slash icon
           this.classList.toggle('fa-eye-slash');
        });
    </script>

    <script>
        const togglePassword2 = document.querySelector('#togglePassword2');
        const repeatpassword = document.querySelector('#id_password2');
 
       togglePassword2.addEventListener('click', function (e) {
           // toggle the type attribute
           const type = repeatpassword.getAttribute('type') === 'password' ? 'text' : 'password';
           repeatpassword.setAttribute('type', type);
           // toggle the eye slash icon
           this.classList.toggle('fa-eye-slash');
        });
    </script>
    <script type="text/javascript" src="../../js/script1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <br><br><br><br>
    <!--Footer-->
    <footer class="text-center text-white" style="background-color: #f1f1f1; bottom:0; position:fixed; width:100%;">
      <!-- Copyright -->
      <div class="text-center text-dark p-3" style="background-color: blue;">
      <p style="color:white;"> &copy; Copyright <?php $year = date("Y"); echo $year; ?>
        Beacon of Compassion Foundation || 
       <a class="text-white" target="blank" href="../../../../sharaztechs.66ghz.com">Developed by Sharaz Technologies</a>
      </p>
      </div>
    </footer>

    </body>
</html>