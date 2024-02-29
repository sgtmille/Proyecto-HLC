<?php

$imgsPathRoot = "assets/imgs";
$rootPath = $_SERVER["DOCUMENT_ROOT"];
function getImgs($path=false){
  if(!$path) return json_encode(array());
  global $imgsPathRoot;
  $imgsPath = $imgsPathRoot;
  if($path) $imgsPath.= "/$path";
  $imgs = array();
  $isImg = "/\.(jpg|jpeg|png|gif|webp)$/i";
  $gestor = opendir($imgsPath);
  if(!$gestor) return false;
  while($file = readdir($gestor)) {
    if($file!= "."&& $file!= ".." && preg_match($isImg,$file)==1) 
    array_push($imgs, "$path/$file");
  }
  closedir($gestor);
  return $imgs;
}

function debug($el){
  echo "<pre>";
  var_dump($el);
  echo "</pre>";
}
function render($view,$onlyOne=false){
  global $rootPath;
  $path = $rootPath."/..";
  if(!$onlyOne){
    ob_start();
    include_once $path."/views/$view.php";
    $contenido = ob_get_clean();
    include_once $path."/views/layout.php";
  }else{
    include_once $path."/views/$view.php";
  }
}



