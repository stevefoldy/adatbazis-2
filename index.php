<?php

$page = 'home';
$title = 'Adatbázis 2 beadandó';
$contentTitle = 'Főoldal';

ob_start();
include 'pages/contents/main_page.php';
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>