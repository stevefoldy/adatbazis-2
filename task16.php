<?php

$page = 'task16';
$title = 'Feladat 16';
$contentTitle = 'Feladat 16';

ob_start();
include "pages/contents/task16_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>