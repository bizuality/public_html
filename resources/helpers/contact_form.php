<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/resources/load.php');

$table_name = 'contact_form';
$b->submitContactForm($table_name);

?>