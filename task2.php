<?php

$page = 'task2';
$title = 'Feladat 2';
$contentTitle = 'Feladat 2';

ob_start();
include "pages/contents/task2_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>