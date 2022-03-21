<?php 
 namespace Models;

Abstract class Models{
    protected $db;
    protected $table;

    public function __construct(Object $db){
        $this->db = $db;
    }

    protected function all(){
     $stmp =   $this->db->get_pdo()->query("SELECT * FROM {$this->table}");
      return $posts = $stmp->fetchAll();
    }
    
}