<?php 
 namespace Models;

Abstract class Models{
    protected $db;

    public function __construct(Object $db){
        $this->db = $db;
    }
    
}