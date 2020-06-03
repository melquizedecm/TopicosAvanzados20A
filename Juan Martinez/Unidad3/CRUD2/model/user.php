<?php
class User{

  public $link;
  function __construct(){
    $this -> link = conectar();
  }
  function create($dato){
    $sql = "INSERT INTO user (full_name, number_phone) VALUES ('".$dato[0]."','".$dato[1]."')";
    $respuesta = $this -> link ->query($sql);
    if (!$respuesta) {
      echo $this -> link -> error;
    }
    else {
      return $respuesta;
    }
  }

  function read(){
    $sql = "SELECT * FROM user";
    $tabla = $this -> link -> query($sql);
    return $tabla;
  }

  function readId($id_user){
    $sql = "SELECT * FROM user WHERE id_user='".$id_user."'";
    $tabla = $this -> link -> query($sql);
    return $tabla -> fetch_array(MYSQLI_BOTH);
  }
  function update(){

  }

  function delete(){

  }
}


?>
