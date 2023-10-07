<?php

 class Cart
 {
     public $c_connect = null;

     public function __construct(DBController $db)
     {
        if(isset($db->con))
        {
           $this->c_connect = $db;
        }
        else
        {
            return null;
        }
     }

    //  To insert data into any table.BUT set to add to cart by default
     public function insert_into_cart($params = null, $table ="cart")
     {
         if(isset($this->c_connect->con))
         {
           if($params != null)
           {
             $columns = implode(',', array_keys($params));
             var_dump($columns);
             $values = implode(',', array_values($params));
             print_r($values);
           }
           $sql = sprintf("INSERT INTO %s(%s)VALUES(%s)",$table,$columns,$values);
           $result = $this->c_connect->con->query($sql);
           return $result;
         }
     }

  //  Add to cart
  public function addToCart($userid,$itemid)
  {
    if(isset($userid) && isset($itemid))
    {
      $params = ['user_id'=>$userid,'item_id'=>$itemid];
      $result = $this->insert_into_cart($params);
      if($result)
      {
        header("location:".$_SERVER['PHP_SELF']);
      }
    }    
  }

  public function get_sum($arr)
  {
     $sum = 0;
     if(isset($arr))
     {
       for($i = 0; $i<count($arr); $i++)
       {
         $sum += $arr[$i];
       }
     }
     return $sum;
  }

  public function delete_cart($item_id = null, $table="cart")
  {
    if($item_id != null)
    {
      $result = $this->c_connect->con->query("DELETE FROM {$table} WHERE item_id = {$item_id}");
      if($result)
      {
        header("location:".$_SERVER['PHP_SELF']);
      }
      return $result;
    }
  }
  public function delete_cart_all()
  {
      $result = $this->c_connect->con->query("DELETE FROM cart");
      return $result;
  }

  public function get_cart_id($cart_array= null, $key = 'item_id')
  {
    if(isset($cart_array))
    {
      $cart_id_array = [];
      foreach($cart_array as $ca)
      {
        $cart_id_array[] = $ca[$key];
      }
    }
    return $cart_id_array;
  } 

  public function save_for_later($item_id=null,$save_table="wishlist", $from_table="cart")
  {
    $query = "INSERT INTO {$save_table} SELECT * FROM {$from_table} WHERE item_id = {$item_id};";
    $query .= "DELETE FROM {$from_table} WHERE item_id = {$item_id};";
    $result =  $this->c_connect->con->multi_query($query);
    if($result)
    {
      header("location:".$_SERVER['PHP_SELF']);
    }
    return $result;
  }
 } 