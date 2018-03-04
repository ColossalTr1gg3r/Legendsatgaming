 <ul id="slide-out" class="side-nav  black white-text z-depth-5">
    <li><div class="user-view" style="height:300px;">
      <div class="background">
        <img src="images/logo.png">
      </div>
        </div>
        <li><h5><?php
            session_start();
            // will print , Hello Username
            echo  " Welcome ".$_SESSION['userName'];?></h5></li>
    <li><a href="#!">First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Database Tools</a></li>
    <li><a class="waves-effect" href="">phpMyAdmin</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons whtie">menu</i></a>