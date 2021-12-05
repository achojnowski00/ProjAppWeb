<?php
class Mail 
{
    private $db;
    function __construct($db) {
		$this->db = $db;
	}

    function ListaMaili() {
        $query = "SELECT * FROM mails ORDER BY id";
        $result = $this->db->query($query);
        while($row = mysqli_fetch_array($result)) {
            echo '<p class="singleMail">id: '.$row['id'].' -'.$row['sender'].' -'.$row['content'].' </p>';
        }
    }


    function DodajMail() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sendMail'])) {
            $dbtitle = mysqli_real_escape_string($this->db,$_POST['sender']);
            $dbcontent = mysqli_real_escape_string($this->db,$_POST['content']);
            $query = "INSERT INTO mails VALUES(default, '$dbtitle', '$dbcontent')";
            $result = $this->db->query($query);
        }
    }
    
    function UsunMail() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteMail'])) {
            $dbid = mysqli_real_escape_string($this->db,$_POST['mailID']); 
            $query = "DELETE FROM mails WHERE id = $dbid LIMIT 1";
            $result = $this->db->query($query);
        }
    }
}

?>