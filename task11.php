<?php

$page = 'task11';
$title = 'Feladat 11';
$contentTitle = 'Feladat 11';

ob_start();
include "pages/contents/task11_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>