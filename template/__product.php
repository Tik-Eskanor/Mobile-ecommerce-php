  <?php

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      if(isset($_POST['product_submit']))
      {
        $cart->addToCart($_POST['user_id'],$_POST['item_id']);
      }
    }
   $item_id = $_GET['item_id'] ?? 1;
   foreach($product->get_data() as $item):
    if($item_id == $item["item_id"]):
  ?>
  <!-- product --------------------------------------------->
  <section id="product" class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-wrapper m-auto w-75">
                    <img src="<?php echo $item["item_image"] ?? 'images/banner1.png'?>" alt="product" class="img-fluid">
                </div>
              <div class="form-row pt-4 font-16">
                  <div class="col">
                      <button type="submit" class="btn btn-danger form-control">Proceed to buy</button>
                  </div>
                  <div class="col">
                  <form method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $item['user_id'] ?? 1; ?>">
                    <?php
                        if(in_array($item['item_id'], $cart->get_cart_id($product->get_data('cart'))))
                        {
                        echo '<button type="submit" disabled name="special_price_submit" class="btn btn-success btn-block">in cart</button>';
                        }
                        else 
                        {
                        echo '<button type="submit" name="product_submit" class="btn btn-warning btn-block">Add to cart</button>';
                        }
                    ?>
                    </form>
                  </div>
              </div>
            </div>
            <div class="col-md-6 py-5">
                <h5><?php echo $item["item_name"] ?? 'unknown'?></h5>
                <small>By <?php echo $item["item_brand"] ?? 'unknown'?></small>
                <div class="d-flex align-items-center">
                    <div class="rating text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="" class="px-2 font-14">20 340 ratings | 1000+ answered questions</a>
                </div>
                <hr class="m-0">
 
                <!-- product price -------------------->
                <table class="my-3 w-75">
                    <tr class="font-14">
                        <td>M.P.R</td>
                        <td><del><img src="images/naira.png" width="20px">164.200</del></td>
                    </tr>
                    <tr class="font-14">
                        <td>Deal Price</td>
                        <td class="font-20 text-danger">
                        <img src="images/naira.png" width="20px"><span><?php echo $item["item_price"] ?? 'unknown'?></span> <small class="text-dark font-12">&nbsp; &nbsp; Inclusive of all tax</small>
                        </td>
                    </tr>
                    <tr class="font-14">
                        <td>You saved</td>
                        <td class="font-16 text-danger">
                        <img src="images/naira.png" width="20px"><span>152.00</span>
                        </td>
                    </tr>
                </table>
                <!-- ------------------------------- -->

                <!-- policy------------------------- -->
                <div id="policy">
                  <div class="d-flex">
                      <div class="return text-center mr-5">
                          <div class="font-20 my-2">
                              <span class="fas fa-retweet border p-3 rounded-pill"></span>
                          </div>
                          <a href="" class="font-12">10 days<br>Replacement</a>
                      </div>
                      <div class="return text-center mr-5">
                        <div class="font-20 my-2">
                            <span class="fas fa-truck border p-3 rounded-pill"></span>
                        </div>
                        <a href="" class="font-12">Daily Tuition<br>Delivered</a>
                      </div>
                      <div class="return text-center mr-5">
                        <div class="font-20 my-2">
                            <span class="fas fa-check-double border p-3 rounded-pill"></span>
                        </div>
                        <a href="" class="font-12">1 year<br>Warrante</a>
                     </div>
                  </div>
                </div>
                <!-- ------------------------------- -->
                <hr>
                <!-- order detail------------------- -->
                  <div id="order-detail" class="d-flex flex-column text-dark">
                     <small>Delivery by: Mar 29 - Apr 1</small>
                     <small>Sold by: <a href="">Daily Electronics</a> 4.5 out of 5 | 18,300 rating</small>
                     <small><i class="fas fa-map-marker-alt"></i> &nbsp;&nbsp; Delivered to customer 420945</small>
                  </div>
                <!-- ------------------------------- -->
                <div class="row align-items-center">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6>color</h6>
                                <div class="p-2 color-bg-tec rounded-circle">
                                    <button class="btn font-14"></button>
                                </div>
                                <div class="p-2 color-bg-sec rounded-circle">
                                    <button class="btn font-14"></button>
                                </div>
                                <div class="p-2 color-bg-pri rounded-circle">
                                    <button class="btn font-14"></button>
                                </div>
                            </div>
                        </div>
                        <!-- ---- -->
                    </div>
                    <div class="col-6">
                        <div class="qty d-flex">
                           <h6>Qty:</h6>
                           <div class="px-4 d-flex">
                               <button class="qty-up border bg-light px-1"><i class="fas fa-angle-up"></i></button>
                               <input type="text" class="input-qty px-2 border bg-light w-50" disabled value="1" placeholder="1">
                               <button class="qty-down border bg-light px-1"><i class="fas fa-angle-down"></i></button>
                           </div>
                        </div>
                    </div>
                </div>

                <!-- size-------------------------- -->
                 <div class="size my-3">
                     <h6>size:</h6>
                     <div class="d-flex justify-content-between w-75">
                         <div class="border p-2">
                             <button class="btn p-0 font-14">4GB RAM</button>
                         </div>
                         <div class="border p-2">
                            <button class="btn p-0 font-14">6GB RAM</button>
                        </div>
                        <div class="border p-2">
                            <button class="btn p-0 font-14">8GB RAM</button>
                        </div>
                     </div>
                 </div>
                <!-- ------------------------------ -->
          </div>
          <div class="col-md-12">
              <h6 class="text-black"><b>Product Description</b></h6>
              <hr>
              <p class="font-14 text-black-50">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dignissimos tenetur, quod natus itaque explicabo quos. Laborum molestias harum enim est quisquam rem? Laboriosam voluptatum ea tenetur, molestiae quibusdam veniam aperiam nihil hic, asperiores excepturi molestias totam quisquam, rem modi est fugiat dolorem quas quia temporibus libero amet nemo repellendus!
              </p>
              <p class="font-14 text-black-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dignissimos tenetur, quod natus itaque explicabo quos. Laborum molestias harum enim est quisquam rem? Laboriosam voluptatum ea tenetur, molestiae quibusdam veniam aperiam nihil hic, asperiores excepturi molestias totam quisquam, rem modi est fugiat dolorem quas quia temporibus libero amet nemo repellendus!
            </p>
          </div>
        </div>
    </div>
  </section>
  <!-- -------------------------------------------------- -->
  <?php
    endif;
    endforeach;
  ?>

