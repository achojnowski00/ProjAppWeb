<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cms.css">
</head>

<body>
    <?php
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        include 'session.php';
        include 'admin/admin.php';
        include 'admin/mail.php';
        include 'admin/kategorie.php';
        include 'admin/products.php';
        include 'cfg.php';

        $cfg = new Config("localhost", "root", "", "moja_strona");
        $db = $cfg->connect();
        $user = new Admin($db);
        $mail = new Mail($db);
        $category = new Category($db);
        $products = new Products($db);

        $user->EdytujPodstrone();
        $user->DodajPodstrone();
        $user->UsunPodstrone();

        $mail->DodajMail();
        $mail->UsunMail();

        $category->DodajKategorie();
        $category->EdytujKategorie();
        $category->UsunKategorie();

        $products->DodajProdukt();
        $products->EdytujProdukt();
        $products->UsunProdukt();

    ?>

    <div class="wrap">

        <form class='addPage form' action="" method="post">    
            <h1 class="heading">DODAJ STRONE</h1>
            <input class="title inputbox" name="title" type="text" placeholder="Tytuł strony">
            <textarea class="content inputbox inputarea" name="content" placeholder="Treść strony" rows="10"></textarea>
            <input class="status inputbox" name="status" type="text" placeholder="Status">
            <button class="submitbutton" name="addSubPage" type="submit" href="/">Dodaj podstronę</button>
        </form>

        <form class='edit form' action="" method="post">
            <h1 class='heading'>Edytuj Podstronę</h1>
            <input class="idstrony inputbox" name="idstrony" type="text" placeholder="ID strony">
            <input class="title inputbox" name="title" type="text" placeholder="Tytuł strony">
            <textarea class="content inputbox inputarea" name="content" placeholder="Treść strony" rows="10"></textarea>
            <input class="status inputbox" name="status" type="text" placeholder="Status strony">
            <button class="submitbutton" name="editSubPage" type="submit" href="/">Edytuj</button>
        </form>

        <form class='listDelete form' action="" method="post">
            <h1 class='heading'>Lista Podstron</h1>
                <?php
                    $user->ListaPodstron();
                ?>
            <h1 class='heading headingBottom'>Usuń Podstronę</h1>
            <input class="pageid" name="pageid" type="text" placeholder="ID strony">
            <button class="submitbutton" name="deleteSubPage" type="submit" href="/">Usuń</button>
        </form>


    </div>

    <div class="mails">
        <form class='listDeleteMails' action="" method="post">
            <h1 class='heading'>Lista Maili</h1>
                <?php
                    $mail->ListaMaili();
                ?>
            <h1 class='headingMails'>Usun mail</h1>
            <input class="mailid" name="mailID" type="text" placeholder="ID maila do usuniecia">
            <button class="submitbutton" name="deleteMail" type="submit" href="/">Usuń</button>
        </form>
    </div>

    <div class="categories wrap">
        <form class='addPage form' action="" method="post">    
            <h1 class="heading">DODAJ KATEGORIE</h1>
            <input class="title inputbox" name="motherOfCategory" type="text" placeholder="Matka kategorii">
            <input class="status inputbox" name="nameOfCategory" type="text" placeholder="Nazwa kategorii">
            <button class="submitbutton" name="addCategory" type="submit" href="/">Dodaj KATEGORIE</button>
        </form>

        <form class='edit form' action="" method="post">
            <h1 class='heading'>Edytuj Kategorie</h1>
            <input class="idstrony inputbox" name="idOfCategory" type="text" placeholder="ID kategorii">
            <input class="title inputbox" name="motherOfCategory" type="text" placeholder="Matka kategorii">
            <input class="status inputbox" name="nameOfCategory" type="text" placeholder="Nazwa kategorii">
            <button class="submitbutton" name="editCategory" type="submit" href="/">Edytuj</button>
        </form>

        <form class='listDeleteCat form' action="" method="post">
            <h1 class='heading'>Lista Kategorii</h1>
                <?php
                    $category->ListaKategori();
                ?>
            <h1 class='heading headingBottom'>Usuń kategorie</h1>
            <input class="pageid" name="idOfCategory" type="text" placeholder="ID kategorii">
            <button class="submitbutton" name="deleteCategory" type="submit" href="/">Usuń</button>
        </form>

    </div>

    <div class="products wrap">
        <form class='addPage form' action="" method="post">     
            <h1 class="heading">DODAJ PRODUKT</h1>
            <input class="inputbox" name="prodTYTUL" type="text" placeholder="Tytuł">
            <input class="inputbox" name="prodOPIS" type="text" placeholder="Opis">
            <label for="prodDATAUT">Data utworzenia</label>
            <input class="inputbox" name="prodDATAUT" type="date" placeholder="Data utworzenia">
            <label for="prodDATAMOD">Data modyfikacji</label>
            <input class="inputbox" name="prodDATAMOD" type="date" placeholder="Data modyfikacji">
            <label for="prodDATAWYG">Data wygasniecia</label>
            <input class="inputbox" name="prodDATAWYG" type="date" placeholder="Data wygasniecia">
            <input class="inputbox" name="prodNETTO" type="text" placeholder="Cena netto">
            <input class="inputbox" name="prodVAT" type="text" placeholder="Podatek vat">
            <input class="inputbox" name="prodILE" type="number" placeholder="Ile sztuk">
            <input class="inputbox" name="prodSTATUS" type="text" placeholder="Status dostepnosci">
            <input class="inputbox" name="prodKAT" type="text" placeholder="Kategoria">
            <input class="inputbox" name="prodGABARYT" type="text" placeholder="Gabaryt">
            <input class="inputbox" name="prodZDJ" type="text" placeholder="zdjęcie">
            <button class="submitbutton" name="addProduct" type="submit" href="/">Dodaj produkt</button>
        </form>

        <form class='edit form' action="" method="post">     
            <h1 class="heading">EDYTUJ PRODUKT</h1>
            <input class="inputbox" name="prodID" type="text" placeholder="ID">
            <input class="inputbox" name="prodTYTUL" type="text" placeholder="Tytuł">
            <input class="inputbox" name="prodOPIS" type="text" placeholder="Opis">
            <label for="prodDATAMOD">Data modyfikacji</label>
            <input class="inputbox" name="prodDATAMOD" type="date" placeholder="Data modyfikacji">
            <label for="prodDATAWYG">Data wygasniecia</label>
            <input class="inputbox" name="prodDATAWYG" type="date" placeholder="Data wygasniecia">
            <input class="inputbox" name="prodNETTO" type="text" placeholder="Cena netto">
            <input class="inputbox" name="prodVAT" type="text" placeholder="Podatek vat">
            <input class="inputbox" name="prodILE" type="number" placeholder="Ile sztuk">
            <input class="inputbox" name="prodSTATUS" type="text" placeholder="Status dostepnosci">
            <input class="inputbox" name="prodKAT" type="text" placeholder="Kategoria">
            <input class="inputbox" name="prodGABARYT" type="text" placeholder="Gabaryt">
            <input class="inputbox" name="prodZDJ" type="text" placeholder="zdjęcie">
            <button class="submitbutton" name="editProduct" type="submit" href="/">EDYTUJ produkt</button>
        </form>

        <form class='listDeleteCat form' action="" method="post">     
            <h1 class="heading">USUN PRODUKT</h1>
            <input class="pageid" name="prodID" type="text" placeholder="ID">
            <button class="submitbutton" name="deleteProduct" type="submit" href="/">USUN produkt</button>
            <?php
                    $products->ListaProduktow();
                ?>
        </form>
    </div>

</body>
</html>