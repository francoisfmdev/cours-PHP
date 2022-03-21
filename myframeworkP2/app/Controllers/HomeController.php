<?php 
namespace Controllers;
use Controllers\Controller;
use Database\DBConnection;
use PDO;
use Models\Post;

class HomeController extends Controller {
  
  public function __construct($db)
  {
    $this->db = $db;
  }
  public function index(){
      return $this->render("site.index");
    }
    public function show(int $id)
    { 
      /*
      $req = $this->db->get_pdo()->query("SELECT * from posts WHERE id=$id");
      $post = $req->fetch(); 
      return $this->render("site.show",compact('id','post'));*/
      $Post = new Post($this->db);
      $post = $Post->one_post($id);
      return $this->render("site.show",compact('post','post'));
    }
    public function all(){
      $Post = new Post($this->db);
      $posts = $Post->all();
      return $this->render("site.all",compact('posts','posts'));
    }

}