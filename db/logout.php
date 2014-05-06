<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/public_html/db/load.php');

$b->logout();
header("Location: /public_html/index.php?msg=success&value=1");
?>