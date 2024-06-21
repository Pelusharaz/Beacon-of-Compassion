
<?php
session_start();
if(!isset($_SESSION['role'])){
  $_SESSION['redirectURL'] = $_SERVER['REQUEST_URL'];
  header('location:../../index.php');
}
?>

<?php
require_once '../includes/config.php';
$sql="SELECT * FROM admin where role='" . $_SESSION["role"] . "'";
$stmt = $DBH->prepare($sql);
$stmt->execute();
$total = $stmt->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Boc | Admin Panel</title>
    <!-- Tees Icon -->
    <link rel="icon" href="../../img/bof-logo.png" />
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
                    <a class="dropdown-item" href="orders.php">Orders</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="admin.php">Add Products</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="updatestudio.php">Update Studio</a>
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
        style="background-image: url('../../img/admin.jpg'); height: 550px">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Beacon of Compassion Foundation</h1>
              <h4 class="mb-3">
                Volunteers
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
    <!--contact messages-->
    <style>
      tr:nth-child(even){
           background-color:aqua;
           color: black;
          }
    </style>
    <div class="messages" style="marging-left:auto;margin-right:auto;display:block;text-align:center;">
      <h4>contact messages</h4>
    </div>
    <br>
    <div class="container" style="overflow:scroll; height:900px; max-width:1000px;">
    <table>
         <th><strong style="color:orange;">Messages</strong></th>
         <tr style="border-radius: 20px;">
             <th>Senders Name</td>
             <th>Gender</td>
             <th>Address</td>
             <th>Phone</td>
             <th>Email</td>
             <th>Emergency Name</td>
             <th>Emergency Phone</td>
             <th>Emergency Email</td>
             <th>Volunteer's Days</td>
             <th>Volunteer's Time</td>
             <th>Reffered By</td>
             <th>Background Check</td>
             <th>Liability waiver</td>
             <th>Date</td>
             <th>Time</td>
             <th>Delete</td>
            <th>Reply</td>
        </tr>
        <!-- <tr>
            <td>Test</td>
            <td>test@gmail.com</td>
            <td>test message</td>
            <td>reffered by test</td>
            <td>1/29/2022</td>
            <td>6:06 PM</td>
            <td><button type="submit" class="logoutbtn">DELETE</button></td>
            <td><button type="submit" class="logoutbtn">REPLY</button></td>
            
        </tr> -->
        <?php
         require_once '../includes/config.php';
         $sql="SELECT * FROM volunteer ";
         $stmt = $DBH->prepare($sql);
         $stmt->execute();
         $total = $stmt->rowCount();

        ?>
        <?php
              while($row = $stmt->fetchObject()) {
            ?>
        <tr>
            <td><?php echo "{$row->name}"; ?></td>
            <td><?php echo "{$row->gender}"; ?></td>
            <td><?php echo "{$row->address}"; ?></td>
            <td><?php echo "{$row->phone}"; ?></td>
            <td><?php echo "{$row->email}"; ?></td>
            <td><?php echo "{$row->ename}"; ?></td>
            <td><?php echo "{$row->ephone}"; ?></td>
            <td><?php echo "{$row->eemail}"; ?></td>
            <td><?php echo "{$row->days}"; ?></td>
            <td><?php echo "{$row->vtime}"; ?></td>
            <td><?php echo "{$row->referals}"; ?></td>
            <td><?php echo "{$row->bcheckbox}"; ?></td>
            <td><?php echo "{$row->lcheckbox}"; ?></td>
            <td><?php echo "{$row->Date}"; ?></td>
            <td><?php echo "{$row->Time}"; ?></td>
            <td>
                <form action="deleteproducts.php" method="post" style="box-shadow:none;background-color:transparent;">
                    <input type="hidden" name="deletemessage_id" value="<?php echo "{$row->id}"; ?>">
                    <button type="submit" class="logoutbtn" name="deletemessage_btn">DELETE</button>
                </form>
            </td>
            <td><a href="mailto:<?php echo "{$row->email}"; ?>?&subject=Subject : Beacon of compassion Information Desk&body=Dear <?php echo "{$row->name}"; ?>, " target="_blank"><button type="submit" class="logoutbtn">REPLY</button></a></td>
        </tr>
        <?php
         }
        ?>  
     </table>
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
  <script type="text/javascript" src="../../js/script1.js"></script>
  <script type="text/javascript"></script>
  
  
</html>
