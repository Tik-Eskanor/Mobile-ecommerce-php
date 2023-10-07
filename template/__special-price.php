
  <!-- special price-------------------------------------- -->
  <?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      if(isset($_POST['special_price_submit']))
      {
        $cart->addToCart($_POST['user_id'],$_POST['item_id']);
      }
    }
  ?>
  <section id="special-price">
      <div class="container">
        <h4>Special Price</h4>
        <div class="filters button-group text-right">
           <button class="btn is-cheched" data-filter = "*">All products</button>
           <?php
             $brand = [];
             foreach($items as $item) {
                  $brand[] = $item['item_brand'];
             }
             $u_brands = array_unique($brand);
             foreach ($u_brands as $u_brand) {
               ?>
             <button class="btn is-cheched" data-filter= ".<?= $u_brand ?>"><?= $u_brand ?></button>
               <?php
             }
        ?>
        </div>
        <div class="grid">
        <?php foreach($items as $item){?>
          <div class="grid-item <?php echo $item['item_brand'] ?> border">
            <div class="item py-2 border" style="width:180px">
              <div class="product">
              <a href="product.php?item_id=<?php echo $item['item_id']?>"><img src="<?php echo $item["item_image"] ?? 'images/banner1.png'?>" class="p-2 img"></a>
                <div class="text-center">
                  <h6><?php echo $item['item_name'] ?? "unknown" ?></h6>
                  <div class="rating text-warning">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="price py-2"><img src="images/naira.png" width="20px"><span class="ml-2"><?php echo $item['item_price'] ?? "unknown" ?></span></div>
                <form method="post">
                 <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                 <input type="hidden" name="user_id" value="<?php echo $item['user_id'] ?? 1; ?>">
                 <?php
                     if(in_array($item['item_id'], $cart->get_cart_id($product->get_data('cart'))))
                     {
                      echo '<button type="submit" disabled name="special_price_submit" class="btn btn-success">in cart</button>';
                     }
                     else 
                     {
                       echo '<button type="submit" name="special_price_submit" class="btn btn-warning">Add to cart</button>';
                     }
                  ?>
                </form>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
  </section>
  <!-- --------------------------------------------------- -->