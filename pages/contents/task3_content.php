<div class="h6">Kérje be a kerület számát, majd listázza ki a kerületben élő gazdák nevét és a lakhelyük kerületét! A lista név szerint legyen rendezett!</div>
<?php

include_once 'connection.php';

$kerulet = $_POST['number'];

if($kerulet > 0) {
    $query = "SELECT `nev`, `kerulet` FROM `gazda` WHERE kerulet = '$kerulet' ORDER BY nev";
    $data = mysqli_query($conn, $query);
    
    if ($data) {
        $total = mysqli_num_rows($data);
    } else {
        $total = 0;
    }
} else {
    echo "<div class='mb-4'>Adj meg egy kerületet a lekérdezéshez:</div>";
}

?>
<form class="form-inline mb-1" method="post">
  <div class="form-group mr-3 w-50">
    <input type="number" name="number" min="1" max="23" class="form-control w-100" id="setInput" placeholder="Add meg a keresett kerület számát!" required>
  </div>
  <button class="btn btn-primary" type="submit" value="submit">Keresés</button>
</form>
<div class='row mt-0 mx-0'>
    <?php
        if ($total > 0 && $kerulet > 0) {
            echo "<div class='row ab-table-tr ab-sticky-menu mx-0 mt-5'>
                <div class='col-6 ab-table-td font-weight-bold'>Név</div>
                <div class='col-6 ab-table-td font-weight-bold pl-0'>Kerület</div>
            </div>";
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<div class='row ab-table-tr px-3'>
                        <div class='col-6 ab-table-td'>" . $result['nev'] . "</div>
                        <div class='col-6 ab-table-td'>" . $result['kerulet'] . "</div>
                    </div>";
            }
        } else if ($data == 0) {
            echo "<small class='col-12 px-0 form-text text-muted mb-4 mt-2'>
                *Budapest kerületeinek a szám 23.
            </small>";
        } else {
            echo "<div class='col-12 px-0 mb-4 mt-2'>
                Ebben a kerületben nincs olyan gazda aki elvitte volna a kutyáját állatorvoshoz, kérlek addj meg egy másik kerületet! 
            </div>";
        }
    ?>
</div>