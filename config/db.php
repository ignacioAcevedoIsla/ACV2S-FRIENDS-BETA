
<?php
/**
 *
 */
 // conecion a la base de datos
class Database
{
  public static function connect(){
    $db=new mysqli('localhost','root','123nacho07','tienda_master');
    // resultados en castellano
    $db->query("SET NAMES 'utf8'");
    return $db;



  }

}
