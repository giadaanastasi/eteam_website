<?php
  require_once "config.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html>
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
        .navbar-item{font : 26px; }
    </style>
    

</head>
<body>
<section class="hero is-dark is-bold is-fullheight">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head" style="background-color: hsl(0, 0%, 21%)">
  <div class="container has-text-centered" style="background-color: hsl(0, 0%, 21%)">
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
              <a class="navbar-item is-active" href="#">Home</a>
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
      <img src="uploads/LogoEteam.png" alt="logo eteam">
    </div>
  </div>
  <?php 
      $dirname = "uploads/";
      $images = glob($dirname."background.*");
      echo '<div class="tile is-ancestor">';
      echo '<div class="columns is-mobile">';
      
        echo '<div class="column">';
        foreach($images as $image){
          echo '<img src="'.$image.'" alt="background"/></div>';
        echo '</div></div>';
        }
        
  ?>
<div class="hero-body">
    <div class="container has-text-centered">
    <?php 
        

        $sql = "SELECT text_ita FROM descriptions WHERE position = 'index_1'";
        $result="";
        $result = mysqli_query($link, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<h3 class=\"subtitle is-3\">".implode($row)."</h3>";
        }         
    ?>
    </div>
    </div>
    
    <?php 
        $dirname = "uploads/";
        $images = glob($dirname."index_1.*");
        foreach($images as $image){
            echo "<section class = \"hero is-large\" style = \" background-image: url('".$image."');background-repeat: no-repeat;background-size: cover;\">";
            echo '<div class="hero-body"></div> ';
    
            echo '<div class="hero-foot" style ="margin-bottom: 10em;"> <div class="container">';
            echo '<button class="button is-dark is-large is-fullwidth" ><a href="contact.php"> CONTATTACI </a> </button>';
            echo '</div>';
            echo '</div></section>';
        }         
    ?>
    
   
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