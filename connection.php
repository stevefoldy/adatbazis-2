<?php
$servename = "mysql";
$username = "root";
$password = "root1234";
$dbname = "centrum";
$conn = mysqli_connect($servename, $username, $password, $dbname);

if (!$conn) {
    die("Nincs kapcsolat, mert " . mysqli_error($conn));
} else {
    mysqli_set_charset($conn, "utf8");
    echo "<div class='ab-page-head-info d-flex justify-content-end align-items-center mb-4'>";
    echo "<div type='button' class='mr-4' data-toggle='tooltip' data-placement='left' title='Adatbáziskapcsolat rendben, elkezdheted a lekérdezéseket!'><i class='fas fa-info-circle text-primary'></i></div>";
    echo "</div>";
}

?>
