<?php
class db{
  public $db;
  public $log;
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
      $value = $value = preg_match("/char|text|blob|date|time|year/i",$row["Type"]) ? "" : 0;
      if($row["Key"]=="PRI"){
        $value = preg_match("/char|text|blob/i",$row["Type"])
        ? "StrKey" : "IntKey";
      }
      $columns[$field] = $value; 
    }
    return $columns;
  }
  public function getPrimaryKey($table,$columns=false){
    if(!$columns) $columns = $this->getColumns($table);
    $i = 0;
    foreach($columns as $field => $value){
      if($value=="StrKey" || $value=="IntKey") return [
        "name"=>$field,
        "type"=>$value
      ];
      $i++;
    }
  }
  public function insert($table, $data,$all=false,$fileField=false){
    if(!$this->existTable($table)){
      sendLog("No existe la tabla");
      return false;
    };

    if($fileField){
      $ruta = $fileField["dir"];
      $name = $fileField["name"];
      $file = $_FILES["$name"]; 
    }
    $columns = $this->getColumns($table);
    $PrimaryKey = $this->getPrimaryKey("",$columns);
    if(!$all){
      unset($columns[$PrimaryKey["name"]]);
    }

    $keysCol = array_keys($columns);
    $keysData = array_keys($data);
    foreach($keysData as $key){
      if(!in_array($key,$keysCol)){
        sendLog("Los campos no concuerdan");
        return false;
      }
    }
    $query = "INSERT INTO $table (";
    $values = "";
    foreach($columns as $key=>$value){
      $query.=$key.",";
      $dataVal = $data[$key];
      $values.= gettype($value) == "string" ? "'$dataVal',": "$dataVal,";
    }
    $query = trim($query,",");
    $query.= ") VALUES (".trim($values,",");
    $query.=")";
    try{
      $done = $this->db->query($query) ? true : false;
      $this->db->close();
      return $done;
    }catch(Exception $e){
      $msgErr = "Error de la query: $query\n".$e->getMessage();
      sendLog($msgErr);
      return false;
    }
  }
  public function getAll($table,$limit=false){
    if(!$this->existTable($table)) return "No existe la tabla";
    $columns = $this->getColumns($table);
    if($limit) $limit = "LIMIT $limit";
    $query = "SELECT * FROM $table $limit";
    $r = $this->db->query($query);
    $rows = array();
    while($row=$r->fetch_assoc()){
      $obj = array();
      foreach($columns as $field => $value){
        $obj[$field] = $row[$field];
      }
      array_push($rows, $obj);
    }
    $this->db->close();
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
    $this->db->close();
    return $obj;
  }  
  public function update($table,$id,$data){
    if(!$this->existTable($table)) return "No existe la tabla";

    $columns = $this->getColumns($table);
    $PrimaryKey = $this->getPrimaryKey("",$columns);
    unset($columns[$PrimaryKey["name"]]);

    $query = "UPDATE $table SET ";
    foreach($columns as $key=>$value){
      $dataVal = $data[$key];
      $value = gettype($value)=="string" ? "'$dataVal'" : "$dataVal" ;
      $query.="$key=$value,";
    }
    $query = trim($query,",");
    $key = $PrimaryKey["name"];
    $id = $PrimaryKey["type"] == "StrKey" ? "'$id'":"$id";
    $query.= " WHERE $key=$id";
    try{
      $done = $this->db->query($query) ? true : false;
      $this->db->close();
      return $done;
    }catch(Exception $e){
      return $e->getMessage();
    }
  }
  public function delete($table,$id){
    if(!$this->existTable($table)) return "No existe la tabla";
    $PrimaryKey = $this->getPrimaryKey($table);
    $key = $PrimaryKey["name"];
    $id = $PrimaryKey["type"] == "StrKey"? "'$id'": "$id";
    $query = "DELETE FROM $table WHERE $key=$id";
    try{
      $done = $this->db->query($query) ? true : false;
      $this->db->close();
      return $done;
    }catch(Exception $e){
      return $e->getMessage();
    }
  }
}
