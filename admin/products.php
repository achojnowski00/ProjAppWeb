<?php
    class Products{
        private $db;
        function __construct($db) {
            $this->db = $db;
        }

      
        // ================================
        //    Funkcja dodawanie kategorii
        // ================================
        // funkcja działa dla inputu których nazwą jest "addCategory"
        function DodajProdukt() {
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addProduct'])) {
                $prodTYTUL = mysqli_real_escape_string($this->db,$_POST['prodTYTUL']);
                $prodOPIS = mysqli_real_escape_string($this->db,$_POST['prodOPIS']);
                $prodDATAUT = mysqli_real_escape_string($this->db,$_POST['prodDATAUT']);
                $prodDATAMOD = mysqli_real_escape_string($this->db,$_POST['prodDATAMOD']);
                $prodDATAWYG = mysqli_real_escape_string($this->db,$_POST['prodDATAWYG']);
                $prodNETTO = mysqli_real_escape_string($this->db,$_POST['prodNETTO']);
                $prodVAT = mysqli_real_escape_string($this->db,$_POST['prodVAT']);
                $prodILE = mysqli_real_escape_string($this->db,$_POST['prodILE']);
                $prodSTATUS = mysqli_real_escape_string($this->db,$_POST['prodSTATUS']);
                $prodKAT = mysqli_real_escape_string($this->db,$_POST['prodKAT']);
                $prodGABARYT = mysqli_real_escape_string($this->db,$_POST['prodGABARYT']);
                $prodZDJ = mysqli_real_escape_string($this->db,$_POST['prodZDJ']);
                $result = $this->db->query("INSERT INTO produkty VALUES(default, '$prodTYTUL', '$prodOPIS', '$prodDATAUT', '$prodDATAMOD', '$prodDATAWYG', '$prodNETTO', '$prodVAT', '$prodILE', '$prodSTATUS', '$prodKAT', '$prodGABARYT', '$prodZDJ')");
            }
        }

      
        // ================================
        //    Funkcja edytująca kategorii
        // ================================
        // funkcja działa dla inputu których nazwą jest "editCategory"
        function EdytujProdukt() {
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editProduct'])) {
                $prodID = mysqli_real_escape_string($this->db,$_POST['prodID']);
                $prodTYTUL = mysqli_real_escape_string($this->db,$_POST['prodTYTUL']);
                $prodOPIS = mysqli_real_escape_string($this->db,$_POST['prodOPIS']);
                $prodDATAMOD = mysqli_real_escape_string($this->db,$_POST['prodDATAMOD']);
                $prodDATAWYG = mysqli_real_escape_string($this->db,$_POST['prodDATAWYG']);
                $prodNETTO = mysqli_real_escape_string($this->db,$_POST['prodNETTO']);
                $prodVAT = mysqli_real_escape_string($this->db,$_POST['prodVAT']);
                $prodILE = mysqli_real_escape_string($this->db,$_POST['prodILE']);
                $prodSTATUS = mysqli_real_escape_string($this->db,$_POST['prodSTATUS']);
                $prodKAT = mysqli_real_escape_string($this->db,$_POST['prodKAT']);
                $prodGABARYT = mysqli_real_escape_string($this->db,$_POST['prodGABARYT']);
                $prodZDJ = mysqli_real_escape_string($this->db,$_POST['prodZDJ']); 

                if($prodTYTUL){
                    $result = $this->db->query("UPDATE produkty SET tytul = '$prodTYTUL' WHERE id = $prodID");}

                if($prodOPIS){
                    $result = $this->db->query("UPDATE produkty SET opis = '$prodOPIS' WHERE id = $prodID");}

                if($prodDATAMOD){
                    $result = $this->db->query("UPDATE produkty SET data_modyfikacji = '$prodDATAMOD' WHERE id = $prodID");}

                if($prodDATAWYG){
                    $result = $this->db->query("UPDATE produkty SET data_wygasniecia = '$prodDATAWYG' WHERE id = $prodID");}

                if($prodNETTO){
                    $result = $this->db->query("UPDATE produkty SET cena_netto = '$prodNETTO' WHERE id = $prodID");}
                
                if($prodVAT){
                    $result = $this->db->query("UPDATE produkty SET vat = '$prodVAT' WHERE id = $prodID");}

                if($prodILE){
                    $result = $this->db->query("UPDATE produkty SET ile_sztuk = '$prodILE' WHERE id = $prodID");}

                if($prodSTATUS == 1 || $prodSTATUS == 0){
                    $result = $this->db->query("UPDATE produkty SET statusDos = '$prodSTATUS' WHERE id = $prodID");}
                
                if($prodKAT){
                    $result = $this->db->query("UPDATE produkty SET kategoria = '$prodKAT' WHERE id = $prodID");}

                if($prodGABARYT){
                    $result = $this->db->query("UPDATE produkty SET gabaryt = '$prodGABARYT' WHERE id = $prodID");}

                if($prodZDJ){
                    $result = $this->db->query("UPDATE produkty SET zdjecie = '$prodZDJ' WHERE id = $prodID");}
            }
        }


        // ================================
        //    Funkcja listująca kategorie
        // ================================
        // Funkcja listuje wszystkie kategorie zawarte w bazie danych
        function ListaProduktow() {
            $categories = $this->db->query("SELECT * FROM produkty ORDER BY id");
            while($row = mysqli_fetch_array($categories)) {
                echo '<p class="">id: '.$row['id'].' - '.$row['tytul'].' </p>';
            }
        }

        function ListaProduktow2() {
            $categories = $this->db->query("SELECT * FROM produkty ORDER BY id");
            while($row = mysqli_fetch_array($categories)) {
                echo '<div class="prod"><img src="'.$row['zdjecie'].'"class="prodImg"><h1 class="prodTitle">'.$row['tytul'].'</h1><h2 class="prodCena">'.$row['cena_netto'].'</h2><h3 class="prodId">'.$row['id'].'</h3></div>';
            }
        }

        


        // =================================
        //    Funkcja usuwającca kategorie
        // =================================
        // funkcja działa dla inputu o nazwie 'deleteCategory'
        function UsunProdukt() {
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteProduct'])) {
                $prodID = mysqli_real_escape_string($this->db,$_POST['prodID']); 
                $result = $this->db->query("DELETE FROM produkty WHERE id = $prodID"); // Wysylamy zapytanie do bazy danych o usunięcie rekordu
            }
        }
    }
?>