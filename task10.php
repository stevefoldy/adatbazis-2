<?php

$page = 'task10';
$title = 'Feladat 10';
$contentTitle = 'Feladat 10';

ob_start();
include "pages/contents/task10_content.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>