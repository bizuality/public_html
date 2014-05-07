<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/public_html/resources/load.php');

$table_name = 'user_logins';
$b->login($table_name);

?>
