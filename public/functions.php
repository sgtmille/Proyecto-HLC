<?php
  $imgsPathRoot = $_SERVER["DOCUMENT_ROOT"]."/public"."/assets/imgs";
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
