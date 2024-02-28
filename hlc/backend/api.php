<?php 
include "clases/db.php";
include "includes/functions.php";
$db = new db("josedb");
$db->getColumns("usuario");