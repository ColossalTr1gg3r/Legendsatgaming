<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <!-- CSS  -->
    <?php include_once "includes/css.php";?>
    <!-- CSS End -->
    <!--Logo In Tab -->
	<link rel="shortcut icon" href="images/logo.png" type="logo/png" /> 
    <title>LaG Login</title>
    </head>
    <body> 
    <?php include_once "includes/nav.php";?>
    <div class="container">
    <div id="banner">
        <div class="col s12">
            <div class="card black">
                <img src="images/Banner/Banner.png">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="cardpanel black white-text">
        <div class="row">
            <form class="col s12" action="connectivity.php" method="POST">
                <div class="row">
                    <div class="input-field col s6" required>
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" required name="user" id="user">
                        <label for="icon_prefix">Username</label> 
                    </div>
                     <div class="input-field col s6" required>
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="password" class="validate" required name="pass" id="pass">
                        <label for="icon_prefix">Password</label>
                    </div>
                          <label>
                            <div class="input-field col s12">
                                <div id="Submit">
                                    <button class="btn waves-effect waves-light" type="submit" name="submit" value="Log-In">Submit
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </label>
                    </div>
                
            </form>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include_once "includes/footer.php";// include for footer ?>

<!--  Scripts-->
<?php include_once "includes/scripts.php";// include for scripts ?>        
    </body> 
    </html> 
