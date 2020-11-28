<div class="h6">Írja ki a program, melyik 3 kezelés típusra vitték leggyakrabban a kutyákat?</div>
<?php

include_once 'connection.php';

$query = 'SELECT jelleg, COUNT(kezeles.id) AS `kezelesek szama` FROM kezeles INNER JOIN kezelestipus ON kezelestipus.id = kezeles.kezelestipusId GROUP BY jelleg ORDER BY `kezelesek szama` DESC LIMIT 3';
$data = mysqli_query($conn, $query);

if ($data) {
    $total = mysqli_num_rows($data);
} else {
    $total = 0;
}

?>
<div class="row mt-2 mx-0 px-3">
    <div class='row ab-table-tr ab-sticky-menu'>
        <div class='col ab-table-td font-weight-bold'>Jelleg</div>
        <div class='col ab-table-td font-weight-bold'>Kezelések száma</div>
    </div>
    <?php
        if ($total > 0){
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<div class='row ab-table-tr'>
                        <div class='col ab-table-td'>" . $result['jelleg'] . "</div>
                        <div class='col ab-table-td'>" . $result['kezelesek szama'] . "</div>
                    </div>";
            }
        } else {
            echo "<div class='col-12'>
                Nem jó a lekérdezés!
            </div>";
        }
    ?>
</div>