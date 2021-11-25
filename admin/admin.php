<?php
class Admin 
{
    private $db;
    function __construct($db) {
		$this->db = $db;
	}

    function login() {
        session_start();
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logowanie'])) {
            $dbusername = mysqli_real_escape_string($this->db,$_POST['username']);
            $dbpass = mysqli_real_escape_string($this->db,$_POST['password']); 
            $query = "SELECT * FROM users WHERE username = '$dbusername' and passwd = '$dbpass'";
            $result = $this->db->query($query);
            $row = mysqli_fetch_array($result);
            $count = mysqli_num_rows($result);
            if($count == 1) {
                $_SESSION['login_user'] = $dbusername;
                header("location: cmspanel.php");
            }else {
                $error = "Your Login Name or Password is invalid";
                echo $error;
            }
        }
    }

    function ListaPodstron() {
        $query = "SELECT * FROM page_list ORDER BY id";
        $result = $this->db->query($query);
        while($row = mysqli_fetch_array($result)) {
            echo 'id: '.$row['id'].' -'.$row['page_title'].' <br />';
        }
    }

    function EdytujPodstrone() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editSubPage'])) {
            $dbtitle = mysqli_real_escape_string($this->db,$_POST['title']);
            $dbcontent = mysqli_real_escape_string($this->db,$_POST['content']); 
            $dbid = mysqli_real_escape_string($this->db,$_POST['idstrony']); 
            $dbstatus = mysqli_real_escape_string($this->db,$_POST['status']); 
            $query = "UPDATE page_list SET page_title = '$dbtitle', page_content = '$dbcontent', status = '$dbstatus' WHERE id = $dbid";
            $result = $this->db->query($query);
        }
    }

    function DodajPodstrone() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addSubPage'])) {
            $dbtitle = mysqli_real_escape_string($this->db,$_POST['title']);
            $dbcontent = mysqli_real_escape_string($this->db,$_POST['content']); 
            $dbstatus = mysqli_real_escape_string($this->db,$_POST['status']); 
            $query = "INSERT INTO page_list VALUES(default, '$dbtitle', '$dbcontent', '$dbstatus')";
            $result = $this->db->query($query);
            // echo $result;
        }
    }
    function UsunPodstrone() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteSubPage'])) {
            $dbid = mysqli_real_escape_string($this->db,$_POST['pageid']); 
            $query = "DELETE FROM page_list WHERE id = $dbid LIMIT 1";
            $result = $this->db->query($query);
            // echo $result;
        }
    }
}

?>