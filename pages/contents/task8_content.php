<div class="h6">Melyik gazda költötte a legtöbbet, legyen a lista az összegre rendezve?</div>
<?php

include_once 'connection.php';

$query = 'SELECT nev, SUM(kezeles.dij) AS `osszesen` FROM kezeles INNER JOIN kutya ON kutya.id = kezeles.kutyaId INNER JOIN gazda ON gazda.id = kutya.gazdaId GROUP BY nev ORDER BY `osszesen` DESC';
$data = mysqli_query($conn, $query);

if ($data) {
    $total = mysqli_num_rows($data);
} else {
    $total = 0;
}

?>
<div class="row mt-2 mx-0 px-3">
    <div class='row ab-table-tr ab-sticky-menu'>
        <div class='col ab-table-td font-weight-bold'>Név</div>
        <div class='col ab-table-td font-weight-bold'>Összesen</div>
    </div>
    <?php
        if ($total > 0){
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<div class='row ab-table-tr'>
                        <div class='col ab-table-td'>" . $result['nev'] . "</div>
                        <div class='col ab-table-td'>" . $result['osszesen'] . "</div>
                    </div>";
            }
        } else {
            echo "<div class='col-12'>
                Nem jó a lekérdezés!
            </div>";
        }
    ?>
</div>