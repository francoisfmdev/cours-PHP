<?php
namespace Controllers;


 Class Controller {

    protected $db;

   public function __construct($db)
   {
       $this->db = $db;
   }
    public function render(string $path,array $params = null){
        ob_start();
        $path = str_replace('.',DIRECTORY_SEPARATOR,$path);
        require VIEWS.$path.'.php';
        if($params != null){
            $params = extract($params);
        }
        $content = ob_get_clean();
        require VIEWS.'layout.php';
    }
}