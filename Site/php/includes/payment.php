<!-- donations -->
<?php
require_once 'config.php';
if (isset($_POST['donate'])) {

  $paymentcheckbox = $_POST['paymentcheckbox'];
  $amount = $_POST['amount'];
  $freqcheckbox = $_POST['freqcheckbox'];
  $frequency = $_POST['frequency'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $anonycheckbox = $_POST['anonycheckbox'];
  $comment = $_POST['comment'];
  $termscheckbox = $_POST['termscheckbox'];
  try {
    //code...
    $sql = 'INSERT INTO donations(paymentcheckbox,amount,freqcheckbox,frequency,name,phone,email,anonycheckbox,comment,termscheckbox,Date,Time ) VALUES(?,?,?,?,?,?,?,?,?,?,Now(),Now() )';
    $sth = $DBH->prepare($sql);
    $sth->execute(array($paymentcheckbox,$amount,$freqcheckbox,$frequency,$name,$phone,$email,$anonycheckbox,$comment,$termscheckbox));
    $_SESSION['success'] = "message sent successfully.";
  } catch (PDOException $e) {
    //throw $th;
    echo $e->getMessage();
  }
  echo "<script>alert('Thank you for your Generosity !')</script>
  <script>window.location = '../../index.php'</script>";
}

?>



<!-- Modal for enquiries -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <legend class="modal-title " id="staticBackdropLabel" style="border-radius:20px;background-color:blue;"> Touch a Soul with your Generosity</legend>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <form action="php/includes/payment.php" method="POST" enctype="multipart/form-data" style="box-shadow:none;">
            <div class="modal-body">
              <fieldset style="margin-top:-40px;">
                <label for="booktitle" style="font-weight:bold; font-size:15px;">Select Payment Method <span>*</span></label>
                <div class="payment-methods">
                <div class="item" style="display:flex; width:33%;">
                  <input id="information" type="radio" value="Online-Banking" name="paymentcheckbox" />
                  <label for="booktitle">Online-Banking</label>
                </div>
                <div class="item" style="display:flex; width:33%;">
                  <input id="information" type="radio" value="Mpesa" name="paymentcheckbox" checked />
                  <label for="booktitle">M-Pesa</label>
                </div>
                <div class="item" style="display:flex; width:33%;">
                  <input id="information" type="radio" value="Master-Card" name="paymentcheckbox"/>
                  <label for="booktitle">Master Card</label>
                </div>
                </div>
                
                <div class="item" style="display:flex;">
                  <button type="submit" name="enquiries" class="btn btn-primary btn-lg donate-btn" role="button">$ Donation Amount</button>
                  <input id="information" class="donate-input" type="text" name="amount" required style=""/>
                </div>
                  <style>
                    .donate-btn{
                      margin-right:-10px;
                      background-color:orangered; 
                      width:55%;
                      height:34px;
                      padding-bottom:30px;
                    }
                    .donate-input{
                      width:45%;
                      padding-bottom:13px;
                    }
                    @media screen and (max-width: 600px) {
                      .donate-btn{
                        text-align:left !important;
                        width:68%;
                      }
                    }
                  </style>
                <br>
                <div class="item" style="display:flex;">
                  <input id="information" type="checkbox" name="freqcheckbox" required style="width:4%; margin: -10px 10px 0px 0px;" checked/>
                  <label for="booktitle">Make this Donation every<span></span></label>
                  <select style="padding-top:8px; padding-bottom:8px;margin:-10px 0px 0px 8px;" name="frequency" required>
                      <option value="" disabled selected>Select frequency</option>
                      <option value="Just once">Just Once</option>
                      <option value="Day">Day</option>
                      <option value="Week">Week</option>
                      <option value="Month">Month</option>
                      <option value="Quater">Quater</option>
                      <option value="Year">Year</option>
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
                  <input id="information" type="checkbox" name="anonycheckbox" required />
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
                  <textarea type="text" name="comment" required></textarea>
                </div>
                <p>
                In order to make an offline donation we ask that you please follow these instructions: <br>

                <ol>
                  <li>Make a check payable to "Beacon of compassion Foundation"</li>
                  <li>On the memo line of the check, please indicate that the donation is for "Beacon of compassion Foundation"</li>
                  <li> Please mail your check to:</li>
                </ol>
                Beacon of compassion Foundation <br>
                PO BOX 925-0502 Karen<br>
                Nairobi, Kenya <br>

                All contributions will be gratefully acknowledged and are tax deductible. Thank you
                </p>
                <div class="item" style="display:flex;">
                  <input id="information" type="checkbox" name="termscheckbox" required />
                  <label for="booktitle" style="font-weight:bold; font-size:15px;" >I agree with Terms and conditions<span>*</span></label>
                </div>
                <a href="img/Beacon of compassion Finance T&C.pdf">Terms and conditions</a>
              </fieldset>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="donate" class="btn btn-primary">Send</button>
            </div>
          </form>

        </div>
      </div>
    </div>
    <!-- end modal -->