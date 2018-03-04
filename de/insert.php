<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <!-- CSS  -->
    <?php include_once "includes/css.php";?>
    <!-- CSS End -->
    <!--Logo In Tab -->
	<link rel="shortcut icon" href="images/logo.png" type="logo/png" /> 
    <title>LaG Members</title>
</head>
<body>  
<!--PHP Include For Nav Bar-->
<?php include_once "includes/nav.php";?>
<div class="container">
    <div class="cardpanel">
        <div class="col s12">
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("legendsatgamingdb.cxz4dtocqyft.eu-west-2.rds.amazonaws.com", "lordtr1gg3r", "Gildamalins1", "legendsatgaming");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$country = mysqli_real_escape_string($link, $_REQUEST['country']);
$spokenLang = mysqli_real_escape_string($link, $_REQUEST['spokenlang']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// attempt insert query execution
$sql = "INSERT INTO details (first_name, last_name, gender, country, spokenlang, email) VALUES ('$first_name', '$last_name', '$gender', '$country', '$spokenLang', '$email')";
if(mysqli_query($link, $sql)){
    echo "Thank you for registering, We will get back to you soon.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
        </div>
    </div>
    </div>
    
<?php include_once "includes/footer.php";// include for footer ?>
</body>
</html>