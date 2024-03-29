<?php
session_start();
if(isset($_SESSION['id'])&&isset($_SESSION['user_name']))
?>
    <!DOCTYPE html>
<html lang="SE">

<head>
  <Link rel="stylesheet" href="style.css">
  <title>ELiK AB</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/908b74a717.js" crossorigin="anonymous"></script>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/full.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>

<body>
  <section id="navbar" class="top-nav-mobil">
    <div class="bgcolor">
      <div>
        <div id="loggan"><a href="startsida.html" class="loggan">EL<span id="i">i</span>K AB

            </sty></a></div>
      </div>
      <input id="menu-toggle" type="checkbox" />
      <label class='menu-button-container' for="menu-toggle">
        <div class='menu-button'></div>
      </label>
      <ul class="menu" >
        <ul id="menydelen" class="menu" ></ul>
        <li class="övrenavmobil"><a href="startsida.html"><i class="fas fa-house"></i> Hem</a></li>
        <li class="övrenavmobil"><a href="omoss.html"><i class="fa-solid fa-briefcase"></i> Om Oss</a></li>
        <li class="övrenavmobil"><a href="kontaktaoss.html"><i class="fa-solid fa-address-card"></i> Kontakt</a></li>
        <li class="övrenavmobil"><a href="sponsorskap.html"><i class="fa-solid fa-city"></i> Sponsring</a></li>
      </ul>
  </section>
  </div>
  </div>

  <div class="space"></div>
  <div class="jumbotron d-flex align-items-center">
    <div class="container rounded mx-auto d-block">

      <h1 class="display-1 mb-4 ">
        <div class="mx-auto d-block" id="loganinavbar">Kontakt</div>
      </h1>

    </div>
    <div class="rectangle-1"></div>
    <div class="rectangle-2"></div>
    <div class="rectangle-transparent-1"></div>
    <div class="rectangle-transparent-2"></div>
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="triangle triangle-1">
      <img src="img/image (1).png" alt="">
    </div>
    <div class="triangle triangle-2">
      <img src="img/image (2).png" alt="">
    </div>
    <div class="triangle triangle-3">
      <img src="img/image.png" alt="">
    </div>
    <div class="triangle triangle-4">
      <img src="img/image (1).png" alt="">
    </div>
  </div>


  <div class="textdel">
    <h2>Kontakt</h2>

<div class="column">
  <p class="målsättning">
    Patrik Östberg[VD]<br>
    Telefon: +46723888650<br>
    <a class="Email"href="mailto:anton.backdahl@gmail.com">Email: anton.backdah@gmail.com</a>

  </p>
</div>
<div class="column">
  <p class="målsättning">
    Tommy Östberg [Senior Advisor]<br>
    Telefon: +46723888650<br>
    <a class="Email"href="mailto:anton.backdahl@gmail.com">Email: anton.backdah@gmail.com</a>

  </p>
</div>
<div class="column">
  <p class="målsättning">
    Martin [volvo-raggarn] Johansson<br>
    Telefon: +46723888650<br>
    <a class="Email"href="mailto:anton.backdahl@gmail.com">Email: anton.backdah@gmail.com</a>

  </p>
  <img class="bildkontaktaoss" src="img/electrical-engineering-banner1600.jpg"alt="Picture of a electrical cabinet">
</div>

  </div>
  <script src="scriptnb.js"></script>
</body>

</html>