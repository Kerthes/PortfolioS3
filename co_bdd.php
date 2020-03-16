<?php
try{
    $objPDO=new PDO('mysql:host=devbdd.iutmetz.univ-lorraine.fr;
  port=3306;dbname=nennig16u_projets3','','', array(
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
   /* echo "Connexion OK"; */
}
catch(Exception $exception){
    die($exception->getMessage());
}
?>
