<?php

$page = 'task9';
$title = 'Feladat 9';
$contentTitle = 'Feladat 9';

ob_start();
include "pages/contents/task9_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>