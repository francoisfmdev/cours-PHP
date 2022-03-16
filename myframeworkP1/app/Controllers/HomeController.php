<?php 
namespace Controllers;
use Controllers\Controller;
use Database\DBConnection;
use PDO;
use Models\Post;

class HomeController extends Controller {

    public function index(){
      return $this->render("site.index");
    }
    public function show(int $id)
    {
      $db = new DBConnection("myframework","localhost",'root','',
      );
      $Post = new Post($db);
      
      $req = $db->get_pdo()->query("SELECT * from posts WHERE id=$id");
      $post = $req->fetch();
     
    
      return $this->render("site.show",compact('id','post'));
    }

}