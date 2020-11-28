<?php

$page = 'task15';
$title = 'Feladat 15';
$contentTitle = 'Feladat 15';

ob_start();
include "pages/contents/task15_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>