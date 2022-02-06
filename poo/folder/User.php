<?php
class User{

    protected $connected;
   public function __construct(bool $connect)
   {
       $this->connected = $connect;
   }

   public function get_connected():bool{
     return  $this->connected ;
   } 

   public function set_connected(bool $connect) 
   {
    $this->connected = $connect;
   }
}

class Admin extends User{

        public function __construct($name,$connect)
        {
            $this->name = $name;
            $this->connected = $connect;
            
        }
        public function show_connect()
        {
                echo $this->connected;
        }
}


$admin = new Admin("moi",false);