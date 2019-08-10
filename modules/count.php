<?php

include 'connect.php';


// стандартные
$icon[0] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `type` = 0 AND `status` != 0"));
$icon[1] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `type` = 0"));

// Модель объектов
$icon[9] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `id` = 1260 AND `status` != 0"));
$icon[2] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `id` = 1260"));
$icon[10] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `id` = 1259 AND `status` != 0"));
$icon[3] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `id` = 1259"));
$icon[11] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `id` = 1267 AND `status` != 0"));
$icon[4] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `id` = 1267"));

// созданные
$icon[5] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `type` = 1 AND `status` != 0"));
$icon[6] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `type` = 1"));

// все
$icon[7] = $icon[0] + $icon[5];
$icon[8] = $icon[1] + $icon[6];

// города
$icon[12] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `city` = 1 AND `status` != 0"));
$icon[13] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `city` = 1"));
$icon[14] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `city` = 2 AND `status` != 0"));
$icon[15] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `city` = 2"));
$icon[16] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `city` = 3 AND `status` != 0"));
$icon[17] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `city` = 3"));
$icon[20] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `city` = 0 AND `status` != 0"));
$icon[21] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `city` = 0"));

// баги карты
$icon[18] = mysql_num_rows(mysql_query("SELECT * FROM billboards WHERE `bag` = 1"));
$icon[19] = $icon[9]+$icon[10];

$all = $icon[9]*16+$icon[10]*15+$icon[11]*15;

//транспорт
$icon[22] = mysql_num_rows(mysql_query("SELECT * FROM vehicles WHERE `modelid` = 416"));
$icon[23] = mysql_num_rows(mysql_query("SELECT * FROM vehicles WHERE `modelid` = 428"));
$icon[24] = mysql_num_rows(mysql_query("SELECT * FROM vehicles WHERE `modelid` = 433"));
$icon[25] = mysql_num_rows(mysql_query("SELECT * FROM vehicles WHERE `modelid` = 427"));
$icon[26] = mysql_num_rows(mysql_query("SELECT * FROM vehicles WHERE `modelid` = 596"));
$icon[27] = mysql_num_rows(mysql_query("SELECT * FROM vehicles WHERE `modelid` = 597"));
$icon[28] = mysql_num_rows(mysql_query("SELECT * FROM vehicles WHERE `modelid` = 598"));
$icon[29] = mysql_num_rows(mysql_query("SELECT * FROM vehicles WHERE `modelid` = 599"));

$all_vehs =  $icon[22]+$icon[23]+$icon[24]+$icon[25]+$icon[26]+$icon[27]+$icon[28]+$icon[29];