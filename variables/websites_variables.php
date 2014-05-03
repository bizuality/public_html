<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/public_html/db/load.php');

$variables = array();

$result = $bdb->select('SELECT variable_name, value FROM websites_variables');

while(($row = mysql_fetch_assoc($result))) {
	$variables[$row['variable_name']] = $row['value'];
}

?>