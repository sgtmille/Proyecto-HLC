<?php
require "../vendor/autoload.php";
use Pecee\SimpleRouter\SimpleRouter as Router;
use Pecee\Http\Request;
include "../backend/clases/db.php";
include "../backend/includes/functions.php";

$db = new db("hlc");

Router::get("/public/",function(){
  echo "Probando los cambios";
});
// Router::get('/', fn()=>render("home"));
// Router::get('/suscripciones', fn()=>render("pages/suscripciones"));
// Router::get("/products/guantes",fn()=>render("products/guantes"));
// Router::get("/products/traje",fn()=>render("products/traje"));
// Router::get("/products/vr-basic",fn()=>render("products/vr-basic"));
// Router::get("/products/vr-pro",fn()=>render("products/vr-pro"));
// Router::get('/about-us', fn()=>render("pages/about-us"));
// Router::get('/login', fn()=>render("pages/login",true));
// Router::get('/comprar', fn()=>render("pages/menu-compra",true));
// Router::get("/registro", fn()=>render("pages/registro",true));

// Router::get("/imgs/{dir}",function($dir){
//   $imgs = getImgs($dir);
//   if(!$imgs) return header("HTTP/1.1 400 Ese directorio no existe");
//   echo json_encode($imgs);
// });
// Router::get("/imgs",function(){
//   $imgs = getImgs(".");
//   if(!$imgs) return header("HTTP/1.1 400 Ese directorio no existe");
//   echo json_encode($imgs);
// });

// // 404 Not found
// Router::error(function(Request $request, \Exception $exception) {
//   if($exception->getCode()) render("404");   
// });

// Router::get("/login/{usuario}/{password}",function($usuario,$password){
//   global $db;
//   $usuarios = $db->getAll("usuarios");
//   foreach($usuarios as $user) {
//     if($user["usuario"] == $usuario && $user["password"]== $password){
//       return header("HTTP/1.1 200 Auntenticacion correcta");
//     }
//   }
//   header("HTTP/1.1 400 Autenticacion fallida");
// });


// // Api
// Router::get("/api/{table}",function($table) {
//   global $db;

//   $data = $db->getAll($table);
//   echo json_encode($data);
// });

// Router::get("/api/{table}/limit/{limit}",function($table,$limit) {
//   global $db;
//   $data = $db->getAll($table,$limit);
//   echo json_encode($data);
// });

// Router::get("/api/{table}/key/{id}",function($table,$id) {
//   global $db;
//   $data = $db->get($table,$id);
//   echo json_encode($data);
// });

// // Post

// Router::post("/api/{table}",function($table) {
//   global $db;
//   $data = $_POST;
//   $done = "";
//   $table!="usuario"
//   ? $done = $db->insert($table,$data)
//   : $done = $db->insert($table,$data,true);
  
//   $done
//   ? header("HTTP/1.1 200 Se insertaron los datos")
//   : header("HTTP/1.1 500 No se insertaron los datos");
// });

// Router::delete("/api/{table}/key/{id}",function($table,$id) {
//   global $db;
//   $db->delete($table,$id)
//   ? header("HTTP/1.1 200 Se eliminaron los datos")
//   : header("HTTP/1.1 500 No se eliminaron los datos");
// });

// Router::post("/api/{table}/update/{id}",function($table,$id){
//   global $db;
//   $data = $_POST;
//   $done = $db->update($table,$id,$data);
//   $done
//   ? header("HTTP/1.1 200 Se ha insertado los datos")
//   : header("HTTP/1.1 500 No se insertaron los datos");
// });

// Router::start();