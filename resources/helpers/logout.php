<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/resources/load.php');

$b->logout();
header("Location: /index.php?msg=success&value=1");
?>