<?php
require "../vendor/autoload.php";
use Pecee\SimpleRouter\SimpleRouter as Router;
use Pecee\Http\Request;
include "../backend/clases/db.php";
include "../backend/includes/functions.php";

Router::get('/', function() {
  render("home");
});
Router::get('/suscripciones', function() {
  render("pages/suscripciones");
});
Router::get('/about-us', function() {
  render("pages/about-us");
});
Router::get('/login', function() {
  render("pages/login",true);
});
Router::get('/comprar', function() {
  render("pages/menu-compra");
});

Router::error(function(Request $request, \Exception $exception) {
  if($exception->getCode()) render("404");   
});
Router::start();