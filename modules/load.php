<?php

include 'connect.php';

$iconsize = 37.0 / 2.0;
$anglesize = 82.0/2.0;
$mapsize = 6000.0 / 2.0;
$iconveh = 17.0 / 2.0;

$result = mysql_query("SELECT * FROM billboards");
while ($row = mysql_fetch_array($result)) {
	// load
	$index = $row['index'];
	$city = $row['city'];
	$group = $row['group'];
	$status = $row['status'];

	$bag = $row['bag'];
	$x = $row['pos_x'];
	$y = $row['pos_y'];
	$a = $row['angle'];
	$a = 360.0-$a;
	$a %= 360.0;
	$a -= 90.0;
	// convert
	$xa = ($x - $anglesize) + $mapsize;
	$ya = (-$y - $anglesize) + $mapsize;
	$x = ($x - $iconsize) + $mapsize;
	$y = (-$y - $iconsize) + $mapsize;
	// show
	echo "<div class='angel_g_{$group}_b_{$bag}' style='top:{$ya}px; left:{$xa}px; -webkit-transform: rotate({$a}deg); transform: rotate({$a}deg)' iconid='{$index}'></div>
	<div class='icon_g_{$group}_s_{$status} mapicon icon_bag_{$bag}' style='top:{$y}px; left:{$x}px' iconid='{$index}'></div>";
}

$result = mysql_query("SELECT * FROM vehicles");
while ($row = mysql_fetch_array($result)) {
	// load
	$index = $row['index'];
	$status = $row['status'];
	$modelid = $row['modelid'];
	$x = $row['pos_x'];
	$y = $row['pos_y'];
	switch ($modelid)
	{
		case 416: $vehid = 1; break;
		case 428: $vehid = 2; break;
		case 433: $vehid = 3; break;
		case 427: $vehid = 4; break;
		case 596: $vehid = 5; break;
		case 597: $vehid = 6; break;
		case 598: $vehid = 7; break;
		case 599: $vehid = 8; break;
	}
	// convert
	$x = ($x - $iconveh) + $mapsize;
	$y = (-$y - $iconveh) + $mapsize;
	// show
	echo "<div class='icon_veh_{$vehid}' style='top:{$y}px; left:{$x}px' iconid='{$index}'></div>";
}