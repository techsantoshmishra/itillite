<?php
try {

 
  $DBH = new PDO("mysql:dbname=itilite;host=localhost", 'root', 'password' );

  $DBH->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>