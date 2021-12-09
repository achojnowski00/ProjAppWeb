<?php
class Admin 
{
    private $db;
    function __construct($db) {
		$this->db = $db;
	}


    // =====================
    //   Funkcja logowania
    // =====================
    // funkcja działa dla inputu których nazwą jest "logowanie"
    // funkcja pobiera dane z inputów o nazwach 'username' dla loginu i 'password' dla hasła
    function login() {
        session_start();
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logowanie'])) {
            $dbusername = mysqli_real_escape_string($this->db,$_POST['username']); // Pobranie loginu od użytkownika
            $dbpass = mysqli_real_escape_string($this->db,$_POST['password']); // pobranie hasła od użytkownika
            $result = $this->db->query("SELECT * FROM users WHERE username = '$dbusername' and passwd = '$dbpass'"); // tworzenie zapytania do bazy danych o wyszukanie rekordu o loginie i haśle podanym przez użytkownika
            $count = mysqli_num_rows($result); 
            
            // =====================================
            //   IF sprawdzający dane użytkowników
            // =====================================
            // sprawdzamy czy istnieje tylko jeden taki użytkownik oraz czy w ogole istnieje(else)
            if($count == 1) {
                $_SESSION['login_user'] = $dbusername;
                header("location: cmspanel.php");
            }else {
                $error = "Your Login Name or Password is invalid";
                echo $error;
            }
        }
    }
    
    // ================================
    //    Funkcja dodawanie podstrony
    // ================================
    // funkcja działa dla inputu których nazwą jest "addSubPage"
    // funkcja pobiera dane z inputów o nazwach 'title' dla tytułu strony, 'content' dla zawartości strony, 'status' dla statusu strony
    function DodajPodstrone() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addSubPage'])) {
            $dbtitle = mysqli_real_escape_string($this->db,$_POST['title']);
            $dbcontent = mysqli_real_escape_string($this->db,$_POST['content']); 
            $dbstatus = mysqli_real_escape_string($this->db,$_POST['status']); 
            $result = $this->db->query("INSERT INTO page_list VALUES(default, '$dbtitle', '$dbcontent', '$dbstatus')"); // wyslanie zapytania do bazy danych o dodanie nowego rekordu do bazy danych
        }
    }
    
    
    // ================================
    //    Funkcja edytująca podstrony
    // ================================
    // funkcja działa dla inputu których nazwą jest "editSubPage"
    // funkcja pobiera dane z inputów o nazwach 'title' dla tytułu strony, 'content' dla zawartości strony, 'status' dla statusu strony oraz 'idstrony' dla id strony
    function EdytujPodstrone() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editSubPage'])) {
            $dbtitle = mysqli_real_escape_string($this->db,$_POST['title']);
            $dbcontent = mysqli_real_escape_string($this->db,$_POST['content']); 
            $dbid = mysqli_real_escape_string($this->db,$_POST['idstrony']); 
            $dbstatus = mysqli_real_escape_string($this->db,$_POST['status']);
            $result = $this->db->query( "UPDATE page_list SET page_title = '$dbtitle', page_content = '$dbcontent', status = '$dbstatus' WHERE id = $dbid"); //wysylamy zapytanie do bazy danych o zaktualizowanie danych w danej krotce
        }
    }


    // ================================
    //    Funkcja listująca podstrony
    // ================================
    // Funkcja listuje wszystkie podstrony zawarte w bazie danych
    function ListaPodstron() {
        $result = $this->db->query("SELECT * FROM page_list ORDER BY id");
        // pętla iteruje się przez wszystkie krotki które pobraliśmy z bazy danych
        // podstrony wyświetlane są w formie "id_strony - tytuł strony"
        while($row = mysqli_fetch_array($result)) {
            echo 'id: '.$row['id'].' -'.$row['page_title'].' <br />';
        }
    }


    // =================================
    //    Funkcja usuwającca podstrone
    // =================================
    // funkcja działa dla inputu o nazwie 'deleteSubPage'
    function UsunPodstrone() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteSubPage'])) {
            $dbid = mysqli_real_escape_string($this->db,$_POST['pageid']); 
            $result = $this->db->query("DELETE FROM page_list WHERE id = $dbid"); // Wysylamy zapytanie do bazy danych o usunięcie rekordu
        }
    }
}

?>