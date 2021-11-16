<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>alexprzezx</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/lab3.css">
</head>

<body class='main' onload="startclock()">

  <div class="hamIcon">
    <i class="open-icon active fas fa-bars"></i>
    <i class="close-icon fas fa-times"></i>
  </div>

  <div class="hamMenu">
    <ul class="hamMenuList">
      <li class="hamMenuListItem">
        <a href="index.php?idp=kontakt">Lab 2</a>
      </li>

      <li class="hamMenuListItem">
        <a href="index.php?idp=lab3">Lab 3</a>
      </li>

    </ul>
  </div>

  <section class="menu">
    <div class="menu__wrap">
      <a href="index.php?idp=" class="menu__item linkReset">Strona główna</a>
      <a href="index.php?idp=o-mnie" class="menu__item linkReset">O mnie</a>
      <a href="index.php?idp=portfolio" class="menu__item linkReset">Portfolio</a>
      <a href="index.php?idp=uslugi" class="menu__item linkReset">Uslugi</a>
      <a href="index.php?idp=sprzet" class="menu__item linkReset">Sprzęt</a>
      <a href="index.php?idp=kontakt" class="menu__item menu__item--contact linkReset">Kontakt</a>
    </div>
  </section>
  
  <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    include 'cfg.php';
    include 'showpage.php';

    $config = new Config('localhost','root','','moja_strona');
    $DBconnect = $config->connect();
    $controller = new ShowPage($DBconnect);

    if($_GET['idp'] == '') $strona = $controller->PokazPodstrone(7);
    if($_GET['idp'] == 'o-mnie') $strona = $controller->PokazPodstrone(1);
    if($_GET['idp'] == 'portfolio') $strona = $controller->PokazPodstrone(2);
    if($_GET['idp'] == 'uslugi') $strona = $controller->PokazPodstrone(3);
    if($_GET['idp'] == 'sprzet') $strona = $controller->PokazPodstrone(4);
    if($_GET['idp'] == 'kontakt') $strona = $controller->PokazPodstrone(5);
    if($_GET['idp'] == 'lab3') $strona = $controller->PokazPodstrone(6);

    // // WERSJA PHP
    // if($_GET['idp'] == '') $strona = './html/main.html';
    // if($_GET['idp'] == 'o-mnie') $strona = './html/aboutme.html';
    // if($_GET['idp'] == 'portfolio') $strona = './html/portfolio.html';
    // if($_GET['idp'] == 'uslugi') $strona = './html/uslugi.html';
    // if($_GET['idp'] == 'sprzet') $strona = './html/gear.html';
    // if($_GET['idp'] == 'kontakt') $strona = './html/contact.html';
    // if($_GET['idp'] == 'lab3') $strona = './html/lab3.html';


    
    if($strona){
      echo($strona);
    } else{
      echo "The file $filename does not exist";
    }

  ?>

  <script src="js/timedate.js"></script>
  <script src="js/kolorujtlo.js"></script>
  <script src="js/hamMenu.js"></script>
</body>

</html>