<?php

$page = 'task7';
$title = 'Feladat 7';
$contentTitle = 'Feladat 7';

ob_start();
include "pages/contents/task7_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>