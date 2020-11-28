<?php

$page = 'support';
$title = 'Termékek - MarketPlace';
$contentTitle = 'Segítség';

ob_start();
include "pages/contents/support_page.php";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>
