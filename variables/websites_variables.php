<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/public_html/db/load.php');


$title = $bdb->select('SELECT value FROM websites_variables WHERE variable_name="title"');
$title = mysql_fetch_assoc($title);
$title = $title['value'];

?>