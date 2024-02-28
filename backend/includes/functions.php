<?php

$imgsPathRoot = $_SERVER["DOCUMENT_ROOT"]."/public"."/assets/imgs";
$rootPath = $_SERVER["DOCUMENT_ROOT"]."/..";
function getImgs($path=""){
  if(!$path) return json_encode(array());

  global $imgsPathRoot;
  $imgsPath = "$imgsPathRoot/$path";
  $imgs = array();
  $isImg = "/\.(jpg|jpeg|png|gif|webp)$/i";
  $gestor = opendir($imgsPath);

  while($file = readdir($gestor)) {
    if($file!= "."&& $file!= ".." && preg_match($isImg,$file)==1) 
    array_push($imgs, "$path/$file");
  }
  closedir($gestor);
  return json_encode($imgs);
}

function debug($el){
  echo "<pre>";
  var_dump($el);
  echo "</pre>";
}
function render($view,$onlyOne=false){
  global $rootPath;
  if(!$onlyOne){
    ob_start();
    include_once $rootPath."/views/$view.php";
    $contenido = ob_get_clean();
    include_once $rootPath."/views/layout.php";
  }else{
    include_once $rootPath."/views/$view.php";
  }
}