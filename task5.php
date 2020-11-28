<?php

$page = 'task5';
$title = 'Feladat 5';
$contentTitle = 'Feladat 5';

ob_start();
include "pages/contents/task5_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>