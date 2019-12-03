<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Team Squadra Corse</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bulma-carousel/dist/css/bulma-carousel.min.css" rel="stylesheet">
    <style>
    .columns {
  margin: -35px 0;
  padding: 0;
}

@keyframes slidy {
  0% {
    left: 0%;
  }
  20% {
    left: 0%;
  }
  25% {
    left: -100%;
  }
  45% {
    left: -100%;
  }
  50% {
    left: -200%;
  }
  70% {
    left: -200%;
  }
  75% {
    left: -300%;
  }
  95% {
    left: -300%;
  }
  100% {
    left: -400%;
  }
}

div#slider {
  overflow: hidden;
}

div#slider figure img {
  width: 20%;
  float: left;
}

div#slider figure {
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite;
}

</style>
</head>
<body style="background-color: black;">
    <nav class="navbar has-background-black-bis">
        <div class="container ">
            <div class="navbar-brand ">
                <a href="https://giadaanastasi.github.io/eteam_website" style="font-weight: bold; color: orange;" class="navbar-item">E-team Squadra Corse</a>
                <span class="navbar-burger burger" data-target="navMenu" >
                    <span style="color: orange;"></span>
                    <span style="color: orange;"></span>
                    <span style="color: orange;"></span>
                </span>
            </div>
            <div id="navMenu" class="navbar-menu " style="padding: 0px;">
                <div class="navbar-end">
                    <a href="https://giadaanastasi.github.io/eteam_website/index.html" class="navbar-item is-active" style="color: orange; background-color: black;">Home</a>
                    <a href="#" class="navbar-item" style="color: orange;background-color: black;">Team</a>
                    <a href="#" class="navbar-item" style="color: orange;background-color: black;">Storia</a>
                    <a href="#" class="navbar-item" style="color: orange;background-color: black;">Autovettura</a>
                    <a href="#" class="navbar-item" style="color: orange;background-color: black;">Sponsor</a>
                    <a href="#" class="navbar-item" style="color: orange;background-color: black;">Area Membri</a>
                    <a href="https://giadaanastasi.github.io/eteam_website/index_en.html" class="navbar-item" style="color: orange;background-color: black;">ENG</a>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js"></script>
    <script>
    (function(){
        var burger = document.querySelector('.burger');
        var nav = document.querySelector('#'+burger.dataset.target);

        burger.addEventListener('click', function(){
            burger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
        });
    })();
    </script>
    <div class="field">
        <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Email">
            <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
            <i class="fas fa-check"></i>
            </span>
        </p>
    </div>
    <div class="field">
        <p class="control has-icons-left">
            <input class="input" type="password" placeholder="Password">
            <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
            </span>
        </p>
    </div>
    
    
</body>
</html>