<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysql_connect("legendsatgamingdb.cxz4dtocqyft.eu-west-2.rds.amazonaws.com", "lordtr1gg3r", "Gildamalins1", "legendsatgaming");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);    
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
 
// attempt insert query execution
$sql = "INSERT INTO 'test' ('first_name', 'last_name') VALUES ('$first_name', '$last_name');"
if(mysqli_query($link, $sql)){
    echo "Records added successfully."; 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>