<?php

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-team Squadra Corse</title>
    <link rel="icon" type="image/png" href="uploads/logo_cerchio.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bulma-carousel/dist/css/bulma-carousel.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .navbar-item{font : 26px;}
    </style>
    

</head>
<body>

<section class="hero is-dark is-bold is-fullheight">

  <!-- Hero head: will stick at the top -->
  <div class="hero-head" style="background-color: hsl(0, 0%, 21%)">
  <div class="container has-text-centered">
    <div class="columns is-mobile">
    <div class="column is-one-quarter has-text-left"><img src="uploads/unipi_white.png" alt="logo unipi"></div>
    <div class="column is-three-quarter">
      <nav class="navbar" style="background-color: hsl(0, 0%, 21%)">
        <div class="container">
          <div class="navbar-brand">
            <span class="navbar-burger burger" data-target="navbarMenuHeroC">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenuHeroC" class="navbar-menu">
            <div class="navbar-end">
              <a class="navbar-item" href="index.php">Home</a>
              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Team</a>
                  <div class="navbar-dropdown">
                    <?php 
                      $dirs = array_filter(glob('uploads/members/'.'*'), 'is_dir');
                      foreach($dirs as $dir){
                        echo '<a href="team.php?car-year='.explode('/',$dir)[2].'" class="navbar-item" style="color: black;" >'.explode('/',$dir)[2].'</a>';
                      }
                    ?>
                  </div>
                </div>
              </div>
              <a class="navbar-item" href="car.php">Car</a>
              <a class="navbar-item" href="sponsor.php">Sponsor</a>
              <a class="navbar-item" href="contact.php">Contattaci</a>
              <a class="navbar-item" href="membri.php">Area Membri</a>
              <a class="navbar-item" href="index_en.php">ENG</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    </div>
    </div>
  </div>
<script type="text/javascript">
  (function(){
    var burger = document.querySelector('.burger');
    var nav = document.querySelector('#'+burger.dataset.target);

    burger.addEventListener('click', function(){
      burger.classList.toggle('is-active');
      nav.classList.toggle('is-active');
    });
  })();
