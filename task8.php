<?php

$page = 'task8';
$title = 'Feladat 8';
$contentTitle = 'Feladat 8';

ob_start();
include "pages/contents/task8_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>