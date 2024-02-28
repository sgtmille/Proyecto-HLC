<?php
class db{
  public $db;
  public function __construct($table){
    $this->db = new mysqli("localhost","root","root",$table);
  }
  public function getColumns($table){
    $query = "SHOW COLUMNS FROM $table";
    $r = $this->db->query($query);
    while($row = $r->fetch_array()){
      echo json_encode($row);
    }

  }
  public function getAll($table){

  }
}