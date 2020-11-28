<div class="h6">Kérjen be egy vezetéknevet és keresse ki a program az ilyen nevű gazdákat (azaz szerepel a szó a nev mezőben – itt is egyszerűen a select parancs megfelelő paraméterezésével megoldható, nem kell a programozási nyelv algoritmusait használni). Határozza meg, hogy az adott vezetéknevű gazdák hányszor vitték kedvencüket állatorvoshoz és személyenként összesen mennyit fizettek a szolgáltatásokért! A megjelenő oszlopok fejlécében a „név”, az „alkalom” és az „összesen” szöveg jelenjen meg! Feltételezhető, hogy az adott vezetéknevű gazdák teljes neve egyedi. pl.: Medgyessy névre ez a kimenet:</div>
<?php

include_once 'connection.php';

$fullName = $_POST['name_text'];

if($fullName == true) {
    $query = "SELECT nev, COUNT(kezeles.id) AS 'alkalom', SUM(kezeles.dij) AS 'osszesen' FROM kezeles INNER JOIN kutya ON kutya.id = kezeles.kutyaId INNER JOIN gazda ON gazda.id = kutya.gazdaId WHERE nev LIKE '%$fullName%' GROUP BY nev";

    $data = mysqli_query($conn, $query);
    
    if ($data) {
        $total = mysqli_num_rows($data);
    } else {
        $total = 0;
    }
} else {
    echo "<div class='mb-4'>Adj meg egy nevet a lekérdezéshez:</div>";
}

?>
<form class="form-inline mb-1" method="post">
  <div class="form-group mr-3 w-50">
    <input type="text" name="name_text" class="form-control w-100" id="nameInput" placeholder="Név" required>
  </div>
  <button class="btn btn-primary" type="submit" value="submit">Keresés</button>
</form>
<?php
if ($data == 0) {
    echo "<div class='row mt-0 mx-0 flex-column-reverse'>";
} else {
    echo "<div class='row mt-0 mx-0'>";
}
?>
    
    <?php
        if ($total > 0) {
            echo "<div class='row ab-table-tr ab-sticky-menu mx-0 mt-5'>
                <div class='col ab-table-td font-weight-bold pr-0'>Név</div>
                <div class='col ab-table-td font-weight-bold pl-0 pr-0'>Alkalom</div>
                <div class='col ab-table-td font-weight-bold pl-0'>Összesen</div>
            </div>";
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<div class='row ab-table-tr px-3'>
                        <div class='col ab-table-td'>" . $result['nev'] . "</div>
                        <div class='col ab-table-td'>" . $result['alkalom'] . "</div>
                        <div class='col ab-table-td'>" . $result['osszesen'] . "</div>
                    </div>";
            }
        } else if ($data == 0) {
            echo "<small class='col-12 px-0 form-text text-muted mb-4 mt-2'>
                *Név töredéket is beírhatsz!
            </small>";
        } else {
            echo "<div class='col-12 px-0 my-4'>
                Nincs ilyen név!
            </div>";
        }
    ?>
</div>