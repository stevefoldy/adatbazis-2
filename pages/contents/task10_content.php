<div class="h6">Melyik gazdának milyen fajtájú kutyája van?</div>
<?php

include_once 'connection.php';

$query = 'SELECT `nev`, `fajtanev` FROM `kutya` INNER JOIN `fajta` ON fajta.id = kutya.fajtaId INNER JOIN `gazda` ON gazda.id = kutya.gazdaId GROUP BY `nev`, `fajtanev` ORDER BY `nev`';
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
        <div class='col ab-table-td font-weight-bold'>Fajtanév</div>
    </div>
    <?php
        if ($total > 0){
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<div class='row ab-table-tr'>
                        <div class='col ab-table-td'>" . $result['nev'] . "</div>
                        <div class='col ab-table-td'>" . $result['fajtanev'] . "</div>
                    </div>";
            }
        } else {
            echo "<div class='col-12'>
                Nem jó a lekérdezés!
            </div>";
        }
    ?>
</div>