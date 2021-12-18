<?php
    class Category
    {
        private $db;
        function __construct($db) {
            $this->db = $db;
        }

        
        // ================================
        //    Funkcja dodawanie kategorii
        // ================================
        // funkcja działa dla inputu których nazwą jest "addCategory"
        function DodajKategorie() {
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addCategory'])) {
                $motherOfCategory = mysqli_real_escape_string($this->db,$_POST['motherOfCategory']); 
                $nameOfCategory = mysqli_real_escape_string($this->db,$_POST['nameOfCategory']); 
                $result = $this->db->query("INSERT INTO kategorie VALUES(default, '$motherOfCategory', '$nameOfCategory')"); // wyslanie zapytania do bazy danych o dodanie nowego rekordu do bazy danych
            }
        }

        
        // ================================
        //    Funkcja edytująca kategorii
        // ================================
        // funkcja działa dla inputu których nazwą jest "editCategory"
        function EdytujKategorie() {
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editCategory'])) {
                $idOfCategory = mysqli_real_escape_string($this->db,$_POST['idOfCategory']);  
                $motherOfCategory = mysqli_real_escape_string($this->db,$_POST['motherOfCategory']);
                $nameOfCategory = mysqli_real_escape_string($this->db,$_POST['nameOfCategory']); 
                $result = $this->db->query( "UPDATE kategorie SET matka = '$motherOfCategory', nazwa = '$nameOfCategory' WHERE id = $idOfCategory"); //wysylamy zapytanie do bazy danych o zaktualizowanie danych w danej krotce
            }
        }


        // ================================
        //    Funkcja listująca kategorie
        // ================================
        // Funkcja listuje wszystkie kategorie zawarte w bazie danych
        function ListaKategori() {
            $categories = $this->db->query("SELECT * FROM kategorie WHERE matka = 0 ORDER BY id");
            while($row = mysqli_fetch_array($categories)) {
                $aktualneId = $row['id'];
                $subCategories = $this->db->query("SELECT * FROM kategorie WHERE matka = $aktualneId ORDER BY id");
                echo '<p class="category mother">id: '.$row['id'].' - '.$row['nazwa'].' </p>';
                while($rowSub = mysqli_fetch_array($subCategories)) {
                    echo '<p class="category child">id: '.$rowSub['id'].' -'.$rowSub['nazwa'].' </p>';
                }
            }
        }


        // =================================
        //    Funkcja usuwającca kategorie
        // =================================
        // funkcja działa dla inputu o nazwie 'deleteCategory'
        function UsunKategorie() {
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteCategory'])) {
                $idOfCategory = mysqli_real_escape_string($this->db,$_POST['idOfCategory']); 
                $result = $this->db->query("DELETE FROM kategorie WHERE id = $idOfCategory"); // Wysylamy zapytanie do bazy danych o usunięcie rekordu
            }
        }
    }
?>