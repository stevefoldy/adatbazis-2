<?php

$page = 'task3';
$title = 'Feladat 3';
$contentTitle = 'Feladat 3';

ob_start();
include "pages/contents/task3_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>