<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <!-- CSS  -->
    <?php include_once "includes/css.php";?>
    <!-- CSS End -->
    <!--Logo In Tab -->
	<link rel="shortcut icon" href="images/logo.png" type="logo/png" /> 
    <title>
    LaG Current Games</title>
</head>
<body>
<!--PHP Include For Nav Bar-->
<?php include_once "includes/nav.php";?>
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
	<div class="row">
      <ul class="collapsible popout" data-collapsible="accordion">
        <li>
            <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
    </ul>
        </div>
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/materialize.js"></script>
<script>
    (document).ready(function(){
    ('.collapsible').collapsible();
  });</script>  
<!--PHP Include For Footer-->
<?php include_once "includes/footer.php";?>
</body>
</html>