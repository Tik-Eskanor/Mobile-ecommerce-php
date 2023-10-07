 <!-- top-sale---------------------------- -->
 <?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      if(isset($_POST['top_sale_submit']))
      {
        $cart->addToCart($_POST['user_id'],$_POST['item_id']);
      }
    }
  ?>
 <section id="top-sale">
    <div class="container py-5">
       <h4>Top Sale</h4>
       <hr>
       <!-- owlcarousel-------------- ------->
         <div class="owl-carousel owl-theme">
           <?php foreach($items as $item){?>
           <div class="item py-2">
               <div class="product">
                 <a href="product.php?item_id=<?php echo $item['item_id']?>"><img src="<?php echo $item["item_image"] ?? 'images/banner1.png'?>" class="p-2 img"></a>
                 <div class="text-center">
                   <h6><?php echo $item["item_name"] ?? 'unknown'?></h6>
                   <div class="rating text-warning">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="far fa-star"></i>
                 </div>
                 <div class="price py-2"><img src="images/naira.png" class="naira"><span><?php echo $item["item_price"] ?? '0'?></span></div>
                 <form method="post">
                  <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                  <input type="hidden" name="user_id" value="<?php echo $item['user_id'] ?? 1; ?>">
                  <?php
                     if(in_array($item['item_id'], $cart->get_cart_id($product->get_data('cart'))))
                     {
                      echo '<button type="submit" disabled name="top_sale_submit" class="btn btn-success">in cart</button>';
                     }
                     else 
                     {
                       echo '<button type="submit" name="top_sale_submit" class="btn btn-warning">Add to cart</button>';
                     }
                  ?>
                 </form>
                 </div>
               </div>
           </div>
            <?php }?>
         </div>
       <!-- -------------------------- -->
    </div>
  </section>
  <!-- ---