<?php

$page = 'task14';
$title = 'Feladat 14';
$contentTitle = 'Feladat 14';

ob_start();
include "pages/contents/task14_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>