<?php
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
  include '../cfg.php';
  include '../showpage.php';
  include '../admin/mail.php';
  include '../admin/products.php';
  include '../admin/koszyk.php';

  $config = new Config('localhost','root','','moja_strona');
  $DBconnect = $config->connect();
  $controller = new ShowPage($DBconnect);
  $root = new Admin($db);
  $mail = new Mail($DBconnect);
  $mail->DodajMail();
  
  $products = new Products($DBconnect);
  
  $cart = new Cart($DBconnect);
  $cart->AddToCart();
  $cart->UsunProdukt();
?>

<div class="sklep wrapper">
  <?php
    $products->ListaProduktow2();
  ?>
</div>

<div class="cart">
  <h1 class="headingCart">Koszyk</h1>
  <?php
    $cart->ListCart();
  ?>
</div>
