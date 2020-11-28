<?php

$page = 'task4';
$title = 'Feladat 4';
$contentTitle = 'Feladat 4';

ob_start();
include "pages/contents/task4_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>