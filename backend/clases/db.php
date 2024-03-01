<?php
class db{
  public $db;
  public $log;

  public function log(string $text){
    $timestamp = new DateTime(null, new DateTimeZone('America/Lima'));
    $time = $timestamp->format('Y-m-d H:i:s');
    $filename ="../backend/log.txt";
    $textData = $text."  --  $time\n";
    file_put_contents($filename,$textData."\n", FILE_APPEND);
  }
  function __construct($table){
    try{
      $this->db = new mysqli("localhost","root","",$table);
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
    try{
      if(!$this->existTable($table)) throw new Exception("No existe la tabla");
  
      if($fileField){
        $ruta = $fileField["dest"];
      }
      $columns = $this->getColumns($table);
      $PrimaryKey = $this->getPrimaryKey("",$columns);
      if(!$all){
        unset($columns[$PrimaryKey["name"]]);
      }
  
      $keysCol = array_keys($columns);
      $keysData = array_keys($data);
      foreach($keysData as $key){
        if(!in_array($key,$keysCol)) throw new Exception("Los campos no concuerdan");
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
      
    }catch(Exception $e){
      $this->log($e->getMessage());
      return false;
    }
    try{
      $done = $this->db->query($query) ? true : false;
      $this->db->close();
      return $done;
    }catch(Exception $e){
      $msgErr = "Error de la query: $query\n".$e->getMessage();
      $this->log($msgErr);
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
    try{
      if(!$this->existTable($table)) throw new Exception("No existe la tabla");
  
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
    }catch(Exception $e){
      $this->log($e->getMessage());
      return false;
    }
    try{
      $done = $this->db->query($query) ? true : false;
      $this->db->close();
      return $done;
    }catch(Exception $e){
      $msgErr = "Error de la query: $query\n".$e->getMessage();
      $this->log($msgErr);
      return false;
    }
  }
  public function delete($table,$id){
    try{
      if(!$this->existTable($table)) throw new Exception("No existe la tabla");
      $PrimaryKey = $this->getPrimaryKey($table);
      $key = $PrimaryKey["name"];
      $id = $PrimaryKey["type"] == "StrKey"? "'$id'": "$id";
      $query = "DELETE FROM $table WHERE $key=$id";
    }catch(Exception $e){
      $this->log($e->getMessage());
      return false;
    }
    try{
      $done = $this->db->query($query) ? true : false;
      $this->db->close();
      return $done;
    }catch(Exception $e){
      $msgErr = "Error de la query: $query\n".$e->getMessage();
      $this->log($msgErr);
      return false;
    }
  }
}
