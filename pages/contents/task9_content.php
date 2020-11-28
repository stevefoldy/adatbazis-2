<div class="h6">Kérjen be a program egy számot és írja ki, hogy kinek van ennél több kutyája!</div>
<?php

include_once 'connection.php';

$number = $_POST['number'];

if($number == true) {
    $query = "SELECT nev, COUNT(kutya.id) AS `kutyak_szama` FROM kutya INNER JOIN gazda ON gazda.id = kutya.gazdaId GROUP BY nev HAVING kutyak_szama > '$number' ORDER BY kutyak_szama DESC";

    $data = mysqli_query($conn, $query);
    
    if ($data) {
        $total = mysqli_num_rows($data);
    } else {
        $total = 0;
    }
} else {
    echo "<div class='mb-4'>Kinek van több kutyája?</div>";
}

?>
<form class="form-inline mb-1" method="post">
  <div class="form-group mr-3 w-50">
    <input type="number" name="number" class="form-control w-100" id="numberInput" placeholder="Írj be egy számot!" required>
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
                <div class='col ab-table-td font-weight-bold pl-0'>Kutyák száma</div>
            </div>";
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<div class='row ab-table-tr px-3'>
                        <div class='col ab-table-td'>" . $result['nev'] . "</div>
                        <div class='col ab-table-td'>" . $result['kutyak_szama'] . "</div>
                    </div>";
            }
        } else if ($data == 0) {
            echo "<small class='col-12 px-0 form-text text-muted mb-4 mt-2'>
                ...
            </small>";
        } else {
            echo '<div class="col-12 px-0 my-4">Ennél senkinek nincs több kutyája
            </div>';
        }
    ?>
</div>