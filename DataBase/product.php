<?php
//Used to fetch product data
 class Product
 {
   public $pro_connect = null;

   public function __construct(DBController $obj)
   {
     if(isset($obj->con))
     {
        $this->pro_connect = $obj; 
     }
     else
     {
       return null;
     }
   }

  //  get product data using getdata method
   public function get_data($table="product")
   {
       $result = $this->pro_connect->con->query(query:"SELECT * FROM {$table}");
       $row_array = [];
       while($row = mysqli_fetch_assoc($result))
       {
           $row_array[] = $row;
       }
       return $row_array;
   }

   //  get product using itemid
 public function get_product($itemid = null, $table="product")
 {
  $result = $this->pro_connect->con->query(query:"SELECT * FROM {$table} WHERE item_id = {$itemid}");
  $row_array = [];
  while($row = mysqli_fetch_assoc($result))
  {
      $row_array[] = $row;
  }
  return $row_array;
 }
 }

