<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/public_html/db/load.php');



//$title =  mysqli_query($con, "SELECT value FROM about_variables WHERE variable_name='title'") or die("MySQL Error");
$title = $bdb->select('SELECT value FROM seo_variables WHERE variable_name="title"');
$title = mysql_fetch_assoc($title);
$title = $title['value'];

?>