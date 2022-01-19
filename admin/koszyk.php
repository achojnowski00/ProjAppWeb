<?php
    class Cart
    {
        private $db;
        function __construct($db) {
            $this->db = $db;
        }

        function AddToCart() {
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addToCart'])) {
                $idProd = mysqli_real_escape_string($this->db,$_POST['idProd']); 
                $result = $this->db->query("INSERT INTO cart VALUES(default,$idProd)");
            }
        }

        private $suma = 0;
        private $licznik=0;

        function ListCart() {
            $products = $this->db->query("SELECT * FROM cart");
            while($tmp = mysqli_fetch_array($products)) {
                $id=$tmp['idProd'];
                $idCart=$tmp['id'];
                $product = mysqli_fetch_array($this->db->query("SELECT * FROM produkty where id='$id'"));
                $cenaProd = $product['cena_netto']+($product['cena_netto']*$product['vat']);
                $this->$suma += $cenaProd;
                echo '<div class="cartItem"><span class="name">'.$product['tytul'].'</span><span class="price">Cena= '.$cenaProd.'</span>'.'
                <form action="" method="post"><input type="hidden" name="position" value="'.$tmp['idKoszyk'].'"><input type="submit" class="delButton" name="delBtn" value="usuń""></form></div>';
            }
            echo 'Suma za zakupy:'.$this->$suma.'<br>';
            
        }


        function UsunProdukt() {
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delBtn'])) {
                $prodID = mysqli_real_escape_string($this->db,$_POST['position']); 
                $result = $this->db->query("DELETE FROM cart WHERE idKoszyk = $prodID");
            }
        }
    }
?>