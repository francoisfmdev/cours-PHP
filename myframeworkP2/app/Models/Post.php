<?php 
namespace Models;

class Post extends Models {

    protected $table  = "posts"; 
    
    public function all(){
        $stmp =   $this->db->get_pdo()->query("SELECT * FROM {$this->table}");
         return $posts = $stmp->fetchAll();
    }

    public function one_post(String $id){
        $stmp =   $this->db->get_pdo()->query("SELECT * FROM {$this->table} where id={$id}");
         return $post = $stmp->fetch();
    }
}