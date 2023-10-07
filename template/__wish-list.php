 <!-- cart------------------------------------------------ -->
 <?php
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
     if(isset($_POST['delete_wish_btn']))
     {
        $cart->delete_cart($_POST['item_id'],'wishlist');
     }

     if(isset($_POST['cart-submit']))
     {
        $cart->save_for_later($_POST['item_id'],'cart','wishlist');
     }
   }
 ?>
 <section id="cart" class="py-3">
   <div class="container-fluid w-75">
     <h5>Wish list</h5>
     <!-- shopping cart items--------- -->
     <div class="row">
       <div class="col-md-9">
         <?php
            $subtotal;
            foreach($product->get_data('wishlist') as $item):
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
                 <form method="post">
                   <input type="hidden" value="<?php echo $cartt['item_id'] ?? "0" ?>" name="item_id">
                   <button type="submit" name="delete_wish_btn" class="btn text-danger px-3 border-right">Delete</button>
                 </form>
                 <form method="post">
                   <input type="hidden" value="<?php echo $cartt['item_id'] ?? "0" ?>" name="item_id">
                   <button type="submit" name="cart-submit" class="btn text-danger px-3 border-right">Add to cart</button>
                 </form>
               </div>
               <!-- ----------------------------- -->
             </div> 
             <div class="col-md-2 text-right">
              <div class="font-20 text-danger">
                $ <span class="product_price" data-id="<?php echo $cartt['item_id'] ?? '0' ?>" >  <?php echo $cartt['item_price'] ?? 0 ?></span>
              </div>
             </div>
           </div>
         <!-- --------- -->
         <?php endforeach;  endforeach ?>
       </div>
     </div>
     <!-- ---------------------------- -->
   </div>
 </section>
 <!-- ---------------------------------------------------- -->