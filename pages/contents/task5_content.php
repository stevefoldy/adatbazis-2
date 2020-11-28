<div class="h6">Kérje be a kezelés kezdetének és végének dátumát, majd listázza ki az adott időszakban befejezett kezeléseket, melyek jelleg mezőjében megtalálható a „gyógy” szórészlet! Jelenjen meg a kezelés jellege, kezdő és befejező dátuma és a kezelés díja!</div>
<?php

include_once 'connection.php';

$kezdete = $_POST['date_1'];
$veg = $_POST['date_2'];

if($kezdete > 0 && $veg) {
    $query = "SELECT kezelestipus.jelleg, kezeles.kezdet, kezeles.veg, kezeles.dij FROM `kezeles` LEFT JOIN kezelestipus on kezeles.kezelestipusId = kezelestipus.id WHERE kezeles.veg BETWEEN '$kezdete' AND '$veg' AND kezelestipus.jelleg LIKE '%gyógy%'";
    $data = mysqli_query($conn, $query);
    
    if ($data) {
        $total = mysqli_num_rows($data);
    } else {
        $total = 0;
    }
} else {
    echo "<div class='mb-4'>Adj meg a kezelés kezdő és végdátumát:</div>";
}

?>

<form class="form-inline mb-1" method="post">
  <div class="form-group mr-3">
    <input type="date" name="date_1" min="1" max="23" class="form-control w-100" id="dateInput1" required value="2017-01-01">
  </div>
  <div class="form-group mr-3">-</div>
  <div class="form-group mr-3">
    <input type="date" name="date_2" min="1" max="23" class="form-control w-100" id="dateInput2" required>
  </div>
  <button class="btn btn-primary" type="submit" value="submit">Lekérdezés</button>
</form>

<?php
if ($data == 0) {
    echo "<div class='row mt-0 mx-0 flex-column-reverse'>";
} else {
    echo "<div class='row mt-5 mx-0'>";
}
?>
    <?php
        if ($total > 0) {
            echo "<div class='row ab-table-tr ab-sticky-menu mx-0'>
                <div class='col ab-table-td font-weight-bold'>Jelleg</div>
                <div class='col ab-table-td font-weight-bold pl-0'>Kezdet</div>
                <div class='col ab-table-td font-weight-bold pl-0'>Vég</div>
                <div class='col ab-table-td font-weight-bold pl-0'>Díj</div>
            </div>";
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<div class='row ab-table-tr px-3'>
                        <div class='col ab-table-td'>" . $result['jelleg'] . "</div>
                        <div class='col ab-table-td'>" . $result['kezdet'] . "</div>
                        <div class='col ab-table-td'>" . $result['veg'] . "</div>
                        <div class='col ab-table-td'>" . $result['dij'] . "</div>
                    </div>";
            }
        } else if ($data == 0) {
            echo "<small class='col-12 px-0 form-text text-muted mb-4 mt-2'>
                *A dátum kiválasztása naptár ikonra kattintva vagy begépelve is használható!
            </small>";
        } else {
            echo "<div class='col-12 px-0 my-4'>
                Ebben az időszakban nem volt kezelés!
            </div>";
        }
    ?>
</div>