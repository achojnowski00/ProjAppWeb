<?php
  class Config{
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $baza;
    
    // ===============
    //   KONSTRUKTOR
    // ===============
    // połączenie się z bazą, wprawadzamy nazwe hosta usera password i nazwę bazy
    function __construct( $dbhost, $dbuser, $dbpass, $baza ){
      $this->dbhost = $dbhost;
      $this->dbuser = $dbuser;
      $this->dbpass = $dbpass;
      $this->baza = $baza;
    }
    
    public function connect(){
      // połączenie się z bazą za pomocą atrybutów obiektu klasy
      $link = new mysqli($this->dbhost,$this->dbuser,$this->pass,$this->baza);
      if(!$link) echo '<b>przerwanie połączenia </b>';
      if(!mysqli_select_db($link,$this->baza)) echo 'Nie wybrano żadnej bazy';
      return $link;
    }
  }
?>