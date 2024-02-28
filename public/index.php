<?php
include "../router.php";
$router = new Router();

$router->get("/","home");
$router->get("/subs","pages/suscripciones");
$router->get("/about-us","pages/about-us");
$router->get("/comprar","pages/menu-compra");
$router->get("/registro","pages/registro");
$router->get("/login","pages/login");

$router->get("/products/guantes","products/guantes");
$router->get("/products/traje","products/traje");
$router->get("/products/vr-basic","products/vr-basic");
$router->get("/products/vr-pro","products/vr-pro");

$router->executeUrl();