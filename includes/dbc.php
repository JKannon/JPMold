<?php
	$con = mysql_connect("localhost", "jkannamp_admin", "Philly76ers") or die(mysql_error());
	$db_selected = mysql_select_db("jkannamp_JPMUS", $con);
	//echo "Connected to MySQL<br />";
	?>