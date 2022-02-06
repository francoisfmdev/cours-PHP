<?php 

class City{

    protected $name;
    protected $residents;


    public function __construct($name,$residents)
    {
        self::check_residents($residents);
        $this->name = $name;
        $this->residents = $residents;
    } 

    public function set_name($name){
        $this->name = $name;
    }

    public function set_residents($residents){

        self::check_residents($residents);
        $this->residents = $residents;
    }


    // Nous pouvons typer les paramètres en précisant le type
    // Nous pouvons déclarer le type de retour
    public static function check_residents(int $residents):bool {
      if($residents <= 0){
          trigger_error("pas assez d'habitants...",E_USER_ERROR);
      }
      return false;
    }
    
}

var_dump(City::check_residents(150));
var_dump(City::check_residents(0));






?>