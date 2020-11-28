<?php

$page = 'task6';
$title = 'Feladat 6';
$contentTitle = 'Feladat 6';

ob_start();
include "pages/contents/task6_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>