</script>


  <!-- Hero content: will be in the middle -->
  <div class="hero-body" style="background-color: hsl(0, 0%, 21%)">
    <div class="container has-text-centered">
      <img src="uploads/LogoEteam.png" alt="logo eteam" >
    </div>
  </div>

    <?php 
      $car_year=$_GET['car-year'];
      $dirs = array_filter(glob('uploads/members/'.$car_year.'/'.'*'), 'is_dir');
      foreach($dirs as $dir){
        $sector = explode("/", $dir)[3];
        switch ($sector) {
          case "AE":
              $dirname = "uploads/members/".$car_year."/".$sector."/manager/";
              $images = glob($dirname."*.*");
              
              echo '<h1 class="title">AERO-COMPOSITES</h1>';
              $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-half" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white; margin-left:auto; margin-right:auto;">';
                }
              }
              echo '</div>';
              
              $dirname = "uploads/members/".$car_year."/".$sector."/members/";
              $images = glob($dirname."*.*");
              $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-one-quarter" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              echo '<hr align="left" size="1" width="100%" color="black" noshade>';
              break;
          case "BP":
            $dirname = "uploads/members/".$car_year."/".$sector."/manager/";
            $images = glob($dirname."*.*");
            echo '<h1 class="title">BUSINESS PLAN</h1>';
            $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-half" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;margin-left:auto; margin-right:auto;">';
                }
              }
              echo '</div>';
              $dirname = "uploads/members/".$car_year."/".$sector."/members/";
              $images = glob($dirname."*.*");
              $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-one-quarter" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              echo '<hr align="left" size="1" width="100%" color="black" noshade>';
              break;
          case "CH":
            $dirname = "uploads/members/".$car_year."/".$sector."/manager/";
            $images = glob($dirname."*.*");
            echo '<h1 class="title">CHASSIS</h1>';
            $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-half" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              $dirname = "uploads/members/".$car_year."/".$sector."/members/";
              $images = glob($dirname."*.*");
              $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-one-quarter" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              echo '<hr align="left" size="1" width="100%" color="black" noshade>';
              break;
          case "CR":
            $dirname = "uploads/members/".$car_year."/".$sector."/manager/";
            $images = glob($dirname."*.*");
            echo '<h1 class="title">COST REPORT</h1>';
            $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-half" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              $dirname = "uploads/members/".$car_year."/".$sector."/members/";
              $images = glob($dirname."*.*");
              $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-one-quarter" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              echo '<hr align="left" size="1" width="100%" color="black" noshade>';
              break;
          case "ED":
            $dirname = "uploads/members/".$car_year."/".$sector."/manager/";
            $images = glob($dirname."*.*");
            echo '<h1 class="title">ELECTRONIC & DRIVERLESS</h1>';
            $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-half " style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              $dirname = "uploads/members/".$car_year."/".$sector."/members/";
              $images = glob($dirname."*.*");
              $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-one-quarter" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              echo '<hr align="left" size="1" width="100%" color="black" noshade>';
              break;
          case "03.GD":
            $dirname = "uploads/members/".$car_year."/".$sector."/members/";
              $images = glob($dirname."*.*");
              echo '<h1 class="title">MANAGEMENT DIRECTOR</h1>';
              $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-half" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              echo '<hr align="left" size="1" width="100%" color="black" noshade>';
              break;
          case "LA":
            $dirname = "uploads/members/".$car_year."/".$sector."/manager/";
            $images = glob($dirname."*.*");
            echo '<h1 class="title">LOGISTIC & AMMINISTRATION</h1>';
            $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-half " style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              $dirname = "uploads/members/".$car_year."/".$sector."/members/";
              $images = glob($dirname."*.*");
              $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-one-quarter" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              echo '<hr align="left" size="1" width="100%" color="black" noshade>';
              break;
          case "04.LM":
            $dirname = "uploads/members/".$car_year."/".$sector."/members/";
              $images = glob($dirname."*.*");
            echo '<h1 class="title">LAYOUT MANAGER</h1>';
            $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-half" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              echo '<hr align="left" size="1" width="100%" color="black" noshade>';
              
              break;
          case "PO":
            $dirname = "uploads/members/".$car_year."/".$sector."/manager/";
            $images = glob($dirname."*.*");
            echo '<h1 class="title">POWERTRAIN</h1>';
            $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-half " style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
            $dirname = "uploads/members/".$car_year."/".$sector."/members/";
            $images = glob($dirname."*.*");
            $i=0;
            echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
            foreach($images as $image) {
              $i = $i + 1;
              echo '<div class="column is-one-quarter" style="margin-left:auto; margin-right:auto;">';
              echo '<img alt="member photo" src="'.$image.'" />';
              echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
              if($i%4==0){
                echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              }
            }
            echo '</div>';
            echo '<hr align="left" size="1" width="100%" color="black" noshade>';
              break;
          case "PR":
            $dirname = "uploads/members/".$car_year."/".$sector."/manager/";
            $images = glob($dirname."*.*");
            echo '<h1 class="title">PUBLIC RELATIONS</h1>';
            $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-half " style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
            $dirname = "uploads/members/".$car_year."/".$sector."/members/";
            $images = glob($dirname."*.*");
            $i=0;
            echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
            foreach($images as $image) {
              $i = $i + 1;
              echo '<div class="column is-one-quarter" style="margin-left:auto; margin-right:auto;">';
              echo '<img alt="member photo" src="'.$image.'" />';
              echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
              if($i%4==0){
                echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              }
            }
            echo '</div>';
            echo '<hr align="left" size="1" width="100%" color="black" noshade>';
              break;
          case "02.TD":
            $dirname = "uploads/members/".$car_year."/".$sector."/members/";
            $images = glob($dirname."*.*");
            echo '<h1 class="title">TECHNICAL DIRECTORS</h1>';
            $i=0;
            echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
            foreach($images as $image) {
              $i = $i + 1;
              echo '<div class="column is-half" style="margin-left:auto; margin-right:auto;">';
              echo '<img alt="member photo" src="'.$image.'" />';
              echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
              if($i%4==0){
                echo '</div></div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              }
            }
            echo '</div>';
            echo '<hr align="left" size="1" width="100%" color="black" noshade>';
              break;
          case "01.TL":
              $dirname = "uploads/members/".$car_year."/".$sector."/members/";
              $images = glob($dirname."*.*");
              echo '<h1 class="title">TEAM LEADER</h1>';
              $i=0;
              echo '<div class="tile is-ancestor has-text-centered" style="background-color: white;">';
              foreach($images as $image) {
                $i = $i + 1;
                echo '<div class="column is-half" style="margin-left:auto; margin-right:auto;">';
                echo '<img alt="member photo" src="'.$image.'" />';
                echo '<p class ="subtitle" style ="color: black">'.explode(".", str_replace("_", " ", explode("/", $image)[5]))[0].'</p></div>';
                if($i%4==0){
                  echo '</div><div class="tile is-ancestor has-text-centered" style="background-color: white;">';
                }
              }
              echo '</div>';
              echo '<hr align="left" size="150" width="100%" color="black" noshade>';
              break;
      }
      }
    ?>
  
    <div class="hero-body"></div>

    <div class="hero-body">
    <div class="container has-text-centered">
  <span class="icon is-medium"><a href="https://www.facebook.com/eteamsquadracorse/" target="_blank">
  <i class="fab fa-2x fa-facebook"></i></a>
    </span> 
  <span class="icon is-medium"><a href="https://www.instagram.com/eteam_unipi/?hl=it" target="_blank">
  <i class="fab fa-2x fa-instagram"></i></a>
    </span>
    <span class="icon is-medium"><a href="https://www.youtube.com/user/ETeamPisa" target="_blank">
  <i class="fab fa-2x fa-youtube"></i></a>
    </span>
    <span class="icon is-medium"><a href="https://www.linkedin.com/company/e-team-squadra-corse/" target="_blank">
  <i class="fab fa-2x fa-linkedin"></i></a>
    </span>
    </div></div>
</section>


</body>
</html>