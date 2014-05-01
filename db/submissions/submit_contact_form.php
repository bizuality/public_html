<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/public_html/db/load.php');

$table_name = 'contact_form';
$b->submitContactForm($table_name);

?>