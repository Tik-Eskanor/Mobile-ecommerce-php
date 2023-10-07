<?php 
    if(isset($_POST['submit']))
    {
       $price = $_POST['price'] ;
    }
 ?>
<!-- payment form------------------------------------ -->
<section id="payment-form">
    <div class="container my-5">
      <h3 class="text-center mb-4"><b>Proceed With Payment <i class="fas fa-credit-card"></i></b></h3>
        <div class="row">
      <div class="col-md-6 m-auto">
        <form action="payment/payment_ini.php"method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label >First Name</label>
            <input type="text" name="fname" class="form-control" required>
          </div>
          <div class="form-group col-md-6">
            <label >Last Name</label>
            <input type="text" name="lname" class="form-control" required>
          </div>
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label><b>Amount to be paid </b></label>
            <input type="text" name="price" class="form-control" value="<?= $price ?>" readonly>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block py-2">Proceed</button>
      </form>
            </div>
        </div>
    </div>
</section>
<!-- ------------------------------------------------ -->