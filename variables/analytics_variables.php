<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/public_html/db/load.php');



//$title =  mysqli_query($con, "SELECT value FROM about_variables WHERE variable_name='title'") or die("MySQL Error");
$title = $bdb->select('SELECT value FROM analytics_variables WHERE variable_name="title"');
$title = mysql_fetch_assoc($title);
$title = $title['value'];

$col_01_title = $bdb->select('SELECT value FROM analytics_variables WHERE variable_name="col_01_title"');
$col_01_title = mysql_fetch_assoc($col_01_title);
$col_01_title = $col_01_title['value'];

$col_01_text = $bdb->select('SELECT value FROM analytics_variables WHERE variable_name="col_01_text"');
$col_01_text = mysql_fetch_assoc($col_01_text);
$col_01_text = $col_01_text['value'];

?>
