<?php
  class Config{
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $baza;
    
    function __construct( $dbhost, $dbuser, $dbpass, $baza ){
      $this->dbhost = $dbhost;
      $this->dbuser = $dbuser;
      $this->dbpass = $dbpass;
      $this->baza = $baza;
    }
    
    public function connect(){
      // $link = mysqli_connect($this->$dbhost,$this->$dbuser,$this->$dbpass);
      $link = new mysqli($this->dbhost,$this->dbuser,$this->pass,$this->baza);
      if(!$link) echo '<b>przerwanie połączenia </b>';
      if(!mysqli_select_db($link,$this->baza)) echo 'nie wybrano bazy';
      return $link;
    }
  }
?>