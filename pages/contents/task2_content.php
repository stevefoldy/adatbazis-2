<div class="h6">Lekérdezés segítségével listázd ki a kezelés tábla minden olyan mezőjét, amely nem idegenkulcs (FK)!</div>

<?php

include_once 'connection.php';

$query = 'SELECT `id`, `kezdet`, `veg`, `dij` FROM `kezeles`';
$data = mysqli_query($conn, $query);

if ($data) {
    $total = mysqli_num_rows($data);
} else {
    $total = 0;
}

?>
<div class="row mt-2 mx-0 px-3">
    <div class='row ab-table-tr ab-sticky-menu'>
        <div class='col-3 ab-table-td font-weight-bold'>ID</div>
        <div class='col-3 ab-table-td font-weight-bold'>Kezdet</div>
        <div class='col-3 ab-table-td font-weight-bold'>Vég</div>
        <div class='col-3 ab-table-td font-weight-bold'>Díj</div>
    </div>
    <?php
        if ($total > 0){
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<div class='row ab-table-tr'>
                        <div class='col-3 ab-table-td'>" . $result['id'] . "</div>
                        <div class='col-3 ab-table-td'>" . $result['kezdet'] . "</div>
                        <div class='col-3 ab-table-td'>" . $result['veg'] . "</div>
                        <div class='col-3 ab-table-td'>" . $result['dij'] . "</div>
                    </div>";
            }
        } else {
            echo "<div class='col-12'>
                Nem jó a lekérdezés!
            </div>";
        }
    ?>
</div>