 <!-- cart------------------------------------------------ -->
 <?php
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
     if(isset($_POST['delete_cart_btn']))
     {
        $cart->delete_cart($_POST['item_id']);
     }
     if(isset($_POST['wishlist-submit']))
     {
        $cart->save_for_later($_POST['item_id']);
     }
   }
 ?>
 <section id="cart" class="py-3">
   <div class="container-fluid w-75">
     <h5>Shopping Cart</h5>
     <!-- shopping cart items--------- -->
     <div class="row">
       <div class="col-md-9">
         <?php
            $subtotal;
            foreach($product->get_data('cart') as $item):
            $carts = $product->get_product($item['item_id']);
             foreach($carts as $cartt):
              $subtotal[] = (float)$cartt['item_price'];
          ?>
         <!-- cart item -->
           <div class="row border-top py-3 mt-3">
             <div class="col-md-2">
               <img src="<?php echo $cartt['item_image'] ?? 'images/banner1.png' ?>" class="w-100">
             </div>
             <div class="col-md-8">
               <h5 class="font-20"><?php echo $cartt['item_name']  ?? 'Unknown' ?></h5>
               <small>by <?php echo $cartt['item_brand'] ?? 'Brand' ?></small>
               <!-- product rating-------------- -->
               <div class="d-flex">
                <div class="rating text-warning">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                 <a href="" class="px-2 font-14">20, 460 Rating</a>
               </div>
               </div>
               <!-- ----------------------------- -->

               <!-- product qty -------------------->
               <div class="qty d-flex pt-2">
                 <div class="d-flex w-25">
                  <button class="qty qty-up border bg-light px-1" ><i class="fas fa-angle-up"></i></button>
                    <input type="text" class="input-qty px-2 border bg-light w-100" disabled value="1" placeholder="1">
                  <button class="qty qty-down border bg-light px-1"><i class="fas fa-angle-down"></i></button>
                 </div>
                 <form method="post">
                   <input type="hidden" value="<?php echo $cartt['item_id'] ?? "0" ?>" name="item_id">
                   <button type="submit" name="delete_cart_btn" class="btn text-danger px-3 border-right">Delete</button>
                 </form>
                 <form method="post">
                   <input type="hidden" value="<?php echo $cartt['item_id'] ?? "0" ?>" name="item_id">
                   <button type="submit" name="wishlist-submit" class="btn text-danger px-3">Save for later</button>
                 </form>
               </div>
               <!-- ----------------------------- -->
             </div> 
             <div class="col-md-2 text-right">
              <div class="font-20 text-danger">
               <img src="images/naira.png" width="20px">
               <span class="product_price" >  <?php echo $cartt['item_price'] ?? 0 ?></span>
                <span class="product_price_fixed d-none"><?php echo $cartt['item_price'] ?? 0 ?></span>
              </div>
             </div>
           </div>
         <!-- --------- -->
         <?php endforeach;  endforeach ?>
       </div>
       <div class="col-md-3">
         <div class="sub-total border text-center mt-2">
            <h6 class="font-12 py-3 text-success"><i class="fas fa-check"></i>Your is eligible for Free Delivery</h6>
            <div class="border-top py-4">
              <h5 class="font-20">Subtotal (<?php echo count($product->get_data('cart')) ?> items)</h5>
              <form action="payment_form.php" method="post">
                <div class="d-flex justify-content-center">
                <span><img src="images/naira.png" width="20px"></span> <input type="text" name="price" class="total-price w-50 border-0 ml-1" value="">
                </div>
                <button type="submit" name="submit" class="btn btn-warning mt-2">Proceed to Buy</button>
              </form>
            </div>
         </div>
       </div>
     </div>
     <!-- ---------------------------- -->
   </div>
 </section>
 <!-- ---------------------------------------------------- -->