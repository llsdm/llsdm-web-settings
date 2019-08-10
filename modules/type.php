<?php

include 'connect.php';

if(isset($_POST['id'])) {
	$index = $_POST['id'];
} else {
	exit("error");
}

$result = mysql_query("SELECT `status`, `group`, `bag` FROM billboards WHERE `index` = {$index} LIMIT 1");
if(mysql_num_rows($result) > 0) {
	$row = mysql_fetch_assoc($result);

	$group = (int) $row['group'];
	$bag = (int) $row['bag'];
	$status = (int) $row['status'];

	if ($bag == 0) {
		$status ++;
		$status %= 2;
	}

	mysql_query("UPDATE billboards SET `status` = {$status} WHERE `index` = {$index}");
	echo "icon_g_{$group}_s_{$status} mapicon icon_bag_{$bag}";
} else {
	exit("error");
}