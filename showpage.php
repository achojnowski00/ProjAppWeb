<?php
class ShowPage{
  private $db;

  function __construct($db){
    $this->db = $db;
  }


  // =====================================================
  // FUNKCJA WSPOMAGAJĄCA DZIAŁANIE WYŚWIETLANIA PODSTRON
  // =====================================================
  // Funkcja zwraca zawartość podstrony. 
  // Taki wynik możemy za pomocą metody echo() wyświetlić
  function PokazPodstrone($id) {
    $id_clear = htmlspecialchars($id); // zabezpieczenie przed wprawadzaniem nieodpowiednich danych metoda htmlspecialchars() konwertuje znaki na obiekty HTML
    $row = mysqli_fetch_array($this->db -> query("SELECT * FROM page_list WHERE id='$id_clear' LIMIT 1"));

    // Jeśli $row['id'] jest pusty to znaczy, że użytkownik próbuje dostać się do strony która nie została dodana do bazy danych
    // funkcja zwróci informacje o braku strony. Można też wprowadzić tutaj kod do strony z "error 404"
    if(empty($row['id'])){
      $web = 'Brak strony';
    }else{
      // w każdym innym wypadku, czyli kiedy strona intnieje w bazie danych, przypisuje do zmiennej zawartość strony
      $web = $row['page_content'];
    }
    return $web;
  }
}
?>
