<?php
//Database Connection property
 class DBController
 {
     protected $host = "localhost";
     protected $user = "root";
     protected $pws = "";
     protected $dbase = "shopee";

    //Connection property
     public $con = null;

     //Call constructor
     public function __construct()
     {
         $this->con = mysqli_connect($this->host, $this->user, $this->pws, $this->dbase);

         if($this->con->connect_error)
         {
             echo "Failed".$this->con->connect_error;
         }
     }
     
     //Close connection
     protected function close_connection()
     {
         if($this->con != null)
         {
             $this->con->close();
             $this->con = null;
         }
     }

     public function destruct()
     {
       $this->con = close_connection();
     }
 }