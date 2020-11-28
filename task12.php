<?php

$page = 'task12';
$title = 'Feladat 12';
$contentTitle = 'Feladat 12';

ob_start();
include "pages/contents/task12_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>