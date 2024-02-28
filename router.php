<?php
class Router{
  public array $getPaths = [];
  public string $rootPath = __DIR__;
  public function get($curl,$view){
    $this->getPaths[$curl] = $view;
  }
  public function executeUrl(){
    $curl = $_SERVER["PATH_INFO"] ?? "/";
    $method = $_SERVER["REQUEST_METHOD"];
    if ($method=="GET") $view = $this->getPaths[$curl];
    if($view){
      $this->render($view);
    }else{
      $this->render("404");
    }
  }
  public function render($view){
    ob_start();
    include_once $this->rootPath."/views/$view.php";
    $contenido = ob_get_clean();
    include_once $this->rootPath."/views/layout.php";
  }
}
