<?php
class ShowPage{
  private $db;

  function __construct($db){
    $this->db = $db;
  }

  function PokazPodstrone($id) {
      $id_clear = htmlspecialchars($id);
    $wynik = $this->db -> query("SELECT * FROM page_list WHERE id='$id_clear' LIMIT 1");
    $row = mysqli_fetch_array($wynik);

    if(empty($row['id'])){
      $web = 'Brak strony';
    }else{
      $web = $row['page_content'];
    }
    return $web;
  }
}
?>
