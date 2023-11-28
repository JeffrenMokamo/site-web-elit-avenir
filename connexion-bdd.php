<?php 

try{
    $connect_bdd = new PDO('mysql:host=localhost;dbname=elit-avenir','root', '');
  }
  catch(Exception $e){
    echo 'Erreur de connection';
  }

?>