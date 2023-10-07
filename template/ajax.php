<?php
require_once("../functions.php");

if(isset($_POST['item_id']))
{
   $result = $product->get_product($_POST['item_id']);
   echo json_encode($result);
}