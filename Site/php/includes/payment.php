<!-- Modal for enquiries -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <legend class="modal-title " id="staticBackdropLabel" style="border-radius:20px;background-color:blue;"> Touch a Soul with your Generosity</legend>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <form action="index.php" method="POST" enctype="multipart/form-data" style="box-shadow:none;">
            <div class="modal-body">
              <fieldset style="margin-top:-40px;">
                <label for="booktitle" style="font-weight:bold; font-size:15px;">Select Payment Method <span>*</span></label>
                <div class="payment-methods">
                <div class="item" style="display:flex; width:33%;">
                  <input id="information" type="radio" name="checkbox" required />
                  <label for="booktitle">Online-Banking</label>
                </div>
                <div class="item" style="display:flex; width:33%;">
                  <input id="information" type="radio" name="checkbox" required />
                  <label for="booktitle">M-Pesa</label>
                </div>
                <div class="item" style="display:flex; width:33%;">
                  <input id="information" type="radio" name="checkbox" required />
                  <label for="booktitle">Master Card</label>
                </div>
                </div>
                
                <div class="item" style="display:flex;">
                  <button type="submit" name="enquiries" class="btn btn-primary btn-lg" role="button" style="margin-right:-10px;background-color:orangered; width:45%;height:34px;">Donation Amount</button>
                  <input id="information" type="text" name="checkbox" required style="width:55%;"/>
                </div>

                <br>
                <div class="item" style="display:flex;">
                  <input id="information" type="checkbox" name="checkbox" required style="width:4%; margin: -10px 10px 0px 0px;" />
                  <label for="booktitle">Make this Donation every<span></span></label>
                  <select style="padding-top:8px; padding-bottom:8px;margin:-10px 0px 0px 8px;" name="type" required>
                      <option value="" disabled selected>Select frequency</option>
                      <option value="Compliment">Day</option>
                      <option value="Complaint">Week</option>
                      <option value="Interest">Month</option>
                      <option value="Interest">Quater</option>
                      <option value="Interest">Year</option>
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
                  <input id="information" type="checkbox" name="checkbox" required />
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
                  <textarea type="text" name="information" required></textarea>
                </div>
                <p>
                In order to make an offline donation we ask that you please follow these instructions: <br>

                <ol>
                  <li>Make a check payable to "Beacon of compassion Foundation"</li>
                  <li>On the memo line of the check, please indicate that the donation is for "Beacon of compassion Foundation"</li>
                  <li> Please mail your check to:</li>
                </ol>
                Beacon of compassion Foundation <br>
                PO BOX 75517-00200 <br>
                Nairobi, Kenya <br>

                All contributions will be gratefully acknowledged and are tax deductible. Thank you
                </p>
                <div class="item" style="display:flex;">
                  <input id="information" type="checkbox" name="checkbox" required />
                  <label for="booktitle" style="font-weight:bold; font-size:15px;" >I agree with Terms and conditions<span>*</span></label>
                </div>
                <a href="policies.php">Terms and conditions</a>
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
    <!-- end modal -->