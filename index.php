<?php
require "vendor/autoload.php";
use Pecee\SimpleRouter\SimpleRouter as Router;
use Pecee\Http\Request;
include "backend/clases/db.php";
include "backend/includes/functions.php";

$db = new db("hlc");

Router::get("/",function(){
  echo "Probando los cambios";
});