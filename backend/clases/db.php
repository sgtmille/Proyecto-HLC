<?php
class db{
  public $db;
  function __construct($table){
    try{
      $this->db = new mysqli("localhost","root","root",$table);
    }catch(Exception $er){
      echo $er->getMessage();
      exit;
    }
  }
  public function existTable($table){
    $query="SHOW TABLES LIKE '$table'";
    $r= $this->db->query($query);
    return $r->num_rows>0 ? true : false;
  }
  public function getColumns($table){
    $query = "SHOW COLUMNS FROM $table";
    $r = $this->db->query($query);
    $columns = array();
    while($row = $r->fetch_assoc()){
      $field = $row["Field"];
      $value = "";
      if($row["Key"]=="PRI"){
        $value = preg_match("/char|text|blob/i",$row["Type"])
        ? "StrKey" : "IntKey";
      }
      $columns[$field] = $value; 
    }
    return $columns;
  }
  public function getPrimaryKey($table,$columns=false){
    if(!$columns) $this->getColumns($table);
    foreach($columns as $field => $value){
      if($value=="StrKey" || $value=="IntKey") return [
        "name"=>$field,
        "type"=>$value
      ];
    }
  }
  public function insert($table, $data){
    if(!$this->existTable($table)) return "No existe la tabla";
    $columns = $this->getColumns($table);
    $query = "INSERT INTO $table (";
    foreach($columns as $key=>$value){
      $query.=$key.",";
    }
    $query = trim($query,",");
    $query.=") VALUES (";
    foreach($data as $key=>$value){
      $query.=$value.",";
    }
    $query = trim($query,",");
    $query.=")";
    return $this->db->query($query) ? true : false;
  }
  public function getAll($table){
    if(!$this->existTable($table)) return "No existe la tabla";
    $columns = $this->getColumns($table);
    $query = "SELECT * FROM $table";
    $r = $this->db->query($query);
    $rows = array();
    while($row=$r->fetch_assoc()){
      $obj = array();
      foreach($columns as $field => $value){
        $obj[$field] = $row[$field];
      }
      array_push($rows, $obj);
    }
    return $rows;
  }
  public function get($table,$id){
    if(!$this->existTable($table)) return "No existe la tabla";
    $columns = $this->getColumns($table);
    $PrimaryKey = $this->getPrimaryKey("", $columns);
    $key = $PrimaryKey["name"];
    $id = $PrimaryKey["type"] == "StrKey" ? "'$id'":"$id" ;
    $query = "SELECT * FROM $table WHERE $key=$id";
    $r = $this->db->query($query);
    $row=$r->fetch_assoc();
    $obj = array();
    foreach($columns as $field => $value){
      $obj[$field] = $row[$field];
    }
    return $obj;
  }  
  public function update($table,$id,$data){
    if(!$this->existTable($table)) return "No existe la tabla";
    $query = "UPDATE $table SET ";
    foreach($data as $key=>$value){
      $value = gettype($value)=="string" ? "'$value'" : "$value" ;
      $query.="$key=$value, ";
    }
    $query = trim($query,",");
    return $this->db->query($query) ? true : false;
  }
  public function delete($table,$id){
    if(!$this->existTable($table)) return "No existe la tabla";
    $PrimaryKey = $this->getPrimaryKey($table);
    $key = $PrimaryKey["name"];
    $id = $PrimaryKey["value"] == "StrKey"? "'$id'": "$id";
    $query = "DELETE FROM $table WHERE $key=$id";
    return $this->db->query($query) ? true : false;
  }
}
