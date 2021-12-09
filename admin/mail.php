<?php
class Mail 
{
    private $db;
    function __construct($db) {
		$this->db = $db;
	}

    // =============================
    //    Funkcja dodawanie maila
    // =============================
    // funkcja działa dla inputu których nazwą jest "sendMail"
    // funkcja pobiera dane z inputów o nazwach 'sender' dla adresata, 'content' dla zawartości maila
    function DodajMail() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sendMail'])) {
            $dbtitle = mysqli_real_escape_string($this->db,$_POST['sender']);
            $dbcontent = mysqli_real_escape_string($this->db,$_POST['content']);
            $result = $this->db->query("INSERT INTO mails VALUES(default, '$dbtitle', '$dbcontent')");
        }
    }


    // =================================
    //    Funkcja usuwającca podstrone
    // =================================
    // funkcja działa dla inputu o nazwie 'deleteMail'
    function UsunMail() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteMail'])) {
            $dbid = mysqli_real_escape_string($this->db,$_POST['mailID']); 
            $result = $this->db->query("DELETE FROM mails WHERE id = $dbid");
        }
    }


    // ============================
    //    Funkcja listująca maile 
    // ============================
    // Funkcja listuje wszystkie maile zawarte w bazie danych
    function ListaMaili() {
        $result = $this->db->query("SELECT * FROM mails ORDER BY id");
        while($row = mysqli_fetch_array($result)) {
            echo '<p class="singleMail">id: '.$row['id'].' -'.$row['sender'].' -'.$row['content'].' </p>'; // maile są wyświetlane są w elementach p z klasą 'singleMail'
        }
    }
}

?>