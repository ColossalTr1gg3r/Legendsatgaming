<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <!-- CSS  -->
    <?php include_once "includes/admincss.php";?>
    <!-- CSS End -->
    <!--Logo In Tab -->
	<link rel="shortcut icon" href="images/logo.png" type="logo/png" /> 
    <title>
    LaG Admin</title>
    </head>
    <body>
        <?php include_once "includes/adminnav.php";?>
<div class="container">
    <div id="banner">
        <div class="col s12">
            <div class="card black">
                <img src="images/Banner/gamesbanner.png">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col s12">
        <div class="card white">
            <h3>
            <?php
            session_start();
            // will print , Hello Username
            echo  "Hello ".$_SESSION['userName'];?>
            </h3>
            
        <label>
            <div class="input-field col s12">
                <div id="php">
                    <a class="waves-effect waves-light btn" href="../../phpMyAdmin">phpMyAdmin</a>
                </div>
            </div>
        </label>
        </div>
    </div>
</div>
        <!--  Scripts-->
<?php include_once "includes/scripts.php";// include for scripts ?>
</body>
</html>