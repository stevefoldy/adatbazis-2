<?php

$page = 'task13';
$title = 'Feladat 13';
$contentTitle = 'Feladat 13';

ob_start();
include "pages/contents/task13_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>