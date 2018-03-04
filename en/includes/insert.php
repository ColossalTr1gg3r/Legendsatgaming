<?php
   define('DB_SERVER', 'legendsatgamingdb.cxz4dtocqyft.eu-west-2.rds.amazonaws.com');
   define('DB_USERNAME', 'lordtr1gg3r');
   define('DB_PASSWORD', 'Gildamalins1');
   define('DB_DATABASE', 'legendsatgaming');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);     
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>